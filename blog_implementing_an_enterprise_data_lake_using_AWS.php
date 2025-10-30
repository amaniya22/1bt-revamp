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
              <h1 class="blog-post-title">Implementing an Enterprise Data Lake using AWS – A Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <p class="dropcap">

                  One of the leading independent investment management companies was seeking to implement a cloud-based Enterprise Data Lake
                  (EDL), an Enterprise Data Warehouse (EDW) and an Enterprise Data Pipeline (EDP) that leverage both the AWS
                  services as well as other complimentary open source tools in the market.
                </p>

                <h2>Challenge</h2>
                <p>The company was seeking assistance in reviewing necessary data pipeline and end-user requirements and
                  formulating a solution architecture as a Proof Of Concept (POC) for the current client reporting solution.
                </p>
                <h2>How Auxenta Helped</h2>
                <p>The Auxenta cloud team was part of the core engineering team, which designed the following baseline data platform
                  modules in the cloud.
                </p>
                <ul class="list-unstyled">
                  <li style="padding-left: 0px">
                  1. Ingestion </li>
                  <li>
                    <li style="padding-left: 0px">2. Transformation </li>
                  <li>
                    <li style="padding-left: 0px">3. Data access and consumption </li>
                  <li>
                    <li style="padding-left: 0px">4. Telemetry</li>
                </ul>

                <h2>Technologies Used</h2>
                <p>Amazon S3, AWS EMR, AWS Step Functions, AWS Lambda Function, Amazon Redshift, AWS API Gateway, Amazon Redshift
                  Spectrum, Amazon SNS, Quicksight, AWS ElastiCache, AWS ElasticSearch, Apache Parquet, Kibana
                </p>

                <h2>The Solution</h2>
                <p>
                  <img class="img-responsive" src="assets/images/casestudy-invesco-figure1.jpg" alt="">
                </p>
               <p>The solution can be explained using the following steps (See Figure 1).</p> 

                <h5>1. Data Ingestion</h5>
                <p>The external scheduler pushes files to the Landing Store (S3) in the EDL.
                   Then these files are arranged into appropriate folders within the Landing Store based on the file content.</p>

                <h5>2. Landing Store to Raw Store</h5>
                <p>An AWS Lambda function is triggered in the Landing S3 bucket whenever a files is pushed into it.
                </p>
                <p>The files which are in the Landing Store go through some data validation, while they are being transferred to
                  the Raw store (S3). Typically, these validation rules are stored in DynamoDB and the AWS Step Function is used
                  to orchestrate this process. The processing of rules is carried out by the AWS Lambda/EMR depending on what
                the best fit is for each type of rules processing.
                </p>
                <p>While in the data validation, any errors or invalid records are sent to an SNS topic. The valid records are
                  converted to the “parquet” format before storing them in the Raw Store.
                </p>

                <h5>3. Raw Store to Organized Store</h5>
                <p>Similar to the Landing store, a separate Lambda function is configured in the Raw Store, which will be triggered
                  whenever a file is pushed to the Raw Store as “parquet” format.
                </p>
                <p>While transfering data from the Raw Store to the Organized Store (S3 or Redshift), the data is transformed/validated
                  using an ETL process.
                </p>
                <p>The Organized Store can be an Amazon Redshift or Amazon S3. The most recent and frequently used data is
                  stored in Amazon Redshift and less frequently and older data are stored in S3. Finally the Redshift Spectrum
                  is used to query the Organized Store.
                </p>

                <h5>4. The Data Access Layer</h5>
                <p>The Amazon API Gateway is leveraged to create, publish, maintain, monitor and manage data, which is stored inside
                the EDL. The business logic resides as Lambda functions and is mostly cached via Amazon ElastiCache.
                </p>

                <h5>5. Telemetry</h5>
                <p>The AWS Cloudwatch collects logs from different AWS services in the EDL platform. Lambda is configured to collect
                  data from CloudWatch logs and to send/index to the AWS Elasticsearch service. Kibana is used to visualize and
                  search the telemetry data, which are indexed in Elasticsearch to gain operational insights (See Figure
                  2).
                </p>
                <p>
                  <img class="img-responsive" src="assets/images/telemetary-figure2.jpg" alt="">
                </p>

                <h2>Benefits to the the client</h2>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Scalability </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Flexibility</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Ability to query data in different forms</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Ability to handle various types of data </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Speed</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Analytics</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Ease of governance</li>
                  <li>

                    <i class="fa fa-angle-double-right"></i>Transparency </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Agility</li>

                </ul>

              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/supun-bandara.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Supun Bandara

                </h2>
                <small>Associate Tech Lead
                </small>
              </div>
            </div>
          </div>

             <!-- RIGHT -->
             <div class="col-md-4 col-sm-4">

                <!-- side navigation -->
               <?php include 'include/blog-sidebar.php'; ?>
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
    <!-- /FOOTER -->
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
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-117187414-1');
  </script>

</body>

</html>