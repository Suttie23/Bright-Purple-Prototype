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
    <title>Bright Purple Resourcing - About</title>
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
	<link rel="stylesheet" href="css/foot.css">
    
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
                  <li><a href="blog.php">Blog</a></li>
                  <li class="active"><a href="about.php">About</a></li>
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
    
	<!-- Beginning of main About information Section -->
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>          
            </div>
			<!-- Bordered text area -->
            <div class="bg-white property-body border-bottom border-left border-right border-top">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-purple h1 mb-3">About Us</strong>
                </div>          
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-12 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">We’re excited to let you know – we’re growing! That means that we’re looking for new team members. Let's have a look at some key things you can expect working here:</span>
                </div>             
              </div>
              <h2 class="h4 text-purple">What is it like to work for Bright Purple?</h2>
            <p>• Relaxed, welcoming and fun environment Based just 5 minutes from Waverley Station on Rose Street, we’re spoilt with castle views, bustling shops and fantastic places to grab a bite to eat.  Once you’re in our building, it’s all about the people.  You'll find an energised and enthusiastic team working effectively with clients and candidates!</p>
			<p>• Flexible working With working parents and staff with busy lives outside of work, we know the benefit of working flexibly.  At Bright Purple we’re encouraged to start and finish during a time that suits us. Across the board, all of the team leverage the benefits of flexible working and enjoy the benefits it brings.</p>
			<p>• Collaborative and consultative We believe that working together and consulting are two things that are crucial to any business.  In the open office atmosphere there is serious collaboration; a few times a week we also get together to have Scrum meetings where we share where we are with clients and candidates and think ahead about future goals. On a more light-hearted note, we also enjoy regular get-togethers, team lunches and drinks to celebrate our success.</p>
			<p>• Autonomy With no limit on geography, your Bright Purple world really is your oyster.  Using your network, you're encouraged to do business in Scotland as well as abroad. If you’re energised and raring to go, there are no limits on the industry you can work with. Just go for it.  We all have amazing opportunities to reach candidates by having dual desks which gives everyone the opportunity to maximise their potential and gives our clients the flexibility to meet immediate requirements.</p>
			<p>• Inspiring Leadership As team members we are encouraged to take ownership of leading a culture of innovation. We're also lucky to be led by Paul Curry, Managing Director, and Nick Price, Director. By working closely with our leadership team we enable shared learning and access into each other’s networks (as well as ad-hoc business updates, fun stories and free tickets to events!). In our purpose built learning facility, we’re encouraged to be continually learning about the digital space and the job market to ensure that we’re genuinely able to support our clients and candidates. 
			If you’d like to be part of our growing team, just get in touch. Drop us an email and we’ll get in touch to have a coffee and a chat; send a copy of your action packed CV to Paul Curry- Managing Director- on paul.curry@brightpurple.co.uk or give Paul a call on +44 (0)131 473 7074 to get the ball rolling.</p>
            </div>
			<!-- end of bordered text area -->
          </div>
			<!-- small bordered text area -->		  
			<div class="col-lg-4">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Responsible Business</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <p>It’s time to tick the old CSR box, right? Wrong!</p>
				  <p>We take very seriously our responsibility to the people who drive our business forward and the wider communities where we operate. For us, being a responsible business begins at home where the first commitment in our quest to be a socially responsible business is to our people. We also work closely with our suppliers and stakeholders to ensure that we drive the business in a sustainable and responsible way.</p>
                </div>             
              </form>
            </div>
            <div class="bg-white widget border rounded">
              <p>As a part of supporting and learning from our local communities, we have participated in various fundraising and awareness campaigns for charities and social enterprises such as Shelter Scotland, Breast Cancer Awareness, Action for Children and Social Bite. Currently, the brilliant Social Enterprise Invisible Cities (Edinburgh) use Bright Purple office space for their weekly team meetings and training while they establish their business. Invisible Cities train people affected by homelessness to become walking tour guides of their own city, and offer these alternative tours to tourists and locals. We have been lucky enough to go on a trial tour themed around Leith and Trainspotting with one of the trainee tour guides and we are incredibly excited to see the enterprise grow!  </p>
            </div>
          </div>
		  <!-- end of small bordered text area -->
        </div>
      </div>
    </div>
	<!-- END OF SECTION -->

	<!-- Beginning of Meet the Team section-->
    <div class="site-section bg-light">
      <div class="container" data-aos="fade">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7">
            <div class="site-section-title text-center">
              <h2>Meet The Team!</h2>
              <p>The Bright Purple team are a mix of diverse talented individuals who speak numerous languages, have countless years’ experience in recruitment and technology and lead a variety of lifestyles. From working parents to recent graduates, you’ll meet a diverse and talented team of people! </p>
            </div>
          </div>
        </div>
		<!-- About cards - currently placeholder but would be generated in a similar way to the VACANCIES in the final version of the website. -->
        <div class="row">
		<!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Arthur</h2>
                <span class="d-block mb-3 text-white-opacity-05">Blogging Dog</span>
                <p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Paul Curry</h2>
                <span class="d-block mb-3 text-white-opacity-05">Managing Director</span>
                <p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Nick Price</h2>
                <span class="d-block mb-3 text-white-opacity-05">Executive Partner</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
		  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Kathi Lorimer</h2>
                <span class="d-block mb-3 text-white-opacity-05">Business Development Consultant</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Kane Webster</h2>
                <span class="d-block mb-3 text-white-opacity-05">Sales Manager</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Louise Millar</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
		  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Magnus Wikström</h2>
                <span class="d-block mb-3 text-white-opacity-05">Principal Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Naomi Gibson</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Jamie Rose</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
		  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Pawel Orzel</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Renate Hansen</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Tony Marsh</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
		  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">John Holt</h2>
                <span class="d-block mb-3 text-white-opacity-05">Talent Delivery Specialist</span>
                <p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Jemma Brown</h2>
                <span class="d-block mb-3 text-white-opacity-05">Finance Business Partner</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Yan Scouller</h2>
                <span class="d-block mb-3 text-white-opacity-05">Senior Talent Delivery Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
		  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Carina Brandu</h2>
                <span class="d-block mb-3 text-white-opacity-05">PES & Compliance Specialist</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Mark Murphy</h2>
                <span class="d-block mb-3 text-white-opacity-05">IT Guru</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
		  <!-- Single About Card -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/Headshot.jpg" alt="Image" class="img-fluid rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Melissa Logan</h2>
                <span class="d-block mb-3 text-white-opacity-05">Finance & PES Administrator</span>
				<p>...</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
		  <!-- End of About Card -->
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