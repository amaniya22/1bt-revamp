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
              <h1 class="blog-post-title">Using AWS ACM with CloudFront and Route 53 to Secure your Cloud Domains</h1>
              <div>

              <p>If you&rsquo;re into AWS System Operations, you may have come across certain bottlenecks while using AWS CloudFront with AWS Certification Manager (ACM). Though this process looks a pretty straight forward one, there are certain finer points that you need to be mindful about.</p>
<p>So let&rsquo;s dive into this step by step.</p>
<h2>Prerequisites</h2>
<ol>
<li>Create a S3 bucket, which has a similar name to the Domain name. [When you create the S3 bucket, make sure to create a bucket name that is similar to the Internet Domain Name that you&rsquo;re trying to map to. Also, ensure that you create a bucket with the &ldquo;www&rdquo; prefix as well to route the traffic to the bucket which has the Domain Name. For example, if your domain name is mydomain.com, you are required to create a bucket with the same name (mydomain.com) and another bucket named&nbsp;<a href="http://www.mydomain.com./">mydomain.com</a>. See Figure 1 to see how you set the web hosting parameters of the www bucket]</li><br>
<li>You need to create a Hosted Zone with DNS Servers. In Route 53, you can create a Hosted Zone for the required domain. [Generally the Hosted Zone is created when you create a Domain within Route 53. But, there are instances where the Domain is created in some other AWS account or somewhere entirely different].</li>
</ol>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/ACM_fig1.jpg"></p>


<h2>Creating an X509 Certificate using AWS ACM (Certification Manager)</h2>

              <p><p>It is always recommended to connect your website with HTTPS to secure the channel between your browser and the Cloud Servers.</p>
<p>In the past, if you have dealt with requesting for a Certificate signed by a Certifying authority you know the pain that you went through! To me, AWS ACM is just a breeze. Let&rsquo;s follow the steps given below to find out how.</p>
<ol>
<li>Go to the AWS Certification Manager (ACM) and make sure you&rsquo;ve chosen the region as N. Virginia (us-east-1). Apparently, CloudFront still only supports us-east-1 certificates. If you have chosen any other region to create certificates you may face some issues while creating your CloudFront distribution. So use us-east-1.</li><br>
<li>Click&nbsp;<em>Request a Certificate.</em></li><br>
<li>Select&nbsp;<em>Request a Public Certificate -&gt;&nbsp;</em>Click&nbsp;<em>Request Certificate</em></li><br>
<li>Under&nbsp;<em>Add Domains,&nbsp;</em>add domains that you want to validate with the Certificate (P.Note: You are required to mention all the domains and sub-domains here if you are planning to use this certificate for any of these domains in the future).</li><br>
<li>Select the&nbsp;<em>Validation Method&nbsp;</em>as&nbsp;<em>DNS Validation.</em></li><br>
<li>Ignore Tags unless you want specify anything -&gt; Click&nbsp;</li><br>
<li>Do a final review and click the&nbsp;<em>Confirm and request</em>button to create the certificate.</li><br>
<li>Once confirmed, the Certificate Request will be in the pending validation state, which needs to be confirmed by us in order to proceed. You may click the side arrow (in the 2<sup>nd</sup> column) to view the validation requests. If you have requested the certificate for domains such as mydomain.com and&nbsp;<a href="http://www.mydomain.com/">mydomain.com</a>, you will have to confirm two validation requests under this.</li><br>
<li>Once you confirm the validation for both the domains requested, two CNAME entries will be added to the Route 53 hosted zone (i.e. if you have already setup a domain under a hosted zone in Route 53).</li><br>
<li>Finally a certificate (Amazon) will be generated for you for the requested domain(s).</li>
</ol>
                                        
                                        
                                        </p>
                                                        
                                                        
                                        <h2>Creating the CloudFront Distribution</h2><br>
                                        <p>
                                        <ol>
<li>Go to CloudFront -&gt; Click&nbsp;<em>Create Distribution.</em></li><br>
<li>Select&nbsp;<em>Web Distribution.</em></li><br>
<li>Under&nbsp;<em>Create Distribution -&gt;&nbsp;</em>Set the&nbsp;<em>Origin Domain Name&nbsp;</em>(Here you will need to select the web hosting URL of the S3 bucket. You can go to S3 bucket -&gt; Properties -&gt; Web hosting URL and paste it here without the http part. You need to make sure to not use the S3 bucket URL in the dropdown.</li><br>
<li>Set&nbsp;<em>Redirect HTTP to HTTPS&nbsp;</em>(under the Viewer Protocol Policy).</li><br>
<li>Under&nbsp;<em>Distribution Settings -&gt;&nbsp;</em>Add two entries to&nbsp;<em>Alternate Domain Names&nbsp;</em>(P.Note: You are required to set both mydomain.com and&nbsp;<a href="http://www.mydomain.com/">mydomain.com</a>here in order to populate Route 53 with CloudFront Distributions. Failing to specify this means you will not see them in the Route 53 Alias dropdown list).</li><br>
<li>Set the other values as they are and click&nbsp;<em>Create Distribution&nbsp;</em></li>
</ol>
                                        </p>



<h2>Setting Route 53 with CloudFront Distributions</h2>
<ol>
<li>
<p>Once you&rsquo;ve completed the above steps, now you&rsquo;re in a position to set two Record Sets for each domain (mydomain.com and&nbsp;<a href="http://www.mydomain.com%29/"><strong>Error! Hyperlink reference not valid.</strong></a></p><br>
<p>Record Set Parameters for mydomain.com:</p>
</li>
</ol>


<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Name: mydomain.com</em></p>
<p><em>Type: Alias</em></p>
<p><em>Alias: Yes</em></p>
<p><em>Alias Target: &lt;Select the CloudFront Distribution from the dropdown relevant to the domain name mydomain.com&gt;</em></p></div>
                                        </div><br>

                                        <p>Record Set Parameters for www.mydomain.com:</p>
                                        <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
                                        <p><em>Name: www.mydomain.com</em></p>
<p><em>Type: Alias</em></p>
<p><em>Alias: Yes</em></p>
<p><em>Alias Target: &lt;Select the CloudFront Distribution from the dropdown relevant to the domain name www.mydomain.com&gt;</em></p>
</div><br>
                                        </div>
                                        
                                        <p>Once you&rsquo;ve completed the above steps, make sure to give it a few minutes so that the new A record settings can be propagated to the respective domain. You can use the&nbsp;<em>dig</em>&nbsp;command to view the status of this update. If A Record is properly shown in the&nbsp;<em>dig</em>&nbsp;command you&rsquo;re all set to explore everything that you&rsquo;ve done. Congratulations!</p>


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