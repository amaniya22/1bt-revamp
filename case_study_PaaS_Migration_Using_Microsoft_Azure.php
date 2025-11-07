'<!DOCTYPE html>
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
              <h1 class="blog-post-title">PaaS Migration Using Microsoft Azure</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">This solution was implemented for a client in the USA, who is a leader in providing packaging systems and related technologies. World-class reusable polymer-based packaging solutions are provided by the client to their customers, predominantly to store, display, and transport perishable products.&nbsp;</p>
<p>Their clients range from farmers, factory owners, retailers, and shopping malls. Packaging solutions are made to order and shipped to clients. These such packages are sent to different locations as illustrated in Figure 1. Finally, the packages are received by the respective collection center and then returned to the warehouse after cleaning.</p>
<p><img src="assets/images/careers-fig1.jpg" class="img-responsive"></p>
                
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>The client used a typical web-based application implementation to manage their supply chain, which was hosted on an on-premise server setup with legacy features.&nbsp;</p>
<p>The application basically provided key operational functionalities such as invoice verification, transaction validation and packages tracking. In addition to this, it supported the administrative side of the business and generated forecasting reports to plan day to day business.</p>
<p>However, with this approach, they faced a few challenges in providing better service to their clients while their client base increased.</p>
<ol>
<li>Performance of the application reduced during peak time due to the large number of requests received from clients.</li><br>
<li>Maintenance of web application availability to cater to the global client pool.</li><br>
<li>Maintenance of infrastructure .</li>
</ol>
<p>After analyzing these challenges, it was decided to host the web application and databases in the Microsoft Azure platform as a PaaS solution in order to overcome them.&nbsp;</p>
                </div>

                <div class="padding-top-15">
                  <h3>How 1 Billion Tech Helped</h3><br>
                  <p>Our team helped to overcome the above challenges by modifying the web application to be compatible with the Microsoft Azure platform.</p>
<ol>
<li>To improve the performance and manage the load balance of the web application, multiple instances were configured in the <strong>Azure web app,</strong> in order to facilitate <em>horizontal scaling</em>. The client now has the ability to decide the number of instances needed, based on the requests during peak and off-peak periods. Then the scaling and load balancing of the web apps were managed by the Azure platform.</li>
<p>Since horizontal scaling is supported, the <strong>Azure Redis</strong> server was used to manage the application cache and session in a central location.</p>

<li>There was an email send-out functionality in the web application. Previously the <strong>SMTP server</strong> was used and it was not supported by Azure. Therefore, <strong>SendGrid</strong> was implemented to send emails.</li><br>
<li>Users can upload different file types such as Excel, PDF, EDI and text from the web application and these files would then be needed to be accessible in some other pages of the application. In certain business scenarios, files were automatically generated by the application and these files needed to be stored in a shared location to be accessed by other external systems. <strong>Azure blob storage</strong> was used to manage these files.</li>
</ol>

<p>Figure 2 describes the high-level architecture of the solution.</p>
<p><img src="assets/images/careers-fig2.jpg" class="img-responsive"></p>
                </div>
                <div class="padding-top-15">
             
                  <h3>BENEFITS TO CLIENT</h3><br>
                  <ul class="padding-top-15">
             
<li>Enhanced availability</li>
<li>Elasticity</li>
<li>Scalability</li>
<li>Improved performance</li>
<li>Ease of governance</li>
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