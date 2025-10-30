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
              <h1 class="blog-post-title">Designing Big Data Solutions with AWS Cloud</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">Northbay Solutions (northbaysolutions.com) is a premier AWS (Amazon Web Services) based advanced big data
                  consulting partner based in the USA. Northbay Solutions initiated its off-shore consulting in Lahore, Pakistan.
                  Auxenta joined in as their second off-shore consulting partner in the space of AWS Big Data consultancy.</p>
                <div class="padding-top-15">
                  <h3>The Challenge</h3>
                  <p>The challenge here was to learn and adapt to new technologies in a short time span in order to service
                    clients and be a consulting partner.</p>
                                    </div>
                <div class="padding-top-15">
                  <h3>How we helped</h3>
                  <p>Nearly 10 members of our cloud practice obtained certification in AWS and went on a rigorous AWS Big Data
                    specific training with the help of the experts in Northbay USA and Northbay Pakistan. During this period
                    the team received the AWS core services expertise and mainly the AWS Big Data services knowledge such
                    as Redshift, Lambda, Kinesis Streams/ Firehose, Data Pipeline, EMR, ECS, Data Lake design on S3, Cloud
                    Formation, Amazon Glue, API Gateway, IAM with STS, Notification services via SNS along with real-time
                    streaming with Apache Spark and Apache Flink. </p>
                  <p>Auxenta has been assisting the Northbay Pakistan offshore team in multiple engagements. </p>
                  <p>
                    <u>Data Warehousing Optimization</u>: We engaged in an assignment to produce an optimization report analyzing
                    a real data warehouse of a USA health care product client. AWS Redshift has been the technology used
                    and the Auxenta team was engaged in various data warehouse optimization techniques to analyze gaps in
                    the client design and usage.</p>
                  <p>
                    <u>Data Lake Design</u>: We engaged with clients specialized in financial research, marketing and investment
                    management in the area of Data Lake Design. The inability to handle terabytes of data, which were ingested
                    in a rapid space was the key reason for those clients to investigate on Data Lake design. AWS was the
                    preferred cloud option and the solution was proposed with the help of multiple AWS Big Data services
                    such as S3, Kinesis Firehose, Lambda, Step Function, EMR with Spark/ Flink.</p>
                  <p>The Data Lake Design helped these organizations
                    <br> - Support any workload regardless of volume, velocity or variety of data
                    <br> - Use a variety of descriptive, predictive and prescriptive analytics for business insights</p>
                </div>
                <div class="padding-top-15">
                  <h3>The Solution</h3>
                  <ul class="padding-top-15">
                    <li>
                      <p>The basic Data Lake architecture design on AWS comprises five main components. Those components and
                        the related AWS service offerings are listed below.</p>
                      <p>1. Data Ingestion (Kinesis, Direct Connect, Snowball, Data Migration Service)
                        <br> 2. Catalogue and Search (DynamoDB, ElastiSearch)
                        <br> 3. Protect and Secure (IAM, STS, CloudWatch, CloudTrail, KMS)
                        <br> 4. Access and User Interface (API Gateway, IAM, Cognito)
                        <br> 5. Processing and Analytics (Machine Learning, Quicksight, EMR, Redshift)</p>
                    </li>
                  </ul>
                  <p align="center">
                    <img src="assets/images/northbay-cs-thumb.jpg">
                    <br>
                    <small>Figure 1 : The AWS Data Lake Design (Source: AWS Documentation)</small>
                  </p>
                </div>
                <div class="padding-top-15">
                  <h3>BENEFITS TO CLIENT</h3>
                  <p>With the help of Data Lake design approach, the clients were able to,</p>
                  <p>1. Quickly ingest data without sticking to a pre-defined schema
                    <br> 2. The ability to analyze all the data from a centralized location
                    <br> 3. The ability to enable ad-hoc analysis by applying schemas on read enabling business insights more
                    quickly
                    <br> 4. Improved time to value and reduced TCO
                    <br> 5. The assurance from the most complete platform for Big Data</p>
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