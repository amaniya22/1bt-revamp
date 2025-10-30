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
              <h1 class="blog-post-title">IPv6 Networking with AWS VPC</h1>
              <div>
              <p><em>In this blog we will discuss what you can actually do with IPv6 Networking with AWS VPC. This is a slightly longer read than usual, but I’ll try to keep it brief so we can understand the basics comprehensively.</em> </p>
              <h2>AWS IPv6 Support</h2><br>
<p>On AWS, IPv6 is an option, but it is not enabled by default. Though the support is available, it is not 100% ready yet and is coupled with certain limitations.</p>
<h2>Limitations</h2><br>
<ol>
<li>DNS names are not allocated to IPv6 addresses.</li>
<li>IPv6 addresses are all routable and there is no concept of private vs public with IPv6 unlike IPv4.</li>
<li>Elastic IPs are not relevant with IPv6.</li>
<li>IPv6 is not supported for VPNs, Customer Gateways, NAT Gateways and VPC Endpoints.</li>
</ol>
<p>Hence, you are required to be a bit cautious while using AWS with IPv6. As you can see, it is not 100% ready yet.</p>

<h2>IPv6 with AWS VPC</h2><br>
<p>Though there are limitations with IPv6, we can still do a normal routing on AWS VPCs, Subnets, Routing Tables, etc. In this blog, we will try to execute the following steps with IPV6. If you are new to IPv6 networking with AWS, I am sure this will be quite a bit of fun!</p>
<ol>
<li>Creating a Custom VPC with IPv6 support</li>
<li>Creating Public and Private subnets with IPv6 support</li>
<li>Adding IPv6 Routing to VPC Routing Tables</li>
<li>Using an Egress-only Internet Gateway to enable Internet access from private subnets (this replaces the need of NAT Gateway in IPv4)</li>
</ol>
<p>Now, lets try out all the above scenarios.</p>
<p>Figure 01, visualizes what we intend to achieve in this blog post. It has a Custom VPC with public and private subnets. The public subnet and the private subnet are routed via two Route tables. The public Route table connects to the Internet via a typical Internet Gateway and the private subnet Route table connects to the Internet via an Egress-only Internet Gateway.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig1.jpg"></p><br>

<p><span style="font-weight:700">Task 1: Creating a Custom VPC with both IPv4 and IPv6 support (dual support)</span></p>
<p>Create a Custom VPC with the following IPv4 and IPv6 block ranges.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em> IPV4 CIDR Block: 10.0.0.0/16</em></p>
<p><em> IPv6 CIDR Block: &lt;Select Amazon Provided CIDR Block&gt;</em></p>
</div></div><br><br>
<p>[P.Note: Here, AWS will provide you a /56 IPv6 CIDR Block]</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig2.jpg"></p><br>
<p>Here, you can see a /56 IPv6 CIDR block is allocated for your VPC (2600:1f13:d15:9500::/56) — [see Figure 03].</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig3.jpg"></p><br>
<p><span style="font-weight:700">Task 2: Creating two Subnets (Public and Private) with IPv6 Support</span></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig4.jpg"></p><br>
<p>In each subnet, make sure to select “Custom IPv6” and provide a starting point for each subnet IPv6 block.<br><br>
The public subnet was created with the following CIDR blocks.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>IPV4: 10.0.1.0/24</em></p>
<p><em>IPv6: 2600:1f13:0d15:95:00::/64</em></p></div></div><br><br>

<p>Here, the IPv6 CIDR block starting point is given as 00, and you are automatically given a /64 block.<br><br>
Make sure to enable auto-assign IP addresses (IPv4 and IPv6) both at the Subnet level.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig5.jpg"></p><br>
<p>The private subnet was created with the following CIDR blocks.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>IPV4: 10.0.2.0/24</em></p>
<p><em>IPv6: 2600:1f13:0d15:95:50::/64</em></p></div></div><br><br>

<p><span style="font-weight:700">Task 3: Creating two Route Tables and assigning Subnets to them</span></p>
<p>Go to Route Tables and name the Main Route Table as the “private-RT” and assign the Private Subnet to it.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig6.jpg"></p><br>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig7.jpg"></p><br>
<p>Then create a new Route Table and name it as the “public-RT” and assign the Public Subnet to it.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig8.jpg"></p><br>

<p><span style="font-weight:700">Task 4: Creating an Internet Gateway and attaching it to our Custom VPC</span></p>
<p>Create the Internet Gateway (igw-iPv6) as below and attach the Custom VPC to it.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig9.jpg"></p><br>

<p><span style="font-weight:700">Task 5: Creating an Egress-only Internet Gateway and attaching it to the Custom VPC</span></p>
<p>Here we use an Egress-only Internet Gateway to connect to the Internet via private subnet EC2 instances. In Ipv4, we used to execute this task with the help of NAT Gateways.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig10.jpg"></p><br>
<p><span style="font-weight:700"> Task 6: Adding Routing Entries to the Public Route Table</span></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig11.jpg"></p><br>
<p>You need to add the following two entries to both IPv4 and IPv6 and attach them to the Internet Gateway.</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>0.0.0.0/0 for IPV4 </em><em>&rarr;</em><em> Target (Internet Gateway)</em></p>
<p><em>::/0 for IPv6 </em><em>&rarr;</em><em> Target (Internet Gateway)</em></p></div></div><br><br>

