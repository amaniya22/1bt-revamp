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
              <h1 class="blog-post-title">New solution, Project Services Accelerator, built for an award-winning total Microsoft Business Solutions organization</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">eBECS is a professional in total Microsoft Business Solutions, designing and delivering Lean and agile solutions
                  globally for customers in Manufacturing, Distribution, Retail, Services, Not-for-profit and other related
                  sectors.
                  <br>
                  <br>Their solutions draw on the full Microsoft Business stack, including Microsoft Dynamics AX, NAV and CRM,
                  Microsoft Dynamics 365 and Microsoft’s intelligent business cloud.

                  <div class="padding-top-15">
                    <h3>The challenge</h3>
                    <p>There were limitations on the current PS (Project Services) of Microsoft Dynamics CRM on both, on-premise
                      and online (O365) versions.
                      <br>
                      <br> Such as:
                    <!--</p>
                    <ul>
                      <li>
                        <i class="fa fa-angle-double-right"></i>Compare the project at time of sale verse time of completion</li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>Project analysis</li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>Project forecasting</li>
                    </ul>-->

                    <p align="center">
                        <img class="responsive-image" src="assets/images/eBECS_ProjectService_info.png">
                      </p>
                  </p>

                  </div>
                  <div class="padding-top-15">
                  <h3>HOW 1 BILLION TECH HELPED</h3>
                    <p>A shared team of experienced Microsoft Dynamics CRM consultants worked in collaboration with the eBECS
                      team across a vast range of end clients to offer customized solutions and proofs of concept.</p>
                    <div class="padding-top-20">
                      <ul class="list-group">
                        <li class="list-group-item">Created a new solution called PSA (Project Services Accelerator) on top of Dynamics CRM Project Service
                          module to address the limitations of Project Service.</li>
                      </ul>
                    </div>

                  </div>
                  <div class="padding-top-15">
                    <h3>Business outcome</h3>
                    <div class="padding-top-20">
                      <ul class="list-group">
                        <li class="list-group-item">Created a project snapshot at any given time for past period and compare with the latest version.</li>
                      </ul>
                    </div>

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