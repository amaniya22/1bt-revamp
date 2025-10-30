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
              <h1 class="blog-post-title">Analyzing AWS VPC Flow Logs via CloudWatch Logs Insight and Athena</h1>
              <div>

              <p>This blog post explains how we can leverage&nbsp;<a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/AnalyzingLogData.html">CloudWatch Logs Insight</a>&nbsp;and&nbsp;<a href="https://aws.amazon.com/athena/">Athena</a>&nbsp;to analyze AWS VPC Flow logs in real time.</p>
<h2>AWS Flow Logs</h2><br>
<p>Flow logs can be enabled in three (03) levels in AWS.</p>
<ol>
<li>VPC level</li>
<li>Subnet level</li>
<li>ENI level</li>
</ol>
<p>For the purpose of this blog we will only focus on VPC Flow logs.</p>
<h2>AWS VPC Flow Logs</h2><br>
<p>AWS VPC Flow logs can track the following information related to VPC traffic.</p>
<ol>
<li>Source/Destination IP Address</li>
<li>Source/Destination Port</li>
<li>Protocol</li>
<li>Bytes</li>
<li>ALLOW/ REJECT Status</li>
</ol>
<p>You can send VPC Flow log outputs to two main destinations.</p>
<ol>
<li>S3 Buckets</li>
<li>CloudWatch Logs</li>
</ol>
<p>These logs can then be forwarded to either CloudWatch Logs Insight or Athena to query them interactively (See Figure 1).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig1.jpg"></p>



<p>So let&rsquo;s try the above (figure 1) step by step now.</p>
<h2>Steps</h2><br>
<p><span style="font-weight:700">Step 01</span>:&nbsp;<strong>Create a Custom VPC</strong></p>
<p>Create a Custom VPC with a public subnet, if you do not have one already. Create an EC2 instance (t2.micro) and attach it to the public subnet.</p>
<p>(P.Note: You may use either a Default / Custom VPC here. But it is recommended to use a Custom VPC in production setups. So let&rsquo;s stick to best practices.)</p>
<p><span style="font-weight:700">Step 02</span>:&nbsp;<strong>Create a VPC Flow Log (Destination = CloudWatch Logs)</strong></p>
<p>Select the Custom VPC that you&rsquo;ve created and click the&nbsp;<em>Flow Logs</em>&nbsp;tab (See Figure 02).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig2.jpg"></p>

<p>Now, click the&nbsp;<em>Create flow log</em>&nbsp;button and select the following:</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><strong><em>Filter:</em></strong><em>&nbsp;All</em></p>
<p><strong><em>Max Aggregation Interval</em></strong><em>: 10 minutes</em></p>
<p><strong><em>Destination</em></strong><em>: Send to CloudWatch Logs</em></p>
<p><strong><em>Destination Log Group</em></strong><em>: &lt;Here you need to select a Log Group under CloudWatch. If you do not have one created, please do create it especially for vpc_flow_logs&gt;</em></p>

</div>
                                        </div><br><br>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig3.jpg"></p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><strong><em>IAM Role</em></strong><em>: &lt;It is required to set an IAM Role in order to send EC2 flow logs to CloudWatch Logs. For this, you are required to click &ldquo;Setup Permissions link&rdquo;, which is shown just below it. Click the &ldquo;Allow&rdquo; button to set permissions to the role created.&gt;</em></p>
</div></div>
<br><br>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig4.jpg"></p>

<p>Now in the IAM Role dropdown search for the Role that you just created and click the&nbsp;<em>Create</em>&nbsp;button to confirm the creation of the flow log. This flow log configuration will send all the logs which run through the Custom VPC and store them in the CloudWatch Log Group that you&rsquo;ve created (See Figure 05).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig5.jpg"></p>

<p><span style="font-weight:700">Step 03</span>: &nbsp;<strong>Analyze CloudWatch Logs</strong></p>
<p>Once the VPC Flow Log is created, you can see how the CloudWatch Logs are getting the logs, whilst the VPC interacts with the IP traffic that is interfaced.</p>
<p>Go to CloudWatch &rarr; Log Groups &rarr; Select the ENI of the targeted EC2 instance.</p>
<p>(P.Note: You can see the EC2 instances&rsquo; ENI by clicking the eth0 link shown in the EC2 instance description.)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig6.jpg"></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig7.jpg"></p>
<p>Select the ENI-related log stream. You will see something similar to the following:</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig8.jpg"></p>

