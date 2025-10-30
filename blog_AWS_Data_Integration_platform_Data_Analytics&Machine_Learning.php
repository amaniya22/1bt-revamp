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
              <h1 class="blog-post-title">An AWS Data Integration platform for Data Analytics and Machine Learning – A Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <p class="dropcap">
                  The Project is an AWS based solution to provide a data integration platform that can accelerate digital analytics capture
                  of the customer journey and identify some of the buying/cancellation patterns using Machine Learning (ML)
                  approaches for one of the world’s most widely recognized cruise brands.
                </p>
                <h2>THE CHALLENGE</h2>
                <p>The client was seeking assistance in executing two specific use cases (given below) to validate the applicability
                  and performance in a typical AWS Big Data / Machine Learning (ML) services platform.
                </p>
                <p>
                  <strong>Use Case 01</strong> - Analysis by making best efforts to process the analytics data to identify business
                  queries and visualize data with AWS based BI tools.
                </p>
                <p>
                  <strong>Use Case 02</strong> - Build a predictive model that leverages the AWS ML and associated services using
                  the available Adobe Analytics data and make business decisions using a ML model.

                </p>

                <h2>HOW AUXENTA HELPED</h2>

                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Auxenta provided an offshore team with AWS certified developers who were experienced across AWS core
                    and Big Data services.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>The team initially designed the most effective AWS based solution architecture to address the requirements
                    of two use cases and developed the data integration platform based on the solution architecture. </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Automated the data ingestion process and accelerated the velocity of digital analytics.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Provided quick translation of business vocabulary by automatic data discovery and metadata capture.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Enable a dashboard via AWS QuickSight to provide KPI’s and business metrics visualization.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Deployed the AWS Machine Learning and Data Sciences platform to compute propensity of cancellation,
                    and identify features that influence or determine the likelihood of cancellation.
                  </li>

                </ul>

                <h2>THE SOLUTION</h2>

                <p>
                  <strong>1. Use Case 01</strong> - Analysis by making best efforts to process the analytics data to identify business
                  queries and visualize business queries with AWS based BI tools.
                </p>
                <p>
                  <img class="img-responsive" src="assets/images/carnival-casestudy-thumb1a.jpg" alt="">
                </p>
                <p>There are two processes to handle historical data and incremental data separately in Use case 1.</p>

                <h2>Manipulate historical data - [Steps]</h2><br>

                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Amazon S3 stores the historical data, which are ingested from the client side. Transfer historical
                    data from</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Transfer historical data from AWS S3 bucket to the AWS Redshift staging table using an Amazon EC2
                    instance that performs the work defined by a data pipeline activity.

                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Remove unwanted fields and data with the ETL process and load data into Redshift fact table.

                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Convert data into parquet format and store the files in S3 bucket using EMR step function. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i> Load data into AWS Athena from parquet S3 bucket and visualize with Quicksight.</li>

                </ul>
                <h2>Manipulate incremental data - [Steps]</h2><br>

                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Amazon S3 was selected to store the incremental, data which are ingested on a daily basis. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Lambda function will be triggered once new files are arrived into the S3 bucket and send the acknowledgement
                    to an Amazon EC2 instance that performs the work defined by a data pipeline activity using AWS SQS. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Then transfer incremental data into AWS Redshift staging table and copy into fact table with removing
                    unwanted fields and values. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Transformed data will be loaded into the S3 bucket in CSV format. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i> Convert CSV file into parquet format and load into the S3 folder, which contains parquet files using
                    AWS Glue. </li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Load data into AWS Athena from parquet S3 bucket and visualize with Quicksight. </li>
                </ul>

                <p>
                  <strong>2. Use Case 02</strong> - Build a predictive model that leverages the AWS ML and associated services using
                  the available Adobe Analytics data.</p>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Auxenta provided an offshore team with AWS certified developers who were experienced across AWS core
                    and Big Data services.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>AWS Sagemaker was selected as the platform of choice to take data storytelling.</li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Ingest relevant feature columns (humanize data-driven insights from experience).</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Remove overfitting of the data and identify the right data.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Remove unnecessary noise.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Model deployments to model visualizations in Sagemaker.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Select the right integrated visualization (AWS Quicksight vs custom BI).</li>
                </ul>

                <p>
                  <img class="img-responsive" src="assets/images/carnival-casestudy-thumb2.jpg" alt="">
                </p>

                <h2>THE TECHNOLOGY STACK</h2>
                <p>Amazon S3, AWS Lambda, AWS Data Pipeline, AWS SQS, AWS EC2, AWS Redshift, AWS Sagemaker, AWS EMR, AWS Glue,
                  AWS Athena, AWS Quicksight</p>
                <h2>BENEFITS TO THE CLIENT</h2>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Data integration platform that can accelerate digital analytics capture of the customer journey.</li>

                  <li>
                    <i class="fa fa-angle-double-right"></i>Visualize the analytics data based on business queries. </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Make adaptive dynamic decision to provide ML as a Service based on existing conditions and past history
                    driven by analyzing a large number of parameters.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Explore the likelihood of the buy and likelihood of cancellation with a similar adaptive decision
                    framework.
                  </li>
                </ul>
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/ridma-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Ridma Gamage

                </h2>
                <small>Senior Software Engineer
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