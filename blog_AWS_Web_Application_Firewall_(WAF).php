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
              <h1 class="blog-post-title">AWS Web Application Firewall (WAF)</h1>
              <div>
              <p><em>[Highly Configurable and Scalable, Cloud Native web application Layer-7 firewall giving you the first line of defense]</em></p>
<p>There are&nbsp;<span style="font-weight:700">many security threats</span>&nbsp;that exist today in a typical enterprise distributed application.</p>
<ol>
<li><span style="font-weight:700">DDoS</span>: Flood Attacks (SYN Floods, UDP Floods, ICMP Floods, HTTP Floods, DNS Query Floods), Reflection Attacks</li><br>
<li><span style="font-weight:700">Application Vulnerabilities</span>: SQL Injections, Cross Site Scripting (XSS), Open Web Application Security Project (OWASP), Common Vulnerabilities and Exposures (CVE)</li><br>
<li><span style="font-weight:700">Bad Bots</span>: Crawlers, Content Scrapers, Scanners and Probes</li>
</ol>
<p>Of these, AWS WAF can be used to handle security threats such as SQL injections and Cross Site Scripting (XSS) in a typical web application.</p>
<p>The web application HTTP requests can be routed via AWS WAF and then forwarded to either of the AWS services.</p>
<ol>
<li>AWS CloudFront (Global Service)</li><br>
<li>AWS API Gateway (Regional Service)</li><br>
<li>AWS Application Load Balancer (Regional Service)</li>
</ol>
<p>Logging and Monitoring of WAF is handled by&nbsp;<em>Kinesis Firehose&nbsp;</em>and&nbsp;<em>CloudWatch</em>,&nbsp;respectively.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig1.jpg"></p>
<h2>Web ACL</h2><br>
<p>When WAF associates with any of the above three AWS services, it associates with a Web ACL. A Web ACL is a fundamental component of WAF, which defines a set of rules for any of these services (see Figure 2).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig2.jpg"></p>
<p>As mentioned, a Web ACL is a collection of&nbsp;<span style="font-weight:700">rules</span>. A rule is a collection of&nbsp;<span style="font-weight:700">conditions&nbsp;</span>(see Figure 3).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig3.jpg"></p>

<h2>How to create a Web ACL in WAF?</h2><br>
<p>In order to demonstrate the WAF capability, it is always good to go through a simple scenario that can showcase its capability. Here, I am going to block a CloudFront distribution, which I created sometime ago. So, if you are trying this out, please make sure you have one of the services (CloudFront, API Gateway or ALB) already created.</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>P.Note: You can try out one of my&nbsp;other <a href="https://1billiontech.com/blog.php">Auxenta VP Talks blogs</a> to&nbsp;get an understanding of how to create your own CloudFront distribution on AWS [3]. This should be able to help you out if you&rsquo;re not already familiar with CloudFront.</em></p>
</div></div><br>

<p><span style="font-weight:700">Task 1:</span>&nbsp;<span style="font-weight:700">Describe a Web ACL and associate it to AWS resources</span></p>
<p>Go to AWS WAF &rarr; Web ACLs &rarr; Click the&nbsp;<em>Create Web ACL&nbsp;</em>button (see Figure 4).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig4.jpg"></p>
<p>Give a name to the Web ACL and associate a Resource Type to it. Here we are associating a CloudFront distribution (see Figure 5), which I have created previously. You can attach this to not only CloudFront but ALB and API Gateway as well.</p>
<p>P.Note: If you select CloudFront, then you need to select &ldquo;Global&rdquo; as the scope since it is a Global service. If you select either ALB or API Gateway, you will have to select a region where the associated resource is located.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig5.jpg"></p>
<p>Click the&nbsp;<em>Add AWS Resources</em>&nbsp;button to associate the CloudFront Distribution that you created previously (see Figure 6).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig6.jpg"></p>

