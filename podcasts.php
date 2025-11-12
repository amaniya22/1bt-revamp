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



    <section id="portfolio" class="nopadding-bottom black-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="careers-left" style="margin-bottom:10px";>
              <div class="blog-post-item">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                <a href="https://www.youtube.com/watch?v=vIUIj80at4E&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=2" target="_blank">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast1.png" alt="img" >
              </figure>
                  <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/vIUIj80at4E?si=rCwmpMGwUK4-iFQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                <!-- </div> -->
                <div class="item-box-desc">
                  <!-- <h4>Episode 1: Global Trends of OFffshoring</h4> -->
                </div>
              </div>
            </div>     
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="careers-left" style="margin-bottom:10px";>
              <div class="blog-post-item">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                  <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Wf7vDVz9Tvo?si=5vWQs6GHhoxslBB-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    <a href="https://www.youtube.com/watch?v=Wf7vDVz9Tvo&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=1" target="_blank">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast2.png" alt="img">
              </figure>
            </a>
                  <!-- </div> -->
                <div class="item-box-desc">
                  <!-- <h4>Episode 2: Transforming Businesses with Microsoft Solutions</h4> -->
                </div>
              </div>
            </div>     
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="careers-left" style="margin-bottom:10px";>
              <div class="blog-post-item">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                  <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/-ijBw5Mz5nE?si=iRlaVOIDJUo4Y07a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    <a href="https://www.youtube.com/watch?v=-ijBw5Mz5nE&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=3" target="_blank">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast3.png" alt="img">
              </figure>
            </a>
                  <!-- </div> -->
                <div class="item-box-desc">
                  <!-- <h4>Episode 3: The Vital Role of UX in Software Businesses - Client Empathy and Success</h4> -->
                </div>
              </div>
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