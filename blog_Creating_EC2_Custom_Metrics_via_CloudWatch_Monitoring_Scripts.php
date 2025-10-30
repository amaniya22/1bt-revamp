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
              <h1 class="blog-post-title">Creating EC2 Custom Metrics via CloudWatch Monitoring Scripts</h1>
              <div>
           <h2>EC2 Monitoring with CloudWatch</h2>

           <p>We all know EC2 Monitoring can be done in two levels in AWS.</p>
              <ol>
              <li>Using AWS Provided Metrics (Basic and Detailed Monitoring)</li>
              <li>Using Custom Metrics (CloudWatch Agents and CloudWatch Monitoring Scripts)</li>
              </ol>
              <p>Of these two, AWS provided metrics will give us information related to CPU Utilization, CPU Credit Balance, Network IN/ OUT and Status Checks (Instance Status and System Status). Whereas, Custom Metrics is primarily there to extract RAM details, Instance Swap details or any other custom metric.</p>

<h2>EC2 Monitoring via Custom Metrics</h2>
<p>The second level of EC2 Monitoring mentioned above, i.e. using Custom Metrics, is twofold in AWS.</p>
<ol>
<li>Custom Metrics via CloudWatch Agents (the recommended way)</li>
<li>Custom Metrics via CloudWatch Monitoring Scripts</li>
</ol>
<h2>EC2 Monitoring via CloudWatch Monitoring Scripts</h2>
<p>In this blog post, we explain only the second option above, which is&nbsp;<strong>Custom Metrics via CloudWatch Monitoring Scripts</strong>&nbsp;for EC2 instances.</p>
<h2>Steps</h2>
<p><span style="font-weight:700">Step 1:</span> Create an Amazon Linux EC2 instance that you need to monitor.</p>
<p><span style="font-weight:700">Step 2:</span> SSH into the EC2 instance and set the environment in order to execute EC2 CloudWatch Custom Scripts.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">

<p><em>$ sudo yum update</em></p>
<p><em>$ sudo yum install -y perl-Switch perl-DateTime perl-Sys-Syslog perl-LWP-Protocol-https perl-Digest-SHA.x86_64</em></p>

</div></div><br><br>
<p><span style="font-weight:700">Step 3:</span> Now download, install and configure monitoring scripts to a preferred folder in the EC2 instance.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>$ curl&nbsp;</em><a href="https://aws-cloudwatch.s3.amazonaws.com/downloads/CloudWatchMonitoringScripts-1.2.2.zip"><em>https://aws-cloudwatch.s3.amazonaws.com/downloads/CloudWatchMonitoringScripts-1.2.2.zip</em></a><em>&nbsp;-O</em></p>
                                    
</div></div><br><br>

<p><span style="font-weight:700">Step 4:</span> Unzip the downloaded Zip file and move it to the&nbsp;<em><strong>aws-scripts-mon</strong></em>&nbsp;folder</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>$ unzip CloudWatchMonitoringScripts-1.2.2.zip</em></p>
<p><em>$ cd aws-scripts-mon</em></p>

<p>You should see the following scripts in the&nbsp;<em><strong>aws-scripts-mon</strong></em>&nbsp;folder now (see Figure 01).</p>
</div></div><br><br>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/EC2-metrics_fig1.jpg"></p>
<p><span style="font-weight:700">Step 5:</span> Create an IAM Role to push the CloudWatch metrics from EC2 (you need to execute this step in AWS IAM).</p>
<p>You can use&nbsp;<em><strong>CloudWatchFullAccess</strong></em>&nbsp;AWS policy to create this role. After creating the IAM Role, you can attach the role to the EC2 instance.</p>
<p><span style="font-weight:700">Step 6:</span> Go back to the EC2 instance where you intend to execute the Custom scripts and execute the following script (<em><strong>mon-put-instance-data.pl</strong></em>) to push it to CloudWatch (see Figure 02).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/EC2-metrics_fig2.jpg"></p>

<p><span style="font-weight:700">Step 7:</span> If you wish, you can even schedule this CloudWatch metrics pushing job to every 5 minutes via&nbsp;<em>crontab</em>.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>$ crontab -e</em></p>
<p><em>*/5 * * * * ~/aws-scripts-mon/mon-put-instance-data.pl &mdash; mem-used-incl-cache-buff &mdash; mem-util &mdash; disk-space-util &mdash; disk-path=/ &mdash; from-cron</em></p>
</div></div><br><br>
<p><span style="font-weight:700">Step 8:</span> You can now go to CloudWatch in the AWS Console to see the Memory related metrics populated by CloudWatch Custom Metrics Scripts.</p>

<p><em>Go to CloudWatch </em><em>&rarr;</em><em> Metrics </em><em>&rarr;</em><em> Select &ldquo;All Metrics&rdquo; </em><em>&rarr;</em><em> Select &ldquo;Custom Namespaces&rdquo; </em><em>&rarr;</em><em> Select &ldquo;System/ Linux&rdquo; </em><em>&rarr;</em><em> Select &ldquo;Instance Id&rdquo;</em></p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/EC2-metrics_fig3.jpg"></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/EC2-metrics_fig4.jpg"></p>

<p>You will see three EC2 instance metrics shown on it.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/EC2-metrics_fig5.jpg"></p>



<p>Finally, you can create CloudWatch Alarms out of these metrics. Well Done!</p>


<h2>References:</h2>
<ol>
<li>Monitoring Memory and Disk Metrics for Amazon EC2 Linux Instance:&nbsp;<a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/mon-scripts.html">https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/mon-scripts.html</a></li>
</ol>
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