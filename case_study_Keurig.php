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
              <h1 class="blog-post-title">US-Based Leading Modern Beverage Company - Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">NorthBay Solutions (northbaysolutions.com) is a premier AWS (Amazon Web Services) based advanced big data consulting partner based in the USA. Northbay Solutions initiated its offshore consulting in Lahore, Pakistan. 1 Billion Tech, formerly Auxenta, collaborated as their second offshore consulting partner in the space of AWS Big Data consultancy.</p>

                
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>The challenge here was to create an AWS enabled data pipeline to ingest, store and make available for consumption via Tableau and also to leverage a lightweight ETL tool to facilitate any transformations. Another element of this challenge was to prove that the beverage company client could easily analyze the ‘time to delivery’ component for online orders delivered via FedEx by utilizing AWS services.</p>

                  
                  <h3>HOW WE HELPED</h3><br>
                  <P>As an offshore consulting partner, 1 Billion Tech, has helped the client’s employees who have been working on this project in numerous possible ways to accomplish the objectives of the client. 1 Billion Tech has assisted the NorthBay Pakistan offshore team on multiple engagements previously, whereas this was a direct client task for the Sri Lankan offshore team.
                  <br><br>
                  We provided a data lake reference architecture as a solution for this problem and then went on to build the solution by utilizing AWS services such as Lambda functions, S3, Redshift, SQS and a third party tool called Matillion, in order to do transformations and data migration from AWS S3 to Redshift. </P>


                  <h3>THE SOLUTION</h3><br>
                  <p>The deliverable of this project can be divided into three major components such as:</p>
<ol>
<li><strong>Data ingestion to AWS S3. Following are the four types of files which we had to ingest.</strong></li>
      <ul>
      <li>SAP Hana - Files from the SAP Hana RDBMS</li>
      <li>FedEx - Files from the FedEx Delivery company stored on-prem</li>
      <li>State/Region - From the local RDBMS</li>
      <li>DeliveryDate - From the local RDBMS</li>
      </ul>

<p>Before executing the Python scripts to load the input data source into S3, the lambda functions, which are used to generate the weekly folders within a fiscal year, should be executed manually so that the Python scripts can transfer the files into the correct week&rsquo;s folder. The weekly folder creation of a fiscal year is only done for the FedEx and SAP delivery files.</p>
<p>These files are being stored in the client&rsquo;s environment on a daily basis. In order to extract these source files, Python scripts were created and made to run/execute on-prem, so that the files are placed in the appropriate S3 bucket, i.e <strong>Fedex &gt; 2017-2018 &gt; week-01 &gt; file.csv</strong> or <strong>Region &gt; file.csv </strong>or <strong>SAP &gt; 2018-2019 &gt; week-02 &gt; file.csv. </strong>These Python scripts or jobs will initially be executed manually, and later integrated with Control-M.&nbsp;</p>
<p>The appropriate AWS lambda function will be triggered whenever a file is placed in any of the S3 landing buckets of the four files. Four different lambda functions were created in order to handle these four types of files. An SQS queue also was created, in order to communicate between AWS and Matillion (ETL tool). Once the lambda is triggered, it will automatically grab the file name and other Matillion job related information, and thereafter send it to the SQS queue which we created. Matillion was configured to listen to the SQS queue.</p>
<p>Once SQS receives a message or a notification to its queue, with all the details, it will pass it on to Matillion, wherein it will start executing the appropriate orchestration job.</p>


<li><strong>Loading the data via Matillion to Redshift and optimizing it. Matillion is the ETL tool which has been used in this use-case.</strong>

<p>There will be four different orchestration jobs in order to copy data from S3 to AWS Redshift, with respect to each file type. Whereas Redshift will be holding four staging tables in order to store the data within the data warehouse. As soon as the information of every file comes through AWS SQS to Matillion, it will then process the file and trigger the appropriate orchestration job, which will then migrate the data from S3 to the relevant staging table. Similarly, all the four tables will be generated.</p>
<p>Once the staging tables have been generated for the day, the FedEx and SAP Delivery files will be joined on the <strong>tracking number </strong>in order to create a fact table in Redshift. As the beverage company client wanted us to include all the deliveries in FedEx files even if there was no corresponding SAP Delivery file record, a <strong>LEFT OUTER JOIN</strong> will be performed with the FedEx table being on the left side. The join will be performed on a scheduled basis, i.e it&rsquo;s assumed that all the necessary files (4 FedEx files and the appropriate SAP Hana delivery file is loaded into Redshift) by the cut off time, given in the scheduler. Each day, the new delivery records for the day will be appended to the fact table from the previous day, so that the fact table will have all the delivery records since the first day it was generated.&nbsp;</p>
<p>The joining process was done as a transformation in Matillion, hence a transformation job was created to accomplish this. There were few transformations other than the join, which had to be done before inserting the filtered data into the fact table. These transformations include removing rows which contain null or empty values for a specific column and extracting only the first 16 digits of the transaction number. These were solely done based on our assumptions.&nbsp;</p>
<p>As a result, there are two types of processes in this section. One is the initial load and the other is the incremental load. Initial load is where the data gets loaded into the tables for the first time. Incremental load is where the data is ingested after a specific timestamp from the max of the previously inserted records. Therefore, we made sure that it only inserted the new set of records, and not the existing ones. As a backup plan, the data in the fact table was extracted and backed up in S3, on a daily basis as a parquet format.&nbsp;</p>
</li>