<p><span style="font-weight:700"> Task 7: Adding Routing Entries to the Private Route Table</span></p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig12.jpg"></p><br>
<p>You need to add the following entry to IPv6 and attach it to the <span style="font-weight:700">Egress Only Internet Gateway.</span></p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><em>::/0 (ForIPv6)→ Target (Egress-only Internet Gateway)</em></div></div>
<br><br>

<p><span style="font-weight:700">Task 8: Creating a public EC2 instance in the Public Subnet</span></p>
<p>1. Select an <span style="font-weight:700">Amazon Linux 2 AMI (HVM), SSD Volume Type</span></p>
<p>2. Select <span style="font-weight:700">m4.large</span> EC2 instance type (we select a larger EC2 instance type here for more support in IPv6. You can try t2.micro, but it may not function in IPv6 as intended. But, this can change in the future).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig13.jpg"></p><br>

<p>P.Note: We have selected <span style="font-weight:700">m4.large</span> here in order to get full support for EC2 instances. Though t2.micro instances do support IPv6 now, I have witnessed many issues while working with them. So to be on the safe side, we will experiment with m4.large for the moment. Bearing in mind though, it is not under the free tier.</p>
<p>3. Select the Custom VPC and the public subnet and make sure to enable both IPv4 and IPv6 auto-assign IP checkboxes.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig14.jpg"></p><br>
<p>4. Create a new Security Group with SSH port 20 and HTTP port 80 for both IPv4 and IPv6.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig15.jpg"></p><br>
<p>5. Launch the public instance. Once it is launched, you can see two public IPv4 and IPv6 addresses assigned to the instance (see Figure 16).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig16.jpg"></p><br>

<p><span style="font-weight:700">Task 9: Create a private EC2 instance in the Private Subnet</span></p>
<p>Follow the same steps that you followed in Task 8 and create a private instance in the private subnet.</p>
<p>Once the instance is created, make sure to assign an IPv6 address to the instance in order to access it later. This can be done by Actions → Networking → Manage IP Addresses → IPv6 Addresses → Assign new IP.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig17.jpg"></p><br>

<p><span style="font-weight:700">Task 10: Test the Public EC2 Instance</span></p>
<p>SSH into the public EC2 instance and install Apache (HTTPD).</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>$ ssh-add -k &lt;the-pem-file&gt;</em></p>
<p><em>$ ssh -A&nbsp;</em><a href="mailto:ec2-user@2600"><em>ec2-user@2600</em></a><em>:1f13:d15:9500:52d8:2632:79f9:586</em></p>
<p><em>[Here&nbsp;</em><a href="mailto:ec2-user@2600"><em>2600</em></a><em>:1f13:d15:9500:52d8:2632:79f9:586 is the IPv6 address of the public instance]</em></p>
<p><em>$ sudo yum update</em></p>
<p><em>$ sudo yum install httpd</em></p>
<p><em>$ cd /var/www/html</em></p>
<p><em>$ sudo vi index.html (Add some text to the file)</em></p>
<p><em>$ sudo service httpd start</em></p>
</div></div><br><br>

<p>Now you can access the public instance via the IPv6 address on your selected browser (see Figure 18).</p>

<p>P.Note: you may have to enter the IPv6 address within square brackets on the browser URL.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/IPV-fig18.jpg"></p><br>


<p>Congratulations! You have accessed an Apache website via an IPv6 address.</p>
<p><span style="font-weight:700">Task 11: Test the Private EC2 Instance</span></p>
<p>Now it is time to check how the private instance behaves with an Egress-only Internet Gateway.</p>
<p>1. SSH into private instance via the public instance as the bastian host. For this, please do SSH into the public instance first.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>$ ssh -A&nbsp;</em><a href="mailto:ec2-user@2600"><em>ec2-user@2600</em></a><em>:1f13:d15:9500:52d8:2632:79f9:586</em></p>
<p><em>[&nbsp;</em><a href="mailto:ec2-user@2600"><em>2600</em></a><em>:1f13:d15:9500:52d8:2632:79f9:586 is the IPv6 address of the public instance]</em></p>
</div></div><br><br>

<p>Now you should be inside the public instance.</p>
<p>2. SSH into the private instance.</p>

<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>$ ssh&nbsp;</em><a href="mailto:ec2-user@2600"><em>ec2-user@2600</em></a><em>:1f13:d15:9550:dae8:81f5:e0af:96c2</em></p>
<p><em>[&nbsp;</em><a href="mailto:ec2-user@2600"><em>2600</em></a><em>:1f13:d15:9550:dae8:81f5:e0af:96c2 is the IPv6 address of the private instance]</em></p>

</div></div><br><br>

<p>3. Now you can access the private instance via the IPv6 address on your selected browser.</p>
<p>Theoretically, it should <span style="font-weight:700">not</span> work!</p>
<p>4. Can we now check for Internet access from the private EC2 instance?</p>
<p>In IPv4, this was possible with the help of NAT instances/ Gateways. However, here we will be testing with an <span style="font-weight:700">Egress-only Internet Gateway.</span></p>
<p>Try and install Apache in the private instance. It should work if you have done all the steps properly so far.</p>


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