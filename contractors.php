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
    <title>Bright Purple Resourcing - Contractors</title>
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
                      <li class "active"><a href="contractors.php">Contractors</a></li>
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
		<!-- END OF NAVBAR -->
      </div>
	  
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

	<!-- Beginning of main Contractor information Section -->
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
			  <!-- Space for contractor advice video -->
                <div><video width="1200" height="500" controls><source src="movie.mp4" type="video/mp4"></div>
              </div>
            </div>
			<!-- Bordered text area -->
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-purple h1 mb-3">Contractors Advice</strong>
                </div>          
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-12 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">At Bright Purple we are always keen to build the closest possible working relationship with our network of candidates.</span>
                </div>             
              </div>
              <h2 class="h4 text-purple">Bright Advice</h2>
              <p>In this section we aim to continue doing this by providing you with the important administrative information needed in fulfilling a role, including timesheets, expenses forms and details about how to invoice an employer. We’re also hoping to offer some added value advice through our contractors guide and, to help steady the nerves when you’re going for that big interview, we also offer some helpful tips on how to prepare and get the most out of it.</p>
			  <h2 class="h4 text-purple">Invoice Advice</h2>
			  <p>One of the many things we pride ourselves on at Bright Purple is our track record in making prompt payments to our contractors. To help ensure we maintain this record we are delighted to offer our candidates the following guidance on how to submit invoices:</p>			  
				<li>Timesheets and invoices must be calculated according to the term of your contract</li>
				<li>Invoices should include the following information:</li>
					<ul type="square">
						<li>Consultant's Name</li>
						<li>Client Name</li>
						<li>Period Worked</li>
						<li>Email Address</li>
						<li>VAT Registration Number (ensuring invoices comply with rules laid out in the VAT regulations)</li>
					</ul>
				<li>Monthly invoices received, together with corresponding timesheets, will be processed for payment within the stated payment terms</li>
				<li>Consultants operating with Limited Company status should email their Bright Purple Timesheets, accompanied by their monthly invoice to: invoice@brightpurple.co.uk</li>
				<br> </br>
				<p>(Invoices can also be faxed or posted. Click here for those details)</p>
				<p>For any queries regarding timesheets or payment please contact our Finance Department on +44 (0)131 473 7048 or email finance@brightpurple.co.uk</p>
            </div>
			<!-- end of ordered text area -->
          </div>        
        </div>
      </div>
    </div>
	<!-- END OF SECTION -->

	<!-- Beginning of download section -->
    <div class="site-section site-section-sm bg-light">
      <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2>Timesheets & Forms</h2>
            </div>
            <p>They often say the job isn’t finished until the paperwork is done. While Bright Purple candidates are chosen for their ability to deliver a great result in a specific role for a client, we understand that dealing with the accompanying administrative tasks is not everyone’s cup of tea and. For some, it presents a huge headache.</p>
			<br> </br>
			<p>Therefore, in this section we are delighted to provide you the tools and resources to help ensure all necessary records are kept when working with one of our clients.  Check out the timesheet and expenses forms below and also feel free to call a member of our team should you require any further advice in this area.</p>
			<br> </br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3">
            <a href="#" class="service text-center">
              <span><img src="images\pdf-icon-symbol-5.png" style="height:100px; length:100px;"></span>
			  <!-- timesheet download -->
              <h2 class="service-heading">Download Timesheet</h2>
            </a>
          </div>
			
		  <div class="col-md-6 col-lg-3">
            <a href="#" class="service text-center">
              <span><img src="images\pdf-icon-symbol-5.png" style="height:100px; length:100px;"></span>
			  <!-- example timesheet download -->
              <h2 class="service-heading">Download Example Timesheet</h2>
            </a>
          </div>
		  
		  <div class="col-md-6 col-lg-3">
            <a href="#" class="service text-center">
              <span><img src="images\Logo_Microsoft_Excel_2013.png" style="height:100px; length:100px;"></span>
			  <!-- expenses download -->
              <h2 class="service-heading">Download Contractor Expenses Form</h2>
            </a>
          </div>
		  
		  <div class="col-md-6 col-lg-3">
            <a href="#" class="service text-center">
              <span><img src="images\Logo_Microsoft_Excel_2013.png" style="height:100px; length:100px;"></span>
			  <!-- timetable download -->
              <h2 class="service-heading">Download editable timesheet</h2>
            </a>
          </div>
        </div>	
      </div>	  
	 </div>
	</div>
	<!-- END OF SECTION -->
	
	<!-- Beginning of contractors guide section -->
	<div class="site-section site-section-sm bg-white">
      <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <div class="site-section-title">
              <h2>Contractors Guide</h2>
            </div>
            <p>Bright Purple works with thousands of contractors across the globe where we have placed people into a number of short and long term contracting roles on behalf of clients.</p>
			<br> </br>
			<p>There are many advantages and, yes, some disadvantages to those who operate as a freelance contractor. If you are just in the process of considering this as a potential option or if this has just recently become your chosen path our guide will be of interest to you. It’s an informative and helpful read which could lead you to a new and more satisfying way of working.</p>
			<br> </br>
          </div>
        </div>
		<div class="row">
          <div class="col-md-6 col-lg-12">
            <a href="#" class="service text-center">
              <span><img src="images\pdf-icon-symbol-5.png" style="height:100px; length:100px;"></span>
			  <!-- contractors guide download -->
              <h2 class="service-heading">Download Contractors Guide</h2>
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