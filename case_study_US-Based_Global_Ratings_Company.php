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
              <h1 class="blog-post-title">US-Based Global Ratings Company - Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">NorthBay Solutions is a recognized premier provider of Big Data outsourcing services, based in USA. NorthBay Solutions initiated its offshore consulting in Lahore, Pakistan. 1 Billion Tech, formerly Auxenta, collaborated as their second offshore consulting partner in the space of AWS Big Data consultancy.
</p>
                
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>The 1 Billion Tech - NorthBay team was required to develop a solution which could read files from the AWS S3 bucket where the data could be versioned and validated at record level and stored in another S3 bucket. The solution was to be automated by a JAVA driver program and AWS Data Pipeline.
<br><br>It is an end-to-end proof of concept of the actual project.</p>

<h3>HOW 1 BILLION TECH HELPED</h3><br>
                  <P>Though it was not a direct client task from 1 Billion Tech, the ‘1 Billion Tech - NorthBay’ team took this as a training task. The proposed solution was deployed on Amazon Web services. Data transferring in the proposed solution was done by using the concept of AWS Data Pipeline. AWS S3 was used as the storage component and the computation was performed on the AWS EMR Cluster using a SparkSQL application.
</p>

                  <h3>THE SOLUTION</h3><br>
                  <p>The 1 Billion Tech - NorthBay team obtained hands on experience on various components during their work on this PoC, some of which are listed below:&nbsp;</p>
<p><strong>AWS Lambda, SNS, SQS</strong></p>
<p>Triggering Lambda from a SNS Topic, then reading SQS Messages to create Data Pipelines using Lambda through JAVA SDK, by assigning proper roles.</p>
<p><strong>Security (VPC, IAM, KMS)</strong></p>
<p>Client and server-side encryption on S3 and Lambda functions are done using AWS KMS</p>
<p>Configuration of a VPC with a private and public subnet for enhancing the security. This is accomplished by using IAM Roles &amp; Policies in order to ensure file level granularity control on S3 for various users.</p>
<p><strong>Data Pipeline</strong></p>
<p>Installing a Task Runner in an already running EMR so that the Data Pipeline doesn&rsquo;t use up time in launching the EMR itself for running its activities. Copying files from one S3 bucket to another S3 bucket involves:</p>
<ol>
<li>Copy activity</li>
<li>S3-data-nodes</li>
<li>Scheduling</li>
<li>Publish to SNS topic</li>
</ol>
<p>This helps us control the flow of data and its processing on EMR.</p>
<p><strong>AWS EMR</strong></p>
<ol>
<li>Map - Reduce<br>
<p>Implemented Map-Reduce word counting in the EMR cluster, and saving the generated results to HDFS and S3.</p></li>
<li>Hive
<p>Using the EMR Hive cluster, we ran distributed queries from AWS S3 directly and placed the generated query result set in AWS S3 (from HDFS to avoid data loss after cluster termination) using AWS console, AWS CLI, and Java Code.</p>
<p>This approach allows us to query raw data directly from S3 in a distributed way using EMR (Hive).</p>
</li>

</ol>
<p><strong>SparkSQL</strong></p>
<p>Deployed a SparkSQL application written in Java that reads files from S3 to data frames and is run on EMR Cluster (applied a few transformations using raw SQL queries and built-in methods).</p>
<p><strong>Oozie</strong></p>
<p>Created and executed a basic workflow of a map-reduce job using Oozie (implemented word count example in Python, Read files from AWS S3 and results were put back on AWS S3).</p>
<p><strong>Apache Ranger</strong></p>
<p>Created multiple users and assigned different policies to them for testing level access control in HDFS and table and record level access on Hive.</p>
<p>It helped us to create security policies on the Hadoop Ecosystem.</p>
<p><strong>AWS Glue</strong></p>
<ol>
<li>Data Cataloging<br>
<p>Created a new Glue database to store Metadata of source data and added a Crawler to extract schema and populate Metadata store.</p>
<p>Integration of Glue Metadata Store with other services (E.g.,: Athena, Hive).</p></li>

<li>ETL Workflow:<br>
<p>Data versioning at record level.</p>
<p>Orchestration with AWS Glue triggers (successfully scheduled job triggers with cron expressions).</p>
</li>
</ol>



<p><strong>CI and CD using AWS Services</strong></p>
<p>Implemented a CI/CD setup on AWS that automatically detects new code being pushed to CodeCommit and triggers a CodePipeline that users a CodeDeploy agent to deploy the latest build on specific servers (EC2 in this case).</p>
<p>Explored deployments including Load Balancing and Auto-Scaling groups.</p>
<p><strong>CloudWatch and CloudTrail</strong></p>
<p>Configured an alarm for terminating EMR instances if their CPU utilization remains less than a specific threshold (40%) for more than a specific time (30 minutes).</p>
<p><strong>Architecture</strong></p>
<p>Polling Based Driver</p>
<p><img class="img-responsive" src="assets/images/US-B-c-thumb1.jpg" alt=""></p>
<ol>
<li>Reads Metadata from DynamoDB</li>
<li>Reads date key for each feed/filetype from S3 bucket</li>
<li>Creates jobs based on this information</li>
<li>Creates DataPipeline for each job<br>
<br>
<ul>
<li>5 Pipelines are executed in parallel if jobs are independent</li>
<li>Dependent jobs wait for pre-requisites</li>
</ul></li>
</ol>

<ol start="5">
<li>Datapipeline will add a step in EMR cluster</li>
<li>Poll Datapipeline status every 10 seconds<br><br>
<ul>
<li>Update last-processed-date in Dynamodb</li>
<li>If finished, created next independent job</li>
</ul></li>
</ol>

<ol start="7">
<li>Shutdown if all jobs were completed</li>
</ol>
<p>Push Based Driver</p>
<p><img class="img-responsive" src="assets/images/US-B-c-thumb2.jpg" alt=""></p>
<ol>
<li>Job Queuing on EC2/Lambda</li><br>
<ul>
<li>Reads Metadata from DynamoDB</li>
<li>Reads date key for each feed/filetype from S3 bucket</li>
<li>Creates SQS for jobs based on this information</li>
<li>Publish to SNS after completion of job queueing</li>
</ul>
</ol>

<ol start="2">
<li>Job triggering in Lambda</li><br>
<ul>
<li>Reads SQS and creates Data Pipeline for each job</li><br>
<ul>
<li>5 Pipelines are executed in parallel if jobs are independent</li><br>
<li>Dependent jobs wait for pre-requisites.</li><br>
</ul>
<li>Data Pipeline will add a step in EMR cluster that runs the same SparkSQL application for validation/versioning</li><br>
<li>Data Pipeline published in same SNS topic upon completion</li><br>
<ul>
<li>Update last-processed-date in DynamoDB</li>
<li>Deletes the SQS message</li>
<li>Creates next independent job</li>

</ul>
</ul>



</ol>

<h3>BENEFITS TO THE CLIENT</h3><br> 

<p>This PoC enables the client to separate the data in the S3 bucket into validated/versioned/invalid buckets in a secure and automated way when data arrives as a batch.</p>
<p>The ETL job will be run once a day and presumably there will be an ETL window for it.</p>
<p>Once the ETL job has run successfully for a specific day, it cannot be re-run because that would bring it into an inconsistent state.</p>


                </div>
               
              </div>

              <!-- /article content -->

            </div>
          </div>
          <!-- RIGHT -->
          <div class="col-md-4 col-sm-4">
            <!-- side navigation -->
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