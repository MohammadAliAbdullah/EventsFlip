<?php
    include("./functions.php"); 
	$db = new Categories();
	$allProduct = $db->category();
	// echo "<pre>";  
	// print_r($allProduct);  
	// echo "</pre>"; 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name = "keywords" content = "Events, Live shows, Tickets">
	    <meta name = "description" content = "1st Stop Shop for Events Ticket ">
		<meta name="author" content="Almir - www.almir.co.il">
	    <meta name="copyright" content="Almir Internet Solutions">
		<title>Events Ticket </title>	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/bootstrap-slider.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/jquery.scrolling-tabs.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/bootstrap-checkbox.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/flexslider.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/featherlight.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/bootstrap.offcanvas.min.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/core.css">
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/style.css?update=28_06_2022_04_19" >
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/responsive.css?update=28_06_2022_04_19" >
		<link rel="stylesheet" href="https://www.eventsflip.com/template/eng/css/style.custom.css?update=28_06_2022_04_19" >
        <link rel="shortcut icon" type="image/x-icon" href="https://www.eventsflip.com/Images/favicon.ico">
        <script src="https://www.eventsflip.com/template/eng/js/jquery-3.2.0.min.js"></script>
        <link rel="stylesheet" href="GlobalIncludes/_MODULES/ColorboxMaster/example1/colorbox.css">
        <script src="GlobalIncludes/_MODULES/ColorboxMaster/jquery.colorbox-min.js"></script>
        <script src="https://www.eventsflip.com/template/eng/js/bootstrap-slider.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/bootstrap-select.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/jquery.scrolling-tabs.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/jquery.countdown.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/jquery.flexslider-min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/jquery.imagemapster.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/tooltip.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/bootstrap.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/featherlight.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/featherlight.gallery.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/bootstrap.offcanvas.min.js"></script>
		<script src="https://www.eventsflip.com/template/eng/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="GlobalIncludes/_JS/javascript.js?update=28_06_2022_04_19"></script>
		<script src="https://www.eventsflip.com/template/javascript/CallBasket.js?update=28_06_2022_04_19"></script>
		<script src="https://www.eventsflip.com/template/javascript/CallUser.js?update=28_06_2022_04_19"></script>
		<script src="https://www.eventsflip.com/template/javascript/CallAccommodation.js?update=28_06_2022_04_19"></script>
		<script src="https://www.eventsflip.com/template/javascript/CallContactSupport.js?update=28_06_2022_04_19"></script>
		<script src="https://www.eventsflip.com/template/javascript/CallNewsletter.js?update=28_06_2022_04_19"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	</head>
	<body>
    	<header id="masthead" class="site-header fix-header header-1">
						<div class="top-header top-header-bg">
				<div class="container">
					<div class="row">
						<div class="top-left">
							<ul>                              									<li>
									<a href="mailto:support@eventsflip.com"> 
										<i class="fa fa-envelope-o"></i>
										support@eventsflip.com
									</a>
								</li>
                            </ul>
						</div>
						<div class="top-right">
							<ul>
								<li>
									<a href="user-login.php">
										<i class="fa fa-sign-in"></i>
										Sign In
									</a>
								</li>
								<li>
									<a href="user-registration-type.php">
										<i class="fa fa-user-circle-o"></i>
										Sign Up
									</a>
								</li>
						    </ul>
						</div>
					</div>
				</div>
			</div> 
			<div class="main-header main-header-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-2 site-branding">
							<h1 class="site-title"><a href="index.php" title="myticket" rel="home"><img src="https://www.eventsflip.com/Images/website.logo-1.png" alt="logo"></a></h1>
						</div>

						<div class="col-lg-10 col-md-9 col-sm-10">
							<nav id="site-navigation" class="navbar">
								<div class="navbar-header">
									<div class="mobile-cart" ><a href="cart.php" id="CartCountMobile">0</a></div>
									<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-left" id="js-bootstrap-offcanvas">
									<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
									   <i class="fa fa-times fa-2x" aria-hidden="true"></i>
									</button>
									<ul class="nav navbar-nav navbar-left">
										<li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="events.php?CATEGORY=2">Sport</a></li><li><a href="events.php?CATEGORY=1">Concert</a></li><li><a href="events.php?CATEGORY=3">Theater</a></li><li><a href="events.php?CATEGORY=5">Special Events</a></li><li><a href="events.php?CATEGORY=6">Show</a></li><li><a href="events.php?CATEGORY=8">Car racing</a></li>										<!--li><a href="pages.php?page=111">About</a></li-->
                                        <li><a href="contact.php">Contact</a></li>
										<li class="cart"><a href="cart.php" id="CartCountPC">0</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>		
		</header>
		<section class="hero-1" style="background-image:url('https://www.eventsflip.com/Images/header-banner-2.png');">
			<div class="container">
				<div class="row">
					<div class="hero-content">
						<form action="events.php" method="get" id="" name="">
                            <h1 class="hero-title">The 1# One Stop Shop for</h1>
                            <p class="hero-caption">Events Ticket/ Hotels Combined!</p>
                            <div class="hero-search">
                                <input type="text" placeholder="Seach Artist, Team, or Venue" id="SEARCHKEYWORD" name="SEARCHKEYWORD">
                            </div>
                                                    </form>
					</div>
				</div>
			</div>
		</section>
		<section class="section-event-category">
			<div class="container-fluid">
				<div class="row">
					<div class="section-header">
						<h2>Event by Categories</h2>
					</div>
					<div class="section-content">
						<ul class="row clearfix">
							<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories/cat-sport-371x260.jpg&square=390" alt="Sport">
								<a href="events.php?CATEGORY=2"><span>Sport</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories/cat-concert-371x260.jpg&square=390" alt="Concert">
								<a href="events.php?CATEGORY=1"><span>Concert</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=https://www.eventsflip.com/Images/Categories/cat-theater-371x260.jpg&square=390" alt="Theater">
								<a href="events.php?CATEGORY=3"><span>Theater</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories/cat-festival-371x260.jpg&square=390" alt="Special Events">
								<a href="events.php?CATEGORY=5"><span>Special Events</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories/cat-shows-371x260.jpg&square=390" alt="Show">
								<a href="events.php?CATEGORY=6"><span>Show</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories/cat-carracing-371x260.jpg&square=390" alt="Car racing">
								<a href="events.php?CATEGORY=8"><span>Car racing</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
        <section class="section-search-content">
			<div class="container">
				<div class="row">
					<div id="primary" class="col-md-12 col-lg-12">
											</div>
				</div>
			</div>
		</section>
        <section class="section-event-category">
			<div class="container-fluid">
				<div class="row">
					<div class="section-header">
						<h2>Accommodation by Categories</h2>
					</div>
					<div class="section-content">
						<ul class="row clearfix">
							<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-hotel-371x260.jpg&square=390" alt="Hotel">
								<a href="accommodation.php?CATEGORY=1"><span>Hotel</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-motel-371x260.jpg&square=390" alt="Motel">
								<a href="accommodation.php?CATEGORY=2"><span>Motel</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-room-371x260.jpg&square=390" alt="Room">
								<a href="accommodation.php?CATEGORY=3"><span>Room</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-bb-371x260.jpg&square=390" alt="B&amp;B">
								<a href="accommodation.php?CATEGORY=6"><span>B&B</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-villa-371x260.jpg&square=390" alt="Villa">
								<a href="accommodation.php?CATEGORY=5"><span>Villa</span></a>
							</li>
																<li class="col-sm-2">
								<img src="https://www.eventsflip.com/prew_image.php?image=Images/Categories_Accommodation/cat-hostel-371x260.jpg&square=390" alt="Hostel">
								<a href="accommodation.php?CATEGORY=8"><span>Hostel</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="section-stats" style="background-image:url('https://www.eventsflip.com/Images/backgrounds/section-stats.jpg');">
			<div class="container">
				<div class="row">
					<div class="section-content">
						<ul class="row clearfix">
							<li class="col-sm-4">
								<span class="count">598</span>
								<hr>
								<p>Events Active</p>
							</li>
							<li class="col-sm-4">
								<span class="count">16,173</span>
								<hr>
								<p>Active User</p>
							</li>
							<li class="col-sm-4">
								<span class="count">136,874</span>
								<hr>
								<p>Ticket Sold</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="section-newsletter">
			<div class="container">
				<div class="section-content">
					<h2>Stay Up to date With Your Favorite Events!</h2>
					<p>Add your name & email</p>
					<div class="newsletter-form clearfix">
						<input type="text" id="Newsletter_fullname" name="Newsletter_fullname" placeholder="Full name">
                        <input type="email" id="Newsletter_email" name="Newsletter_email"  placeholder="Your Email Address">
						<input type="submit" value="Subscribe" onClick="CallNewsletter_Add();">
					</div>
				</div>
			</div>
		</section>
		<footer id="colophon" class="site-footer">
			<div class="top-footer">
				<div class="container">
					<div class="row">
						
						<div class="col-md-8">
							<a href="index.php"><img src="https://www.eventsflip.com/Images/website.logo-2.png" alt="logo"></a>
						</div>
						<div class="col-md-4">
						
						<p>&copy; 2019-2022 EVENTFLIP.COM. ALL RIGHTS RESEVED</p>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer">
				<div class="container">
					<div class="row">
					  <div class="footer-1 col-md-9">
						<div class="about clearfix">
							<h3>About</h3>
							<ul>
								<li><a href="content-19-About_us.html">About us</a></li>
                                <li><a href="content-31-Affiliate.html">Affiliates</a></li>
                                <li><a href="content-24-Terms___Conditions.html">Terms & Conditions</a></li>
                                <li><a href="content-23-Privacy___Cookies_Policy.html">Privacy Policy</a></li>
                                <li><a href="content-26-Money_Back_Refund_Policy.html">Refund policy</a></li>
                                <li><a href="content-25-Contact_Us.html">Contact</a></li>
							</ul>
						  </div>
						  <div class="support clearfix">
							<h3>Support</h3>
							<ul>
                                <li><a href="content-25-Contact_Us.html">Support</a></li>
								<li><a href="content-20-Frequently_Asked_Questions.html">FAQ</a></li>
                                <li><a href="content-32-Careers.html">Careers</a></li>
							</ul>
						  </div>
                          <div class="support clearfix">
							<h3>Blogs</h3>
							<ul>
                            	<li><a href="blog.html">Ticket & Accommodation blog</a></li>
							</ul>
						  </div>
						  
						  <div class="social clearfix">
							<h3>Stay Connected</h3>
							<ul>
								<li class="facebook">
									<a href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
										Facebook
									</a>
								</li>
								<li class="twitter">
									<a href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
										Twitter
									</a>
								</li>
								<li class="linkedin">
									<a href="#">
										<i class="fa fa-linkedin-square" aria-hidden="true"></i>
										LinkedIn
									</a>
								</li>
							</ul>
						  </div>
						</div>
					  <div class="footer-2 col-md-3">
						 <div class="footer-dashboard">
							<h3>Powered By</h3>
							<ul>
								<li><a href="https://www.eventsflip.com">Events Flip</a></li>
                                <li><a href="#">Digital tickets & Accommodation</a></li>
							</ul>
						  </div>
					  </div>
					</div>
				</div>
			</div>
		</footer>
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5f3ceaadcc6a6a5947acff83/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
</script>
</body>
</html>

