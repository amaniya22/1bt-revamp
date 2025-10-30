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
              <h1 class="blog-post-title">Creating a Site-to-Site VPN between AWS VPC and a third-party network using
                Openswan
              </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <p class="dropcap">Most third-party applications have restricted access through the public Internet due
                  to an organization’s security boundaries</p>
                <p> If applications are hosted in AWS, creating a site-to-site VPN can provide access to these kind of
                  networks. In this post, we explain the steps to create a site-to-site VPN tunnel connection between an AWS VPC
                  and a <span class="weight-700">third-party CISCO ASA router</span> </p>
                               <p>There are a couple ways of achieving this:</p>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Create a VPN tunnel using Openswan</li>
                  <li><i class="fa fa-angle-double-right"></i>Using AWS managed VPN - <em>The main limitation of this
                      option is that when AWS Managed VPNs are used, the VPN tunnel can only be initiated from the
                      Third-party network</em></li>
                </ul>

                <p>Of the two options, this blog explores how a VPN tunnel can be created using Openswan.</p>
                <h2>Setting up a VPN Tunnel on an AWS platform using Openswan</h2><br>
                <p>This can be explained using the following use case.</p>
                <p>Let us assume we have a Java application deployed on multiple AWS EC2 instances inside a private
                  subnet. There is a need to retrieve data from an external third-party API and this API is not
                  accessible as a public API. Thus, a site-to-site VPN tunnel needs be created between the Java
                  application instance(s) and the third-party external API.
                </p>
                <h2>There are four main steps in creating a VPN tunnel using Openswan;</h2><br>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Create an EC2 instance inside the public subnet and
                    install Openswan (prerequisites listed below)</li>
                  <li><i class="fa fa-angle-double-right"></i> Add IP-SEC configuration for the two parties inside the
                    Openswan instance</li>
                  <li><i class="fa fa-angle-double-right"></i> Route all the traffic from the private subnet to
                    Openswan instance using a route table of the private subnet (your java applications are located
                    inside the private subnet)</li>
                  <li><i class="fa fa-angle-double-right"></i> Test the VPN tunnel</li>
                </ul>
                <p>   <img class="img-responsive" src="assets/images/openswan-img1.jpg"></p>
                <p>The following prerequisites should be met to execute the first step
                  <ul class="list-unstyled list-icons">
                      <li><i class="fa fa-angle-double-right"></i>	Create a VPC with 10.1.0.0/24 CIDR block</li>
                      <li><i class="fa fa-angle-double-right"></i>	Create a Public Subnet inside the VPC with 10.1.0.0/25 CIDR block</li>
                        <li><i class="fa fa-angle-double-right"></i>	Create a Private Subnet inside the VPC with 10.1.0.128/25 CIDR block</li>
                          <li><i class="fa fa-angle-double-right"></i>	Create an EC2 instance inside the private subnet to install your java application. You will get a private IP address for each instance (in this scenario we have 10.1.0.160, 10.1.0.179 for private instances)</li>
                            <li><i class="fa fa-angle-double-right"></i>	Create a Route Table and associate it with the Private Subnet</li>
                              <li><i class="fa fa-angle-double-right"></i>	Create another Route Table and associate it with the Public Subnet</li>
                                <li><i class="fa fa-angle-double-right"></i>	Create an Internet Gateway for your VPC and attach it to the Public Route Table</li>
                    
                  </ul>
                  <p>You are now ready to proceed with VPN tunnel creation. </p>
                </p>
                <h2>Step 01: Create an EC2 instance to install Openswan</h2><br>
                <ul class="list-unstyled list-icons">

                  <li><i class="fa fa-angle-double-right"></i> Log into the AWS management console, go to EC2 services.
                    Create an EC2 instance by selecting the same VPC (10.1.0.0/24) and public subnet (10.1.0.0/25),
                    which we created by following the steps above. This instance is responsible for establishing the
                    VPN tunnel to the third-party
                  </li>

                  <li><i class="fa fa-angle-double-right"></i> Select the EC2 instance and choose: “Actions -> Network
                    -> Change Source/Dest Checking” and set it as disable
                  </li>

                  <li><i class="fa fa-angle-double-right"></i> The instance in the public
                    subnet should get a public IP address from AWS. However, I would recommend
                    creating an Elastic IP and assigning it to the EC2 instance (54.32.58.45 in our scenario)
                  </li>

                  <li><i class="fa fa-angle-double-right"></i> Go to the Security Group of the EC2 instance and add
                    inbound rules to allow traffic from HTTP and HTTPS
                  </li>

                  <li><i class="fa fa-angle-double-right"></i> Route traffic from the
                    private subnet to Openswan instance and route traffic from Openswan
                    instance to third-party network
                  </li>
                </ul>

                <p>Go to the <span class="weight-700">Route Tables</span> from the side bar and select your route table of the private subnet. Go to
                  <span class="weight-700">Routes</span> tab and add inbound rule. Edit routes and add another route.<br><br>
                  <span class="weight-700">Destination > </span>Private IP of third party/32 (172.25.75.98/32 in our
                  scenario)<br><br>
                  <span class="weight-700">Target ></span> Select Openswan instance from the list.<br><br>
                  All the traffic received from the third-party IP address as the destination will route to the
                  Openswan instance. Go to the Route Tables from the side bar and select your route table of public
                  subnet. Next, Go to Routes tab and add inbound rule. Edit routes and add another route.<br><br>
                  <span class="weight-700">Destination > </span> Private IP of third party/32 (172.25.75.98/32 in our
                  scenario)<br><br>
                  <span class="weight-700">Target ></span> Select Openswan instance from the list.<br><br>
                  This will direct traffic between the Openswan instance and the Third-party network. Now you have a
                  public EC2 instance to install Openswan and all the traffic routes are configured as needed.
                </p>

                <h2>Step 02: Install Openswan inside the EC2 instance and configure the tunnel</h2><br>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i> Log into the EC2 instance with SSH (ssh
                    ec2-user@&lt;Elastic IP of EC2&gt; for Linux users or Putty for Windows users)</li>
                  <li><i class="fa fa-angle-double-right"></i> Install Openswan &gt; <span class="weight-700"> <em>sudo yum install
                        openswan</em></span></li>
                  <li><i class="fa fa-angle-double-right"></i> We need to allow read configuration files from<span class="weight-700"> /etc/ipsec.d/
                  </span>To do that you have to uncomment the following line from<span class="weight-700">  /etc/ipsec.conf </span>file<br>
                    <span class="weight-700"> <em>include /etc/ipsec.d/*.conf</em></span></li>
                  <li><i class="fa fa-angle-double-right"></i>Go to <span class="weight-700"> sudo vi /etc/sysct1.conf</span> and
                    update <span class="weight-700"> net.ipv4.ip_forward</span> record as follows<br>
                    <span class="weight-700"> <em>net.ipv4.ip_forward = 1</em></span></li>
                  <li><i class="fa fa-angle-double-right"></i>Create a new configuration file for IP-SEC VPN ><span class="weight-700">  sudo vi
                    /etc/ipsec.d/cisco-vpn.conf</span></li>
                </ul>
                <p>The next step is to add configurations for the VPN tunnel into the cisco-vpn.conf file. The
                  configurations for this use case are as follows. Ensure you change the values based on your IP
                  addresses;</p>
                <pre>   
                conn cisco-vpn
                type=tunnel
                authby=secret
                left=10.1.0.6 # private ip of openswan instance
                leftid= 54.32.58.45 #public ip of openswan instance
                leftsubnets={10.1.0.6/32,10.1.0.160/32,10.1.0.179/32} # private ip of   #openswan/32 and private ip of java application instances/32
                right=125.10.1.100 # public ip of the third party network
                rightsubnets=172.25.75.98/32 # private ip of the third party network
                esp=aes192-sha1
                keyexchange=ike
                ike=aes192-sha1
                salifetime=42200s
                pfs=yes
                auto=start
                dpdaction=restart
                </pre>
                <p>Before proceeding with the next step, carry out configurations on the CISCO end. Contact the system
                  admin of the third-party network and complete the following task with him/her.</p>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Cross check the values of esp, keyexchange, ike,
                    salifetime, pfs, auto, dpdaction parameters. These configurations should match with what the
                    third-party has set up on their end of the VPN connection. Make changes if necessary</li>
                  <li><i class="fa fa-angle-double-right"></i>Get the third-party firewall access for the public IP of
                    Openswan instance and private IP addresses of the private instances</li>
                  <li><i class="fa fa-angle-double-right"></i>Ask the admin to create a Pre-Shared Key (PSK) and share
                    with you</li>
                </ul>
                <p>Next, create the following file.</p>
                <p>
                    <span class="weight-700">vi /etc/ipsec.d/cisco-vpn.secrets</span> <br><br>
                  Add the following record.<br><br>
                  <span class="weight-700"><em>&lt;Public IP of Openswan instance&gt; &lt;Public IP of third-party network: PSK
                      &ldquo;&lt;PSK&gt;&rdquo;</em></span> <br><br>
                  Eg: 54.32.58.45 125.10.1.100: PSK &ldquo;CGhdgddgheehehs&rdquo; (This is for our scenario)<br><br>
                  Now all configurations are complete. <br><br>
                  <em>Note: You can call third party network using DNS or private IP address. If you are using DNS, you
                    have to add a record to the /etc/hosts file as follows to resolve the DNS.</em><br><br>
                  <em>&lt;private IP of Third party&gt; &lt;DNS name of the third party&gt;</em></p>
                <h2>Step 3: Test the VPN tunnel</h2><br>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Check if the VPN tunnel is established or not.<br>Give
                    the following commands.<br><br>
                    <pre>
                      sudo service ipsec start
                      sudo chkconfig ipsec on
                      sudo service netwaork restart
                              </pre>
                    <br>
                    Give the following command to test whether the VPN tunnel is up or not.<br><br>
                    <pre>
                      sudo ipsec auto — status</pre>
                    <p> You should receive the log “IPsec SA established.” If you do not get this log, try the
                      following commands. They will explain the reasons for failure.
                    </p>
                    <pre>
                      sudo ipsec auto — replace cisco-vpn
                      sudo ipsec auto — up cisco-vpn</pre>
                  </li>

                  <li><i class="fa fa-angle-double-right"></i>Check whether the VPN tunnel can connect from the
                    Openswan instance to Third-party network<br><br>
                    <pre>
                      telnet <-Private IP of third party> 443 or use cURL command</pre>
                   </li>
                   <li><i class="fa fa-angle-double-right"></i>Check the connection between private application instances to third-party network<br><br>
                    <pre>
                      telnet <-Private IP of third party> 443 or use cURL command</pre></li>
                </ul>

                <p>If you are connected through telnet, you have successfully created the site-to-site VPN between the AWS platform and the third-party CISCO ASA network.<br><br>
                    Congratulations!
                    </p>

                    <h2>References</h2><br>
                    <p>  Openswan - <a href="https://www.openswan.org/">www.openswan.org</a></p>
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/ridma-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Ridma Gamage

                </h2>
                <small>Senior Software Engineer
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