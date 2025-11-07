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



    <section id="portfolio" class="nopadding-bottom black-section">

      <div class="container">



        <div class="row">

          <!-- LEFT -->

          <div class="col-md-8 col-sm-8">



            <div class="careers-left">

              <h1 class="blog-post-title">Implementing a Big Data Pipeline using AWS and Open Source Frameworks – A Case Study</h1>



              <!-- article content -->

              <div class="margin-bottom-80">



                <p class="dropcap">

                  The client is a top American company specialized in the use of marketing to sell home care, health and beauty products. The

                  company’s global data platform has a legacy data warehouse to store various marketing data for generating

                  BI reports.

                </p>





                <h2>The Challenge</h2>



                <p>The company is seeking to implement a new cloud-based data lake, enterprise data warehouse and data pipeline

                  process that leverages both the AWS suite of services as well as other complementary tools to address the

                  rapid growth of data originating from various dynamic sources.

                </p>

                <h2>How Auxenta Helped</h2>



                <p>Auxenta cloud team was part of the core engineering team, which designed the following baseline data platform

                  modules in the cloud:

                </p>

                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>Ingestion</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Transformation</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Data access and consumption</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Security</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Monitoring</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>DevOps</li>

                </ul>



                <h2>The Solution</h2>



                <p>

                  <img class="img-responsive" src="assets/images/aws-blog-thumb.jpg">

                </p>

                <p>The proposed solution enables historical, incremental and real-time data ingestion to the data lake which

                  is built on top of S3 object store. Data transformation jobs utilize Apache Spark framework atop AWS EMR

                  clusters. Data reconciliation and lineage was facilitated via AWS platform.

                </p>

                <p>Data ingestion method to the data lake depends on the volume and velocity of data in the datasource. (1)

                  The initial data load for the historical data, originating from various on-premise databases will be performed

                  using Apache Sqoop on a EMR cluster. (2) AWS Data Pipeline will orchestrate the load process.

                </p>

                <p>AWS Kinesis Stream (3) coupled with AWS Kinesis Firehose (4) will be used to capture rapid realtime data

                  (Eg: click stream data) into the Data lake. Data coming into Firehose will be be processed using lambda

                  functions (5) before the data get stored on S3.

                </p>

                <p>Once the data reached the landing store, pre configured Glue jobs (6) will be triggered to run data transformation

                  jobs written in PySpark framework. The transformation results get stored in the data consumption layer

                  (7) of the data lake in more optimized formats (Eg: Parquet, Orc, etc..) so that ad-hoc queries can be

                  run via tools like AWS Athena (8). It will be AWS Glue’s job to create metadata catalog of the data in

                  S3. Finally reporting tools like AWS QuickSight (9) can be used to generate BI reports, connecting to Athena

                  and other connectors to slice and dice data by data analysts and data scientists.

                </p>





                <h2>Benefits to the client</h2>

                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>Realtime data ingestion</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Advanced realtime data analytics</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Cost savings via ad-hoc queries using Athena</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Flexibility to add future data sources without doing code</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Easy to setup and replicate the solution across regions via DevOps tools on AWS cloud</li>

                </ul>

              </div>



              <!-- /article content -->



            </div>

            <div class="row tab-post padding-top-20">

              <!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

                <img src="assets/images/thilanka-blog.jpg" width="90">



              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Thilanka Liyanarachchi</h2>

                <small>Senior Software Engineer</small>

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