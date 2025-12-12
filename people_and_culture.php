<?php
$page = $_GET['page'] ?? 'careers';
?>

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


    <section class="black-section pnc-section">
      <div class="container">
        <header class="text-center section-titles section-title margin-bottom-20">
          <h1 class="text-white" data-wow-delay="0.4s"> 
          <span class="text-yellow"> PEOPLE </span> & CULTURE
          </h1>
        </header>

        <div class="pnc-tabs">
          <div id="careers_btn" class="careers_btn text-center <?= $page == 'careers' ? 'active' : '' ?>">
            <a href="?page=careers" class="tab <?= $page == 'careers' ? 'active' : '' ?>">Careers</a>
          </div>
          <div id="lifeat1bt_btn" class="lifeat1bt_btn text-center <?= $page == 'life_at_1bt' ? 'active' : '' ?>">
            <a href="?page=life_at_1bt" class="tab <?= $page == 'life_at_1bt' ? 'active' : '' ?>">Life @ 1BT</a>
          </div>
        </div>

      </div>
    </section>

    <section class="nopadding-bottom black-section padding-top-10">
      <div class="content">
        <?php
          if ($page == 'careers') {
            include "careers.php";
          } else {
            include "life_at_1bt.php";
          }
        ?>
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