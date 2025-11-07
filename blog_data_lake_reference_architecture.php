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
              <h1 class="blog-post-title">Data Lake Reference Architecture</h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                <p class="dropcap">
                  Data lake is a single platform which is made up of, a combination of data governance, analytics and storage. It’s a secure,
                  durable and centralized cloud-based storage platform that lets you to ingest and store, structured and
                  unstructured data. It also allows us to make necessary transformations on the raw data assets as needed.
                  A comprehensive portfolio of data exploration, reporting, analytics, machine learning, and visualization
                  on the data can be done by utilizing this data lake architecture.
                </p>

                <h4>DATA LAKE VS DATA WAREHOUSE</h4>
                <p>While a data warehouse can also be a large collection of data, it is highly organized and structured. In
                  a data warehouse, data doesn’t arrive in its original form, but is instead transformed and loaded into
                  the organization predefined in the warehouse. This highly structured approach means that a data warehouse
                  is often highly tuned to solve a specific set of problems, but is unusable for others. The structure and
                  organization make it easy to query for specific problems, but practically impossible for others.
                </p>
                <p>A data lake on the other hand, can be applied to a large number and wide variety of problems. Believe it
                  or not, this is because of the lack of structure and organization in a data lake. The lack of a predefined
                  schema gives the data lake more versatility and flexibility. A Data Lake operates, with a more broad and
                  distributed context, where some questions remain ambiguous, with an undefined set of users and a variety
                  of different data presentations. One of the core capabilities of a data lake architecture is the ability
                  to quickly and easily ingest multiple types of data, such as real-time streaming data and bulk data assets
                  from on-premises storage platforms, as well as data generated and processed by legacy on-premises platforms,
                  such as mainframes and data warehouses.
                </p>
                <h4>WHY DO WE NEED A DATA LAKE?</h4>
                <h2>Managed Unlimited Data</h2>
                <p>A Data Lake can store unlimited data, in its original formats and fidelity, for as long as you need. As a
                  data staging area, it can not only prepare data quickly and cost effectively for use in downstream systems,
                  but also serves as an automatic compliance archive to satisfy internal and external regulatory demands.
                  Unlike traditional archival storage solutions, a Data Lake is an online system: all data is available for
                  query.
                </p>
                <h2>Accelerate Data Preparation and Reduce Costs</h2>
                <p>Increasingly, data processing workloads that previously had to run on expensive systems can migrate to a
                  Data Lake, where they run at very low cost, in parallel, much faster than before. Optimizing the placement
                  of these workloads and the data on which they operate frees capacity on high-end data warehouses, making
                  them more valuable by allowing them to concentrate on the business-critical OLAP and other applications
                  for which they were designed.
                </p>
                <h2>Explore and Analyze</h2>
                <p>Fast Above all else, a Data Lake enables analytic agility. IT can provide analysts and data scientists with
                  a self-service environment to ask new questions and rapidly integrate, combine, and explore any data they
                  need. Structure can be applied incrementally, at the right time, rather than necessarily up front. Not
                  limited to standard SQL, a Data Lake offers options for full-text search, machine learning, scripting,
                  and connectivity to existing business intelligence, data discovery, and analytic platforms. A Data Lake
                  finally makes it cost-effective to run data-driven experiments and analysis over unlimited data.
                </p>

                <h4>GENERAL DATA LAKE REFERENCE ARCHITECTURE</h4>
                <p>
                  <img class="img-responsive" src="assets/images/data-lake-architecture-1.jpg" alt="">
                </p>
                <p class="small">Ref:
                  <a href="http://www.datasciencecentral.com/profiles/blogs/demystifying-data-lake-architecture" target="_blank">www.datasciencecentral.com/profiles/blogs/demystifying-data-lake-architecture</a>
                </p>

                <p>Here are the key components in a data lake architecture. We have our data sources which can be structured
                  and unstructured. They all integrate into a raw data store that consumes data in the purest possible form
                  without any transformations. It is a cheap persistent storage that can store data at scale.
                </p>
                <p>Analytical sandboxes are one of the key components in data lake architecture. These are the exploratory areas
                  for data scientists where they can develop and test new hypothesis, mash-up and explore data to form new
                  use-cases, create rapid prototypes to validate these use-cases and realize what can be done to extract
                  value out of the business.
                </p>
                <p>Then we have batch processing engine that processes the raw data into something that can be consumed by the
                  users. In other words, a structure that can be used for reporting to the end users. Then the transformed
                  data would be stored in processed data store. There is a real-time processing engine that takes streaming
                  data and processes it as well.
                </p>
                <p>Finally once the necessary data is being stored, the BI tools would be able to leverage those to show meaningful
                  graphs and numbers to the end customers. For example sales per quarter, growth within a region for the
                  year etc.
                </p>

                <h4>AWS DATA LAKE REFERENCE ARCHITECTURE</h4>
                <p>
                  <img class="img-responsive" src="assets/images/data-lake-architecture-3.jpg" alt="">
                </p>
                <p class="small">Ref:
                  <a href="https://aws.amazon.com/blogs/big-data/build-a-data-lake-foundation-with-aws-glue-and-amazon-s3"
                    target="_blank">www.aws.amazon.com/blogs/big-data/build-a-data-lake-foundation-with-aws-glue-and-amazon-s3</a>
                </p>

                <p>The aws data lake foundation provides these features:</p>
                <ul class="list-unstyled list-icons">

                  <li>
                    <i class="fa fa-angle-double-right"></i>Data submission, including batch submissions to Amazon S3 and streaming submissions via Amazon Kinesis
                    Firehose
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Ingest processing, including data validation, metadata extraction, and indexing via Amazon S3 events,
                    Amazon Simple Notification Service (Amazon SNS), AWS Lambda, Amazon Kinesis Analytics, and Amazon ES</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Dataset management through Amazon Redshift transformations and Kinesis Analytics</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Data transformation, aggregation, and analysis through Amazon Athena and Amazon Redshift Spectrum</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Search, by indexing metadata in Amazon ES and exposing it through Kibana dashboards</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Publishing into an S3 bucket for use by visualization tools, and visualization with Amazon QuickSight</li>
                </ul>
                <h4>Data Lake Reference Architecture - Case Study 01</h4>

                <p>Auxenta was engaged with a manufacturing organization in the USA. Their requirement was to build a data lake
                  solution in order to visualize some sales related KPIs’ in a dashboard.
                </p>
                <p> In order to make this requirement a success, the team took the initiative to adopt the data lake architecture
                  which has been explained briefly in the above sections. There were couple of other tools which were being
                  used within the architecture such as Matillion and Tableau. </p>

                <p> Initially the raw data is being stored in s3 buckets from various input sources on a daily basis. Whenever
                  a file comes into the S3 bucket, the lambda function which is attached to that bucket, would get triggered
                  and will send out a message to SQS. Once SQS receives the message, it will send the information (contains
                  the job information) which was received from the lambda function, to the Matillion (An ETL tool) instance.
                  The Matillion instance would be listening to the SQS queue, and once it receives the message from SQS,
                  it would trigger the appropriate job in Matillion. The jobs which are available in Matillion are, four
                  different orchestration jobs in order to pull in data from the S3 buckets into the Redshift tables and
                  a transformation job which consists the join function which inserts the data into the fact table.</p>

                <p> Then data will be pushed into Redshift data warehouse, as into staging tables. Then the raw data from the
                  staging tables are extracted, and will be transformed before it gets inserted into the fact table. In order
                  to do the transformation, Matillion is being used. Once the transformations are done, the transformed data
                  will be inserted into the fact table based on some joins from other dimension tables. </p>

                <p> The data in the fact table is being backed up into a S3 bucket every day on a schedule basis. After the data
                  is being loaded into the fact table, Tableau can connect to the Redshift endpoint and access the schema
                  and the tables. Tableau is being used as the visualization tool, in order to create calculated fields and
                  graphs based on the required KPIs’ which would ideally help the business related employees to witness a
                  high-level look on the ups and downs of their organization. </p>


              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/K_Gawri.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Kulasangar Gowrisangar
                </h2>
                <small>Author</small>
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