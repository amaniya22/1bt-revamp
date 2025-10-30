<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html xmlns="http://www.w3.org/1999/html">
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
    <div id="header" class="sticky clearfix">

     <!-- TOP NAV -->
           <?php include 'include/nav.php'; ?>
          <!-- /Top Nav -->

    </div>

    <!-- SLIDER -->
    <section class="height-400" id="slider" style="background:url('assets/images/main-cloud-services.webp')">
      <div class="overlay dark-5">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>

      <div class="display-table">
        <div class="display-table-cell vertical-align-middle padding-top-50">
          <div class="container">
            <div class="slider-featured-text ">
              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">CLOUD
                <span class="text-yellow"> SERVICES </span>
              </h1>
              <h2 class="weight-300 text-white wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">Accelerate your cloud initiatives utilizing best-in-class technologies
              </h2>

            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="#">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/cloud_Strategy.jpg" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Strategy, Assessment & Roadmap</h1>
          </header>
          <p>A move to the cloud is far from just a technology exercise. It needs to be rooted in business outcomes—specific
            objectives the company wants to achieve.</p>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Cloud Transformation & Migration</h1>
          </header>
          <p>This typically involves modernizing existing applications for the cloud, developing new cloud-native applications,
            and transforming the architecture and infrastructure. The goal is to create an entirely new technology operating
            model and culture that enables you to innovate more quickly, effectively and efficiently. Automated management
            and migration tools are critical to executing a smooth migration, and help to speed the move, with high quality,
            consistency and repeatability. We offer a combination of tools, specialized skills and solution accelerators,
            in a cloud migration factory that can accelerate your journey. The Cloud migration factory is strengthened by
            a governance model.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/cloud-migration.jpg" alt="">
        </div>
      </div>
    </section>
    <section id="#">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/cloud-optimization.jpg" alt=""> </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Cloud Management & Optimization</h1>
          </header>
          <p>You need to continually work to optimize what’s in the cloud to maximize its cloud investments. A wide range of
            managed services are available to help with cloud optimization. </p>
        </div>
      </div>
    </section>

    <section style="background-image: url(&quot;assets/images/casestudy-bg.jpg&quot;); background-position: 50% 93px;">

      <div class="container">
        <header class="text-center section-title">
          <h2 class="tex-white">LET OUR WORK SPEAK FOR ITSELF </h2>
          <h1 class="tex-white">CASE STUDIES</h1>
        </header>

        <div class="row">

          <div class="col-md-4">

            <div class="box-image text-center">
              <a href="case_study_assetminder.php">
                <img class="img-responsive" src="assets/images/assetminder-casestudy.jpg" alt="">
              </a>

              <a class="box-image-title" href="case_study_assetminder.php">
                <h2 class="tex-white">Cross-platform fleet management</h2>
              </a>
            </div>

          </div>
          <div class="col-md-4">

            <div class="box-image text-center">
              <a href="case_study_northbay.php">
                <img class="img-responsive" src="assets/images/Northbay_bigDataSolution.jpg" alt="">
              </a>

              <a class="box-image-title" href="case_study_northbay.php">
                <h2 class="tex-white">Big data solutions</h2>
              </a>
            </div>

          </div>
          <div class="col-md-4">

            <div class="box-image text-center">
              <a href="case_study_Northbay_machineLearning.php">
                <img class="img-responsive" src="assets/images/Northbay_machineLearning.jpg" alt="">
              </a>

              <a class="box-image-title" href="case_study_Northbay_machineLearning.php">
                <h2 class="tex-white">Machine learning</h2>
              </a>
            </div>

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
  </div>
  </div>
  <!-- /OVERLAY NAVIGATION -->


  </div>
  </div>
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117187414-1');
</script>

</body>

</html>