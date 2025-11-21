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
    <div id="header" class="sticky clearfix">

      <!-- TOP NAV -->
      <?php include 'include/nav.php'; ?>
      <!-- /Top Nav -->
    </div>

    <section class="black-section padding-bottom-0">
      <div class="container">
        <header class="text-center section-titles section-title">
          <h1 class="text-white" data-wow-delay="0.4s">  
          <span class="text-yellow"> 1BT  </span>Services
          </h1>
        </header>
      </div>
    </section>


    <section class="services-section black-section">
      <div class="container">

        <div class="row margin-bottom-70">

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="ai_consulting.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/ai-consulting.png" alt="service">
              </figure>

              <h4 class="nomargin-bottom">AI Strategy Consulting <i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">We guide your AI journey from initial strategy to custom product development, ensuring your enterprise captures real, sustainable value.</p>
            </a>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="product_incubation.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/ai-main.jpg" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Accelerated Software Engineering <i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Leverage our AI based 90 MVP offering to bring your concept to life</p>
            </a>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="data_analytics_and_ai.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/data-analytics-thumb.png" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Data Analytics and AI<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Transforming raw data into real intelligence. Empowering smarter, faster decisions.</p>
            </a>

          </div>
        </div>

        <div class="row margin-bottom-70">
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="CRM_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/crm.png" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Microsoft D365<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Engage your customers better leveraging the newest trends in Microsoft D365.</p>
            </a>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="managed_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/managed-services.png" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Managed Services<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Support services for applications, middleware platforms and technologies.</p>

            </a>
          </div>

        </div>

        <section class="black-section">
          <div class="container">
            <header class="text-center section-titles section-title">
              <h1 class="text-white" data-wow-delay="0.4s">  
              <span class="text-yellow"> Other  </span>Services
              </h1>
            </header>
          </div>
        </section>

        <div class="row margin-bottom-70 other-services-container">
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50 other-services-div text-center">
            <a href="QA_services.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/qa-icon.svg" alt="service" width="70px">
              </figure>

              <h4 class="nomargin-bottom">QA</h4> 

              <p class="nomargin-bottom-p">Fuel world class software delivery through manual and automated testing.</p>

            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50 other-services-div text-center">
            <a href="UI-UX-designing.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/ui-ux-icon.svg" alt="service">
              </figure>

              <h4 class="nomargin-bottom">UI/UX Designing</h4> 

              <p class="nomargin-bottom-p">Support services for applications, middleware platforms and technologies.</p>

            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50 other-services-div text-center">
            <a href="cloud_services.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/cloud-services-icon.svg" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Cloud Services</h4> 

              <p class="nomargin-bottom-p">Accelerate your cloud initiatives utilizing best-in-class technologies.</p>

            </a>
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