<li><strong>Report creation in Tableau. Tableau is the visualization and BI tool which has been used in this use-case.</strong>
<p>Tableau gets the data from the Redshift tables in order to show the necessary KPIs and calculated fields within a certain time frame.&nbsp;</p>

<h3>CONCEPTUAL ARCHITECTURE DIAGRAM</h3>
<p><img src="assets/images/Keurig-thumb1.jpg" class="img-responsive"></p>
</li>
</ol>


<h3>BENEFITS TO CLIENT</h3><br> 
<p>With the use of the above approach, the client was able to:</p>
<ul>
<li>Utilize an AWS enabled data pipeline to ingest, store and make available for consumption via Tableau</li><br>
<li>Leverage a lightweight ETL tool such as Matillion to facilitate transformations</li><br>
<li>Exploit the AWS Redshift data warehouse to store and extract data from and to S3.&nbsp;</li><br>
<li>Enable a dashboard/report via Tableau to provide KPI visualization to their customers</li><br>
<li>Analyze &ldquo;time to delivery&rdquo; for online orders delivered via FedEx</li>
</ul>

                </div>
               
              </div>

              <!-- /article content -->

            </div>
          </div>
          <!-- RIGHT -->
          <div class="col-md-4 col-sm-4">
            <!-- side navigation -->
            <div class="item-box">
              <div class="item-box-desc">

                <h4>
                  <a class="size-16" href="case_study_millionspaces.php" target="_blank">MillionSpaces - Real-time event booking space</a>
                </h4>
                <a href="case_study_millionspaces.php" target="_blank" class="btn btn-xs btn-bordered">

                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>


              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <!--<img src= assets/images/Assetminder_CaseStudy_Product.png>-->
                  <a class="size-16" href="auxenta-assestminder-international-award.php" target="_blank">Assetminder - An award-winning cloud-based fleet management system</a>
                </h4>
                <a href="case_study_assetminder.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>

                </a>
              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <!--<img src= assets/images/Assetminder_CaseStudy_Product.png>-->
                  <a class="size-16" href="case_study_assetminder_managedServices.php" target="_blank">Assetminder - Providing world class product support to a leading fleet management company in Europe</a>
                </h4>
                <a href="case_study_assetminder_managedServices.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>

                </a>
              </div>

            </div>

           <!-- <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a href="case_study_dialog.php" target="_blank">Dialog - Successful migration of an order management system to a microservices based solution for a leading Telco in Asia
</a>
                </h4>
                <a href="case_study_dialog.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>-->

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <!--<img src= assets/images/Symbox_CaseStudy.jpg>-->
                  <a class="size-16" href="case_study_symbox.php" target="_blank">Symbox - End to end testing service</a>
                </h4>
                <a href="case_study_symbox.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>
            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_bitcoin_bazaar.php" target="_blank">Bitcoin Bazaar - Crypto-currency trading platform with integrated location services</a>
                </h4>
                <a href="case_study_bitcoin_bazaar.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>
            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_silVR.php" target="_blank">SilVR - Implemented latest trends in VR capabilities for a US based real estate startup</a>
                </h4>
                <a href="case_study_silVR.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_QA_BDD.php" target="_blank">BDD - Test automation with behaviour driven development</a>
                </h4>
                <a href="case_study_QA_BDD.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>
            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_northbay.php" target="_blank">NorthBay - Designing big data solutions with AWS</a>
                </h4>
                <a href="case_study_northbay.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>
            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_Northbay_machineLearning.php" target="_blank">NorthBay - Machine learning with AWS</a>
                </h4>
                <a href="case_study_Northbay_machineLearning.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>
            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_eBECS_project_service_accelerator.php" target="_blank">eBECS - Project services accelerator</a>
                </h4>
                <a href="case_study_eBECS_project_service_accelerator.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_Ops_integration.php" target="_blank">eBECS - Ops integration</a>
                </h4>
                <br>
                <a href="case_study_Ops_integration.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_eBECS_Field_service_feature.php" target="_blank">eBecs - Field services enhancement</a>
                </h4>
                <a href="case_study_eBECS_Field_service_feature.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>


            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_Interrelate.php" target="_blank">Interrelate - Migration of complex environment to a microsoft dynamics CRM platform</a>
                </h4>
                <a href="case_study_Interrelate.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

            </div>

            <div class="item-box">
              <div class="item-box-desc">
                <h4>
                  <a class="size-16" href="case_study_TradeStation.php" target="_blank">TradeStation - Performance Testing for US based trading platform</a>
                </h4>
                <a href="case_study_TradeStation.php" target="_blank" class="btn btn-xs btn-bordered">
                  <span class="margin-right-6 size-14">VIEW</span>
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </div>

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