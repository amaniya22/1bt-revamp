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
              <h1 class="blog-post-title">AWS Inspector</h1>
              <div>
            
   <p><em>In brief, we will be discussing a method to conduct vulnerability assessments for EC2 Instances. Let&rsquo;s go!</em></p>
 <h2> An Overview</h2><br>

 <p>Amazon Inspector is a&nbsp;<em>vulnerability</em>&nbsp;<em>assessment service</em>&nbsp;<span style="font-weight:700">for your Amazon EC2 instances</span>&nbsp;and&nbsp;<span style="font-weight:700">the applications</span>&nbsp;running on those instances.</p>
<p>It uses an on-host agent (Inspector Agent) to analyse the configuration and behaviour of&nbsp;<span style="font-weight:700">operating systems</span>&nbsp;and&nbsp;<span style="font-weight:700">applications</span>&nbsp;to identify potential security exposures like&nbsp;<span style="font-weight:700">common vulnerabilities</span>&nbsp;and&nbsp;<span style="font-weight:700">insecure configuration settings</span>.</p>
<p>It can basically carry out two (02) main functions:</p>
<ol>
<li><span style="font-weight:700">Network Assessment</span>: [network reachability]</li>
<li><span style="font-weight:700">Host Assessment</span>: [common vulnerabilities and exposures, CIS benchmarking, security best practices, runtime behaviour analysis]</li>
</ol>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig1.jpg"></p>

<p>As you can see in Figure 1, in order to do these assessments, especially the host assessment, you are required to install the&nbsp;<span style="font-weight:700">Inspector Agent</span>&nbsp;on the assessed EC2 instance.</p>
<p><span style="font-weight:700">Inspector Agent Installation</span></p>
<p>There are two methods you can activate Inspector in your EC2 instances.</p>
<ol>
<li>Manual Installation on EC2</li>
<li>Using the Inspector Target</li>
</ol>

<h2>Manual Installation on EC2 (Linux)</h2><br>
<p>You can follow the below steps in order to install the Amazon Inspector Agent on a Linux based EC2 instance.</p>
<p>Step 1: Create an EC2 instance (t2.micro, Amazon Linux)</p>
<p>Step 2: Download the Agent installation script by executing one of the following:</p><br>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>wget&nbsp;<a href="https://inspector-agent.amazonaws.com/linux/latest/install">https://inspector-agent.amazonaws.com/linux/latest/install</a><br />curl -O&nbsp;<a href="https://inspector-agent.amazonaws.com/linux/latest/install">https://inspector-agent.amazonaws.com/linux/latest/install</a></em></p></div>
                                        </div><br>

<p>Step 3: Install Inspector Agent</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>$ sudo bash install</em></p></div>
                                        </div><br>

                                        <p>The above command will install the Amazon Inspector Agent in your EC2 instance.</p>
<p><span style="font-weight:700">Using the Inspector Target</span></p>
<p><span style="font-weight:700">Step 1: Creating another instance to showcase the Inspector Target option</span></p>
<p>Use the following parameters while creating the EC2 instance.</p>



<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Create an EC2 instance (t2.micro, Amazon Linux instance)<br />Security Group (Open port SSH(22) and HTTP(80))<br />Add two Tags (Name </em><em>&rarr;</em><em> MyInstance2, Inspector </em><em>&rarr;</em><em> true)<br />Assign EC2SSMFullAccess IAM Role to the EC2 instance (SSM is used for Inspector installation in this example)</em></p></div>
                                        </div>
<br>
                                        <p><span style="font-weight:700">Step 2: Creating an Inspector Target</span></p>
<p>This step will define a set of EC2 target instance(s). It will filter the EC2 instances with the tag &ldquo;Inspector &rarr;true&rdquo;.</p>
<p>Go to AWS Console &rarr; Select&nbsp;<em>Inspector</em>&nbsp;&rarr; Click&nbsp;<em>Assessment Targets</em>&nbsp;&rarr; Click&nbsp;the <em>C</em>reate button to create an assessment target.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Name : EC2AssessmentTarget<br /></em>Do not check the&nbsp;<em>All Instances</em><em>&nbsp;</em>check box<em>. </em>Use the<em> Tag&nbsp;</em><em>Inspector&nbsp;</em>as the<em>&nbsp;</em><em>k</em><em>ey </em>and select&nbsp;<em>true&nbsp;</em>as the<em> value<br /></em><em>Check</em><em> the</em><em>&nbsp;Install Agents&nbsp;</em><em>check box and finally click&nbsp;</em><em>Save</em><em>&nbsp;to save the target</em></p></div>
                                        </div><br>
                                        <p>Once you click the&nbsp;<em>Save</em>&nbsp;button, you can see the following (see Figure 2) with a SUCCESS message citing that your action has successfully installed the Inspector Agent in the selected EC2 instances using the SSM RUN Command. As you know, you did this without even a sign-in to the SSM page.</p>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig2.jpg"></p> 

                                        <p>To confirm this, you can select&nbsp;<em>Assessment Targets</em>&nbsp;again and select the correct Assessment Target that you created a little while ago (see Figure 3).</p>
                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig3.jpg"></p>
                                        <p>Now click the small arrow key in front of&nbsp;<em>EC2AssessmentTarget </em><em>&rarr;</em><em>&nbsp;</em>Click the&nbsp;<em>Preview Target</em>&nbsp;button and if all went well, you will see a HEALTHY instance on the screen (see Figure 4).</p>
