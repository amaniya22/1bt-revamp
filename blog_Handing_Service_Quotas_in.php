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
            <h1 class="blog-post-title">Handing Service Quotas in AWS</h1>
              <div>
            
              <p><em>Using the Service Quota Console</em></p>
<h2>The Scope</h2><br>
<p>We are generally familiar with using the <strong>AWS Support Center</strong> to handle Service Quotas in the past. However, AWS introduced&nbsp;<strong>AWS Service Quota Console</strong>&nbsp;to perform this task in a much more abstract manner. This blog gives you an overview of this new feature.</p>
<h2>Why a Service Quota Increase?</h2><br>
<p>By default, most AWS services have service limits on the basis of&nbsp;<strong>region</strong>&nbsp;or&nbsp;<strong>account</strong>. Most of these service quota limits also have relatively small values by default and if you want to develop more complex systems, these service quota limits need to be increased.</p>
<p>Although most of these service quota limits are permitted to be increased, there are some which AWS don&rsquo;t allow to be changed. This is purely due to the challenges faced by doing so within the AWS infrastructure. A popular limit is the &ldquo;maximum number of IAM users you can have within an AWS account is 5,000&rdquo;. This is not allowed to be increased further by AWS.</p>
<p>If you want to get an idea about service quotas for each Service Endpoint in AWS, you can do so by following this&nbsp;<a href="https://docs.aws.amazon.com/general/latest/gr/aws-service-information.html">link</a>. This particular link arms you with all the Service Endpoints available and its default service quotas.</p>
<h2>Managing Service Quotas</h2><br>
<p>As mentioned before, AWS now has its own Service Quota Console for us to manage these limits in a more abstract manner. Let&rsquo;s dive into how we can do this.</p>
<p><strong>Step 1</strong>: Log in to your AWS account and search for &ldquo;Service Quotas&rdquo;. You will see the following dashboard (see Figure 1 and 2).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig1.jpg"></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig2.jpg"></p>
              <p><span style="font-weight:700">Step 2</span>: Click on the&nbsp;<span style="font-weight:700">AWS Services</span>&nbsp;link in the left menu to view all AWS services and its limits (see Figure 3).</p>
             
             
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig3.jpg"></p>
              <p>If you need a service limit increase of AWS EC2 you can search for EC2 using the search box (see Figure 4).</p>
              
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig4.jpg"></p>
              <p>Now you can select the provided service limits under EC2 and select the area that you want to focus on. In this example, I have selected&nbsp;<em>Amazon EC2 Auto Scaling</em>&nbsp;(see Figure 5).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig5.jpg"></p>

              <p>In Figure 6, you can see the service quotas with three attributes.</p>
<ol>
<li>Applied quota value &mdash; This is the value that is already applied</li>
<li>AWS default quota value &mdash; The default values provided by AWS</li>
<li>Adjustable &mdash; Indicates if these limits could be adjusted or not. If it says YES, then you can click the Auto Scaling Feature to get to the next screen for adjustments (see Figure 6 and 7).</li>
</ol>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig6.jpg"></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig7.jpg"></p>

              <h2>Managing Service Quotas at AWS Organizational Level</h2><br>
<p>Instead of increasing service quotas one at a time, as illustrated previously, you can create a template with all the required service quota increases of your AWS organization. This will reduce a lot of time in the long run.</p>
<p><span style="font-weight:700">Step 1</span>: Click the&nbsp;<span style="font-weight:700">Quota Request Template</span>&nbsp;link (under Organizations) on the left side menu (see Figure 8).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig8.jpg"></p>
              <p><span style="font-weight:700">Step 2</span>: Click the Associate button on the top right (see Figure 8) to activate the quota request template to any newly created account in your AWS organization. This will automatically request the increased quota values. However, existing accounts in your AWS organization will not be effected with this change (see Figure 9).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig9.jpg"></p>
              
              <h2>Creating a CloudWatch alarm based on a Service Quota</h2><br>
<p><span style="font-weight:700">Step 1</span>: Click the<span style="font-weight:700">&nbsp;AWS Services</span>&nbsp;link on the left menu and select&nbsp;<span style="font-weight:700">AWS Lambda</span>&nbsp;as the service. Then select&nbsp;<span style="font-weight:700">Concurrent Executions</span>&nbsp;from the list (see Figure 10).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig10.jpg"></p>
              <p>Once this is clicked, you will be forwarded to the next page which has a&nbsp;<span style="font-weight:700">Monitoring</span>&nbsp;section along with&nbsp;<span style="font-weight:700">CloudWatch alarms</span>. Here you can add any CloudWatch alarms by clicking the&nbsp;<span style="font-weight:700">Create</span>&nbsp;button under&nbsp;<span style="font-weight:700">CloudWatch alarms&nbsp;</span>(see Figure 11).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig11.jpg"></p>

              <p><span style="font-weight:700">Step 2:</span> Now you can create the CloudWatch alarm to notify you on AWS Lambda concurrent execution threshold jumps, dafault of which is 1,000 (see Figure 12).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/HA_fig12.jpg"></p>
              

<h2>Conclusion</h2><br>
<p>We previously used to increase service quota limits using the AWS Support Center Console. With the introduction of a separate Service Quota Console, as Solution Architects we have been given a much more improved interface to control/manage service level quotas and to also create templates for new AWS accounts under ans AWS organization.
</p>

<div><h2>References</h2><br>
 
<ol>
<li>Service Endpoints and Quotas:&nbsp;<a href="https://docs.aws.amazon.com/general/latest/gr/aws-service-information.html">https://docs.aws.amazon.com/general/latest/gr/aws-service-information.html</a></li>
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