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



    <!-- SLIDER -->

    <section class="height-400 hidden-xs" id="slider" style="background:url('assets/images/digital-main.jpg')">

      <div class="">

        <!-- dark overlay [0 to 9 opacity] -->

      </div>

      <div class="display-table">

        <div class="display-table-cell vertical-align-middle">

          <div class="container">

            <div class="slider-featured-text padding-top-50">

              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s"> NEXT GENERATION <br>

                

                <span class="text-yellow"> DIGITAL DESIGN </span>

              </h1>

              <h2 class="text-white">Combining the best of both worlds of end-to-end design and tech solutions

                            </h2>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section class="height-400 hidden-md hidden-lg hidden-sm" id="slider" style="background:url('assets/images/digital-main-xs.jpg')">

      <div class="">

        <!-- dark overlay [0 to 9 opacity] -->

      </div>

      <div class="display-table">

        <div class="display-table-cell vertical-align-middle">

          <div class="container">

            <div class="slider-featured-text padding-top-50">

              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s"> NEXT GENERATION <br>

                

                <span class="text-yellow"> DIGITAL DESIGN </span>

              </h1>

              <h2 class="text-white">Combining the best of both worlds of end-to-end design and tech solutions

                            </h2>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- /SLIDER -->



    <section class="info-bar info-bar-color grad-5">

      <div class="container">

        <div class="row">

          <div class="col-sm-12 text-center padding-0">

            <h1>An attractive set of services that can transform your business for the digital economy</h1>

          </div>

        </div>

      </div>

    </section>



    <!-- -->

    <section class="padding-0  " style="border: none;">

        <div id="portfolio" class="portfolio-nogutter portfolio-title-over">

          <div class="row mix-grid">

    

            <!-- /item -->

    

            <div class="col-md-4 col-sm-6"><!-- item -->

    

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner">

    

                  <!-- details -->

                  <a class="ico-rounded"  href="digital_vdo.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

    

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3 class="seo">Consultancy Workshops</h3>

                    <p>Prototyping | UI wireframing | User journeys</p>

                  </div>

                  <!-- /overlay title -->

    

                  <a href="digital_vdo.php"> <img class="img-responsive grid-item " src="assets/images/grid-seo.jpg" width="600" height="399" alt=""></a> </figure>

              </div>

            </div>

            <!-- /item -->

    

            <div class="col-md-4 col-sm-6"><!-- item -->

              

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner"> 

                  

                  <!-- details --> 

                  <a class="ico-rounded"  href="digital_ui_ux.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

                  

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3>UI/UX Strategy & Planning </h3>

                    <p> Design Sprints | Information Architecture </p>

                  </div>

                  <!-- /overlay title --> 

                  

                  <a href="digital_ui_ux.php"> <img class="img-responsive grid-item " src="assets/images/grid-strategy.jpg" width="600" height="399" alt=""  ></a> </figure>

              </div>

            </div>

            <!-- /item -->

            

            <div class="col-md-4 col-sm-6"><!-- item -->

              

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner"> 

                  

                  <!-- details --> 

                  <a class="ico-rounded"  href="digital_apps.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

                  

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3 class="mob">Mobile & Web Apps</h3>

                    <p> Application Development | iOS, Android, Hybrid</p>

                  </div>

                  <!-- /overlay title --> 

                  

                  <a href="digital_apps.php"> <img class="img-responsive grid-item " src="assets/images/grid-mobile.jpg" width="600" height="399" alt=""></a> </figure>

              </div>

            </div>

            <!-- /item -->

            

            <div class="col-md-4 col-sm-6  "><!-- item -->

              

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner"> 

                  

                  <!-- details --> 

                  <a class="ico-rounded"  href="digital_web.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

                  

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3 class="dig-med">WEBSITE DESIGN & CUSTOMER JOURNEY MAPPING </h3>

                    <p> Web Development | eCommerce Solutions | Marketing Campaigns </p>

                  </div>

                  <!-- /overlay title --> 

                  

                  <a href="digital_web.php"> <img class="img-responsive grid-item " src="assets/images/grid-digital.jpg" width="600" height="399" alt=""></a> </figure>

              </div>

            </div>

            <!-- /item -->

            

            <div class="col-md-4 col-sm-6  "><!-- item -->

              

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner"> 

                  

                  <!-- details --> 

                  <a class="ico-rounded"  href="digital_seo.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

                  

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3 class="sm">Social Media, SEO & Analytics</h3>

                    <p> Strategy | Community Management </p>

                  </div>

                  <!-- /overlay title --> 

                  

                  <a href="digital_seo.php"> <img class="img-responsive grid-item " src="assets/images/grid-social.jpg" width="600" height="399" alt=""></a> </figure>

              </div>

            </div>

            <!-- /item -->

            

            <div class="col-md-4 col-sm-6"><!-- item -->

              

              <div class="item-box">

                <figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner"> 

                  

                  <!-- details --> 

                  <a class="ico-rounded"  href="digital_pubs.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>

                  

                  <!-- overlay title -->

                  <div class="item-box-overlay-title">

                    <h3 class="pub"> Branding & Visual Communications </h3>

                    <p>Collateral Design | Identity Design </p>

                  </div>

                  <!-- /overlay title --> 

                  

                  <a href="digital_pubs.php"> <img class="img-responsive grid-item " src="assets/images/grid-pubs.jpg" width="600" height="399" alt=""></a> </figure>

              </div>

            </div>

    

            

          </div>

        </div>

      </section>

      <!-- / -->

      

      <section id=" "  >

        <div class="container">

          <header class="text-center margin-bottom-60 section-title">

            <h2 >OUR UNIQUE PROCESS </h2>

            <h1>INTEGRATED COLLABORATION</h1>

          </header>

          <div class="row">

            <div class="col-sm-6"> <img class="img-responsive" src="assets/images/img-2.png" alt=""> </div>

            <div class="col-sm-6">

              <p class="dropcap"> Our design process is a product of years of experience; one that understands the importance of even the finest of details. </p>

              <p> Its foundation rests on creating an effective collaboration with our clients, where we work together to achieve a single synergistic output. By understanding a brand and its position in the world around it, we are able to design and build a more memorable and timeless brand experience, which isn’t just present but comes alive! </p>

            </div>

          </div>

        </div>

      </section>

      <section id="about" class="alternate padding-bottom-0  " style="border-bottom: none" >

        <div class="container">

          <div class="row">

            <div class="col-sm-6">

              <header class="text-center margin-bottom-60 section-title">

                <h2 >OUR VALUE PROPOSITION </h2>

                <h1>INNOVATION & DRIVE</h1>

              </header>

              <p class="dropcap">Our repertoire of design expertise has evolved with our exposure in working with a range of clients operating in a cross-section of industries. </p>

              <p> We have learnt in abundance from each unique client experience. This gives us the arsenal to constantly bring something new to the table. This very burst of energy filled with design ideas is what promises to exceed brand expectations, time and time again.</p>

            </div>

            <div class="col-sm-6"> <img class="img-responsive" src="assets/images/img-1.jpg" alt=""> </div>

          </div>

        </div>

      </section>

      <section id=" " style="background: #e40000" class="dark" >

        <div class="container">

          <header class="text-center margin-bottom-60 section-title">

            <h2 >OUR EXPERTISE </h2>

            <h1>WHY 1 BILLION TECH DIGITAL? </h1>

          </header>

          <div class="row">

            <div class="col-sm-6 text-right"> <img   src="assets/images/img-16.jpg" class="img-responsive" alt=""> </div>

            <div class="col-sm-6">

              <ul class="list-unstyled list-icons">

                <li> <i class="fa fa-angle-double-right"></i>We’re a group of design and creative geeks, with our headquarters in Silicon Valley, USA. Our network spans to United Kingdom, New Zealand, Australia and Sri Lanka where we've got more bubbly tech geniuses on-board. </li>

                <li><i class="fa fa-angle-double-right"></i>While we're at it, we have remained true to our mission right along – building rock solid connections between brands and consumers. </li>

                <li><i class="fa fa-angle-double-right"></i>Auxenta Digital is backed by a fully-fledged technology solutions firm – Auxenta. Therefore, each of our clients gets the best of both worlds in consultative design and tech expertise.</li>

                <li><i class="fa fa-angle-double-right"></i>Our expert designers will invest themselves in your business and give you a design perspective that makes strategic sense. This is guaranteed to translate into a strong ROI. </li>

                <li>Our designs are built to always satisfy our clients. If you’re not happy, we’re not happy either. So till we meet that win-win milestone, our resolve persists.</li>

              </ul>

              <p>We would love to explain "Why Auxenta" in person. Let’s have a chat.</p>

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