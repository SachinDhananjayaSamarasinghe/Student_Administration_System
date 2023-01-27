<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Registration">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
 <style>

 @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Roboto:400,500,700');

 a, a:hover, a:visited, a:active, a:link
{
	text-decoration: none;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}

ul
{
	list-style: none;
	margin-bottom: 0px;
}

 .header{
	position: absolute;
	top: 0px;
	left:50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	width: 100%;
	height: 56px;
	background: #FFFFFF;
	z-index: 10;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.header.scrolled .header_content::before
{
	box-shadow: 0px 20px 49px rgba(0,0,0,0.17);
}
.header_content
{
	float: left;
	height: 100%;
}
.header_content::before
{
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	content: '';
	box-shadow: 0px 20px 49px rgba(0,0,0,0.67);
	z-index: -1;
}

.logo_container
{
	display: inline-block;
	padding-left: 100px;
}
.logo span
{
	font-family: 'Open Sans', sans-serif;
	font-size: 10px;
	font-weight: 900;
	color: #3a3a3a;
	vertical-align: middle;
	text-transform: uppercase;
	margin-left: 3px;
}

.main_nav_container
{
	display: inline-block;
	margin-left: auto;
	padding-right: 0px;
}
.main_nav
{
	margin-top: -5px;
}
.main_nav_item
{
	display: inline-block;
	margin-right:40px;
}
.main_nav_item:last-child
{
	margin-right: 174.5px;
}
.main_nav_item a
{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 700;
	color: #3a3a3a;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.main_nav_item a:hover
{
	color: #ffb606;
}

.admin-box 
{
	color: white;
}

.admin-box a:hover
{
	color: black;
}

.header_side
{
	width: 279px;
	height: 100%;
	background: #ffb606;
}
.header_side img
{
	width: 29px;
	height: 29px;
}
.header_side span
{
	display: block;
	position: relative;
	font-size: 18px;
	font-weight: 500;
	color: #FFFFFF;
	padding-left: 12px;
}

.footer
{
	width: 100%;
	padding-top: 10px;
	padding-bottom: 20px;
	background: #1a1a1a;
}
.footer .section_title h1
{
	color: #FFFFFF;
}

.footer_content 
{
	padding-top: 0px;
	padding-bottom: 0px;
	
}
.footer_content .logo_container
{
	padding-left: 0px;
	padding-top: 80px;
}
.footer_content .logo span
{
	color: #FFFFFF;
}
.footer_about_text
{
	margin-top: 0px;
	margin-bottom: 0px;
	padding-right: 20px;
}
.footer_column_title
{
	font-size: 18px;
	font-weight: 500;
	color: #FFFFFF;
	padding-top: 15px;
}
.footer_column_content
{
	margin-top: 32px;
	float: left;
}
.footer_list_item
{
	margin-bottom: 11px;
}
.footer_list_item a
{
	font-size: 14px;
	color: #a5a5a5;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.footer_list_item a:hover
{
	color: #ffb606;
}
.footer_contact_item
{
	font-size: 10px;
	font-weight: 400;
	color: #a5a5a5;
	margin-bottom: 22px;
}
.footer_contact_item:last-child
{
	margin-bottom: 0px;
}
.footer_contact_icon
{
	display: inline-block;
	width: 24px;
	height: 24px;
	vertical-align: middle;
	margin-right: 10px;
}
.footer_contact_icon img
{
	width: 100%;
}

.footer_bar
{
	padding-top: 19px;
	padding-bottom: 19px;
}
.footer_social .menu_social_item a i
{
	color: #FFFFFF;
}
.footer_social .menu_social_item a i:hover
{
	color: #ffb606;
}
.footer_social .menu_social_item:last-child
{
	margin-right: 0px;
}

    </style>
</head>
<body>

		<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img style="margin-left: -75px; height:55px; margin-top: -1px;"  src="img/logo1.png" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="home.php">HOME</a></li>
						<li class="main_nav_item"><a href="homecreate.php">STUDENT REGISTRATION</a></li>
						<li class="main_nav_item"><a href="stulogin.php">COURSE REGISTRATION</a></li>
						<li class="main_nav_item"><a href="contact.php">CONTACT US</a></li>
						<li class="main_nav_item"><a style="color: red;" href="login.php">ADMIN</a></li>
					</ul>
				</div>
			</nav>
		</div>

	</header>
	
	<!-- Home -->

	<div class="home">

		<!-- Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!--  Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/6.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>
				
				<!--  Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/2.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>
				
				<!--  Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/33.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>

				<!--  Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/4.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>

				<!--  Slide --
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/5.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>

				<!--  Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(img/campus.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><strong>FAS - SEUSL</strong></h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><strong style="font-size: 25px;"><</strong></span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200"><strong style="font-size: 25px;">></strong></span></div>
		</div>

	</div>

	<!-- Departments -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>OUR DEPARTMENTS</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Department Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="img/m.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title"><a href="mathsd.php">Mathematical Department</a></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name"><a href="mathsd.php"><h3 style="margin-left: 80px;">Read More</h3></a></div>
						</div>
					</div>
				</div>

				<!--  Department Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="img/c1.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title"><a href="phyd.php">Physical Department</a></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name"><a href="phyd.php"><h3 style="margin-left: 80px;">Read More</h3></a></div>
						</div>
					</div>
				</div>

				<!--  Department Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="img/b.png" alt="">
						<div class="card-body text-center">
							<div class="card-title"><a href="biod.php">Biological Department</a></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name"><a href="biod.php"><h3 style="margin-left: 80px;">Read More</h3></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- About Us -->

	<div class="testimonials page_section">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(img/campus1.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>A BIT FROM OUR HISTORY</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div >					
						<div class="owl-carousel  testimonials_slider">						
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The South Eastern University of Sri Lanka (SEUSL) was first established as the South Eastern University College of Sri Lanka and commenced to function from 27th July 1995. It was then upgraded to the status of a fully-fledged university, SEUSL, from 15th May 1996. There are six faculties in SEUSL. The Faculties of Arts and Culture, Management and Commerce, Islamic Studies and Arabic, Engineering and Technology are located in the main campus at Oluvil while the Faculty of Applied Sciences (FAS), established in 1997, is located at Sammanthurai.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="img/logo1.png" alt="">
								<img style="padding-bottom:60px;" src="img/logo2.png" alt="">
								
								
								
							</div>
						</div>
					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
					<div class="footer_column_title" style="margin-left: 100px; margin-top: 50px;">Menu</div>
					  <div class="footer_column_content">
						  <ul style="margin-left: 100px;">
								<li class="footer_list_item"><a href="#">Home</a></li>
								<li class="footer_list_item"><a href="homecreate.php">Student Registration</a></li>
								<li class="footer_list_item"><a href="stulogin.php">Course Registration</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</div>


					<div class="col-lg-3 footer_col">
						<div class="footer_column_title" style="margin-left: 80px; margin-top: 50px;">Contact - SEUSL</div>
						<div class="footer_column_content">
							<ul style="margin-left: 80px;">
								<li class="footer_list_item">
									<i class="fa fa-envelope icon"></i>
									University Park, Oluvil,&nbsp &nbsp &nbsp &nbsp  #32360, Sri Lanka.
								</li>
								<li class="footer_list_item">
									<i class="fa fa-phone icon"></i>
									 +94 67 2255062 /63 /64 
								</li>
								<li class="footer_list_item">
									<i class="fa fa-fax icon"></i>
									+94 67 2255217
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title" style="margin-left: 50px; margin-top: 50px;">Social Media - SEUSL</div>
						<div class="footer_column_content">
							<ul style="margin-left: 120px;">
								<li class="footer_list_item"><a href="https://www.facebook.com/pages/South-Eastern-University-of-Sri-Lanka/992110304136392"><i style="margin-left: 5px;" class="fab fa-facebook-f"></i></a></li>
								<li class="footer_list_item"><a href="https://twitter.com/SEUSL_Oluvil"><i style="margin-left:2px;" class="fab fa-twitter"></i></a></li>
								<li class="footer_list_item"><a href="https://www.youtube.com/channel/UCUtXxXZnUq3OxnpHmCc8heg"><i style="margin-left: 1px;" class="fab fa-youtube"></i></a></li>
								<li class="footer_list_item"><a href="https://lk.linkedin.com/in/seusl"><i style="margin-left:2px;" class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>