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
    <title>Bright Purple Resourcing - Candidates</title>
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
                  <li class="has-children active">
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

	<!-- Beginning of main Candidate information Section -->
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
			  <!-- Space for interview advice video -->
                <div><video width="800" height="500" controls><source src="movie.mp4" type="video/mp4"></div>
              </div>
            </div>
			<!-- Bordered text area -->
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-purple h1 mb-3">Interview Advice</strong>
                </div>          
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-12 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Congratulations- you have been selected to attend an interview! As this is your opportunity to really shine and land that ideal role, it is important to ensure you are ready for the occasion. </span>
                </div>             
              </div>
              <h2 class="h4 text-purple">More Info</h2>
              <p><font color="#9352A1"><b>• Get the lowdown - </font></b> Gather as much information as possible about the company, its aspirations, its culture, etc. Also ensure you are clear on the format of the interview. Make advance inquiries so you know how many people you are meeting and what their roles are within the company. Determine whether this is a formal or informal interview; does it involve any specific tests? Your Bright Purple consultant will always aim to provide you with this information.</p>
			  <p><font color="#9352A1"><b>• Do your own homework - </font></b> Get as much information as you can from the company’s web site; do an online search for relevant news articles; get some background on the interviewers – this is often available through social media sites such as LinkedIn. Through your own network find someone who knows the company and can give you a bird’s eye perspective.  Gathering this level of knowledge and intelligence about the company and the role will allow you to be one step ahead of your competition, all of whom will be just as eager to get the job!</p>
			  <p><font color="#9352A1"><b>• Be more than punctual - </font></b> Consider being early as being on time and consider being on time as being late. We recommend arriving at least 10 minutes early to an interview to allow for a traffic delay, a broken lift, time to sign in, etc. If all goes smoothly and you do end up in the reception area earlier than expected this will give you an opportunity to get calm and put your thoughts in order.</p>
			  <p><font color="#9352A1"><b>• Get your bearings straight - </font></b> If you are unfamiliar with the location of an interview it is always wise to do an advance ‘dummy run’ to ensure you end up at the right place on the day.</p>
			  <p><font color="#9352A1"><b>• Pre-plan the interview - </font></b> Before you attend the interview you should run through some of the key questions that are likely to be asked and work out your response to these. Of course, the nature of the questions will depend upon the organisation, the type of role and seniority of the position. However, some common interview questions will include: why do you want to work for our organisation; why should you be selected for this position; what unique qualities can you bring to our team; where do you see your career in the next 3-5 years?</p>
			  <p><font color="#9352A1"><b>• Question the interviewer - </font></b> Always ensure you have focused questions of your own to ask. These should arise in the course of your pre-interview research about the organisation (eg – what is the growth strategy for the business? Why did the previous CEO leave their post last year? What impact has this had on the direction and culture of the business?) While you don’t want to be over-bearing, asking a few intelligent questions shows your potential employer that you are diligent and serious about making a commitment to their organisation.</p>   
            </div>
			<!-- end of text area -->
          </div>
		  <!-- Length 4 column for 2 smaller bordered text areas -->
          <div class="col-lg-4">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Register With Us</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <p> If you share our passion and drive for exceptional performance, why not put yourself forward as a Bright Purple candidate? It’s a simple process which only takes a few minutes. Simply click on the button below, complete the application and upload your CV. Your application will be securely uploaded to our server and a member of our team will be in touch ASAP. 
					We look forward to hearing from you and hope that we can help you land a role that is ideal for both you and our client!</p>
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn bg-purple text-white" value="Register With Us">
                </div>
              </form>
            </div>
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Contact Details</h3>
              <p>Contact a Talent Delivery Specialist now at enquiries@brightpurple.co.uk or phone +44 (0)131 473 7030.</p>
            </div>
          </div>
		  <!-- End of smaller bordered text area -->
          
        </div>
      </div>
    </div>
	<!-- END OF SECTION -->

	<!-- Beginning of download Section -->
    <div class="site-section site-section-sm bg-light">
      <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2>Useful Information</h2>
            </div>
            <p>Click on the links below for more information!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6">
            <a href="#" class="service text-center">
              <span><img src="images\pdf-icon-symbol-5.png" style="height:100px; length:100px;"></span>
              <h2 class="service-heading">Relocate to Scotland</h2>
              <p>Thinking of moving to Scotland to advance your career? Click here!</p>
            </a>
          </div>
			
		  <div class="col-md-6 col-lg-6">
            <a href="#" class="service text-center">
              <span><img src="images\pdf-icon-symbol-5.png" style="height:100px; length:100px;"></span>
              <h2 class="service-heading">Make a Referral</h2>
			  <p>Click here to donwload our referral PDF</p>
            </a>
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