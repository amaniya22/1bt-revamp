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
              <h1 class="blog-post-title">Production Level Load Balancing Using SSM Enabled EC2 Instances in Private Subnets</h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                              <p>
    We all know Load Balancing is a way of dealing with High Availability in
    any Cloud deployment. In AWS, we have three types of Load Balancers
    (Classic, Application and Network).
</p>
<p>
    Most of the Load Balancing examples in different learning materials have
    their AWS EC2 instances deployed in public subnets. Though this works well
    in developer/testing environment(s), it is not a production-ready setup.
    So, it is highly recommended to deploy these in private subnets. The Load
    Balancer, which is attached to two public subnets (by default) can
    eventually invoke these two subnets within their respective Availability
    Zones (See Figure 1).
</p>
                
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig1.jpg"></p>
                              <h2>Why AWS SSM (AWS System Manager)?</h2><br>
 
<p>
    This example uses
    <a href="https://docs.aws.amazon.com/systems-manager/latest/userguide/what-is-systems-manager.html"
        target="_blank">
        AWS SSM
    </a>
    to install Apache on respective EC2 instances. Rather than exposing port 22
    (SSH) and compromising the EC2 instances, it is best practice to use AWS
    SSM, which basically can do custom installation on selected EC2 instances
    with the help of predefined SSM Documents. These Documents can be executed
    via AWS SSM RUN Command [1].
</p>
<h2>
    Steps
</h2><br>
<p>
<span style="font-weight:700">Step 1</span>:Create a Custom VPC with two public subnets and two private subnets in
    two Availability Zones (That means each AZ has a public and private subnet
    each).
</p>
<p>
<span style="font-weight:700">Step 2</span>
    : Go to AWS Console and go to EC2.
</p>
<p>
<span style="font-weight:700">Step 3</span>
    : Select <em>Load Balancers.</em>
</p>
<p>
<span style="font-weight:700">Step 4</span>
    : Create a <em>Classic Load Balancer </em>(CLB) with the following
    parameters:
</p>
<p>
    <em>
        P. Note: I have chosen a CLB to minimize the number of steps required
        in this example. In theory, there is no difference in terms of the
        number of steps required in this particular example, whether it is a
        CLB or an ALB. However, it is always good to select an ALB in
        production level deployments.
    </em>
</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<em>Load Balancer Name: <<span style="display:none">-</span>Give a name — e.g. MyCLB<span style="display:none">-</span>><br><br>
Create LB inside: <<span style="display:none">-</span>Select the Custom VPC<span style="display:none">-</span>><br><br>
Create an Internal Load Balancer: <<span style="display:none">-</span>Do not select it<span style="display:none">-</span>><br><br>
Listener Configuration: <<span style="display:none">-</span>Select HTTP Port 80<span style="display:none">-</span>> [This is the default setting]<br>
Subnets: <<span style="display:none">-</span>Select both public subnets that you have created within your Custom VPC<span style="display:none">-</span>><br><br>
Security Group: <<span style="display:none">-</span>Create a new Security Group with HTTP (80) access. e.g. myclb-sg<span style="display:none">-</span>><br><br>
Health Check Parameters: <<span style="display:none">-</span>Response Timeout : 2 sec ; Interval: 30 sec ; Unhealthy Threshold: 2 ; Healthy Threshold: 10<span style="display:none">-</span>><br><br>
EC2 instances: <<span style="display:none">-</span>You can skip this for the moment<span style="display:none">-</span>><br><br>
Click the Create Load Balancer button to complete the initial settings of the Load Balancer creation process.</em>
</div>
</div><br><br>
<p>
<span style="font-weight:700">Step 5</span>
    : Add Custom VPC Default Security Group to Load Balancer
</p>
<p>
    <em>
    <div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
    Select the Load Balancer created (MyCLB) <span style="display:none">-</span>> Select Actions <span style="display:none">-</span>> Select Edit Security Groups <span style="display:none">-</span>> Add Custom VPC Default Security Group (See Figure 2)<br><br>
    This is required since EC2 instances are in private subnets, and Load Balancers need to communicate with respective private subnets within their Availability Zones. For example, public subnet 1 needs to communicate with private subnet 1 within us-east-1a and public subnet 2 needs to communicate with private subnet 2 within us-east-1b.<br><br>
