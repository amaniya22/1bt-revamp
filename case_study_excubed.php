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
              <h1 class="blog-post-title">Implementing a Serverless Client Management Platform using AWS </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">The client is a UK-based fintech company specialising in financial management systems and process reengineering. The company provides consultancy services to top financial institutions across the globe.</p>
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>The company was seeking to implement a cloud-based, multi-tenant client management platform for investment companies. After the initial Cloud migration assessment, which was completed by the Auxenta team, they came up with a more cost effective and more reliable Serverless Architecture for the proposed project. </p>
                </div>
                <div class="padding-top-15">
                  <h3>How Auxenta helped</h3><br>
                  <p>Auxenta cloud architects along with the software development team were engaged in the completion of the following phases.<br>
                        1. Cloud migration assessment <br>
                        2. Technical design<br>
                        3. Software implementation<br>
                        4. Security evaluation and systems hardening <br>
                        5. Performance evaluation and improvements
</p>
                </div>
                <div class="padding-top-15">
                  <h3>Technologies Used</h3><br>
                  
                  <div class="row">
                  <div class="col-md-6 col-sm-12">
               
                  <div class="padding-top-15; padding-left-15"> AWS Lambda Functions<br>
                                                                Amazon S3<br>
                                                                AWS API Gateway<br>
                                                                AWS Step Functions<br>
                                                                Amazon SNS<br>
                                                                Amazon SQS
</div>
</div>
<div class="padding-top-15; padding-left-15">
                  <div class="col-md-6 col-sm-12">
                  AWS ElasticSearch<br>
                      AWS IOT<br>
                      AWS Cognito<br>
                      React.JS<br>
                      Node.JS

</div></div></div>
                  
                  <!--<ul class="padding-top-15">
                    <li>
                      <i class="fa fa-angle-double-right"></i>We currently execute 50-60 manual test executions per day</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Automated 75% of the manual testing through a regression suite using open source BDD framework
                      </li>
                  </ul>
                </div>
                <div class="padding-top-15">-->
                <br><h3>The Solution</h3>
                    <p align="center">
                        <img class="responsive-image" src="assets/images/excubed_Cfig1.jpg">
                      </p><br>
                      <div><p>The proposed solution consists of several steps (see Figure 1). An explanation on each is given below. It is a direct implementation of AWS Serverless Reference Architecture with some added AWS native services.</p>
<ol>
<li>The client of the system was to be financial organizations, their partners and their customers. Clients will access the system through the web UI and some of its partners will access the systems through API calls.</li><br>
<li>Leveraging Amazon CloudFront not only provides a better performance experience for the consumers through caching and optimal origin routing, but limits redundant calls to the system backend.</li><br>
<li>Amazon S3 hosts web application static assets and is securely served through CloudFront. This helps to build serverless web applications and websites by providing a highly available keyvalue store from which static assets can be served via a Content Delivery Network (CDN), such as Amazon CloudFront.</li><br>
<li>Amazon Cognito helps to easily add user sign-up, sign-in, and data synchronization to serverless applications. Amazon Cognito user pools provide built-in sign-in screens and federation with Facebook, Google, Amazon, and Security Assertion Markup Language (SAML). Amazon Cognito Federated Identities helps to securely provide scoped access to AWS resources that are part of the serverless application architecture. For this application, we used Cognito for user management and the identity provider feature of the application.</li><br>
</ol><img class="responsive-image" src="assets/images/excubed_Cfig2.jpg"><br>
<ol start="5">
<li>As static content served by Amazon S3 is downloaded by the consumer, in many scenarios, dynamic content needs to be sent to or received by your application. For example, when a user submits data through a form, the Amazon API Gateway serves as the secure endpoint to make these calls and return responses displayed through your web application.</li><br>
<li>The AWS Lambda functions let us run the stateless serverless backend on a managed platform that supports microservices architecture, deployment, and management of execution at the function layer. For this system we have used Lambda functions to execute logics and Create, Read, Update, Delete (CRUD) operations on top of DynamoDB for the web application.</li><br>
<li>Amazon DynamoDB helped us to build serverless applications by providing a managed NoSQL database for persistent storage. Combined with DynamoDB Streams, we can respond in near real-time to changes in the DynamoDB table by invoking Lambda functions. The DynamoDB Accelerator (DAX) adds a highly available in-memory cache to DynamoDB that delivers up to 10X performance improvement from milliseconds to microseconds, which elastically scales with the traffic of the web application.</li>
</ol>
</div>



                  <h3>BENEFITS TO THE CLIENT</h3><br>
                  <ul class="padding-top-15">
                    <li>Scalability</li>
                      <li>
                      Flexibility</li>
                      <li>
                      Speed</li>
                      <li>
                       Ease of governance</li>
                      <li>
                       Transparency</li>
                      <li>
                     Agility</li>
                   
                
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