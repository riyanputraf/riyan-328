<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style_profile.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My Profile</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"></head>
<body>
    <nav class="navbar">
        <div class="logo">
            News
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
                    <a href="#">Category</a>
                    <ul class="dropdown">
                        <li><a href="#">War</a></li>
                        <li><a href="#">Protest</a></li>
                        <li><a href="#">Criminal</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>
   
	<!----About me---->
	<section class="about">
		<div class="main">
			<img src="image/user.png">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Assistant <span> Laboratory</span></h5>
				<p>Name : Riyan Putra Firjatullah <br>
                    University : University Muhammadiyah Malang <br>
                    Majority : Informatics
                </p>
				<button type="button">More about me</button>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>My Service</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-video"></i>
				<h5>Video Editor</h5>
				<div class="pra">
					<p>Ini adalah deskripsi dari skill yang nanti akan diinputkan</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fa fa-gamepad"></i>
				<h5>Game Booster</h5>
				<div class="pra">
					<p>Ini adalah deskripsi dari skill yang nanti akan diinputkan</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fa fa-pen"></i>
				<h5>Content</h5>
				<div class="pra">
					<p>Ini adalah deskripsi dari skill yang nanti akan diinputkan</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	
    <!-- Footer -->
    <footer>
		<p>Riyan Putra F</p>
		<p>You can follow my social media</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
		</div>
		
	</footer>
</body>
</html>