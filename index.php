<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_footer.css">
   
    <title>Web Modul 2</title>
    
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
    <div class="containers">
        <div class="rows">
            <div class="col-9">
                <h1>Hot News</h1><hr>
                <div class="rows">
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="image/rusia.png" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Putin ancam yang berani ikut campur</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Angga Dwi</span>
                                <span class="card-date">12 Maret 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="image/rusia2.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">rusia dan ukraina, siapa yang benar ?</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Anggi Wijaya</span>
                                <span class="card-date">24 Maret 2022</span>
                            </div>
                        </div>                        
                    </div>
                </div>                
            </div>
            <div class="col-3">
                <div class="rows">
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">search</h3><hr>
                                <div class="searchBar">
                                    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">Most Searched</h3><hr>
                                <ul class="card-category mb-0">
                                    <li><a href="#!">War</a></li>
                                    <li><a href="#!">Pandemic</a></li>
                                    <li><a href="#!">Crimes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h1>All News</h1><hr>
                <div class="rows">
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/sekjennato.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Bagaimana tanggapan nato ?</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Angga Wijaya</span>
                                <span class="card-date">26 Maret 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/termobarik.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Mengenal rudal termobarik</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Putri Intan</span>
                                <span class="card-date">30 Maret 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/g20.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Apakah Rusia akan hadir di G20?</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Nur Hatika</span>
                                <span class="card-date">2 April 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/pemimpin.jpeg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Pemimpin Chechnya berterimakasih </h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Supriyadi</span>
                                <span class="card-date">5 April 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/pesawat.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Seberapa Kuat kekuatan tempur udara Rusia ?</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Mulawarman</span>
                                <span class="card-date">7 April 2022</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="image/pesawatkiamat.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Pesawat Kiamat Apakah akan diluncurkan ?</h3></a>
                                <p class="card-text">Ini isi konten dari berita</p>
                                <span class="card-author">Kertanegara</span>
                                <span class="card-date">8 April 2022</span>
                            </div>
                        </div>                        
                    </div>                    
                </div> 
               <!--  <div class="pagination">
                    <li class="btn prev"><span><i class="fas fa-angle-left"></i>Prev</span></li>
                    <li class="numb active"><span>1</span></li>
                    <li class="numb"><span>2</span></li>
                    <li class="dots"><span>...</span></li>
                    <li class="numb"><span>4</span></li>
                    <li class="numb"><span>5</span></li>
                    <li class="dots"><span>...</span></li>
                    <li class="numb"><span>7</span></li>
                    <li class="btn next"><span>Next <i class="fas fa-angle-right"></i></span></li>

                </div> -->
                <div class="containers" style="margin-top:0">
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"> << </a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!"> >> </a></li>
                        </ul>
                    </nav>
                </div>                              
            </div>            
        </div>
    </div>
    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Our Social Media</h4>
  	 			<ul>
  	 				<li><a href="#">Instagram</a></li>
  	 				<li><a href="#">facebook</a></li>
  	 				<li><a href="#">twitter</a></li>
  	 				<li><a href="#">Yahoo</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>News Now</h4>
  	 			<ul>
  	 				<li><a href="#">War</a></li>
  	 				<li><a href="#">Crime</a></li>
  	 				<li><a href="#">Pandemic</a></li>
  	 				<li><a href="#">Riot</a></li>
  	 			</ul>
  	 		</div>
  	 		<!-- <div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div> -->
  	 	</div>
  	 </div>
  </footer>
</body>
</html>