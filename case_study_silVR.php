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

    <section id="portfolio" class="nopadding-bottom">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">Implemented latest trends in VR capabilities for a US based real estate startup</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">The objective of this project was to extend the capabilities and experience for a vendor provided Virtual
                  Reality (VR) framework. The development was catered to a Silicon Valley startup, founded by a Professor
                  of the Boise State University, an expert in the field of computer graphics, scientific visualization, and
                  computer science.
                  <br>
                  <br> The solution is based on the Samsung Gear VR/Oculus VR framework and focuses on real estate-based demos
                  and sharing of real-time Virtual reality content with its users.

                  <div class="padding-top-15">
                    <h3>THE CHALLENGE</h3>
                    <p align="center">
                        <img class="responsive-image" src="assets/images/SilVR_Challenges_info.png">
                      </p>
                  </div>
                  <div class="padding-top-15">
                    <h3>HOW 1 BILLION TECH HELPED</h3>
                    <p>Extended the existing core functionality in collaboration with the Samsung Gear VR/Oculus VR framework
                      development teams.</p>

                  </div>
                  <div class="padding-top-15">
                    <h3>The Solution</h3>
                    <p>The following solutions were provided by 1 Billion Tech ;</p>
                    <div class="padding-top-20">
                      <ul class="list-group">
                        <li class="list-group-item">Enhanced tile-based high-resolution VR content loading for a seamless VR user experience.</li>
                        <li class="list-group-item">Developed algorithms to detect user gazing to enable hands-free user interaction with the Virtual
                          environment.</li>
                        <li class="list-group-item">Created a high-resolution VR content share feature enabling sharing of content real-time content
                          with an audience of users.</li>
                        <li class="list-group-item">Developed a VR remote controlled applications on iOS and Android to share VR content real-time with
                          an audience of users.</li>
                      </ul>
                    </div>

                  </div>

                  <div class="padding-top-15">
                    <h3>BENEFITS TO CLIENT</h3>
                    <p>A faster dynamic Virtual Reality content loading platform with enhanced functionality and a hands-free
                      Virtual Reality experience. </p>
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