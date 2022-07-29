<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="adada.css">
    <title>Post</title>
</head>
<body>
    <?php
        session_start();
        $nama = $nim = $email = $date = $jenisKelamin = $hobi = $deskripsi = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["name"])&&!empty($_POST["nim"])&&!empty($_POST["email"])&&!empty($_POST["tanggal"])&&!empty($_POST["kelamin"])&&!empty($_POST["hobi"])&&!empty($_POST["deskripsi"])){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['nim'] = $_POST['nim'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['tanggal'] = $_POST['tanggal'];
                $_SESSION['kelamin'] = $_POST['kelamin'];
                $_SESSION['hobi'] = $_POST['hobi'];
                $_SESSION['deskripsi'] = $_POST['deskripsi'];
                header("Location: process.php");
            }else{
                if (empty($_POST["name"])) {
                    $nama = "Name is required";
                }
                if (empty($_POST["nim"])) {
                    $nim = "Nim is required";
                }
                if (empty($_POST["E-Mail"])) {
                    $email = "E-Mail is required";
                }
                if (empty($_POST["Tanggal Lahir"])) {
                    $date = "Tanggal Lahir is required";
                }
                if (empty($_POST["Jenis Kelamin"])) {
                    $jenisKelamin = "Jenis Kelamin is required";
                }
                if (empty($_POST["Hobi"])) {
                    $hobi = "Hobi is required";
                }
                if (empty($_POST["Deskripsi"])) {
                    $deskripsi = "Deskripsi is required";
                }                
            }
        }
    ?>
    
    <div class="container-form">
    <form action="form.php" method="post">
        <h4>Nama</h4>    
        <input type="text" placeholder="Name" name="name">
        <span class="error"><?php echo $nama;?></span>
        <br>
        <h4>Nim</h4>
        <input type="text" placeholder="Nim" name="nim">
        <span class="error"><?php echo $nim;?></span>
        <br>
        <h4>E-mail</h4>
        <input type="text" placeholder="Email" name="email">
        <span class="error"><?php echo $email;?></span>
        <br>
        <h4>Tanggal Lahir</h4>
        <input type="date" name="tanggal">
        <span class="error"><?php echo $date;?></span>
        <br>
        
            
                <h4>Kelamin</h4>
                <div class="inputGroup">
                <input type="radio" name="kelamin" value="laki" id="laki">
                <label for="laki">laki laki</label>
                
                </div>
                <div class="inputGroup">
                <input type="radio" name="kelamin" value="perempuan" id="perempuan">
                <label for="perempuan">perempuan</label>
                
                </div>
                <span class="error"><?php echo $jenisKelamin;?></span>
                    <br>
            
        
        
  <!-- <div class="inputGroup">
    <input id="option1" name="option1" type="checkbox"/>
    <label for="option1">Option One</label>
  </div>
  
  <div class="inputGroup">
    <input id="option2" name="option2" type="checkbox"/>
    <label for="option2">Option Two</label>
  </div> -->
         <h4>Hobi</h4>
        <div class="inputGroup">
        <input type="checkbox" name="hobi" value="hobi 1" id="hobi 1">
        <label for="hobi 1">hobi 1</label>
        
        </div>
        <div class="inputGroup">
        <input type="checkbox" name="hobi" value="hobi2" id="hobi 2">
        <label for="hobi 2">hobi 2</label>
        
        </div>
        <div class="inputGroup">
        <input type="checkbox" name="hobi" value="hobi3" id="hobi 3">
        <label for="hobi 3">hobi 3</label> 
        </div>
        <span class="error"><?php echo $hobi;?></span>
        <br>        
        <h4>Deskripsi</h4>
        <textarea name="deskripsi" cols="61" rows="10"></textarea> 
        <span class="error"><?php echo $deskripsi;?></span>
        <br>
        <input type="submit" value="submit">               
    </form>
    </div>
    <script type="text/javascript" src=¨assets/js/app.js¨></script>
</body>
</html>