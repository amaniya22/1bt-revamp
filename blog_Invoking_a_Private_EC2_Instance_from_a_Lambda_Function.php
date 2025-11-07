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
              <h1 class="blog-post-title">Invoking a Private EC2 Instance from a Lambda Function
</h1>

              <div>
             
         
              <p><strong>The Problem</strong></p>
<p>Recently, we worked on an AWS serverless application, which had an EC2 instance that provided some supportive function to the application. This EC2 implementation was running on a public subnet in a custom VPC. The serverless Lambda functions primarily ultilized the EC2 public IP address to communicate with this instance.</p>
<p>However, the recent security assessment done with the help of AWS Security Hub service [1] gave us some level of indication about the security status of the application.&nbsp;</p>
<p>The assessment indicated that it has violated a security setting (<strong><em>EC2 instances should not have a public IPv4 address</em></strong><em>), which is related</em> to the <em>AWS Foundational Security Best Practices v1.0.0 </em>[2]category. This control basically checks whether EC2 instances have a public IP address associated with them.&nbsp;</p>
<p><strong>The Solution</strong></p>
<p>In general, when it comes to accessing a private EC2 instance hosted in a VPC private subnet, we can use VPC Endpoints [3] to access that instance from another VPC. This approach can certainly improve network latency and security since the traffic flows through within the AWS infrastructure itself.</p>
<p>However, if we are to connect to a private EC2 instance hosted in a VPC from a Lambda function, we probably would utilize the same strategy that we used in VPC Endpoints but in a different way. It would be bit different since the Lambda invocation does not happen within a VPC.&nbsp;</p>
<p>When you connect a Lambda function to a VPC, Lambda creates an Elastic Network Interface (ENI) for each subnet in your function&rsquo;s VPC configuration (see Figure 1).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/envoking-EC2_fig1.jpg"></p>
<p>Just like you find execution roles being attached in VPC Endpoints, Lambda also utilizes its permissions/roles to create and manage network interfaces of a particular EC2 instance. We need to update the function's execution role and add the following permissions to it.</p>
<p><strong>Execution role permissions</strong></p>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i><strong>ec2:CreateNetworkInterface</strong></li>
<li><i class="fa fa-angle-double-right"></i><strong>ec2:DescribeNetworkInterfaces</strong></li>
<li><i class="fa fa-angle-double-right"></i><strong>ec2:DeleteNetworkInterface</strong></li>
</ul>
<p>These permissions are included in the AWS managed policy <strong>AWSLambdaVPCAccessExecutionRole</strong>.&nbsp;</p>
<p>Go to your Lambda execution role and attach the above AWS managed policy to the Lambda role. Now your Lambda has all the required permissions to connect to the VPC.&nbsp;</p>
<p>You can configure the VPC when you create the function, but I&rsquo;m going to configure a VPC for an existing function [4].</p>
<ol>
<li>Open the<a href="https://console.aws.amazon.com/lambda/home#/functions"><em>Functions page</em></a> on the Lambda console.</li>
<li>Choose a function.</li>
<li>Choose <strong>Configuration</strong> and then choose <strong>VPC</strong>.</li>
<li>Under <strong>VPC</strong>, choose <strong>Edit</strong>.</li>
<li>Choose a VPC, subnets, and security groups.<br /><em>To access our private instance, we need to connect our function to private subnets. That requires a minimum of two private subnets. Attach security groups and make sure that security groups allow required ports and protocols depending on your requirement. </em></li>
<li>Choose <strong>Save</strong>.</li>
</ol>
<p>Now try to access your private instance through the Lambda function. In my requirement, my private instance runs an application server that I can access through a private IP and the port.&nbsp;</p>
<p><em>protocol://privateIP:port/path</em></p>
<p><em>http://10.0.0.15:8080/health</em></p>
<p>I think you have now understood the primary idea behind this implementation. You can try and change/improve your implementation if you have a similar requirement.</p>


<h2>References</h2><br>
<ol>
<li>AWS Security Hub: <a href="https://aws.amazon.com/security-hub" target="blank">www.aws.amazon.com/security-hub</a></li>
<li>AWS Foundational Security Best Practices Controls: <a href="https://docs.aws.amazon.com/securityhub/latest/userguide/securityhub-standards-fsbp-controls.html"target="blank">www.docs.aws.amazon.com/securityhub/latest/userguide/securityhub-standards-fsbp-controls.html</a></li>
<li>VPC Endpoints: <a href="https://docs.aws.amazon.com/vpc/latest/privatelink/vpc-endpoints.html"target="blank">www.docs.aws.amazon.com/vpc/latest/privatelink/vpc-endpoints.html</a></li>
</ol>
<p>4. <a href="https://docs.aws.amazon.com/lambda/latest/dg/configuration-vpc.html"target="blank">www.docs.aws.amazon.com/lambda/latest/dg/configuration-vpc.html</a></p>


           
              


<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/thiwanka-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Thiwanka Wickramage

                                                    </h2>
                                                    <small>Associate Tech Lead
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