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




			<!-- LAYER SLIDER -->
			<section id="slider">

				<div class="slider">
					<!--
						AVAILABLE CLASSES
							.height-300
							.height-350
							.height-400
							.height-450
							.height-500
							.height-550
							.height-600
							.height-650
							.height-700
							.height-750
							.height-800
					-->
					<div class="layerslider height-550" style="width:100%;">

						<!-- SLIDE -->
						<div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">

							<!-- background image -->
							<img src="assets/images/careers-bg.jpg" class="ls-bg" alt="Slide background"/>

							<img class="ls-l" data-ls="
								durationin:1500;
								scalexin:0.8;
								scaleyin:0.8;
								scalexout:0.8;
								scaleyout:0.8;" 
								style="top:85px;left:25%;white-space: nowrap;" src="assets/images/careers-txt.png" alt="">


                <img class="ls-l" data-ls="
								durationin:1500;
								scalexin:0.8;
								scaleyin:0.8;
								scalexout:0.8;
								scaleyout:0.8;" 
								style="top:-20px;left:65%;white-space: nowrap;" src="assets/images/team-pic.png" alt="">

						 
						</div>

						<!-- SLIDE -->
					

					</div>

					<script type="text/javascript">
						var layer_options = {
							responsive: 		false,
							responsiveUnder: 	1280,
							layersContainer: 	1280,
							hoverPrevNext: 		true,
							skinsPath: 			'assets/plugins/slider.layerslider/skins/'
						}
					</script>

				</div>

			</section>
			<!-- /LAYER SLIDER -->



    <!-- <section class="page-header page-header-xs">

      <div class="container">

        <ol class="breadcrumb breadcrumb-inverse">

          <li>

            <a href="index.php">Home</a>

          </li>

          <li class="active">Careers</li>

        </ol>

      </div>

    </section> -->

    <section id="about" class="alternate" style="border-bottom: none">

      <div class="container">

        <div class="row">



        <div class="blog-post-item col-md-4 col-sm-4">

<div class="box-image text-center" style="min-height:309px;"><br><br>

           <h2>

  <a href="careers_Perl_Engineers.php">Perl Engineers



  </a>

</h2>

<ul class="blog-post-info list-inline">

  <li>

    <strong>Job Type</strong> &nbsp; &nbsp;: &nbsp; Full Time</li>

  <li>

    <strong>Location</strong>&nbsp; &nbsp; : &nbsp; Colombo</li>

</ul>

<div align="center" class="padding-15">

  <a href="careers_Perl_Engineers.php" class="btn btn-3d btn-red">

    <i class="fa fa-check"></i> VIEW</a>

</div>

</div>

</div>




        <div class="blog-post-item col-md-4 col-sm-4">

<div class="box-image text-center" style="min-height:309px;"><br><br>

           <h2>

  <a href="careers_Python_Engineers.php">Python Engineers


  </a>

</h2>

<ul class="blog-post-info list-inline">

  <li>

    <strong>Job Type</strong> &nbsp; &nbsp;: &nbsp; Full Time</li>

  <li>

    <strong>Location</strong>&nbsp; &nbsp; : &nbsp; Colombo</li>

</ul>

<div align="center" class="padding-15">

  <a href="careers_Python_Engineers.php" class="btn btn-3d btn-red">

    <i class="fa fa-check"></i> VIEW</a>

</div>

</div>

</div>


<div class="blog-post-item col-md-4 col-sm-4">

<div class="box-image text-center" style="min-height:309px;"><br><br>

           <h2>

  <a href="careers_SE_Golang.php">Software Engineers - Golang


  </a>

</h2>

<ul class="blog-post-info list-inline">

  <li>

    <strong>Job Type</strong> &nbsp; &nbsp;: &nbsp; Full Time</li>

  <li>

    <strong>Location</strong>&nbsp; &nbsp; : &nbsp; Colombo</li>

</ul>

<div align="center" class="padding-15">

  <a href="careers_SE_Golang.php" class="btn btn-3d btn-red">

    <i class="fa fa-check"></i> VIEW</a>

</div>

</div>

</div>





 <div class="blog-post-item col-md-4 col-sm-4">

      <div class="box-image text-center" style="min-height:309px;"><br><br>

                <h2>

        <a href="careers_SE_Angular_JS.php">Software Engineers - AngularJS

        </a>

      </h2>

      <ul class="blog-post-info list-inline">

        <li>

          <strong>Job Type</strong> &nbsp; &nbsp;: &nbsp; Full Time</li>

        <li>

          <strong>Location</strong>&nbsp; &nbsp; : &nbsp; Colombo</li>

      </ul>

      <div align="center" class="padding-15">

        <a href="careers_SE_Angular_JS.php" class="btn btn-3d btn-red">

          <i class="fa fa-check"></i> VIEW</a>

      </div>

      </div>

</div>

        </div>





      </div>

    </section>

    <section class="callout-dark heading-title heading-arrow-top">

      <div class="container">



        <div class="text-center">

          <h3 class="size-40 weight-800">Interested in joining our team? </h3>

          <div class="size-30 padding-top-20">Please send your resume to

            <a style=color:#17b8f4;="mailto:careers@1billiontech.com">careers@1billiontech.com</a>

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

  <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>

  <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>



<!-- LAYER SLIDER -->
<script type="text/javascript" src="assets/plugins/slider.layerslider/js/layerslider_pack.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.layerslider_slider.js"></script>


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