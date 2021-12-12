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
    <title>Bright Purple Resourcing - Clients</title>
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
                  <li class="active"><a href="clients.php">Clients</a></li>
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

	<!-- Beginning of main clients section -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
		<!-- Setting up the bootstrap grid for the top of the Clients section, text and title will be in the centre -->
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2>Clients</h2>
            </div>
			<p>Within the Bright Purple Team, our clients are our number one priority. We ensure that we demonstrate our commitment in everything we do for clients. We start by listening to ensure we understand their requirements and we then focus all our expertise and energy on finding the right people to help take their business or organisation forward.
			Our team of talent delivery specialist invest time and money in a pro-active sourcing model which assists us in tapping into the "passive job seekers" market and source candidates with not just the required technical skills but also regional knowledge.
			Our team of specialists use modern technologies and their wealth of experience to provide a highly focused recruitment service in an increasingly interconnected international market, where the needs of candidates and clients are constantly changing. In this global candidate market, your next employee might not be on your doorstep.
			With our bespoke services, we can manage and deliver large resourcing programmes. Similarly we can source for niche skills in the following areas:</p>	
			<br> </br>
          </div>
        </div>

	<!-- The following set of grids is set up to display three blocks of four text based bulks of information -->
        <div class="row" style="margin-top:20px; margin-bottom:80px;">
          <div class="row">
		  <!-- Info 1 -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Development, Design, Architecture</h2>  
            </a>
          </div>
		  <!-- Info 2 -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Service Delivery</h2>  
            </a>
          </div>
		  <!-- Info 3 -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Business, Systems, MI & Data</h2>  
            </a>
          </div>
		  <!-- Info 4 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Project Management</h2>  
            </a>
          </div>
		  <!-- Info 5 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">IT Sales & Marketing</h2>  
            </a>
          </div>
		  <!-- Info 6 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Business Change & Operations</h2>  
            </a>
          </div>
		  <!-- Info 7 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Applications & Infrastructure</h2>  
            </a>
          </div>
		  <!-- Info 8 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Programme Office</h2>  
            </a>
          </div>
		  <!-- Info 9 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Testing</h2>  
            </a>
          </div>
		  <!-- Info 10 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Risk</h2>  
            </a>
          </div>
		  <!-- Info 11 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Compliance</h2>  
            </a>
          </div>
		  <!-- Info 12 -->
		  <div class="col-md-6 col-lg-4" style="margin-top:10px;">
            <a class="service text-center">
              <h2 class="service-heading">Digital and Cyber Security</h2>  
            </a>
          </div>  
        </div>	
      </div>
	  <!-- END OF GRID SET -->
    </div>
   </div>
   <!-- END OF SECTION -->

	<!-- Additional carousel slider to display images related to feedback from clients -->
	<div class="slide-one-item home-slider owl-carousel">
		<div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder1.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
		<!-- Bootstrap grid to display information overlapping the carousel that contains client feedback -->
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2"><font color="#9352A1">What Our Clients Say</font></h1>
			  <p>We are passionate about delivering exceptional performance for our clients, finding them perfectly placed people for any role within their business or organisation. The passion we show in everything we do is what helps us deliver great results for our clients.</p>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- Additional carousel slider to display images related to feedback from clients -->
      <div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder2.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
		<!-- Bootstrap grid to display information overlapping the carousel that contains client feedback -->
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2"><font color="#9352A1">Tesco Bank</font></h1>
			  <p>"Bright Purple have done a great job of really understanding my programme, what we were trying to achieve and the type of people I was looking for. Jan and the team invested time in getting to know what we are about - which made the recruitment and selection process quicker and more effective."</p>
            </div>
          </div>
        </div>
      </div>  
	  <!-- END OF SECOND CAROUSEL -->
		
		<!-- Additional carousel slider to display images related to feedback from clients -->
		<div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder1.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
		<!-- Bootstrap grid to display information overlapping the carousel that contains client feedback -->
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2"><font color="#9352A1">UBIQUE Systems</font></h1>
			  <p>"The level of service from Bright Purple Resourcing has been excellent. C.Vs are always well presented and prompt, and the quality of candidates has always been very good. Bright Purple are highly responsive and have worked hard to locate candidates who match our exact requirements."</p>
            </div>
          </div>
        </div>
      </div>
	  
      <!-- Additional carousel slider to display images related to feedback from clients -->
	  <div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder2.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
		<!-- Bootstrap grid to display information overlapping the carousel that contains client feedback -->
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2"><font color="#9352A1">Hewlett Packard</font></h1>
			  <p>"I have worked with Bright Purple over a considerable period of time, and have always found them to work tirelessly to build strong relationships with both their Clients and Candidates alike, to ensure the best possible fit in the recruitment and selection process."</p>
            </div>
          </div>
        </div>
      </div>  

		<!-- Additional carousel slider to display images related to feedback from clients -->
		<div class="site-blocks-cover overlay" style="background-image: url(images/Placeholder1.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
		<!-- Bootstrap grid to display information overlapping the carousel that contains client feedback -->
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2"><font color="#9352A1">Capito IT</font></h1>
			  <p>“I always find the service provided by my Bright Purple account team to be efficient and effective and even more importantly I know that I stand the best chance possible in fulfilling my resourcing opportunities with good quality applicants.”</p>
            </div>
          </div>
        </div>
      </div> 
	 </div>
	
	<!-- Beginning of Competencies section -->
	<div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
		<!-- Setting up bootstrap grid to display and centre align the core competencies brief of Bright Purple -->
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2>Core Competencies</h2>
            </div>
            <p>Bright Purple takes on all levels of recruitment requirements for our clients, sourcing high quality professionals at all levels that are the ideal fit to the organisation. Our core competencies in recruitment include:</p>
			<br> </br>
          </div>
        </div>
		<!-- The next three parts have a length of 4 so that three can fit on the same row to display information -->
        <div class="row">
		<!-- Part 1 -->
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Contract Recruitment</h2>
              <p>With a strong focus in the IT and Financial Services sectors, Bright Purple has been sourcing quality contractors for clients since 1995. We pride ourselves on our long term relationships and differentiate ourselves from our competitors through our understanding of, and commitment to keeping up with, the businesses we work with and the technologies required. We also take care to look beyond any individual role to get a better understanding of your core objectives to ensure that we deliver the right solution for your business or organisation.</p>
            </a>
          </div>
		  <!-- Part 2 -->
			<div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Additional Servies</h2>
              <p>We also offer:</p>
			  <p>Campaign Management Solutions</p>
			  <p>Interm Management Appointments</p>
			  <p>Outsourced Project Delivery</p>
			  <p>Pre-Engagement Screening (PES)</p>
            </a>
          </div>
		  <!-- Part 3 -->
		  <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <h2 class="service-heading">Permanent Recruitment</h2>
			  <p>A little understanding goes a long way and we believe this to be crucial in helping you develop your business or organisation. Bright Purple invests time and effort to better understand our clients’ business, technology, culture and other requirements so we can ensure we deliver the right people to drive success. We provide added value advice, including market dynamics on key issues like availability of skills and remuneration levels. We also provide added value to our candidates who experience a personal service that focuses on their skills, experience, personality, ambitions and aspirations.</p>
            </a>
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