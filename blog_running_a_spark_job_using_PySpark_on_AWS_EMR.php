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

              <h1 class="blog-post-title">Running a Spark Job Using PySpark on AWS EMR</h1>

              <br>

              <!-- article content -->

              <div class="margin-bottom-80">



                <h2>What is Spark?</h2>

                <p class="dropcap">Spark is considered as a preferred data processing engine, primarily for usage in a vast range of situations.

                  Data scientists and application developers integrate Spark into their own implementations in order to transform,

                  analyze and query data at a larger scale. Functions which are mostly related with Spark, contain collective

                  queries over huge data sets, machine learning problems and processing of streaming data from various sources.

                  </pP>

                  <h2>What is PySpark?</h2>

                  <p>PySpark is considered as the interface which provides access to Spark using the Python programming language.

                    PySpark is basically a Python API for Spark.

                  </p>

                  <h2>What is EMR?</h2>

                  <p>Amazon Elastic MapReduce, commonly known as EMR, is an Amazon Web Services mechanism for big data analysis

                    and processing. This is established based on Apache Hadoop, which is a Java based programming framework

                    which assists in the processing of huge data sets in a distributed computing environment. EMR also manages

                    a vast group of big data use cases, such as bioinformatics, scientific simulation, machine learning and

                    data transformations.

                  </p>

                  <h2>The Use Case</h2>



                  <p>I’ve been mingling around with PySpark for the last few days and I was able to build a simple Spark application

                    and execute it, as a step, in an

                    <span style="font-weight: 700">AWS EMR</span> cluster. The following functionalities were covered within this use case (See Figure 1).

                  </p>

                  <div>

                    <ul class="list-unstyled list-icons">

                      <li>

                        <i class="fa fa-angle-double-right"></i>Reading CSV files from AWS S3 and storing them in two different

                        <span style="font-weight: 700">RDDs</span> (Resilient Distributed Datasets)

                      </li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Converting an

                        <span style="font-weight: 700">RDD</span> into a

                        <span style="font-weight: 700">data frame</span>

                      </li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Replacing 0s with null values</li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Dropping the rows which have null values</li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Performing an inner join based on a column</li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Saving the joined data frame in the Parquet format back to S3</li>

                      <li>

                        <i class="fa fa-angle-double-right"></i>Executing the script in an EMR cluster as a step via CLI</li>



                    </ul>

                  </div>



                  <h2>Flowchart of the Above Functionalities</h2>

                  <br>

                  <p align="center">

                    <img src="assets/images/emr-thumb1.jpg">

                  </p>

                  <p>Let me explain each of the above functionalities by providing appropriate snippets.</p>

                  <h2>1.0 Reading CSV files from AWS S3</h2>

                  <p>This is where two files from an S3 bucket are being retrieved and will be stored in two data frames individually.

                  </p>

                  <p>#importing necessary libraries

                    <br> from pyspark.sql.functions import *

                    <br> from pyspark.sql.types import StringType

                    <br> from pyspark import SQLContext

                    <br> from itertools import islice

                    <br> from pyspark.sql.functions import col

                    <br>

                    <br> #creating the context

                    <br> sqlContext = SQLContext(sc)

                    <br> #reading the first CSV file and store it in an RDD

                    <br> rdd1= sc.textFile(“s3n://pyspark-test-kula/test.csv”).map(lambda line: line.split(“,”))

                    <br> #removing the first row as it contains the header

                    <br> rdd1 = rdd1.mapPartitionsWithIndex(

                    <br> lambda idx, it: islice(it, 1, None) if idx == 0 else it

                    <br> )

                    <br>



                  </p>

                  <h2>2.0 Converting an RDD (Resilient Distributed Datasets) into a data frame</h2>

                  <p>#converting the RDD into a data frame

                    <br> df1 = rdd1.toDF([‘policyID’,’statecode’,’county’,’eq_site_limit’])

                    <br> #print the data frame

                    <br> df1.show()

                    <br>



                  </p>



                  <p align="center">

                    <img src="assets/images/emr-thumb2.jpg">

                  </p>

                  <h2>3.0 Replacing 0s with null values</h2>



                  <p>#data frame which holds rows after replacing the 0s into null

                    <br> targetDf = df1.withColumn(“eq_site_limit”, \

                    <br> when(df1[“eq_site_limit”] == 0, ‘null’).otherwise(df1[“eq_site_limit”]))

                    <br> targetDf.show()

                    <br>



                  </p>

                  <p align="center">

                    <img src="assets/images/emr-thumb3.jpg">

                  </p>

                  <h2>4.0 Dropping the rows which have null values</h2>



                  <p>df1WithoutNullVal = targetDf.filter(targetDf.eq_site_limit != ‘null’)

                    <br> df1WithoutNullVal.show()

                    <br>



                  </p>

                  <p align="center">

                    <img src="assets/images/emr-thumb4.jpg">

                  </p>



                  <h2>Creating the second data frame</h2>

                  <p>rdd2 = sc.textFile(“s3n://pyspark-test-kula/test2.csv”).map(lambda line: line.split(“,”))

                    <br> rdd2 = rdd2.mapPartitionsWithIndex(

                    <br> lambda idx, it: islice(it, 1, None) if idx == 0 else it

                    <br> )

                    <br> df2 = df2.toDF([‘policyID’,’zip’,’region’,’state’])

                    <br> df2.show()

                    <br>



                  </p>

                  <h2>5.0 Performing an inner join on both data frames</h2>

                  <p>innerjoineddf = df1WithoutNullVal.alias(‘a’).join(df2.alias(‘b’),col(‘b.policyID’) == col(‘a.policyID’)).select([col(‘a.’+xx)

                    for xx in a.columns] + [col(‘b.zip’),col(‘b.region’), col(‘b.state’)])

                    <br> innerjoineddf.show()

                    <br>

                  </p>

                  <p align="center">

                    <img src="assets/images/emr-thumb5.jpg">

                  </p>

                  <h2>6.0 Saving the joined data frame in the Parquet format back to S3</h2>

                  <p>innerjoineddf.write.parquet(“s3n://pyspark-transformed-kula/test.parquet”)</p>



                  <p>Once we’re done with the above steps, we’ve successfully created the working Python script which retrieves

                    two CSV files, stores them in different data frames and then merges both of them into one, based on some

                    common column.



                  </p>

                  <h2>7.0 Executing the script in an EMR cluster as a step via CLI</h2>

                  <p>We can now submit this Spark job in an EMR cluster as a step. To do this the following steps need to be

                    followed:

                  </p>

                  <p>1. Create an

                    <a href="https://docs.aws.amazon.com/emr/latest/ReleaseGuide/emr-spark-launch.html" target="_blank">

                      <span style="font-weight: 700">EMR cluster</span>

                    </a>, which includes Spark, in the appropriate region

                    <br> 2. Once the cluster is in the

                    <span style="font-weight: 700">WAITING</span> state, add the Python script as a step

                    <br> 3. Then execute this command from your CLI (Ref from the

                    <a href="https://docs.aws.amazon.com/emr/latest/ReleaseGuide/emr-spark-submit-step.html"

                      target="_blank">doc</a>)

                  </p>



                  <p>aws emr add-steps — cluster-id j-3H6EATEWWRWS — steps Type=spark,Name=ParquetConversion,Args=[ — deploy-mode,cluster, — master,yarn, — conf,spark.yarn.submit.waitAppCompletion=true,s3a://test/script/pyspark.py],ActionOnFailure=

                    <br>CONTINUE

                  </p>

                  <p>If the above script has been executed successfully, it should begin the step in the EMR cluster, which

                    you have mentioned. Normally it takes few minutes to produce a result, whether it’s a success or failure.

                    If it’s a failure, you can probably debug the logs and see where you’re going wrong. Otherwise you’ve

                    achieved your end goal.

                  </p>

                  <p>Complete source-code:

                    <a href="https://gist.github.com/Kulasangar/61ea84ec1d76bc6da8df2797aabcc721">www.gist.github.com</a>

                  </p>



                 

                  <p><strong>References:</strong> <a href="https://docs.aws.amazon.com/emr/latest/ManagementGuide/emr-what-is-emr.html" target="_blank">www.docs.aws.amazon.com, </a><a href="http://www.ibmbigdatahub.com/blog/what-spark" target="_blank">www.ibmbigdatahub.com</a></p>





              </div>



              <!-- /article content -->



            </div>

            <div class="row tab-post padding-top-20">

              <!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

                <img src="assets/images/K_Gawri.jpg" width="90">



              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Kulasangar Gowrisangar</h2>

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