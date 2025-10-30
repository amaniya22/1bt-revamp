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
              <h1 class="blog-post-title">Cloud Infrastructure Management using AWS SSM (Part 02) — Patch Manager and Inventory
 
 </h1>
              <div>


              <p>This is the second part of my AWS Systems Manager (SSM) blog series. The first  primarily talked about how we can use RUN command and how to create a SSM Managed instance.<br><br>
This blog primarily will be focusing on another capability of SSM, which is the Patch Manager.
</p>
<h2>Introduction</h2><br>
<p>AWS Patch Manager<em>&nbsp;automates the process of patching your managed instances with both security and other types of updates.</em></p>
<p>It enables you to scan instances for missing patches and apply missing patches individually or to a&nbsp;<em>patch group</em>.</p>
<p>For&nbsp;<em>security patches</em>, Patch Manager uses&nbsp;<em>patch baselines</em>&nbsp;that include rules for auto-approving patches within days of their release, as well as a list of approved and rejected patches.</p>
<p>You&nbsp;can use&nbsp;<em>Patch Manager</em>&nbsp;to apply patches for both operating systems and applications running on them.</p>
<h2>The Patching Process</h2>
<p>There are five main steps that need to be followed in the Patch Manager patching process (see Figure 1).</p>
<ol>
<li>Define a Default Patch Baseline</li>
<li>Create Patch Groups</li>
<li>Create a Maintenance Window</li>
<li>Execute the Patch RUN Command</li>
<li>Compliance Check</li>
</ol>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig1.jpg"></p>
              <h2><strong>Step 1 &mdash; Define a Default Patch Baseline</strong></h2>
<p>Patch Manager uses&nbsp;<em>Patch Baselines&nbsp;</em>to define what gets installed. These baselines include&nbsp;<em>rules</em>&nbsp;for auto approving patches within days of their release, as well as a list of approved and rejected patches.</p>
<p>Patch Baselines can depend on the Operating System (OS), which has its own&nbsp;<em>default patch baseline</em>. If an OS has multiple distributions (like in Linux), then you will have multiple default patch baselines for each OS distribution mainly because each distribution has its own software repositories. For example:</p>
<p>AWS-AmazonLinux2DefaultPatchBaseline &mdash; For Amazon Linux 2 distribution</p>
<p>AWS-UbuntuDefaultPatchBaseline &mdash; For Ubuntu Linux distribution</p>
<p>AWS-DefaultPatchBaseline &mdash; For Windows</p>
<p>AWS-PredefinedDefaultPatchBaseline &mdash; For Windows (same as above)</p>
<p>AWS-PredefinedDefaultPatchBaseline-OS-Applications &mdash; For Windows and MS applications</p>
<h2><strong>Step 2 &mdash; Create Patch Groups</strong></h2>
<p>This defines groups of resources, which act as targets for patching tasks.</p>
<h2><strong>Step 3 &mdash; Create a Maintenance Window</strong></h2>
<p>The maintenance window defines a schedule, duration, targets and tasks. It works as the main coordinator for the whole patching process.</p>
<h2><strong>Step 4 &mdash; Executing the Patch RUN Command</strong></h2>
<p>Execute the&nbsp;<strong><em>AWS-RunPatchbaseline</em></strong>&nbsp;command (the built-in RUN command) with a baseline defined to a given target(s). This process orchestrates the whole patching process with defined targets.</p>
<h2><strong>Step 5 &mdash; The Compliance Check</strong></h2>
<p>Once patches are executed, target groups are checked for any compliance issues. This is basically being managed by the&nbsp;<em>AWS SSM Inventory</em>&nbsp;feature.</p>
<h2>The Patching Process &mdash; Sample Demo</h2>
<p>Go to SSM -&gt; Select&nbsp;<em>Patch Manager&nbsp;</em>-&gt; Click&nbsp;<em>Configure Patching</em></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig2.jpg"></p>
              <p>Select instances manually (see Figure 3).
</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig3.jpg"></p>
              <p>Select&nbsp;<strong><em>Patching Schedule</em></strong>&nbsp;as&nbsp;<strong>Skip scheduling</strong><strong><em>&nbsp;and patch instances now</em></strong>.</p>
<h2>Use&nbsp;<strong><em>Scan and Install</em></strong>&nbsp;as the&nbsp;<em>Patching Operation&nbsp;</em>(see Figure 4)<em>.</em></h2>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig4.jpg"></p>
              <p>Click the&nbsp;<strong><em>Configure Patching</em></strong>button.</p>
<p>Click the&nbsp;<strong><em>View Details</em></strong>&nbsp;button, which appears on the top of the page. You will get a page like below if the patching process went well (see Figure 5).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig5.jpg"></p>
              <p>Go to SSM -&gt; Select&nbsp;<em>Command History -&gt;&nbsp;</em>Select the latest Command it processed.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig6.jpg"></p>
              <p>As an alternative, you can go to SSM -&gt;&nbsp;<em>Managed Instances</em>&nbsp;-&gt; select the&nbsp;<em>Managed Instance</em>, which you have applied.</p>
<p>You can see multiple patches applied to the selected managed instance (see Figure 7).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig7.jpg"></p>
              <p>Now start setting up the&nbsp;<em>Inventory&nbsp;</em>to check patching compliance.</p>
<p>Targets: Manually selected resources.</p>
<p>Keep the rest of the field attributes as default and finally click&nbsp;<em>Setup Inventory.</em></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig8.jpg"></p>
              <p>Go to SSM -&gt; Inventory -&gt; Select the instance that you initiated the inventory process.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig9.jpg"></p>
              <p>Now, from the above list (see Figure 9), select the managed instance that you started the inventory process.</p>
<p>Click the&nbsp;<em>Inventory&nbsp;</em>tab to see the inventory data for the given managed instance. You can select&nbsp;<em>Associations</em>&nbsp;and&nbsp;<em>Patch</em>&nbsp;tabs as well to see all associations and patches (see Figure 10).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig10.jpg"></p>
              <p>Finally, click the&nbsp;<em>Configuration Compliance&nbsp;</em>tab to see the patch compliance (see Figure 11).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SSM_fig11.jpg"></p>
              <p>it appears that the patching has not been applied as expected. Now you can investigate further into this to find the root cause of the issue.</p>
<p>Hope this blog gave you some insights into how patching can be done and how SSM can help you along this journey.</p>



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