<p>&nbsp;</p>
                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig4.jpg"></p>
                                        <p>You can further validate this by browsing the SSM RUN Command options.</p>
<p>Go to&nbsp;<em>System Manager</em>&nbsp;&rarr; Select&nbsp;<em>Run Command&nbsp;</em>(under Instances and Nodes)&rarr; Select Command History<br /> If you see &ldquo;AmazonInspector-ManageAWSAgent&rdquo; is a &ldquo;Success&rdquo; that means the SSM RUN Command has been executed successfully (see Figure 5).</p>
                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig5.jpg"></p>
                                        <p>Now click the&nbsp;<em>Command ID&nbsp;</em>of the &ldquo;AmazonInspector-ManageAWSAgent&rdquo; command. You will see more details relating to the installation (see Figure 6).</p>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig6.jpg"></p>

                                        <p>Now you have selected an Inspector Target with EC2 instances Inspector Agent installed in them. It is high time for us to do a few assessments on them.</p>
<p>For this, we need to create an&nbsp;<em>Inspector Template</em>.</p>
<p><span style="font-weight:700">Step 3: Creating an Inspector Template</span></p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Name:&nbsp;</em><em>MyAssessmentTemplate</em><em><br />Target Name</em><em>:</em><em>&nbsp;</em><em>EC2AssessmentTarget</em><em><br />Rules Packages:<br /> </em><em>&lt;Select All 04 available packages&gt;(Network Reachability, Security Best Practices, Common Vulnerabilities and Exposures, CIS Operating System Security Configuration Benchmarks)</em><em><br />Duration:&nbsp;</em><em>1 hour</em><em>&nbsp;</em><em>(recommended)</em><em><br />SNS Topic:&nbsp;</em><em>&lt;Not required&gt;</em><em><br />Tags:&nbsp;</em><em>&lt;Select Tag Name Inspector and its value true&gt;</em><em><br />Attributes:</em><em>&lt;Not required&gt;</em><em><br />Assessment Schedule:&nbsp;</em><em>&lt;Not required&gt; &mdash; uncheck this field</em></p></div>
                                        </div><br><br>

<p>After you input the above details (see Figure 7), you can click Save to save the Assessment template.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig7.jpg"></p>
<p><span style="font-weight:700">Step 4: Analysing the Results Using Assessment Runs</span></p>
<p>After letting it run the assessment for 1 hour, you can analyse the assessment results by viewing the&nbsp;<em>Assessment Runs&nbsp;</em>link.</p>
<p>Go to&nbsp;<em>Inspector</em>&nbsp;&rarr; Select&nbsp;<em>Assessment Runs</em></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig8.jpg"></p>
<p>Click the small arrow next to the assessment run (see Figure 9).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig9.jpg"></p>
<p>Click the&nbsp;<em>Show Status</em>&nbsp;button (at the bottom of the screen on Figure 9) to see the current status of the assessment (see Figure 10).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig10.jpg"></p>
<p>The above says,</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Amazon Inspector assessed EC2AssessmentTarget for 1 hour 1 minute 29 seconds. Amazon Inspector received 804 telemetry messages in total from 1 agent.</em></p></div>
                                        </div><br><br>
                                        <p>Now press the&nbsp;<em>Close</em>&nbsp;button and go back to the Assessment Runs page and click the&nbsp;<em>Show AWS Agents</em>&nbsp;button. Here, AWS Agent refers to the EC2 instance that you are assessing (see Figure 11).</p>
<p>&nbsp;</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig11.jpg"></p>

<p>According to the above, the AWS Inspector Agent has completed its assessment and is&nbsp;<span style="font-weight:700">ready</span>&nbsp;for use.</p>
<p><span style="font-weight:700">Step 5: View Findings</span></p>
<p>After a cycle of the assessment run relating to the EC2 instance (Inspector Agent) selected, now it is the time to view the findings of the assessment run.</p>
<p>Go to&nbsp;<em>Inspector </em><em>&rarr;</em><em>&nbsp;</em>Select&nbsp;<em>Findings&nbsp;</em>(see Figure 12)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig12.jpg"></p>
<p>You can see in the above scenario there are 106 findings shown. It appears that most of them are CIS Recommendations at the OS level. If you click on (the right arrow) any of the findings, you will be able to obtain details of the findings and the recommendation steps as well.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-inspector-fig13.jpg"></p>

<p>Based on this, it appears that the issue was reported from the<em>&nbsp;CIS Operating System Security Configuration Benchmark 1.0</em>&nbsp;Rules package. Guess the instance has many OS level issues to be rectified in terms of security vulnerabilities.</p>
<div><h2>References</h2>
 
<ol>
<li>Inspector Getting Started Guide :&nbsp;<a href="https://docs.aws.amazon.com/inspector/latest/userguide/inspector_getting-started.html">https://docs.aws.amazon.com/inspector/latest/userguide/inspector_getting-started.html</a></li>
<li>Installing Amazon Inspector Agents :&nbsp;<a href="https://docs.aws.amazon.com/inspector/latest/userguide/inspector_installing-uninstalling-agents.html">https://docs.aws.amazon.com/inspector/latest/userguide/inspector_installing-uninstalling-agents.html</a></li>
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