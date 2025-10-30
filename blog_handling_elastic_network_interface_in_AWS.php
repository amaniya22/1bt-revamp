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
              <h1 class="blog-post-title">Handling Elastic Network Interface(s) (ENIs) in AWS</h1>
              <div>
              <p><em>Shows how we can map single EC2 instances to multiple Network Interfaces via Multiple Elastic IPs.</em></p>
<p>This is an introductory blog on how AWS ENI behaves with EC2 instances. If you&rsquo;ve just started studying AWS, you may not use this feature straightaway. Instead, it can be used in multiple other technical use cases. However, it is always good to understand the real concept behind ENIs rather than knowing it conceptually.</p>
<p>ENIs can be useful in the following key scenarios [1].</p>
<ol>
<li>Creating a Management Network</li>
<li>Use Network and Security Appliances in your VPC</li>
<li>Create dual-homed instances with workloads/roles on distinct subnets</li>
<li>Create a low-budget, high availability solution</li>
</ol>
<h2>Elastic Network Interface (ENI)</h2><br>
<p>ENI is a logical networking component in a VPC that represents a Virtual Network Card. It can have the following attributes.</p>
<ol>
<li>A primary private IPv4 address</li>
<li>One or more secondary private IPv4 addresses</li>
<li>One Elastic IP Address (IPv4) per private IPv4 address</li>
<li>One public IPv4 address</li>
<li>One or more IPv6 addresses</li>
<li>One or more security groups</li>
<li>A MAC address</li>
<li>A source/destination check flag</li>
</ol>
<p>Some of the key features of ENIs are as follows:</p>
<ol>
<li>Each instance in your VPC has a default network interface (the primary network interface &mdash; eth0) that is assigned a private IPv4 address from the IPv4 address range of your VPC (see Figure 1).</li><br>
<li>You cannot detach the default (primary) network interface from an instance.</li><br>
<li>You can create and attach an additional network interface to an instance in your VPC (see Figure 2).</li><br>
<li>The number of network instances you can attach varies by instance type.</li><br>
<li>You can create a network interface, attach it to an instance, detach it from an instance and attach it to another instance. A network interface&rsquo;s attributes follow it as it is attached or detached from an instance and reattached to another instance. When you move a network interface from one instance to another, network traffic is redirected to the new instance.</li>
</ol>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig1.jpg"></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig2.jpg"></p>
<h2>The Scope</h2><br>
<p>In this blog, we will be primarily focusing on how to create multiple ENIs for a single EC2 instance and attach multiple Elastic IPs for each ENI private IP. Using this approach, you can create multiple routes to the same instance application installations.</p>
<p>We will discuss how we attach and detach ENIs to and from EC2 instances in a later blog.</p>
<p><span style="font-weight:700">Task 1: Create an EC2 instance and install Apache</span></p>
<p>Create an EC2 instance (Amazon Linux, t2.micro) and install Apache on it.</p>
<p>While creating the instance, create a Security Group (my-sg-1) and open port 80(HTTP) for future testing.</p>
<p>When you create an EC2 instance it attaches a default network interface (primary ENI &mdash; eth0) to it (see Figure 3).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig3.jpg"></p>
<p><span style="font-weight:700">Task 2: Allocate an Elastic IP</span></p>
<p>Now let&rsquo;s allocate a new Elastic IP to the primary ENI (If your subnet is public and is configured to have auto generated public IP(s) then this is not needed. But, here we are going to showcase how Elastic IP(s) can be allocated to ENIs).</p>
<p>Go to Elastic IP(s) &rarr; Click &ldquo;Allocate Elastic IP Address&rdquo; &rarr; Select Amazon Pool of IPv4 addresses &rarr; Click&nbsp;<em>Allocate&nbsp;</em>(see Figure 4)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig4.jpg"></p>
<p><span style="font-weight:700">Task 3: Associate the created Elastic IP to the primary/default ENI</span></p>
<p>Go to Elastic IP Addresses &rarr; Click the&nbsp;<em>Actions</em>&nbsp;button and select&nbsp;<em>Associate Elastic IP</em>&nbsp;&rarr; Select&nbsp;<em>Network Interface</em>&nbsp;as the<em> Resource Type</em>&nbsp; &rarr; Select the&nbsp;<em>Primary Network Interface&nbsp;</em>that you&rsquo;ve created from the <em>Network Interface</em> search box &rarr; Click&nbsp;<em>Associate.</em></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig5.jpg"></p>
<p><span style="font-weight:700">Task 4: Run the EC2 instance Apache installation using the Elastic IP via the primary/default ENI</span></p>
<p>Let&rsquo;s try to run the instance now with the assigned Elastic IP. You should see something similar to this. Here, the index.html has a dummy text &ldquo;Testing ENI&rdquo; (see Figure 6).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig6.jpg"></p>
<p>Now, let&rsquo;s try to create another ENI and attach an Elastic IP with a new Security Group attached to it. This allows us to navigate the same instance via a different network address (new Elastic IP).</p>
<p><span style="font-weight:700">Task 5: Create the additional ENI (second ENI)</span></p>
<p>As a prerequisite, create another Security Group (my-sg-2) without allowing any ports to it.</p>
<p>Now, create the additional ENI.</p>
<p>Go to&nbsp;<em>Network Interfaces</em>&nbsp;&rarr; Click&nbsp;<em>Create Network Interface </em><em>&rarr;</em><em>&nbsp;</em>Select the same subnet with which you created the EC2 instance &rarr; Select&nbsp;<em>Auto Assign&nbsp;</em>for the IPv4 Private IP &rarr; Select the Security Group (my-sg-2) &rarr; Create ENI (see Figure 7).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig7.jpg"></p>
<p><span style="font-weight:700">Task 6: Create another Elastic IP</span></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig8.jpg"></p>
<p><span style="font-weight:700">Task 7: Associate the Elastic IP (created under step 6) to the additional ENI</span></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig9.jpg"></p>
<p><span style="font-weight:700">Task 8: Attach the additional ENI to the EC2 instance</span></p>
<p>In order to attach this additional ENI to the EC2 instance, you are first required to do the following configuration.</p>
<p>Go to EC2 instances &rarr; Select the EC2 instance &rarr; Select&nbsp;<em>Actions</em>&nbsp;&rarr; Select&nbsp;<em>Networking</em>&nbsp;&rarr; Select&nbsp;<em>Attach Network Interface&nbsp;</em>and select the second ENI you&rsquo;ve created.</p>
<h2>The Conclusion</h2><br>
<p>Finally, as a result of the above exercise, the EC2 instance is now attached to the two ENIs.</p>
<ol>
<li>Default/Primary ENI (eth0)</li>
<li>Additional ENI (eth1)</li>
</ol>
<p>Now you should be able to see something similar to the following screen.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/ENI_fig10.jpg"></p>

<h2>References</h2>
<ol>
<li>Elastic Network Interfaces:&nbsp;<a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html">https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html</a></li>
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