Make  sure to add port 80(HTTP) to the Default Load Balancer. This is not the default setting (See Figure 3).

</div>
</div>
    </em>
  </p>

  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig2.jpg"></p>
    <p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig3.jpg"></p>


<p>
<span style="font-weight:700">Step 6</span>
    : Add EC2 instances to the created Load Balancer.
</p>
<p>
    Create two EC2 instances (Amazon Linux t2.micro) in each private subnet.
</p>
<p>
    While creating EC2 instances make sure to follow the below guidelines:
</p>
<p>
    1. Create a new Security Group with HTTP port 80 access (Source as Load
    Balancer Security Group (myclb-sg)) &#8212; (See Figure 4). There is no
    need to have port 22 access to install Apache here. The Apache installation
    is completed via SSM RUN Command (See Figure 5).
</p>
<p>
    2. Create a new IAM Role (to access AWS SSM) and assign it to each EC2
    instance.
</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<em>P.Note: Installing Apache via SSM and assigning SSM role to an EC2 instance will be discussed in a separate blog for brevity in the blog. I will provide the link to this once I complete it. For the moment, please do have a look at how SSM can be used to install Apache without using SSH [1].</em>
</div>

<p>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig4.jpg"></p>
    <p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig5.jpg"></p>
   
</p>

<p>
    The above steps basically create two EC2 instances with SSM access. Within
    SSM, you can execute a SSM Custom Document using SSM RUN Command to install
    Apache in both instances [1].
</p>
<p>
    Once you complete installing Apache, you are ready to attach both the
    instances to the created CLB.
</p>
<p>
<span style="font-weight:700">Step 7</span>
    : Attaching EC2 instances to the Load Balancer.
</p>
<p>
    Go to EC2 -&gt; Load Balancers -&gt; Select the Load Balancer (MyCLB) -&gt;
    Select <em>Actions</em> -&gt; Select <em>Edit Instances -&gt; </em>Attach
    two EC2 instances to the Load Balancer (See Figure 6).
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig6.jpg"></p>
   

<p>
<span style="font-weight:700">Step 8</span>
    : Check the Load Balancer Status.
</p>
<p>
    Once above steps are completed, you may go and check Load Balancer status.
</p>
<p>
    Select the Load Balancer -&gt; Select the <em>Instances </em>tab.
</p>
<p>
    If you see the Instances status as &#8220;InService&#8221; then your two
    EC2 instances are in the healthy state (See Figure 7).
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig7.jpg"></p>
    

<p>
<span style="font-weight:700">Step 9</span>
    : Check whether the Load Balancer runs properly.
</p>
<p>
    Select the the Load Balancer -&gt; Click the <em>Description</em> tab -&gt;
    Copy (Ctrl +C) the DNS name (e.g.
    MyCLB-1434817978.us-east-1.elb.amazonaws.com).
</p>
<p>
    Paste the DNS name on a web browser and see if all is okay. If you see a
    similar page as below (See Figure 8), Congratulations!
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/fig8.jpg"></p>
    

<h2>References</h2>
    
<p>
    1. AWS SSM Documents
    <a
        href="https://docs.aws.amazon.com/systems-manager/latest/userguide/sysman-ssm-docs.html"
        target="_blank"
    >
        https://docs.aws.amazon.com/systems-manager/latest/userguide/sysman-ssm-docs.html
    </a>
</p>
         </div>

            </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
<!-- post -->
<div class="col-md-2 col-sm-2 col-xs-4">
<img src="assets/images/chrishantha.jpeg" width="90">

</div>
<div class="col-md-10 col-sm-10 col-xs-8">
<h2 class="padding-top-20 size-20">Crishantha Nanayakkara

</h2>
<small>Vice President - Technology
</small>
</div>
</div>
          </div>

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