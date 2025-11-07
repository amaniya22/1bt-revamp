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
              <h1 class="blog-post-title">Migration of complex environment to a Microsoft Dynamics CRM platform</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">The Client, an Australian not-for-profit organization, provides a range of quality services, relevant to community needs, that aim to empower people
                  to live and relate more effectively. The Client’s work is underpinned by the principles of:
                </p>
                <div>
                  <ul>
                    <li>
                      <i class="fa fa-angle-double-right"></i>strengthening family relationships</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>fostering more resilience within families and communities</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>working in the best interests of children to create supportive family environments</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>respect, equality, compassion and empowerment for all, regardless of gender, sexuality, culture
                      or age</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>reconciliation with Australia’s first people</li>
                  </ul>
                </div>
                <div class="padding-top-15">
                  <h3>The Challenge</h3>
                  
                  <!--<p>Existing environment had evolved over time and comprised of the following disparate platforms:</p>
                  <ul>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Penelope - CRM related activities</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>ConnX - time sheets and leave management</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Taleo - recruitment and hiring</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Field Services - resource scheduling</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Finance System - finance related activities (invoice generation, integration with MS Dynamics Navision
                      system)</li>
                  </ul>
                </div>
                <div>
                  <p>The expectation was for the Client to converge all above systems into one centralized Microsoft Dynamics
                    CRM platform, thus enabling better maintenance, scalability and other related efficiencies.</p>
                </div>
                <div class="padding-top-15">-->

                    <p align="center">
                        <img class="responsive-image" src="assets/images/Interrelate_info.png">
                      </p>

                  <h3>How 1 Billion Tech Helped</h3>
                  <div class="padding-top-20">
                    <ul class="list-group">
                      <li class="list-group-item">Migrate substantial number of files to SharePoint cloud via ShareGate</li>
                      <li class="list-group-item">Migration from Penelope to Microsoft Dynamics CRM via Simego</li>
                      <li class="list-group-item">Transformed Tableau reports to Power BI dashboards</li>
                      <li class="list-group-item">Created MVC web portal allowing parents/guardians to register online and purchase tickets through PayPal
                        for programs conducted in schools by Client educators</li>
                      <li class="list-group-item">Integration to DocuSign with Microsoft Dynamics CRM for approval process</li>

                    </ul>
                  </div>
                </div>
                <div class="text-center">
                  <ul class="row clients-dotted list-inline">
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic1.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic2.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic3.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic4.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic5.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic6.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic7.jpg" alt="tech" width="130">
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-6">
                      <img class="img-responsive" src="assets/images/ic8.jpg" alt="tech" width="130">
                    </li>

                  </ul>
                </div>
                <div class="padding-top-15">
                  <h3>Business Outcome</h3>
                  <div class="padding-top-20">
                    <ul class="list-group">
                      <li class="list-group-item">Significant reduction of workforce and contributing towards reduced TCO</li>
                      <li class="list-group-item">Centralized data source enabling quick and efficient decision making</li>
                      <li class="list-group-item">Completely seamless and automated process leveraging third party services for previous manual paper
                        based approvals</li>
                      <li class="list-group-item">Customized easy to use portal for event registrations</li>
                      <li class="list-group-item">Streamlined automated workflow for lead management replacing previous cumbersome process</li>
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