<p><span style="font-weight:700">Step 04</span>: &nbsp; <strong> Query CloudWatch Logs via CloudWatch Insights</strong></p>
<p>Go to CloudWatch &rarr; Select Logs &rarr; Select Insights</p>
<p>Select the CloudWatch Log Group from the top dropdown that you want to query.</p>
<p>Execute the following query in the query box:</p>



<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>fields @timestamp, interfaceId, srcAddr, dstAddr</em></p>
<p><em>| filter interfaceId = &lsquo;eni-09376f175e77d41c0&rsquo;</em></p>
<p><em>| sort @timestamp desc</em></p>
<p><em>| limit 20</em></p></div>
                                        </div>
<br><br>
                        
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig9.jpg"></p>
<p><span style="font-weight:700">Step 05</span>: &nbsp;<strong>Create a VPC Flow Log (Destination = S3 Bucket)</strong></p>
<p>Create a S3 bucket (crishantha-vpc-flow-logs).</p>
<p>Copy the S3 bucket ARN using the&nbsp;<em>copy ARN</em>&nbsp;button (arn:aws:s3:::crishantha-vpc-flow-logs).</p>
<p>Go to VPC &rarr; Select the Custom VPC &rarr; Click&nbsp;<em>Flow Logs</em>&nbsp;tab &rarr; Click&nbsp;<em>Create Flow Log</em></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig10.jpg"></p>
<p>The above will create a VPC Flow Log pointing to the S3 bucket output. Once the VPC Flow log is created, the respective S3 bucket is created with the bucket policy attached to it.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig11.jpg"></p>
<p>Now, you can check the S3 bucket for any logs.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig12.jpg"></p>

<p><span style="font-weight:700">Step 06</span>: &nbsp;<strong>Run Query via Athena</strong></p>
<p>Go to Athena.</p>
<p>Select the database as &ldquo;default&rdquo;.</p>
<p>Enter the query to run on the &ldquo;New Query 1&rdquo; text box.</p>
<p>P.Note: The following query was extracted from AWS Documentation [2]. You may change the bucket name, subscriber id, region-id in the S3 bucket location details.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">

<p><em>CREATE EXTERNAL TABLE IF NOT EXISTS vpc_flow_logs (</em></p>
<p><em>version int,</em></p>
<p><em>account string,</em></p>
<p><em>interfaceid string,</em></p>
<p><em>sourceaddress string,</em></p>
<p><em>destinationaddress string,</em></p>
<p><em>sourceport int,</em></p>
<p><em>destinationport int,</em></p>
<p><em>protocol int,</em></p>
<p><em>numpackets int,</em></p>
<p><em>numbytes bigint,</em></p>
<p><em>starttime int,</em></p>
<p><em>endtime int,</em></p>
<p><em>action string,</em></p>
<p><em>logstatus string</em></p>
<p><em>) PARTITIONED BY (`date` date)</em></p>
<p><em>ROW FORMAT DELIMITED FIELDS TERMINATED BY &lsquo; &lsquo; LOCATION &lsquo;s3://crishantha-vpc-flow-logs/AWSLogs/129992820683/vpcflowlogs/us-east-1/&rsquo; TBLPROPERTIES (&ldquo;skip.header.line.count&rdquo;=&rdquo;1");</em></p>
</div>
                                        </div>
<br><br>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig13.jpg"></p>

<p>Now create a partition to read the data based on a condition.</p>


<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>ALTER TABLE vpc_flow_logs</em></p>
<p><em>ADD PARTITION (`date`=&rsquo;2020&ndash;05&ndash;10')</em></p>
<p><em>location &lsquo;s3://crishantha-vpc-flow-logs/AWSLogs/129992820683/vpcflowlogs/us-east-1/2020/05/09&rsquo;;</em></p>
</div>
                                        </div>
<br><br>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig14.jpg"></p>
<p>Once the partition is created, you can run a query based on the partition.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_VPS_fig15.jpg"></p>


<div><h2>References</h2>
    


<ol>
<li>CloudWatch Insight VPC Flow Log Sample Queries :&nbsp;<a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/CWL_QuerySyntax-examples.html">https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/CWL_QuerySyntax-examples.html</a></li>
<li>Athena VPC Flow Log Examples:&nbsp;<a href="https://docs.aws.amazon.com/athena/latest/ug/vpc-flow-logs.html">https://docs.aws.amazon.com/athena/latest/ug/vpc-flow-logs.html</a></li>
</ol>
</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/chrishantha.jpeg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Crishantha Nanayakkara

                                                    </h2>
                                                    <small>Vice President - Technology
                                                    </small>
                                          </div></div>
         </div>

            </div>

                          </div>
              <!-- article content -->
                   
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