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
              <h1 class="blog-post-title">AWS SAML 2.0 Identity Federation</h1>
              <h4>[Part 01 — AWS Identity Management Advanced Concepts Series]</h4><br>

 
              <div>
              <h2><strong>SAML 2.0 &mdash; An Overview</strong></h2><br>
<p>The Security Assertion Markup Language (SAML) standard defines an XML based framework for describing and exchanging security information between business entities [1]. These security information are expressed in the form of portable SAML assertions that applications working across security domain boundaries can trust.</p>
<p>SAML is primarily used in use cases in terms of exchanging security information in a typical enterprise setting.</p>
<ol>
<li>Single Sign On (SSO)</li>
<li>Identity Federation</li>
<li>To define web services standards such as WS-Security</li>
</ol>
<p>In this blog post, I will be focusing on the Identity Federation aspect in an AWS environment.</p>
<h2><strong>Identity Federation in AWS</strong></h2><br>
<p>In AWS, by&nbsp;default, only AWS users are allowed to access AWS resources. External identities are not allowed to access them.&nbsp;<strong>Identity Federation</strong>&nbsp;in AWS is the process of allowing such external identities to be used to indirectly access AWS services.</p>
<p>If the users in your organization already have a way to be authenticated, such as by signing into your corporate network, you do not have to create separate IAM users for them. Instead, you can federate those user identities into AWS.</p>
<h2><strong>SAML 2.0 with AWS</strong></h2><br>
<p>SAML(Security Assertion Markup Language) is an&nbsp;<strong>Open Standard Identity Federation Protocol,&nbsp;</strong>which is used by many&nbsp;<strong>Identity Providers</strong>. As an Identity Federation protocol, SAML will allow you to indirectly use on-premises IDs to access AWS resources.</p>
<p>AWS expects Identity Federation to be done with Identity Providers, which are SAML 2.0 compatible.</p>
<p>AWS Identity Federation uses IAM Roles and AWS temporary credentials with an underlying 12-hour validity.</p>
<p>There are multiple ways that you canimplement SAML 2.0 based Identity Federation within AWS.</p>
<ol>
<li>Via CLI/API based Identity Federation</li>
<li>Via AWS Console based Identity Federation</li>
</ol>
<h2><strong>Identity Federation via CLI/API</strong></h2><br>
<p>This scenario basically talks about how an on-premises application could access AWS resources via CLI/API invocations.</p>
<h2><strong>Accessing AWS from another identity Provider (via API)</h2></strong><br>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SAML_fig1.jpg"></p>
              <p>There are multiple steps involved here (see Figure 01).</p>
<p><strong>Step 1:</strong> AWS IAM should trust the SAML 2.0 compatible Identity Provider (IDP). This trust is &ldquo;bi-directonal&rdquo; and mutual. AWS should register related IDP, and SAML IDP should be configured in AWS IAM.</p>
<p><strong>Step 2:</strong> Once &ldquo;trust&rdquo; is established between IAM and the IDP, the on-premises application will access the Identity Provider for authentication.</p>
<p><strong>Step 3:</strong> Then, the IDP authenticates the request and identifies which roles are available for the application. Here, there can be multiple roles attached to a single identity.</p>
<p><strong>Step 4:</strong> Once the above is completed, the IDP will return a&nbsp;<strong>SAMLAssertion</strong>&nbsp;back to the application.</p>
<p><strong>Step 5:</strong> Invoke AWS using&nbsp;<strong>STS:AssumeRolewithSAML</strong>&nbsp;having&nbsp;<strong>SAMLAssertion</strong>&nbsp;as an input parameter.</p>
<p><strong>Step 6:</strong> AWS will return a Temporary Security Credential for the invocation.</p>
<p><strong>Step 7:</strong> Use this Temporary Security Credential to invoke AWS services.</p>
<h2><strong>Identity Federation via AWS Console</strong></h2><br>
<p>This scenario basically talks about how an external identity (user) can access AWS resources via the AWS console.</p>         
<h2><strong>Accessing AWS from another identity Provider (via Console)</h2></strong><br>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/AWS_SAML_fig2.jpg"></p>

              <p>There are multiple steps involved in this approach,although it is much simpler compared to the previous one(see Figure 02).</p>
<p><strong>Step 1:</strong> Create a &ldquo;Trust&rdquo; between the external Identity Provider (IdP) and AWS IAM by in turn creating an SAML/SSO Endpoint.</p>
<p><strong>Step 2:</strong> An enterprise user accesses the Identity Provider (IdP) to obtainthe required authentication.</p>
<p><strong>Step 3:</strong> Then, the IdP authenticates the request and identifies which roles are available for the user and returns them. Here, there can be multiple roles attached to a single user identity.</p>
<p><strong>Step 4:</strong> The IdP will return a&nbsp;<strong>SAMLAssertion</strong>&nbsp;to the application with a specified set of roles attached to it.</p>
<p><strong>Step 5:</strong> Send the&nbsp;<strong>SAMLAssertion</strong>&nbsp;to the&nbsp;<strong>SAML/SSO</strong>&nbsp;Endpoint URL, which is defined in the AWS end.</p>
<p><strong>Step 6:</strong> IAM interacts with STS to return Temporary Security Credentials.</p>
<p><strong>Step 7: </strong>Use these Temporary Security Credentials to invoke AWS services.</p>
<h2><strong>References</strong></h2><br>
<ol>
<li>Security Assertion Markup Language (SAML) V2.0 Technical Overview &mdash;&nbsp;<a href="http://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html" target="blank">http://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html</a></li>
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