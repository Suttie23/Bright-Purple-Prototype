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
    <title>Bright Purple Resourcing - Home</title>
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
                  <li class="active"><a href="index.php">Home</a></li>
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
                  <li><a href="blog.php">Blog</a></li>
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

	<!-- The Vacancies quicksearch bar (shared with the vacancies page search) to search avaliable vacancies. (NOT FUNCTIONAL, PURELY CONCEPTUAL) -->
    <div class="site-section site-section-sm pb-0 bg-white">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px; background-color: #9352A1;">
            <div class="row  align-items-end">
			<!-- The input for KEYWORDS -->
              <div class="col-md-3">
                <label for="list-types">Keywords</label>
                <form class="form-inline md-form form-sm mt-0">
				<i class="fas fa-search" aria-hidden="true"></i>
				<input class="form-control" style="background-color: #ffffff;" type="text" placeholder="Search" aria-label="Search">
				</form>
              </div>
			  <!-- The input for JOB TYPE -->
              <div class="col-md-3">
                <label for="offer-types" >Job Type</label>
                <div class="select-wrap">
				<!-- JOB TYPE is a dropdown broken into three types to choose -->
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">Contract</option>
                    <option value="">Permanent</option>
                    <option value="">Temporary</option>
                  </select>
                </div>
              </div>
			  <!-- The input for LOCATION -->
              <div class="col-md-3">
                <label for="select-city">Location</label>
                <form class="form-inline md-form form-sm mt-0">
				<i class="fas fa-search" aria-hidden="true"></i>
				<input class="form-control" style="background-color: #ffffff;" type="text" placeholder="Search" aria-label="Search">
				</form>
              </div>
			  <!-- The submit button (Would include PhP and database links to perform a search if completed and functional) -->
              <div class="col-md-3">
                <input type="submit" class="btn btn-white text-dark btn-block rounded-0" value="Search" style="background-color: #ffffff;">
              </div>
            </div>
          </form>
        </div>    
      </div>
    </div>
	<!-- END OF VACANCIES SEARCH -->

	<!-- Section that displays a summary of the services provided by Bright Purple (Once again, most divs are for Bootstrap alignment) -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
		  <!-- This section is the main bulk of information displayed on the page -->
            <div class="site-section-title">
              <h2>Who Are We?</h2>
            </div>
            <p>Bright Purple Resourcing are talent delivery specialists providing Technology, Change and Transformation Professionals to our clients- from entry level to executive appointments.</p>
			<p>Since 1995 we have successfully provided our clients with end-to-end recruitment services by placing permanent and temporary staff across a wide range of sectors, specialising in the IT and Financial Services sectors. As part of the IDE Group (PRIMED), we offer solutions aimed at answering the challenge of change in a digital and data driven world.</p>
			<br></br>
          </div>
        </div>

		<!-- Displayed below the "WHO ARE WE" section, this area provides information on more specific services -->
        <div class="row">
		<!-- BOOTSTRAP LENGTH 4 TO ENSURE 3 SECTIONS OF INFORMATION CAN BE PLACED ALONG THE PAGE -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Up-to-date Vacancies</h2>
              <p>We have fantastic career and contracting opportunities within our specialist sectors of Technology, Change and Transformation. If you share our purple passion to be the best at what you do there’s a great chance we will have an opportunity suited to you.</p>
            </a>
          </div>
		  <!-- BOOTSTRAP LENGTH 4 TO ENSURE 3 SECTIONS OF INFORMATION CAN BE PLACED ALONG THE PAGE -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Professional Team</h2>
			  <p>The Bright Purple team are a mix of diverse talented individuals who speak numerous languages, have countless years’ experience in recruitment and technology and lead a variety of lifestyles from working mums to graduates from overseas!</p>
            </a>
          </div>
		  <!-- BOOTSTRAP LENGTH 4 TO ENSURE 3 SECTIONS OF INFORMATION CAN BE PLACED ALONG THE PAGE -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Bright Purple Academy</h2>
              <p>Located within our headquarters in the heart of Edinburgh City Centre, the Academy is built and designed for meetings, seminars and other events. While it is used for internal training programmes, it is also available to external companies and organisations.</p>
            </a>
          </div>	  
        </div>	
      </div>
    </div>
	<!-- END OF SECTION -->

	<!-- This section of the page provides quick links to the most recent and up to date blog posts (Placeholder information, would be linked to a database via PhP to update as new entries came in) -->
    <div class="site-section" style="background-color: #9352A1;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2><font color="#ffffff">News Updates</font></h2>
            </div>
            <p><font color="#ffffff">View the latest stories from our news / blog feed here. For more of these stories, navigate to our blog page!</font></p>
          </div>
        </div>
		<!-- Card 1 -->
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Work Anniversary - Paul Curry</a></h2>
              <p>Another work anniversary to celebrate! Paul, our MD, looks back at his two years with Bright Purple (and of course, looks forward as well).</p>
			  <br> </br>
            </div>
          </div>
		  <!-- Card 2 -->
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Big congratulations to SFN Expo!</a></h2>
              <p>We are delighted to hear about the acquisition of Scottish Fitness Nutrition Expo, co-founded by Bright Purple's very own Jamie Rose, by QD Events (one Scotland's top event organisers).</p>
			  <br> </br>
            </div>
          </div>
		  <!-- Card 3 -->
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/placeholderSmall.png" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Bright Purple Resourcing turns 23</a></h2>
              <p>Bright Purple is 23 years old this week - founder Nick Price looks back at some of the ups and downs we've experienced, and shares his worries and excitement for the future.</p>			  
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- END OF SECTION -->
	
	<!-- Final section of the home page, the contact section (Once again, functionality is not avaliable for this version although re-writing in PhP to allow an Email Based contact form would be simple enough) -->
    <div class="site-section">
      <div class="container">
	  <div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2><font color="#000000">Contact Us</font></h2>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-md-12 col-lg-8 mb-5"> 
            <form action="#" class="p-5 bg-white border">
              <div class="row form-group">
			  <!-- The input for FULL NAME -->
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><font color="#9352A1">Full Name</font></label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
				<!-- The input for EMAIL -->
                  <label class="font-weight-bold" for="email"><font color="#9352A1">Email</font></label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
				<!-- The input for SUBJECT -->
                  <label class="font-weight-bold" for="email"><font color="#9352A1">Subject</font></label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Subject">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
				<!-- The input for MESSAGE (what the user wants to say) -->
                  <label class="font-weight-bold" for="message"><font color="#9352A1">Message</font></label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
			  <!-- The submit button to send the completed form to an email (if done with PhP) -->
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 rounded-0" style="background-color: #9352A1;">
                </div>
              </div>
            </form>
          </div>
			<!-- Additional contact details displayed to the right of the contact form -->
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase font-weight-bold"><font color="#9352A1">Contact Info</font></h3>
              <p class="mb-0 font-weight-bold"><font color="#9352A1">Address</font></p>
              <p class="mb-4">3rd Floor Eagle Building, 19 Rose Street, Edinburgh ,EH2 2PR.</p>

              <p class="mb-0 font-weight-bold"><font color="#9352A1">Phone</font></p>
              <p class="mb-4"><a href="#">+44 (0)131 473 7030</a></p>

              <p class="mb-0 font-weight-bold"><font color="#9352A1">Email Address</font></p>
              <p class="mb-0"><a href="#">PlaceholderBrightPurple@BP.com</a></p>
			</div>
			
           <div class="row">
			<div class="card card-cascade narrower">			
				<div class="card-body card-body-cascade text-center">
				<!-- Google map that points to the Bright Purple Office -->
					<div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 257px">
					  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d558.4475530660903!2d-3.196052753450251!3d55.95300792568977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1553593655796" width="300" height="257" frameborder="0" style="border:0" allowfullscreen></iframe>"
					</div>
				</div>
			</div>
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