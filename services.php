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


    <section>
      <div class="container">

        <div class="row margin-bottom-70">

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="product_incubation.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/ai-main.jpg" alt="service">
              </figure>

              <h4 class="nomargin-bottom">AI Driven Product Incubation <i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">“Leverage our 90-day MVP offering to realise your concept into reality.
</p>
            </a>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="CRM_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/crm.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Microsoft D365<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Engage your customers better leveraging the newest trends in Microsoft D365.</p>
            </a>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="cloud_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/cloud_services.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Cloud Services<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Accelerate your cloud initiatives utilizing best-in-class technologies.</p>

            </a>
          </div>
        </div>

        <div class="row margin-bottom-70">
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="UI-UX-designing.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/digital.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">UI/UX Designing<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Transform your organization into the digital era with end-to-end creative design and technology solutions.</p>

            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="business_consulting.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/business-consulting.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Business Consulting<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Accomplish your intended business transformations with our proven consulting best practices.</p>

            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="mobility_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/mobility.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Mobility <i class="fa fa-chevron-right text-red margin-left-10"></i></h4>

              <p class="nomargin-bottom-p">Synergy of mobile technology, engagement methodology and system integration to deliver results.</p>

            </a>
          </div>

        </div>

        <div class="row margin-bottom-70">
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="integration_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/integration.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Integration Services<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Aggregate data assets from disparate systems into a unified platform.</p>

            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="managed_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/managed-services.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">Managed Services<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Support services for applications, middleware platforms and technologies.</p>

            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-50">
            <a href="QA_services.php">
              <figure class="margin-bottom-30">
                <img class="img-responsive" src="assets/images/qa.webp" alt="service">
              </figure>

              <h4 class="nomargin-bottom">QA<i class="fa fa-chevron-right text-red margin-left-10"></i></h4> 

              <p class="nomargin-bottom-p">Fuel world class software delivery through manual and automated testing.</p>

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