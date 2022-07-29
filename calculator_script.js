var val1=null, val2=null, oper=null;
function clr(){
    var res = document.getElementById("res");
    res.value="";
    val1 = val2 = oper = null;
}
function inval(val) {
    var res = document.getElementById("res");
    res.value = res.value + val;
}
function inop(op) {
    var res = document.getElementById("res");
    oper = op;
    val1 = parseInt(res.value);
    res.value = "";
}
function tambah(val1, val2) {
    return val1 + val2;
}
function modulo(val1, val2) {
    return val1 % val2;
}
function kurang(val1, val2) {
    return val1 - val2;
}
function bagi(val1, val2) {
    return val1 / val2;
}
function kali(val1, val2) {
    return val1 * val2;
}
function pangkat(val1, val2) {
    return (Math.pow(val1 , val2)) ;
}
function result(val1, val2) {
    switch (oper) {
        case "+":
            return tambah(val1, val2); 
            break;
        case "-":
            return kurang(val1, val2); 
            break;
        case "*":
            return kali(val1, val2); 
            break;
        case "%":
            return modulo(val1, val2); 
            break;
        case "^":
            return pangkat(val1, val2); 
            break;                        
        case "/":
            if(val2==0){
                alert("enter an other value");
            }else{
                return bagi(val1, val2); 
            }
            break;
    }
}
function calculate() {
    var res = document.getElementById("res");
    
    if (val1!=null) {
        val2 = parseInt(res.value);
        res.value = result(val1, val2);
    }else{
        alert("please enter a value");
    }
}