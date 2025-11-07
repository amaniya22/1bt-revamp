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
              <h1 class="blog-post-title">End To End Testing Service </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">The client is one of the world's leading multinational telecommunications companies, with a significant presence
                  in&nbsp;Europe,&nbsp;Middle East,&nbsp;Africa&nbsp;and&nbsp;Asia Pacific&nbsp;through the company's subsidiary
                  companies, joint ventures, associates&nbsp;and&nbsp;investments.</p>
                <p>This client has the world&rsquo;s most successful Mobile money transfer service. The platform allows access
                  to a bank account, ability to send and receive money, top-up airtime, make bill payments and much more.</p>
                <div class="padding-top-15">
                  <h3>The Challenge</h3>
                  <p>The client was looking for a reliable partner to improve efficiencies and reduce Total Cost of Ownership
                    (TCO). This involved replacing a 15-member team from IBM, each with an average of over 4 years of experience,
                    within a time span of 4 weeks. A KPI of executing 50 test cases per day was given as a target. The scope
                    of work covered all markets where the mobile money platform is being implemented.</p>
                </div>
                <div class="padding-top-15">
                <h3>HOW 1 BILLION TECH HELPED</h3>
                  <p>1 Billion Tech provided a team of 12 experienced engineers who were highly skilled across multiple testing practices
                    to take on the work of the 15-member IBM team. The rigorous knowledge transfer was conducted via a series
                    of video conference calls over a 4 week period </p>
                </div>
                <div class="padding-top-15">
                  <h3>The Solution</h3>
                  
                  
                  <!--<ul class="padding-top-15">
                    <li>
                      <i class="fa fa-angle-double-right"></i>We currently execute 50-60 manual test executions per day</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Automated 75% of the manual testing through a regression suite using open source BDD framework
                      </li>
                  </ul>
                </div>
                <div class="padding-top-15">-->

                    <p align="center">
                        <img class="responsive-image" src="assets/images/symbox_info.png">
                      </p>

                  <h3>BENEFITS TO CLIENT</h3>
                  <ul class="padding-top-15">
                    <li>
                      <i class="fa fa-angle-double-right"></i>2x increase in daily manual test execution productivity</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Significant reduction in TCO through mature and customized model</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Cost savings via the automation framework </li>
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