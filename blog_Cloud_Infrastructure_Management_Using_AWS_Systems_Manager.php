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
              <h1 class="blog-post-title">Cloud Infrastructure Management Using AWS Systems Manager (SSM) — Part 01</h1>
              <div><p><em>[Registering SSM Managed Instances and RUN Command]</em></p>
<h2>SSM in Hybrid Environments</h2><br>
<p>Managing a hybrid Cloud infrastructure using a traditional tool set could result in many challenges.</p>
<ol>
<li>Typical traditional IT tool sets are not built for Cloud</li>
<li>Deploying multiple products is a significant overhead</li>
<li>Multiple licensing costs</li>
<li>The complexity</li>
</ol>
<p>Therefore, having a single or unified infrastructure management tool for both AWS (EC2) and on-premise is a great need, especially if you have a hybrid Cloud infrastructure. AWS Systems Manager (AWS SSM) can help you in this journey.</p>
<p>Configuring your hybrid environments with SSM enables you to do the following:</p>
<ol>
<li>Create a consistent and secure way to remotely manage your workload from a single location using the same tools or scripts</li><br>
<li><span style="font-weight:700">Centralized access control</span> for all actions can be performed on your servers and VMs by using AWS IAM (Identity and Access Management)</li><br>
<li><span style="font-weight:700">Centralized auditing</span> and your view into actions performed on your servers and VMs by recording all actions in AWS CloudTrail</li><br>
<li><span style="font-weight:700">Centralized monitoring</span> by configuring CloudWatch Events</li>
</ol>
<p>So, now let&rsquo;s dive into some of the SSM capabilities.</p>
<h2>SSM Capabilities</h2><br>
<p>SSM is coupled with multiple capabilities (see Figure 1).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig1.jpg"></p>
<ol>
<li>RUN Command</li>
<li>State Manager</li>
<li>Inventory</li>
<li>Maintenance Window</li>
<li>Patch Manager</li>
<li>Automation</li>
<li>Parameter Store</li>
<li>Ops Center</li>
</ol>
<p>Of these capabilities,&nbsp;<span style="font-weight:700">SSM Document</span>&nbsp;is a core SSM component, which can be used by some of the other SSM capabilities as well.</p>
<h2>SSM Document</h2><br>
<p>SSM comes with dozens of pre-written&nbsp;<em>Documents</em>&nbsp;(in JSON/YAML) to perform certain instance-based infrastructure management tasks. You can create your own Documents too (see Figure 2).</p>
<p>Go to&nbsp;<em>SSM</em>&nbsp;-&gt; Select&nbsp;<em>Documents</em>&nbsp;(under&nbsp;<em>Shared Resources</em>)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog//SSM_fig2.jpg"></p>
<h2>The RUN Command</h2><br>
<p>Let&rsquo;s explore how we can use the SSM RUN Command to execute certain SSM Documents.</p>
<p><em>P.Note: We do not use any on-premise servers/VMs here.</em></p>
<p><span style="font-weight:700">Step 1 &mdash; Create a set of EC2 instances</span></p>
<p>Create three (Amazon Linux 2) EC2 instances with following tags on them (see Table 1). Make sure to add a Security Group for all of them with no inbound ports attached to it (later we can add ports, if required).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig3.jpg"></p>

<p><span style="font-weight:700">Step 2 &mdash; AWS Systems Manager Agent installation</span></p>
<p><em>AWS Systems Manager Agent (SSM Agent)</em>&nbsp;is a piece of Amazon software (you can download it from GitHub and see!) that is installed and configured on an EC2 instance or an on-premise server. The agent processes requests from the Systems Manager service in the AWS Cloud, and then runs them, as specified in the request. Having this installed on your instances, is a prerequisite to processing them as SSM managed instances.</p>
<p>If you&rsquo;ve created instances with Amazon Linux AMIs, this is pre-installed. If not, you need to&nbsp;<a href="https://docs.aws.amazon.com/systems-manager/latest/userguide/sysman-manual-agent-install.html">manually install</a>&nbsp;it in the instances [3].</p>
<p>Since we consider all our instances as Amazon Linux AMIs, we can skip this step.</p>
<p><span style="font-weight:700">Step 3 &mdash; Create Resource Groups</span></p>
<p>Once you tag your resources, you are able to create Resource Groups based on the tags defined.</p>
<p>Click &ldquo;Resource Groups&rdquo; in the top navigation bar and define your Resource Group criteria (see Figure 3).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig4.jpg"></p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Select &ldquo;Resource Groups&rdquo; </em><em>&rarr;</em><em> &ldquo;Create a Group&rdquo; </em><em>&rarr;</em><em> &ldquo;Group Type&rdquo; = &ldquo;Tag Based&rdquo;</em></p>
<p><em>Select &ldquo;Resource Types&rdquo; </em><em>&rarr;</em><em> AWS::EC2::Instance</em></p>
<p><em>Select &ldquo;Tags&rdquo; </em><em>&rarr;</em><em> Select &ldquo;</em>Environment<em>&rdquo; </em><em>&rarr;</em><em> Select &ldquo;Dev&rdquo; -&gt; Click &ldquo;Add</em>&rdquo; -&gt;&nbsp;<em>Click &ldquo;Preview Group Resources&rdquo;</em></p>  </div><br>
<p>The above will show you the EC2 instances for the determined criteria.</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;">
<p><em>Under &ldquo;Group Details&rdquo;&nbsp;&rarr; Key in a Group Name&nbsp;(i.e. RG-EC2-Dev) -&gt; Click &ldquo;Create Group&rdquo;</em></p></div></div>
<br><p>This will create a Resource Group of EC2 instances for Development activities (“Dev” tag).</p>

