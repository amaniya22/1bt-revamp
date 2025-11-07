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
            <h1 class="blog-post-title">AWS Disaster Recovery Scenarios</h1>
              <div>
            
                
         <p>Disaster Recovery (DR) is all about &ldquo;preparing for&rdquo; or &ldquo;recovering from&rdquo; a disaster [1]. In this blog, I will explain Disaster Recovery scenarios/options that are available on AWS. It is important to have a high level understanding of these options when we are designing fault tolerant, highly available AWS solution architectures.</p>
<p>As the first step, let&rsquo;s try to understand what Recovery Point Objective (RPO) and Recovery Time Objective (RTO) is all about and then dive into DR scenarios on AWS.</p>
<h2>RPO vs RTO</h2><br>
<p>RPO and RTO, in essence, are benchmarks that we can define before we set up a DR system for an application that is going to be deployed in the cloud.</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>If both RPO and RTO have a low figure, that means you have a system that has a near real time DR plan.</em></p></div>
                                   </div>

<br>
<p><span style="font-weight:700">Recovery Time Objective (RTO)</span></p>
<p>This indicates the time it takes to recover from a disaster (restoring a business process to its service level, as defined by the Operational Level Agreement).</p>
<p>For example, if a disaster occurs at 12.00pm (noon) and the RTO is four (04) hours, the DR process should recover the system by 4.00pm.</p>

<p><span style="font-weight:700">Recovery Point Objective (RPO)</span></p>
<p>The acceptable amount of data loss measured in time.</p>
<p>For example, if a disaster occurs at 12:00 PM (noon) and the RPO is one hour, that means the system should recover all its data that was in the system by 11:00 AM. That means, the total data loss is only one hour between 11.00am and 12.00pm (noon).</p>



<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig1.jpg"></p>

<h2>Disaster Recovery Scenarios in AWS</h2><br>
<p>There are basically four (04) Disaster Recovery scenarios identified in AWS (see Figure 2). Among them, some have a higher RTO and some have a lower RTO. It is always good to understand how we can minimize RTO and what level of commitment is needed to achieve those levels.</p>
<ol>
<li><strong>Backup and Restore&nbsp;</strong>&mdash; Data is backed up and restored</li>
<li><strong>Pilot Light</strong>&nbsp;&mdash; Only minimal critical functionalities</li>
<li><strong>Warm Standby</strong>&nbsp;&mdash; Fully functional scaled down version</li>
<li><strong>Multi Site (Active-Active)</strong>&nbsp;&mdash; Another fully functional site</li>
</ol>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Out of these four scenarios, Multi Site (Active-Active) has the lowest RTO and Backup and Recovery has the highest RTO.</em></p></div>
                                   </div>
<br>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig2.jpg"></p>


<p>P.Note: In these scenarios, the site where the disaster happens is referred to as &ldquo;primary infrastructure&rdquo; and the recovery infrastructure is referred to as &ldquo;secondary infrastructure&rdquo;. The &ldquo;primary infrastructure&rdquo; could either be an &ldquo;on-premise&rdquo; or an &ldquo;AWS infrastructure&rdquo;. The &ldquo;secondary infrastructure&rdquo; will be an &ldquo;AWS infrastructure&rdquo;.</p>
<p>Let&rsquo;s dive into these four scenarios to some detail.</p>
<p><span style="font-weight:700">1.0 Backup and Restore</span></p>
<p>There are multiple backup options available.</p>
<ol>
<li><strong>Amazon S3&nbsp;</strong>&mdash; Amazon S3 is an ideal destination for backup data that might be needed to quickly perform a restore.</li><br>
<li><strong>Amazon Glacier</strong>&nbsp;&mdash; Glacier can also be used in conjunction with S3 to produce a tiered &ldquo;long-term&rdquo; backup solution.</li><br>
<li><strong>Amazon Import/Export&nbsp;</strong>&mdash; This can be used to transfer very large data sets by shipping storage devices directly to AWS.</li><br>
<li><strong>Amazon Storage Gateway&nbsp;</strong>&mdash; This enables snapshots of your on-premise data volumes to be transparently copied into S3 for backup. Cached volumes allow you to store primary data in S3, but can keep your frequently accessed data locally for low-latency access. VTL configuration can be used as a replacement for traditional magnetic tape backup.</li>
</ol>



