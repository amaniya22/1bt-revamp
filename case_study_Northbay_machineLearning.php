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
            <!-- /Top Nav -->

    </div>

    <section id="portfolio" class="nopadding-bottom">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">Machine Learning with AWS</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">We are building a scalable Machine Learning platform for a large Sillicon Valley producer, leveraging AWS Sagemaker along with some of the AWS and open source big data platforms such as AWS EMR, Spark, Tensorflow, SciKit, Apache Atlas and Apache Livy.</p>
                <div class="padding-top-15">
                  <h3>The Challenge</h3>

                  <div class="text-center padding-top-40">
                      <img class="responsive-image" src="assets/images/northbay_machineLearning_TheChallenge.png"></div>

                  <!--<p><ul>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Complexity and difficulty to build and train models : how to make predictions by training, which requires a lot of resources</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Complex and slow-paced deployment challenges</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Tedious process in preparing training data to discover which elements of data set are important</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Selection of a suitable algorithm and framework you’ll use</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Tuning the model so it delivers the best possible predictions, which is often a tedious and manual effort</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Integrating the model with an application and deploying the application on infrastructure that will scale</li>
                  </ul></p>-->

                  <div class="row">

                      <!--<p align="center">
                          <img class="responsive-image" src="assets/images/qa_bdd_info.png">
                        </p>-->

                    <div>

                      <div>
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
                <h3>How 1 Billion Tech Helped</h3>
                  
                  <p class="padding-top-15">Leverage our capability to use this fully-managed platform that enables developers and data scientists to quickly and easily build, train, and deploy machine learning models at any scale.
                  <br>
                  <br>
                      Our solutions will remove all the barriers that typically slow down developers who want to use machine learning.</p>

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

      <!-- RELATED -->

    </div></section>

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