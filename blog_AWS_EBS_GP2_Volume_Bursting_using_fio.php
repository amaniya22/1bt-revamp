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
              <h1 class="blog-post-title">AWS EBS GP2 Volume Bursting using fio</h1>
              <div>
              <p>
                              <p>As you maybe aware, there are four EBS volume types available in AWS.</p>

                            <li>1. General Purpose SSD (GP2)</li>
                            <li>2. Provisioned IOPS SSD (IO1)</li>
                            <li>3. Throughput Optimized HDD (ST1)</li>
                            <li>4. Cold HDD (SC1)</li><br>

                                        <p>Each of these volume types has its own strengths and weaknesses. Out of the four volume types described, GP2 and IO1 are more catered towards IOPS-sensitive workloads. If you compare GP2 and IO1, Provisioned IOPS (IO1) is more seasoned for IOPS workloads and more powerful out of the two.</p>
                                        <p>However, if we are to test&nbsp;<em>Burst Balance</em>&nbsp;feature in this blog, we have to choose GP2 here. This is mainly because the&nbsp;<em>B</em>urst&nbsp;<em>Balance</em>&nbsp;feature is not available in IO1 and is only available with GP2.</p>
                                        </p>
                                                        
                                                        
                                        <h2>GP2 Volume Type</h2><br>
                                        <p>GP2 Volumes have the following key features:</p>

                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
                                        <p><em>Volume Size: 1 GB to 16TB (16,384 GB)</em></p>
                                        <p><em>Min IOPS/Volume: 100 (but bur-stable to 3000)</em></p>
                                        <p><em>Max IOPS/Volume: 16,000</em></p>
                                        <p><em>Number of IOPS per GB: 3</em></p></div>
                                        </div>
<br><br>
                                        <p>If your EBS GP2 Volume storage is configured as 8GB, as in this example, the volume IOPS can be calculated as just 24 (3 * 8 GB).</p>
                                        <p>Though the calculation works out to 24, the minimum IOPS for a GP2 is 100 (see above default settings). However, with the EBS GP2 bursting feature, GP2 volumes can be burst up to 3000 IOPS (3 * 1000 GB) if required, without increasing the size of the volume (that is 8GB here). This is a really cool feature, which can handle sudden unpredictable EC2 workloads.</p>
                                        <h2>Burst Balance</h2><br>
                                        <p>Having said that, this feature is provided to each EBS GP2 volume as a point system, which is known as&nbsp;<em>Burst Balance.&nbsp;</em>Whenever you consume the EBS GP2 volume, you are basically consuming your earned&nbsp;<em>Burst Balance</em>&nbsp;points automatically. Whenever you are not utilizing them, the system tends to regain your points to the usual 100% mark allowing you to use it for another spike (see Figure 1).</p>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/EBS_fig1.jpg"></p>

                                        <h2>Using &ldquo;fio&rdquo; to Load the Instance</h2>
                                        <p>The&nbsp;<a href="https://fio.readthedocs.io/en/latest/fio_doc.html">fio</a>&nbsp;library [1] is a popular load test library, which is heavily used in Linux/ Unix environments. Since we consider Amazon Linux as our EC2 AMI, we are able to leverage the same library for our load testing as well.</p>
                                        <p>With this tool, you can configure the Read and Write (RW) loads in such a way to suit your requirement.</p>

                                        <h2>Steps</h2>
                                        <p>Lets try this and see now.</p>
                                        <p><span style="font-weight:700">Step 1</span> : Create an EC2 instance (Amazon Linux as OS) with an EBS volume (GP2) as the ROOT volume.</p>
                                        <p><span style="font-weight:700">Step 2</span> : Go to&nbsp;<em>Volumes</em>&nbsp;and select the Root Volume of the created EC2 instance.</p>
                                        <p>Click the&nbsp;<em>Monitoring</em>&nbsp;tab and you will get to see a set of graphs (see Figure 1) with various monitoring metrics. The&nbsp;<em>Burst Balance</em>&nbsp;metric is one of them. This metric shows you the current&nbsp;<em>B</em>urst&nbsp;<em>Balance</em>&nbsp;utilization of the selected EBS volume (see Figure 2).</p>
                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/EBS_fig2.jpg"></p>
                                        <p><span style="font-weight:700">Step 3</span> : SSH into EC2 instance and install&nbsp;<a href="https://fio.readthedocs.io/en/latest/fio_doc.html"><em>fio</em></a><em>&nbsp;</em>now.</p>
                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><em>$ sudo yum install fio</em></div></div>


                                          <br>
                                        <p><span style="font-weight:700">Step 4</span> : Lets add some load into the EC2 instance using&nbsp;<em>fio&nbsp;</em>by executing the following command.</p>
                                        
                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
                                        <em>$ fio &mdash; randrepeat=1 &mdash; ioengine=libaio &mdash; direct=1 &mdash; gtod_reduce=1 &mdash; name=test &mdash; filename=random_read_write.fio &mdash; bs=4k &mdash; iodepth=64 &mdash; size=4G &mdash; readwrite=randrw &mdash; rwmixread=75</em></div></div>

                                        <p><em>&nbsp;</em></p>
                                        <p>The above will create a 4GB file, and perform 4KB reads and writes using three reads for every write ratio (75%/25%), as specified with option &mdash; rwmixread=75), split within the file, with 64 operations running at a time.</p>
                                        <p>The RW ratio can be adjusted for simulating various usage scenarios.</p>


                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/EBS_fig3.jpg"></p>
                                        <p>The final results are as follows.</p>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/EBS_fig4.jpg"></p>                                  

  <p><span style="font-weight:700">Step 5</span> :  Now it is time to go and check the Burst Balance in the Monitoring tab.</p>
  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/EBS_fig7.jpg"></p> 

<div><h2>References</h2>
    


<p>1. Linux/ Unix fio library &mdash;&nbsp;<br><a href="https://fio.readthedocs.io/en/latest/fio_doc.html">https://fio.readthedocs.io/en/latest/fio_doc.html</a></p>
<p>2. Benchmarking EBS Volumes:&nbsp;<br><a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/benchmark_procedures.html">https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/benchmark_procedures.html</a></p>
<p>3. How to test Disk Performance with fio and IOPing:&nbsp;<br><a href="https://www.unixmen.com/how-to-measure-disk-performance-with-fio-and-ioping/">https://www.unixmen.com/how-to-measure-disk-performance-with-fio-and-ioping/</a></p>

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