<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig3.jpg"></p>


<p>When it comes to restoring data from EC2 instances, this can be done through a combination of the following (see Figure 4).</p>
<ol>
<li>Provisioning the instances from an AMI</li>
<li>Restoring data from S3</li>
</ol>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig4.jpg"></p>


<p><span style="font-weight:700">2.0 Pilot Light</span></p>
<p>The secondary environment that runs only the&nbsp;<strong>most critical core infrastructure</strong>. When the time comes for recovery, you can rapidly provision a full scale production environment around the critical core.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig5.jpg"></p>


<p>The pilot light method gives you a quicker recovery time than the backup-restore method because the core pieces of the system are already running and are continually kept up to date.</p>
<p>In Figure 5, the database is up and running, but the other components (Reverse Proxy and the Application Server) are inactive.</p>
<p>In order to recover the inactive components and to scale up the running components, you can adhere to one of the following steps:</p>
<ol>
<li>Start your EC2 based instances from any customized AMIs</li>
<li>Scale up database instances, if required</li>
<li>Add any fail-over features to both inactive and active components (Multi-AZ, etc.)</li>
<li>Point the Route 53 DNS to the secondary site</li>
</ol>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig6.jpg"></p>

<p><span style="font-weight:700">3.0 Warm Standby</span></p>
<p>This is where the secondary (backup) environment runs the same infrastructure as the primary one, but in smaller sized components to reduce costs (see Figure 7). For example, if the primary infrastructure has an extra large EC2 instance, the secondary site would run a medium sized EC2 instance.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig7.jpg"></p>

<p>When a disaster occurs, smaller version(s) can be scaled up instantly to provide an infrastructure similar to the primary one in a quicker time than the Pilot light method (see Figure 8).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig8.jpg"></p>

<p><span style="font-weight:700">4.0 Multi Site (Active-Active)</span></p>
<p>This is where the secondary (backup) infrastructure is a copy (in structure, size and services running) of the primary site.</p>
<p>This allows for the best performance, high availability and the best recovery time compared to other DR scenarios explained. However, the cost will be exactly double of the primary infrastructure.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig9.jpg"></p>
<p>In an AWS multi-region setup, the active-active state can provide not only fail-over, but the load balancing aspect as well. We can use Route 53 to balance the load with the&nbsp;<strong>Weighted Routing Policy&nbsp;</strong>(see Figure 9).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-disaster-fig10.jpg"></p>



<p>When a disaster strikes, Route 53 will route the traffic entirely to the secondary site. There is no need for any infrastructure scaling, since both the primary and secondary environments maintained a production level setup even before the disaster struck (see Figure 10).</p>

<h2>The Comparison</h2><br>
<p><strong>Backup and Recovery</strong>: Low cost, slow in recovery (high RTO)</p>
<p><strong>Pilot Light</strong>: Fairly cheap, recovery is faster than the &ldquo;Backup and Recovery&rdquo; method</p>
<p><strong>Warm Standby</strong>: Costly, but the recovery is faster than the &ldquo;Pilot Light&rdquo; method</p>
<p><strong>Multi Site</strong>: Very Costly (double the cost), but the recovery is faster than all other DR scenarios (almost zero recovery time/RTO)</p>

<h2>Conclusion</h2><br>
<p>Which DR scenario to adopt of the above explained ones should be purely based on the criticality and the cost that you can afford. As illustrated, the multi site approach gives you the best RTO despite its high cost factor. If cost is a major factor in your decision making process, then you can opt for one of the other three options listed.</p>


<div><h2>Resources</h2><br>
 
<ol>
<li>Using AWS for Disaster Recovery (Whitepaper) &mdash; October 2014 &mdash; AWS</li>
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