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

    <!-- <section class="height-400 black-section" id="slider" style="background:url('assets/images/main-managed-services.webp')">

      <div class="overlay dark-5">

        dark overlay [0 to 9 opacity]

      </div>



      <div class="display-table">

        <div class="display-table-cell vertical-align-middle padding-top-50">

          <div class="container">

            <div class="slider-featured-text ">

              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">MANAGED

                <span class="text-yellow"> SERVICES </span>

              </h1>

              <h2 class="weight-300 text-white wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">Support services for applications, middleware platforms, and technologies.
              </h2>



            </div>

          </div>

        </div>

      </div>



    </section> -->

    <section class="black-section">
      <div class="container">
        <header class="text-center section-title section-titles">
          <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">MANAGED
            <span class="text-yellow"> SERVICES </span>
          </h1>
        </header>
      </div>
    </section>



    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Application-management.jpg" alt="">

        </div>



        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Application Management</h1>

          </header>

          <div>

            <ul class="list-unstyled nomargin">

              <li>

                <i class="fa fa-angle-double-right"></i>Incident and change management</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Service level management</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Asset rationalization</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Code governance</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Release management</li>

            </ul>

          </div>

        </div>

      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Business Process Outsourcing</h1>

          </header>

          <div>

            <ul class="list-unstyled nomargin">

              <li>

                <i class="fa fa-angle-double-right"></i>Process optimization </li>

              <li>

                <i class="fa fa-angle-double-right"></i>Help desk/ Call center</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Back-office processing</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Data analysis, reporting</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Claim processing</li>

            </ul>

          </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Business-process-outsourcing.jpg" alt="">

        </div>



      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Application-management.jpg" alt="">

        </div>



        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Infrastructure Management</h1>

          </header>

          <div>

            <ul class="list-unstyled nomargin">

              <li>

                <i class="fa fa-angle-double-right"></i>DBA support</li>

              <li>

                <i class="fa fa-angle-double-right"></i>O/S, patch management</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Network & systems maintenance</li>

              <li>

                <i class="fa fa-angle-double-right"></i>Security management</li>

            </ul>

          </div>

        </div>



      </div>

    </section>

    <section class="black-section">
      <div class="container">
        <div align="center" class="col-lg-12 col-md-12 col-sm-12">

          <header class="margin-bottom-10 section-title">

            <h1>Our Approach</h1>

          </header>

          <img class="responsive-image" src="./assets/images/OurApproach.png">

        </div>
      </div>

    </section>





    <section style="background-image: url(&quot;assets/images/casestudy-bg.jpg&quot;); background-position: 50% 93px;">



      <div class="container-fluid">

        <header class="text-center section-title">

          <h2 class="tex-white">LET OUR WORK SPEAK FOR ITSELF </h2>

          <h1 class="tex-white">CASE STUDIES</h1>

        </header>



        <div class="row padding-20">



        



          <div class="col-md-4">



        



          </div>



          <div class="col-md-4">



            <div class="box-image text-center">



              <a href="case_study_assetminder_managedServices.php">

                <img class="img-responsive" src="assets/images/assetminder-casestudy.jpg" alt="">

              </a>



              <a class="box-image-title">

                <h2 class="tex-white">Fleet management support service</h2>

              </a>



            </div>



          </div>



          <div class="col-md-4">



       



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