<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->

<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->

<html>

<!--<![endif]-->



<head>
	<?php include 'include/header.php'; ?>
</head>
<!--

		AVAILABLE BODY CLASSES:

		

		smoothscroll 			= create a browser smooth scroll

		enable-animation		= enable WOW animations



		bg-grey					= grey background

		grain-grey				= grey grain background

		grain-blue				= blue grain background

		grain-green				= green grain background

		grain-blue				= blue grain background

		grain-orange			= orange grain background

		grain-yellow			= yellow grain background

		

		boxed 					= boxed layout

		pattern1 ... patern11	= pattern background

		menu-vertical-hide		= hidden, open on click

		

		BACKGROUND IMAGE [together with .boxed class]

		data-background="assets/images/boxed_background/1.jpg"

	-->



<body class="smoothscroll enable-animation">



	<!-- wrapper -->

	<div id="wrapper">



		<!-- 

				AVAILABLE HEADER CLASSES



				Default nav height: 96px

				.header-md 		= 70px nav height

				.header-sm 		= 60px nav height



				.noborder 		= remove bottom border (only with transparent use)

				.transparent	= transparent header

				.translucent	= translucent header

				.sticky			= sticky header

				.static			= static header

				.dark			= dark header

				.bottom			= header on bottom

				

				shadow-before-1 = shadow 1 header top

				shadow-after-1 	= shadow 1 header bottom

				shadow-before-2 = shadow 2 header top

				shadow-after-2 	= shadow 2 header bottom

				shadow-before-3 = shadow 3 header top

				shadow-after-3 	= shadow 3 header bottom



				.clearfix		= required for mobile menu, do not remove!



				Example Usage:  class="clearfix sticky header-sm transparent noborder"

			-->

		<div id="header" class="sticky clearfix">



			<!-- TOP NAV -->

			<?php include 'include/nav.php'; ?>

			<!-- /Top Nav -->

		</div>

		<section class="hidden-xs" id="slider" style="background:url('assets/images/main-home.webp'); background-repeat: no-repeat; background-position-y: 40%; background-position-x: center;">
			<section class="container" style="background:url('assets/images/career-main.webp'); background-repeat: no-repeat; background-position-y: 45px; background-position-x: center; height: 100%;">

			</section>
		</section>

		<section class="hidden-md hidden-lg hidden-sm" style="background:url('assets/images/main-home.webp'); background-repeat: no-repeat;background-position-x: center; max-height: 1043px; height: 1043px;">
			<section style="background:url('assets/images/career-main-mobile.webp'); background-repeat: no-repeat; background-position-y: 45px; background-position-x: center; max-height: 1043px; height: 1043px;">

			</section>
		</section>


		<section class="alternate black-section">

			<header class="text-center margin-bottom-60 section-title">
				<h1> OPEN POSITIONS</h1>
			</header>
			<div class="container">

				<div id="portfolio" class="portfolio-gutter">

					<ul class="nav nav-pills mix-filter margin-bottom-60">
						<li data-filter="all" class="filter active"><a href="#">All</a></li>
						<li data-filter="SD" class="filter"><a href="#">Software Development</a></li>
						<li data-filter="SM" class="filter"><a href="#">Sales & Marketing</a></li>
				

					</ul>

					<div class="row mix-grid" style="">
					    
								<div class="col-md-6 col-sm-6 mix SD" style=""><!-- item -->
							<a href="careers_Dynamics_365_Business_Central_Developer_Technical_Consultant.php" button type="button" class="btn btn-careers btn-lg btn-block">Dynamics 365 Business Central Developer<br> / Technical Consultant
							<i class="glyphicon glyphicon-chevron-right"></i></a></button>

						</div><!-- /item -->
												
												
							<div class="col-md-6 col-sm-6 mix SM" style=""><!-- item -->
							<a href="careers_Intern_Social_Media_Coordinator.php" button type="button" class="btn btn-careers btn-lg btn-block">Intern - Social Media Coordinator
							<i class="glyphicon glyphicon-chevron-right"></i></a></button>

						</div><!-- /item -->
					
					</div>



				</div>


		</section>




		<section class="black-section">
			<div class="container">

				<header class="text-center margin-bottom-60 section-title">
					<p class="sub-heading"> WHAT OUR EMPLOYEES SAY </p>
					<h1 class="weight-400"> TESTIMONIALS</h1>
				</header>
				<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
							"items": "4"

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
				<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"3", "autoPlay": 10000, "navigation": true, "pagination": false}'>

					<div>
						<img class="img-responsive" src="assets/images/Randika.jpg" height="638" width="360" />
					</div>

					<div>
						<img class="img-responsive" src="assets/images/Sayuri.jpg" height="638" width="360" />
					</div>

					<div>
						<img class="img-responsive" src="assets/images/Faizeena.jpg" height="638" width="360" />
					</div>

					<div>
						<img class="img-responsive" src="assets/images/Vinoth.jpg" height="638" width="360" />
					</div>

					<div>
						<img class="img-responsive" src="assets/images/Burhan.jpg" height="638" width="360" />
					</div>


				</div>

			</div>
		</section>
		<!-- /RECENT NEWS -->
		<!-- / -->
		<section class="callout-dark heading-title heading-arrow-top">

			<div class="container">



				<div class="text-center">

					<h3 class="size-30 weight-800 gray-title">Interested in joining our team? </h3>

					<div class="size-25 padding-top-20 gray-title">Please send your resume to

						<a style="color:#E50914;" href="mailto:careers@1billiontech.com">careers@1billiontech.com</a>

					</div>

				</div>



			</div>

		</section>

		<!-- FOOTER -->

		<footer id="footer">

			<?php include 'include/footer.php'; ?>

		</footer>

		<!-- /FOOTER -->



	</div>

	<!-- /wrapper -->



	<!-- 

			SIDE PANEL 

			

				sidepanel-dark 			= dark color

				sidepanel-light			= light color (white)

				sidepanel-theme-color		= theme color

				

				sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)

								If you add "sidepanel-inverse", will be placed on left side (right on RTL).

		-->



	<!-- SCROLL TO TOP -->

	<a href="#" id="toTop"></a>



	<!-- JAVASCRIPT FILES -->

	<script type="text/javascript">
		var plugin_path = 'assets/plugins/';
	</script>

	<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>


	<!-- REVOLUTION SLIDER -->
	<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>


	<!-- SCRIPTS -->

	<script type="text/javascript" src="assets/js/scripts.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117187414-1"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());



		gtag('config', 'UA-117187414-1');
	</script>



</body>



</html>