<?php
session_start();
$name = $_SESSION['name'];
$nim = $_SESSION['nim'];
$email = $_SESSION['email'];
$tanggal = $_SESSION['tanggal'];
$kelamin = $_SESSION['kelamin'];
$hobi = $_SESSION['hobi'];
$deskripsi = $_SESSION['deskripsi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <table border = 1>
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Email</td>
            <td>Tanggal</td>
            <td>Kelamin</td>
            <td>Hobi</td>
            <td>Deskripsi</td>

        </tr>
        <tr>
            <td><?php echo $name;?> </td>
            <td><?php echo $nim;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $tanggal;?></td>
            <td><?php echo $kelamin;?></td>
            <td><?php echo $hobi;?></td>
            <td><?php echo $deskripsi;?></td>
            
        </tr>
    </table>

    <h2><a href="form.php">Kembali</a>
</body>
</html>