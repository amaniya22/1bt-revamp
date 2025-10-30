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
              <h1 class="blog-post-title">Real-time event space booking</h1>
              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">MillionSpaces, a marketplace where guests can discover, pay and book unique spaces online. The platform hosts
                  a range of spaces that accommodate parties, conferences, meetings, interviews, trainings, photoshoots,
                  weddings, hot desks, sports and concerts. Venue owners can list their space by entering some basic information
                  and photographs, for no upfront fees, while MillionSpaces will recognize and feature the space on a series
                  of promotional channels.</p>
                <h3>The Challenge</h3>
                <p class="padding-top-15">Finding spaces nearby is a tedious and time consuming process, Hotels and local hosts have unutilized space
                  capacity. Booking a venue for a wedding, meeting or any sort of event can be time consuming if you physically
                  have to be present at the location to make a reservation.</p>
                <h3>Early Adopters</h3>
                <p align="center">
                  <img class="responsive-image" src="assets/images/ms-casestudy-thumb.jpg">
                </p>
                <h3>How 1 Billion Tech Helped</h3>
                <p class="padding-top-15">MillionSpaces, accessible through www.millionspaces.com, disrupts and simplifies the process of finding the
                  ideal venue to match any occasion from the convenience of your mobile device. It hosts spaces for a wide
                  variety of corporate and social events that can be booked in just 3 clicks. MillionSpaces leverages mobile
                  and cloud technologies for a unique experience. MillionSpaces creates a sharing platform enabling space
                  supply and demand to meet in the middle.
                  <ul>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Easy to use</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Real-time availability</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Instant booking</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Secured transactions</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Zero upfront investment</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Free publicity for hosts</li>
                  </ul>
                  <h3>Results</h3>
                  <p class="padding-top-15">MillionSpaces is the only platform to provide real time availability of spaces and an instant booking feature
                    with the best price guarantee. Every space is curated by the MillionSpaces team with an eye for tasteful
                    design. What’s great is that it negates the multitude of phone calls you have to make to find the perfect
                    space that fits your budget and location. MillionSpaces anticipates that this platform will uncover an
                    array of exciting new spaces and expand the market.</p>
                  <h3>Future Roadmap</h3>
                  <p>MillionSpaces was initially launched in Colombo and has a roadmap to expand globally across US and Europe.</p>

                  <a href="https://millionspaces.com">www.millionspaces.com</a>


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