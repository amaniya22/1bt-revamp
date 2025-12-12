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

  <!--

			OVERLAY NAVIGATION

			Outside of #wrapper



			CSS HEADER REQUIRED:

			<link href="assets/css/header-0.css" rel="stylesheet" type="text/css" />

		-->

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

    <section class="hidden-xs black-section careers-sections" id="slider">
		<header class="text-center section-titles section-title margin-bottom-20">
			<h2 class="text-white"> 
				<span class="text-yellow"> LIFE </span> @ <span class="text-yellow"> 1BT </span>
			</h2>
		</header>
		<div class="container">
			<p class="text-center">
				Life at 1 BT is more than just work - it’s about growth, collaboration, and innovation. 
				We believe that when people are empowered, inspired, and supported, great ideas naturally follow. 
				At the heart of our culture lies a simple promise to create an environment where technology meets purpose, 
				and people thrive together.
			</p>
		</div>
	</section>

	<section class="black-section margin-bottom-60">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <img class="img-responsive margin-bottom-20" src="assets/images/1academy-title.svg" alt="">
			<p>
              1 Academy is the learning and development arm of 1 Billion Tech. 
			  This initiative reflects our commitment to continuous learning and the upskilling of our team members. 
			  We view 1BT not just as a workplace, but as a home and a university where our employees can thrive. 
            </p>
          </header>
          <ul class="list-unstyled list-icons">
            <li>
              <i class="fa fa-angle-double-right"></i>Trainings & Workshops (Technical & Non-Technical)
			</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Periodic Tech Exams
			</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Tech Talks
			</li>
			<li>
              <i class="fa fa-angle-double-right"></i>Podcasts
			</li>
			<li>
              <i class="fa fa-angle-double-right"></i>Round Table Discussions
			</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 margin-top-40">
          <img class="img-responsive" src="assets/images/1academy-img.png" alt="">
        </div>
      </div>
    </section>

	<section class="services-white-section life-at-1bt-sections">
		<div class="container">
			<header class="text-center margin-bottom-40 section-title">
				<h1 class="section-title-h1"><span class="text-yellow"> INTERN </span> DIARIES </h1>
			</header>

			<div class="embed-responsive embed-responsive-16by9 video-fixed">
				<iframe src="https://www.youtube.com/embed/36FaRmEPGME?si=jkwG7Val-ePLVvDI"
				title="YouTube video player" frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
				allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<section class="callout-dark heading-title heading-arrow-top careers-pg-footer">
		<div class="container">
			<div class="text-center">
				<h3 class="size-30 weight-800 gray-title margin-bottom-30">Interested in joining our team?</h3>

				<div class="size-25 padding-top-20 gray-title">
					<p>
						We're looking for motivated individuals who are passionate.<br />
						Join our team and make a difference. Apply now and let's grow together!
					</p>

					<a style="color:#E50914;" href="mailto:careers@1billiontech.com"><span class="text-yellow">Please send your resume to</span> careers@1billiontech.com</a>

				</div>
			</div>
		</div>
	</section>

   

    <!-- FOOTER -->

    <footer id="footer">

     <?php include 'include/footer.php'; ?>

    </footer>

    <!-- /FOOTER --

  </div>

  <!-- /wrapper -->

  </div>



  <!-- /OVERLAY NAVIGATION -->







  <!-- /SIDE PANEL -->



  <!-- SCROLL TO TOP -->

  <a href="#" id="toTop"></a>



  <!-- JAVASCRIPT FILES -->

  <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>

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

    function gtag() { dataLayer.push(arguments); }

    gtag('js', new Date());



    gtag('config', 'UA-117187414-1');

  </script>



</body>



</html>