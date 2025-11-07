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
              <h1 class="blog-post-title">EBS Volume Resizing</h1>
              <div>
              <p>AWS EBS (Elastic Block Storage) is a network drive that you can easily attach to your EC2 instances. You can attach more than one EBS volume to an EC2 instance and you can even resize any of these attached volumes without a downtime of the EC2 instance.</p>

<p>This blog post will explain the important steps that you need to follow when you are doing a volume resize. You may find a few blog posts related to this topic, but there is no blog which explains all possible scenarios.</p>
                                                        
                                                        
                                        <h2>Steps</h2><br>
<p><span style="font-weight:700">Step 01</span>&nbsp;: Create an EC2 instance (t2.micro) with two EBS (GP2) volumes (the ROOT volume and a Data volume).</p>
<p>The ROOT volume is 8 GB and Data Volume is 5 GB respectively (see Figures 1 and 2).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig1.jpg"></p><br>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig2.jpg"></p>
<p><span style="font-weight:700">Step 02</span>: Check available block devices in the instance (see Figure 3).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig3.jpg"></p>
<p><p>If you analyze the above carefully, you can see that there are two EBS disk volumes&nbsp;<strong>(xvda</strong>&nbsp;and&nbsp;<strong>xvdb)</strong>&nbsp;created. The first volume (xvda) has a disk partition created already but the second volume (xvdb) does not.</p>
<p>P.Note: If you want to get the status of the current disk partitioning, you can execute&nbsp;<em>fdisk -l&nbsp;</em>command (see Figure 4).</p></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig4.jpg"></p>
<p>Though we can store and retrieve data without partitioning the&nbsp;<strong>xvdb</strong>&nbsp;volume, it is essential to have a partition table created when you are trying to resize the volume in the future. So lets create a partition table for&nbsp;<strong>xvdb</strong>&nbsp;to initiate this process.</p>
<p>The above could be further validated by executing the&nbsp;<em>file -s</em>&nbsp;command (see Figure 5). The&nbsp;<strong>xvdb</strong>&nbsp;volume is shown as an empty volume (/dev/svdb: data) here.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig5.jpg"></p>
<p><span style="font-weight:700">Step 03</span>: Create a disk partition table in the Data volume.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig6.jpg"></p>
<p>Make sure to enter &ldquo;n&rdquo;, &ldquo;p&rdquo; and &ldquo;w&rdquo; at respective places in order to create a default partition. You may ignore&nbsp;<em>Partition Number, First Sector and Last Sector</em>&nbsp;fields by just pressing the ENTER key.</p>
<p>Once you create the partition table, you are required to update the Kernel by entering the&nbsp;<em>partprobe&nbsp;</em>command.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig7.jpg"></p>
<p>In the meantime, if you check available block devices using&nbsp;<em>lsblk&nbsp;</em>command, you will see both volumes (<strong>xvda</strong>&nbsp;and&nbsp;<strong>xvdb</strong>) and their partitions (<strong>xvda1</strong>&nbsp;and&nbsp;<strong>xvdb1)</strong>. That means that both volumes have their partitions created.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig8.jpg"></p>
<p><span style="font-weight:700">Step 04</span>&nbsp;: Format the Data volume partition (xvdb1).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig9.jpg"></p>
<p><span style="font-weight:700">Step 05</span>&nbsp;: Create a mount point (/data folder) in the ROOT volume.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig10.jpg"></p>
<p>Then create some file(s) in the /data folder.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig11.jpg"></p>
<p><span style="font-weight:700">Step 06</span>&nbsp;: Mount the Data volume partition to the EC2 instance now.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig12.jpg"></p>
<p>When you execute the&nbsp;<em>lsblk</em>&nbsp;command, you will see that the xvdb1 partition is now mounted to the /data folder.</p>
<p><span style="font-weight:700">Step 07</span>&nbsp;: Update /etc/fstab to automate the mounting process while restarting the EC2 instance.</p>



                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
                                        <p><em>$ sudo /etc/fstab</em></p></div>
                                        </div>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig13.jpg"></p>

                                        <p><span style="font-weight:700">Step 08</span>: Validate the /etc/fstab entry by executing the following.</p>

                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
                                        <p><em>$ sudo mount -a</em></p></div>
                                        </div>
                                        <p>If you wish, you can do a restart of the EC2 instance and see that both volumes are mounted properly.</p>
<p><span style="font-weight:700">Step 09</span>&nbsp;: Let&rsquo;s resize one of the EBS volumes now.</p>
<p>We have selected the EBS Data volume in this example and its volume size is increased from 5GB to 15GB (see Figure 14).</p>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig14.jpg"></p>
<p>Once you do the resizing, run the&nbsp;<em>lsblk</em>&nbsp;command again to see the current volume block allocation. You should be able to clearly see that the&nbsp;<strong>xvdb1</strong>&nbsp;partition size has not changed.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig15.jpg"></p>
<p><span style="font-weight:700">Step 10</span>&nbsp;: Increase the Data volume partition size. You may use the&nbsp;<em>growpart</em>&nbsp;command as shown below.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p>growpart &lt;EBS volume&gt; &lt;partition-number&gt;&nbsp;<em>(see Figure 16).</em></p></div>
                                        </div>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig16.jpg"></p>
                                        <p>Now, once again let&rsquo;s check the Volume block sizes using the&nbsp;<em>lsblk</em>&nbsp;command.</p>

                                        <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig17.jpg"></p>
                                        <p>You can see that both the volume (xvdb) and its partition (xvdb1) are having the same size, which is 15GB.</p>
<p>However, resizing the partition does not mean that you have resized the file system as well. You can confirm this by executing the&nbsp;<em>df -h&nbsp;</em>command.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig18.jpg"></p>

<p><span style="font-weight:700">Step 11</span>&nbsp;: Resize the partition file system to 15GB. You can execute the&nbsp;<em>resize2fs</em>&nbsp;command as shown below.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig19.jpg"></p>
<p>Now, you can recheck the Volume file systems using&nbsp;<em>df -h</em>. You will see that the data volume file system partition (xvdb1) has been increased to the maximum value, which is 15GB.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/EBS-V_fig20.jpg"></p>
<p>Congratulations! You have succeeded in resizing an EBS volume without a downtime.</p>



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