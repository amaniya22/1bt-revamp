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
              <h1 class="blog-post-title">An award-winning cloud-based Fleet Management system </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">Assetminder is a cloud-based fleet maintenance and workshop management system that was awarded the prestigious
                  Innovation Award at the recent 2017 Fleet Transport awards in Dublin. It was built ground up into a comprehensive
                  platform that helps fleet maintenance and workshop planning. The previous version of the Assetminder application,
                  known as Fleetminder, was designed and developed as a client-server application.</p>
                <div class="padding-top-15">
                  <h3>The Challenge</h3>
                  <p>Like most client-server applications, the company had faced many operational difficulties on a daily basis
                    such as pushing patch updates individually, attending to different client requests on a regular basis,
                    data inconsistencies and manual data transfers from other enterprise applications such as stock, vehicle
                    information, etc. </p>
                  <p>Therefore, the challenges were threefold;</p>
                  <ul>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Assetminder needed an application that was centralized, connected and robust</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Each enterprise needed an isolated environment</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Workshop operators wanted to use the application using their smart phones/ hand-held devices</li>
                  </ul>
                </div>
                <div class="padding-top-15">
                <h3>HOW 1 BILLION TECH HELPED</h3>
                  <p>In order to tackle the main operational challenges, 1 Billion Tech was able to leverage cloud development capabilities
                    which improved scalability and ease of maintaining the system. This was built ground up around the customer&rsquo;s
                    requirement making it easier to plan and manage day to day fleet and workshop management activities.
                    </p>
                  <p>Some of the main modules of the application include Incident management, event management, defect management
                    and vendor management. Additionally, it has a comprehensive reporting module along with multi-currency
                    and multi-language features giving it a wider geographic reach. Most of these configurations are dynamically
                    customizable and easy to manage. </p>
                  <p>This cloud enabled (SaaS) enterprise application was also supported on both web and mobile.  The native
                    mobile applications provide real-time and off-line working modes enabling users to work with or without
                    a data connection.</p>
                </div>
                <div class="padding-top-15">
                  <h3>The Solution</h3>
                  <p align="center">
                    <img class="responsive-image" src="assets/images/assetminder-cs-thumb.jpg">
                  </p>
                  <p align="center">Figure 1 : The Solution Architecture</p>
                </div>
                <div class="padding-top-15">
                  <p>The overall architecture (See Figure 1) has the following features.</p>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <h2>Monolithic Back-End Design</h2>
                      The back-end is developed using Open Source Java Frameworks (Spring MVC, Hibernate, Axis2) with multi-tier design approach.
                    </li>
                    <li class="list-group-item">
                      <h2>Native Mobile Applications</h2>
                      Native mobile applications were developed (for iOS and Android) to provide the maximum usability with its asynchronous data
                      synchronization feature. A lightweight database was used with native mobile application distributions
                      to facilitate this task.
                    </li>
                    <li class="list-group-item">
                      <h2>Multi-tenancy</h2>A separate DB schema was created for each enterprise. This enabled the data isolation
                      for each enterprise. Native mobile applications were developed (for iOS and Android) to provide the
                      maximum usability with its asynchronous data synchronization feature. A lightweight database was used
                      with native mobile application distributions to facilitate this task.
                    </li>

                    <li class="list-group-item">
                      <h2>Availability</h2>
                      24x7 availability was enabled with cloud fault tolerant options provide by AWS (Using Elastic Load Balancers for both Application
                      Servers and Databases).
                    </li>

                    <li class="list-group-item">
                      <h2>Scalability</h2>
                      The AWS auto scaling groups were used to scale out the databases depending on the load situation.
                    </li>
                    <li class="list-group-item">
                      <h2>Enterprise Integration</h2>
                      The back end consists of a “service layer” for any internal / external integrations. Services are exposed via AWS API Gateway.
                    </li>

                    <li class="list-group-item">
                      <h2>API Management</h2>
                      AWS API Gateway is used to publish Assetminder APIs to external parties.
                    </li>

                    <li class="list-group-item">
                      <h2>Object Storage</h2>
                      AWS S3 Object Store and AWS CloudFront is used to store relevant Assetminder objects for retrieval and caching.
                    </li>




                  </ul>
                </div>
                <div class="padding-top-15">
                  <h3>BENEFITS TO CLIENT</h3>
                  <p>1. Ease of Governance – Having a centralized design makes the governance much easier and saves a lot of
                    time.
                    <br>
                    <br> 2. Improved Time To Market (TTM) – It is mater of minutes since an enterprise can be created withing
                    a few minutes with the applications, multi-tenancy features.
                    <br>
                    <br> 3. Manageability, Re-usability – Adherence to Service Oriented Architecture (SOA) gives a more loosely
                    coupled environment and increase the service re-usability.
                    <br>
                    <br> 4. Added Security – Having deployed in a AWS Virtual Private Cloud (VPC) gives the required security
                    at the network level . Services are secured via API Gateway specific security features. API Gateway further
                    does throttling, specific user management, service filtering, relevant transformations and works as a
                    facade for many external systems.
                    <br>
                    <br> 5. Improved Scalability, Availability – With the AWS Auto scaling features, either application server
                    or Database instances can be scaled out with the load of the system and can scaled down with the less
                    load. This improves the system availability.
                  </p>
                </div>
                <div class="padding-top-15">
                  <h3>The Future Direction</h3>
                  <p>Technically the solution architecture can be further refined with the advent of container architectures
                    and micro-services design. This will further improve the system agility and scalability and will more-less
                    comply with the latest technology trends such as container driven architectures and micro-services domain
                    driven designs.
                  </p>
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

  <!-- END RIGHT -->
        </div>

      </div></section>


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