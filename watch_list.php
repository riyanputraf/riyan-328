<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_watchList.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="watchList_script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
        <div class="logo">
            RPF News
        </div>
        <ul class="nav-link">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="calculator.php">Calculator</a></li>                
                <li><a href="watch_list.php">Watch List</a></li>
                <li><a href="form.php">Form</a></li>
                <li class="services">
                    <a href="#">Theme</a>
                    <ul class="dropdown">
                        <li><a href="#">War</a></li>
                        <li><a href="#">Protest</a></li>
                        <li><a href="#">Criminal</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>
    <div class="actionBar">
     
        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search Movie" value="" />
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <svg style="width:28px;height:28px;" viewBox="0 0 34 34"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
        </button>
        <div class="modal-body">
                    <div class="modal-content">
                        
                            <label for="fname">Movie Title</label>
                            <input type="text" id="inputTitle" name="inputTitle" placeholder="Movie Title">
                            <label for="lname">Rating</label>
                            <input type="number" id="inputRating" name="inputRating" placeholder="Movie Rating">
                            <button class="button" style="background-color: rgb(20, 216, 10)" type="submit" >Add</button>                      
                        
                    </div>
        </div>
    </div>
    <table class="tablesorter">
        <thead>
            <tr>
                <th scope="col" class="header title">Movie Title</th>
                <th scope="col" class="header rating">Movie Rating</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="table">
        </tbody>
    </table>
   
</body>

</html>