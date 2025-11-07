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

    <section id="portfolio" class="nopadding-bottom  black-section">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">Test automation with Behaviour Driven Development (BDD)</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">Every software development group tests its products, yet delivered software always has defects. Test engineers
                  strive to catch them before the product is released but they always fail and bugs often reappear, even
                  with the best manual testing processes. Test Automation software is the best way to increase the effectiveness,
                  efficiency and coverage of your software testing.</p>
                <div class="padding-top-15">
                  <h3>The Solution</h3>
                  <p>Use SpecFlow to define, manage and automatically execute human-readable acceptance tests in .NET projects.
                    Writing easily understandable tests is a cornerstone of the BDD paradigm and helps build up a living
                    documentation of your system. The essence in three easy steps;</p>
                  <div class="row">

                      <p align="center">
                          <img class="responsive-image" src="assets/images/qa_bdd_info.png">
                        </p>

                    <div class="col-md-4">

                      <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large box-icon-content">
                        <!--<div class="box-icon-title">
                          <i class="fa">1</i>
                          <h2>Step 1</h2>
                          <small>Describe the behavior of your system using human-readable syntax. Define specifications in the
                            problem domain using the language of your stakeholders and build up a living documentation of
                            your system.</small>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large box-icon-content">
                        <div class="box-icon-title">
                          <i class="fa">2</i>
                          <h2>Step 2</h2>
                          <small>Bind your test specifications to your application code to automate the testing of your system.
                            Ensure that all your tests pass.</small>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large box-icon-content">
                        <div class="box-icon-title">
                          <i class="fa">3</i>
                          <h2>Step 3</h2>
                          <small>Relax in the knowledge that SpecFlow will automatically identify breaking changes covered by your
                            tests. Cut down on forensic development and enjoy the peace of mind that comes from knowing exactly
                            what your software does and is supposed to do – even months later.</small>
                        </div>-->
                      </div>

                    </div>

                  </div>

                </div>

               

                <div class="padding-top-15">
                  <h3>BENEFITS TO CLIENT</h3>
                  <ul class="list-group padding-top-15">
                    <li class="list-group-item">Creation of a comprehensive set of fine-grained requirements and that it creates a lot of discussion
                      about the specific requirements from the very beginning.</li>
                    <li class="list-group-item">Increased the speed of test scripting using existing step definition and even less technical people can
                      automate using this approach.</li>
                    <li class="list-group-item">Requirement misunderstandings will occur a lot less and be less significant compared to using less granular
                      requirements.</li>
                  </ul>
                </div>
              </div>

              <!-- /article content -->

            </div>
          </div>
   <!-- RIGHT -->
   <div class="col-md-4 col-sm-4">
    <!-- side navigation -->
    <div class="box-static box-border-top">

<?php include 'include/casestudy-sidebar.php'; ?>

</div>

</div>


  </div>

    </div>



      <!-- RELATED -->

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