<p><span style="font-weight:700">Step 4— Register EC2 instances to SSM</span></p>
<p>Once the SSM Agent is installed and Resource Groups have been created, you are required to create an IAM Role and attach it to the EC2 instance (see Figure 4).
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig4a.jpg"></p>
<p>
    While creating the IAM Role, you should attach <em>AmazonEC2RoleForSSM</em>
    IAM Managed Policy to it (see Figure 5).
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig5.jpg"></p>
<p>
    Now, the selected EC2 instances are registered with SSM as Managed
    Instances.
</p>
<p>
    Go to Systems Manager -&gt; Managed Instances (see Figure 6)
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig6.jpg"></p>

<p><span style="font-weight:700">Step 5&mdash; Create a Custom Command Document to install Apache (httpd) on all Dev instances</span></p>
<p>In order to demonstrate the RUN command capability, let&rsquo;s try and install Apache on the Dev instances. We are using a custom RUN Document to execute this task.</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>Prerequisite: Make sure to open port 80 on the security group attached to Dev instances. This is to allow us to access the instances&rsquo; Apache installation via its public IP.</em></p></div></div>
<p>&nbsp;</p>
<p>Go to&nbsp;<em>SSM</em>&nbsp;-&gt; Select&nbsp;<em>D</em>ocuments -&gt; Click&nbsp;<em>Create Command or Session&nbsp;</em>button</p>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig7.jpg"></p>

<p>Use the following parameters to fill the page:</p>
<div class="phpcode"><div style="padding: 20px; border-left: 2px solid black;"><p><em>Document Name: ApacheInstallationDoc<em>&nbsp;</em>(you can give any name here)</em></p>
<p><em>Type &ldquo;Target Type&rdquo; (Optional) =&nbsp;<em>/AWS::EC2::Instance</em></em></p>
<p><em>Select &ldquo;Document Type&rdquo; as &ldquo;Command Document&rdquo;</em></p>
<p><em>Select &ldquo;YAML&rdquo; as the &ldquo;Document Content&rdquo; and paste your &ldquo;Document&rdquo; (see Figure 8)<em>&nbsp;</em>to the editor and click the &ldquo;Create Document&rdquo;&nbsp;<em>button in order to create the Document.</em></em></p></div></div>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig8.jpg"></p>
<p>Once the document is created, you will be able to see your Document under Documents “owned by me” (see Figure 9).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig9.jpg"></p>
<p><span style="font-weight:700">Step 6— Run the created Custom Command Document</span></p>

<p>Go to SSM -&gt; Go to Documents -&gt; Select Documents &ldquo;owned by me&rdquo; -&gt; Select the Document created by you (<em>ApacheInstallationDoc</em>)</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig10.jpg"></p>
<p>Click the <em>Run a Command</em> button. Then, you will see the below screen with the selected Document details (see Figure 11).</p>

<br>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig11.jpg"></p>
<p>Select the Document you created and then select the version (version 1).</p>

<p>Command Parameters (message) : You can override the default text here, if you wish (optional).</p>

<p>Targets: Select “Choose Resource Group”, which you created previously (RG-EC2-Dev).</p>

<p>Resource Types: &lt;All available types&gt;</p>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig12.jpg"></p>
<p>Rate Controls: Select “1” and the Concurrency.</p>

<p>Output Options: Disable “Enable writing to a S3 bucket” → Enable “CloudWatch Output” → Key in the Log Group Name <em>SSMLogs.</em></p>

<p>Finally, click the <em>Run</em> button.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig13.jpg"></p>
<p>Once you complete the above, you can see the instances executing the command across all EC2 instances that you’ve selected (see Figure 14).</p>

<p><img class="img-responsive" src="https://1billiontech.com1billiontech.com/assets/images/blog/SSM_fig14.jpg"></p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig15.jpg"></p>
<p>Once this is completed, you can try out the public IP of all of the instances to verify that the Apache is installed properly (see Figure 16).</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/SSM_fig16.jpg"></p>
            
 <h2>References</h2>
<br>
<ol>
<li>Managing Modern Infrastructure in Enterprises [Re:Invent 2018] :&nbsp;<a href="https://youtu.be/D91UJ69dcww">https://youtu.be/D91UJ69dcww</a></li><br>
<li>Deep Dive with Amazon EC2 Systems Manager:&nbsp;<a href="https://youtu.be/BmpxZsk9N48">https://youtu.be/BmpxZsk9N48</a></li><br>
<li>Manually install SSM Agent on EC2 instances for Linux:&nbsp;<a href="https://docs.aws.amazon.com/systems-manager/latest/userguide/sysman-manual-agent-install.html">https://docs.aws.amazon.com/systems-manager/latest/userguide/sysman-manual-agent-install.html</a></li><br>
<li>Amazon EC2 Systems Manager YouTube Playlist:&nbsp;<a href="https://www.youtube.com/playlist?list=PLhr1KZpdzukeH5jKyYi55ef9tEWAllypB">https://www.youtube.com/playlist?list=PLhr1KZpdzukeH5jKyYi55ef9tEWAllypB</a></li>
</ol></div>

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