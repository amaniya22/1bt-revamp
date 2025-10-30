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
              <h1 class="blog-post-title">Virtual Machine Availability Sets in Azure</h1>
              <h4>[Setting up a VM cluster within an Availability Set]</h4><br>

 
              <div>
              <h2><strong>The Scope</strong></h2><br>
<p>When it comes to Azure, we can discuss Virtual Machine (VM) availability based on three levels within the scope of a single Azure region.</p>
<ol>
<li>Standalone VM &mdash; 99.9% availability (8.76 hours downtime per year)</li>
<li>Availability Sets &mdash; 99.95% availability (4.38 hours downtime per year)</li>
<li>Availability Zones &mdash; 99.99% availability (52.56 minutes downtime per year)</li>
</ol>
<p>In this blog, I will be focusing only on &ldquo;Availability Sets&rdquo; and how it can help improve the availability of your cloud applications.</p>
<h2><strong>Availability Sets</strong></h2><br>
<p>Availability Sets make sure that Azure VMs are deployed across multiple isolated hardware nodes in a cluster within a&nbsp;<strong>single Availability Zone</strong>&nbsp;(AZ).</p>
<p>If a hardware or software failure occurs, only a subset of your VMs will be impacted and your overall solution stays operational. Availability Sets are essential for building redundancy for your cloud solution.</p>
<p>Each VM in an Availability Set is assigned a&nbsp;<strong>Fault Domain</strong>&nbsp;and an&nbsp;<strong>Update Domain</strong>&nbsp;by the Azure Platform.</p>
<h2><strong>Fault Domains</strong></h2><br>
<p>A Fault Domain is defined as a group of VMs that share a common power source and a network switch. If there is a failure in a Fault Domain, then all the resources (VMs) in the Fault Domain become unavailable.</p>
<p>If you have multiple tiers within your application, you can place your VMs in such a way that each Fault Domain gets a VM for each tier (see Figure 01).</p>
<p>You can have up to three (03) Fault Domains.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/virtual-machine-fig1.jpg"></p>

<h2><strong>Update Domains</strong></h2><br>
<p>When a VM instance is added to an Availability Set, it is automatically assigned to an&nbsp;<strong>Update Domain&nbsp;</strong>as well. That means, each Update Domain can have multiple VMs.</p>
<p>Update Domains are used for the patching of VMs. Once an Update Domain carries out a patching process, all VMs within that Update Domain will get rebooted. At any given point, only one Update Domain is updated.</p>
<h2><strong>VM Distribution</strong></h2><br>
<p>You can have up to three (03) Fault Domains and twenty (20) Update Domains in a typical Availability Set cluster.</p>
<p>VMs are assigned sequentially within Fault Domains and Update Domains (see Figure 02).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/virtual-machine-fig2.jpg"></p>
<h2><strong>Creating a VM Cluster With an Availability Set</strong></h2><br>
<p><strong>Step 1: Creating an Availability Set</strong></p>
<p>Search for Availability Sets and click the &ldquo;New&rdquo; button to create a new Availability Set. You can enter the number of Fault Domains and Update Domains while creating it, along with other parameters (Subscription, Resource Group, Name, Region). Pls keep Managed Disk as &ldquo;Yes.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/virtual-machine-fig3.jpg"></p>
<p><strong>Step 2: Creating a few Virtual Machines and attaching them to the created Availability Set</strong></p>
<p>Now, it is time to create some VMs and assign them to the same Availability Set that you created under step 01.</p>
<p>Make sure to select &ldquo;Availability Set&rdquo; under &ldquo;Availability Options&rdquo; and select the Availability Set that you created. Furthermore, make sure to choose the same Azure Region for all VMs being created.</p>
<p>VMs created: vm-1, vm-2, vm-3 (three VMs)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/virtual-machine-fig4.jpg"></p>
<p><strong>Step 3: Monitoring the Availability Set</strong></p>
<p>Go to &ldquo;Home&rdquo; -&gt; Select &ldquo;Availability Sets&rdquo; -&gt; Select the Availability Set that you created under step 01.</p>
<p>You will see the Fault and Update Domain distribution as follows (see Figure 05).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/virtual-machine-fig5.jpg"></p>

<p>Congratulations! you have now created a VM cluster within a single Availability Zone, which has 99.95% availability.</p>
<h2><strong>References</strong></h2><br>
<ol>
<li><a href="https://docs.microsoft.com/en-us/azure/architecture/aws-professional/regions-zones" target="blank">https://docs.microsoft.com/en-us/azure/architecture/aws-professional/regions-zones</a></li>
<li><a href="https://docs.microsoft.com/en-us/azure/architecture/framework/resiliency/business-metrics" target="blank">https://docs.microsoft.com/en-us/azure/architecture/framework/resiliency/business-metrics</a></li>
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