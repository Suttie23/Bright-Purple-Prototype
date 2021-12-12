<!-- Beginning the Session, if logout is recieved then the page will redirect the user back to the logged out homepage -->
<?php 
	session_start(); 
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bright Purple Resourcing - Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links to various internal / external style sheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css"> 
	<link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
    
  
  <div class="site-wrap">
	<!-- Mobile Nav Menu -->
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
	
	<!-- Main Site Navbar (Many divs relate to setting up Bootstrap grid) -->
	<div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
			<!-- Bright Purple Logo -->
              <img src="images/brightPurple.png" alt="Image" class="img-fluid" href="index.php">
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="vacancies.php">Vacancies</a></li>
                  <li><a href="clients.php">Clients</a></li>
				   <!-- Indicating the dropdown menu for Candidates and Contractors -->
                  <li class="has-children">
                    <a href="candidates.php">Candidates</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="contractors.php">Contractors</a></li>
                      </li>
                    </ul>
                  </li>
                  <li class="active"><a href="blog.php">Blog</a></li>
                  <li><a href="about.php">About</a></li>
				<div class="btn bg-purple text-white">
				<!-- PhP detects whether or not the user is logged in. If the user IS logged in, the button will display a logout button in place of the sign up button. -->
				  <?php  if (isset($_SESSION['username'])) : ?>
					<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>.</p>
					<p> <a href="index.php?logout='1'" style="color: white;">Logout</a> </p>
					<!-- if NOT logged in the button will instead display log in or sign up -->
				<?php else: ?>
				<div class="form-group">
					<a href="registration\register.php" class="btn bg-purple text-white">Log in / Sign up</a>
				</div>
				<?php endif ?>
				</div>
                </ul>
              </nav>
            </div>  
          </div>
        </div>
      </div>
	  <!-- END OF NAVBAR -->
    </div>
	 
	 <!-- The carousel at the beginning of each page, again, many of the divs contained are to setup bootstrap grids and rules -->
    <div class="slide-one-item home-slider owl-carousel">
		<!-- The first image that will be displayed is linked here -->
      <div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder1.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
				<!-- Text that overlaps the images, including a link to the Vacancies page via a button -->
              <h1 class="mb-2"><font color="#9352A1">Bright Purple Resourcing</font></h1>
              <p class="mb-5"><strong class="h2 text-white font-weight-bold">Bright Purple, Brighter Futures</strong></p>
              <p><a href="vacancies.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Browse Vacancies</a></p>
            </div>
          </div>
        </div>
      </div>  
		<!-- The second image that will be displayed is linked here -->
      <div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder2.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
			<!-- Text that overlaps the images, including a link to the About page via a button -->
              <h1 class="mb-2"><font color="#9352A1">Bright Purple Resourcing</font></h1>
              <p class="mb-5"><strong class="h2 text-white font-weight-bold">You're In Good Hands</strong></p>
              <p><a href="about.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Meet The Team</a></p>
            </div>
          </div>
        </div>
      </div>  
	</div>
	<!-- END OF CAROUSEL -->

	<!-- Beginning of Blog section -->
    <div class="site-section">
	<div class="col-md-12 text-center">
            <div class="site-section-title">
              <h2 class="text-purple">Bright Blog</h2>
			  <br> </br>
            </div>          
          </div>
      <div class="container">
	  <!-- Blog cards - currently placeholder but would be generated in a similar way to the VACANCIES in the final version of the website. -->
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Big congratulations to SFN Expo!</a></font></h2>
              <p>We are delighted to hear about the acquisition of Scottish Fitness Nutrition Expo, co-founded by Bright Purple's very own Jamie Rose, by QD Events (one Scotland's top event organisers).</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Mar 10th, 2019</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Work Anniversary - Paul Curry</a></font></h2>
              <p>Another work anniversary to celebrate! Paul, our MD, looks back at his two years with Bright Purple (and of course, looks forward as well).</p>
			  <br> </br>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Feb 4th, 2019</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Bright Purple Resourcing turns 23</a></font></h2>
              <p>Bright Purple is 23 years old this week - founder Nick Price looks back at some of the ups and downs we've experienced, and shares his worries and excitement for the future.</p>			  
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 3rd, 2019</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Looking Towards 2019 and 2020</a></font></h2>
              <p>Paul Curry summarises the past financial year, his first as Managing Director.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-6" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Apr 2nd 2019</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Crown Commercial Service's Permanent Recruitment Framework</a></font></h2>
              <p>We are delighted to announce that Bright Purple continues to spread our footprint in the public sector, having been successfully named as a supplier of the Crown Commercial Service's Permanent Recruitment Framework.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-7" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">May 15th</span>
              <h2 class="h5 mb-3"><a href="#"><font color="#9352A1">Kane Webster Work Anniversary</a></font></h2>
              <p>5 years ago today, Kane's life changed forever. Time to celebrate!</p>
            </div>
          </div>
		</div>
		<!-- end of blog cards -->
		
		<!-- Extra pages for generated content (currently not functional but here to provide the aesthetic) -->
        <div class="row" data-aos="fade-up">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="bg-purple text-white">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
       
      </div>
    </div>
	<!-- END OF SECTION -->

    
<!-- Footer Section -->
    <footer class="site-footer bg-purple text-white">
      <div class="container">
        <div class="row">
		<!-- Left aligned Bootstrap Grid for "About us" section -->
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Bright Purple</h3>
              <p>Bright Purple Resourcing are talent delivery specialists providing Technology, Change and Transformation Professionals to our clients- from entry level to executive appointments.</p>
            </div>                     
          </div>
		  <!-- Center aligned Bootstrap Grid for "Navigation" section -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="vacancies.php">Vacancies</a></li>
                  <li><a href="clients.php">Clients</a></li>
                  <li><a href="candidates.php">Candidates</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="contractors.php">Contractors</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="about.php">About</a></li>
                </ul>
              </div>
            </div>
          </div>
		  <!-- Right aligned Bootstrap Grid for "Follow Us" section -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>
                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>     
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             <font color="#ffffff"> Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Based on design by <a href="https://colorlib.com" target="_blank" >Colorlib</a> </font>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
	<!-- END OF FOOTER -->

  </div>

  	<!-- Links to scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>