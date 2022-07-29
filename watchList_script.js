$(document).ready(function(){
    const tbody = $('table').find('tbody');
    var rows = [["Gundam", 4.5,1], ["Naruto", 4.0,2],  ["Spiderman", 5.0,3], ["AOT", 4.8,4], ["Spy Wars", 4.6,5]];
    var kardus = localStorage.getItem("kardus");
    if (kardus) rows = JSON.parse(kardus);
   
    else localStorage.setItem("kardus",JSON.stringify(rows));  //save data to local storage
    console.log("Rows = "+rows);

    rows.forEach(function(item){
    tbody.append('<tr data-id='+item[2]+'><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button onclick="deletdis(this)">Delete</button></td></tr>')
    });

    //sorting
    $('.header').on('click',function() {
        var tablecontent = getTableContents('.tablesorter');
        var newtablecontents = ($(this).hasClass('rating'))? sortRating(tablecontent) : sortTitle(tablecontent);
        if ($(this).hasClass('reverse')) $(this).removeClass('reverse');
        else{
            $(this).addClass('reverse');
            newtablecontents.reverse();
        }

        tbody.empty();
        newtablecontents.forEach(function(item) {
            tbody.append('<tr data-id='+item[2]+'><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button onclick="deletdis(this)">Delete</button></td></tr>')
        });
    });

    function getTableContents(obj) {
        var content = [];
        $(obj + ' tbody').find('tr').each(function () {
            var eachData = [];
            $(this).find('td').each(function() {
                eachData.push($(this).text());
            });
            content.push(eachData);
        });
        return content;
    }

    //function sort by rating
    function sortRating(r) {
        return r.sort(function(a, b) {
            return a[1] - b[1]
        });
    }

 //function sort by title
    function sortTitle(r) {
        return r.sort();
    }    

    //add movie
    $('.button').on('click',function() {
        var inputTitle = document.getElementById('inputTitle');
        var inputRating = document.getElementById('inputRating');
        rows.push([inputTitle.value, inputRating.value, rows.length+1]);
        localStorage.setItem("kardus",JSON.stringify(rows));
        tbody.empty();
        rows.forEach(function(item) {
            tbody.append('<tr data-id='+item[2]+'><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button onclick="deletdis(this)">Delete</button></td></tr>')
        });        
    });

    //search by key(title or rating)
    $("#searchQueryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

//funtion delete movie
function deletdis(konteks) {
    console.log("delet");
    $(konteks).closest("tr").remove();
    console.log("Hapus: " + $(konteks).closest("tr").attr("data-id"));
    var kardus = localStorage.getItem("kardus");
    if (kardus) {
      var rows = JSON.parse(kardus);
      var i = 0;
      while (i < rows.length) {
        if (rows[i][2] == $(konteks).closest("tr").attr("data-id")) {
          rows.splice(i, 1);
          console.log("splice");
          break;
        } else i++;
      }
      localStorage.setItem("kardus", JSON.stringify(rows));
    }
}