<p>Click the&nbsp;<em>Next</em>&nbsp;button and you will be directed to another page to add your rules to Web ACL. We will skip this for the moment allowing us to do it at a later stage.</p>
<p>Select&nbsp;<em>Allow</em>&nbsp;for the Web ACL Action as well.</p>
<p>(P.Note: Web ACL Action defines what you are going to do when the defined rule is active.)</p>
<p>Leave&nbsp;<em>Set Rule Priority&nbsp;</em>as it is and click&nbsp;<em>Next.</em></p>
<p>Leave&nbsp;<em>Configure Metrics</em>&nbsp;as it is and click&nbsp;<em>Next</em>.</p>
<p>Finally review your selections and click the&nbsp;<em>Create Web ACL</em>&nbsp;button.</p>
<p>The above will create a Web ACL without any rules. If you go back to the Web ACL link, you should be able to see the below view. Make sure to not select a region and instead to select&nbsp;<em>Global (CloudFront)</em>&nbsp;in the top dropdown in order to see your created Web ACL (see Figure 7).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig7.jpg"></p>
<p>However, even if you&rsquo;re able to see the created Web ACL, the CloudFront propagation for this update will take a bit of time. You can see this if you visit the CloudFront console page. Allow for some time to complete the CloudFront propagation before you proceed to the next step.</p>
<p><span style="font-weight:700">Task 2: Add a condition to block my IP address</span></p>
<p>Go to AWS WAF &rarr; IP Sets &rarr; Click the&nbsp;<em>Create IP Set</em>&nbsp;button.</p>
<p>Select IPv4 and give your IP address with /32 as the postfix. If you are not sure how to get your network&rsquo;s public IP, you can type &ldquo;What is my IP&rdquo; on Google. It&rsquo;s that simple (see Figure 8)!</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig8.jpg"></p>
<p><span style="font-weight:700">Task 3: Add a rule to the created condition</span></p>
<p>In order to create a rule, you need to create a Rule Group.</p>
<p>Go to AWS WAF &rarr; Rule Group &rarr; Click the&nbsp;<em>Create Rule Groups&nbsp;</em>button (see Figure 9)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig9.jpg"></p>
<p>Click&nbsp;<em>Next </em><em>&rarr;</em><em>&nbsp;</em>Click the&nbsp;<em>Add Rule&nbsp;</em>button &rarr; Set the following parameters to create a Rule:</p>
<p>Rule Name &rarr;&nbsp;<em>MyRule</em></p>
<p>If a Request &rarr; Select&nbsp;<em>Matches the requirement</em></p>
<p>Statement (Inspect)&rarr; Select&nbsp;<em>Originates from an IP Address In</em></p>
<p>Statement (IP Set) &rarr; Select the IP Set that you created in Task 2</p>
<p>Action &rarr; Select&nbsp;<em>Block</em></p>
<p>Click&nbsp;<em>Next</em></p>
<p>Select the&nbsp;<em>Rule Priority</em>. This is not required here since you have only one rule.</p>
<p>Finally, review your selections and click&nbsp;<em>Create Rule Group</em>&nbsp;to confirm your rule settings.</p>
<p><span style="font-weight:700">Task 4: Add the created rule group/rule to the Web ACL</span></p>
<p>Go to AWS WAF &rarr; Web ACL &rarr; Select the&nbsp;<em>Web ACL</em>&nbsp;that you have created &rarr; Click&nbsp;<em>Rules</em>&nbsp;tab (see Figure 10).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig10.jpg"></p>
<p>You can see the Web ACL still does not have its rules attached.</p>
<p>Click the&nbsp;<em>Add Rules</em>&nbsp;button dropdown &rarr; Select&nbsp;<em>Add my own rules and rule groups</em>.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig11.jpg"></p>

<p>Give a name for the rule that you&rsquo;re specifying here (see Figure 11).</p>
<p>[P.Note: I strongly feel the new WAF UI has some issues relating to some of its fields. Having to define the rule name twice is a good example of this. Once under the Rules Group and once under Web ACL rule attachments.]</p>
<p>Select the Rules Group that you created from the dropdown and click the&nbsp;<em>Add rule</em>&nbsp;button and then click&nbsp;<em>Save</em>.</p>
<p>Now you can see that the added rule is attached to the Web ACL.</p>
<p>Now it&rsquo;s time to browse the web URL that you have blocked for your IP. If all is fine and dandy, it should be similar to the below screen (see Figure 12).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_WAF_fig12.jpg"></p>

<p>If you want to remove the blocking, you can go to the Web ACL and delete the related rule and try the web link again. After a few refresh attempts, you will see that it takes you back to your original site.</p>
<h2>References</h2>
<br>
<ol>
<li>Orchestrate Perimeter Security Across Distributed Applications (re:Invent 2018):&nbsp;<a href="https://www.youtube.com/watch?v=ELIiF-jE0y8">www.youtube.com/watch?v=ELIiF-jE0y8</a></li><br>
<li>Protecting your web application using AWS Managed Rules for AWS WAF:&nbsp;<a href="https://www.youtube.com/watch?v=ll-uvVgQ3Jg">www.youtube.com/watch?v=ll-uvVgQ3Jg</a></li><br>
<li><a href="https://1billiontech.com/blog_Using_AWS_ACM_with_CloudFront_and_Route_53_to_Secure_your_Cloud_Domains.php"> Connecting your website securely via AWS Route 53, CloudFront and AWS ACM:&nbsp;</a>https://1billiontech.com/blog_Using_AWS_ACM_with_CloudFront_and_Route_53_<br>to_Secure_your_Cloud_Domains.php</li>
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