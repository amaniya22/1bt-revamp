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
<h1 class="blog-post-title">User Authentication and Authorization with AWS Cognito</h1>

<!-- article content -->

<div class="margin-bottom-80">
<p>
AWS Cognito is a server-less authentication service for web applications that can be leveraged to handle user data and authentication flows within any database or server. It provides administrators with the ability to configure their own identity (authentication) provider and have control over management features such as user sign up, sign in and password management.</p>
<p>Imagine a scenario where a web application needs to access AWS resources using AWS SDK with authenticated users. The simplest way of doing this would be to include a secret key of a AWS user to enable access to AWS resources, but this method is less secure and doesn’t allow access to be restricted to certain users. This is where where user authentication comes in to play either with AWS Cognito or with external authentication providers.</p>
<p>To allow AWS resources access to users with authentication providers in Cognito, “Identity Pools” are used. Identity Pools provide AWS access via federated authentication - authentication via multiple external authentication providers such as Facebook, Amazon, Google, OpenID connect providers and SAML Identity providers.</p>
<p>In addition to Identify Pools, AWS Cognito also requires a token - received from either an external authentication provider, or the AWS Cognito authentication provider itself - in order to successfully authenticate a user. Using an external provider is the least troublesome option because the provider is responsible for handling the user sign up, sign in and password management. (Read this blog, which explains how to use a Google authentication provider with AWS Identity Pools.)</p>
<p>This blog post will provide a detailed walk-through on configuring an application to access AWS resources using AWS SDK with authenticated users by configuring an identity pool with an identity provider, and creating a simple static HTML web app for user sign up and sign in. After authentication, the app will list the objects of a specified S3 bucket to showcase the authorized access the logged in user has received.</p>
<p>Below is a video demonstrating the demo web app that will be built in this blog. It consists of user registration, user verification, user login and an authenticated query request to an S3 bucket - All using our own AWS Cognito authentication provider with no 3rd party involvement. Everything is in our control.

</p>
   

<h2>AWS Cognito Demo</h2><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/e1oh0zTlsfs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br> 
    <br>
 <h2>Prerequisites</h2>   
  <p>An AWS account with some basic knowledge of working with AWS services - the following AWS services will be utilized throughout this guide:</p>  

<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>AWS Cognito Service</li>
<li><i class="fa fa-angle-double-right"></i>Simple Storage Service</li>
<li><i class="fa fa-angle-double-right"></i>Identify Access Management Service</li>
</ul>       
    

<h2>You will learn</h2>                 
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>How to configure an AWS Cognito authentication provider according to your needs</li>            
<li><i class="fa fa-angle-double-right"></i>How to host a static web app in an AWS S3 bucket</li>            
<li><i class="fa fa-angle-double-right"></i>How to register, verify and login an user using AWS Cognito Javascript SDK</li>            
<li><i class="fa fa-angle-double-right"></i>How to use AWS Cognito Identity JavaScript SDK to get temporary access credentials</li>            
<li><i class="fa fa-angle-double-right"></i>How to use AWS S3 JavaScript SDK to query S3 bucket items using temporary access credentials</li>            
</ul>
    
<h2> High Level Architecture</h2>
 <p>In order to understand how all of this works, take a look at the high level architecture below, which showcases the components and services involved, and the jobs they perform.</p>   
    
 <br>            
<img src="assets/images/1-cog.png" class="img-responsive">    
<br><br>    
    

<p>The main steps of this process are as follows;</p>  

<p><strong>1.User registration</strong><br>
• User enters their email address, user name and password and registers with the User Pool</p>
<p><strong>2.User verification</strong><br>
• The Cognito User Pool will a verification code via email or SMS, and the user enters the code to verify themselves with the User Pool</p>
<p><strong>3.User log-in</strong><br>
• The user enters their user name and password, and logs in to the Cognito User Pool in which case a token will be provided by Cognito upon successful login</p>
<p><strong>4.Get temporary credentials</strong><br> 
• The Cognito Identity Pool will provide temporary credentials to AWS resources using the token that was received on successful login</p>
<p><strong>5.User authorization</strong><br>
• Cognito will authorize the user with the necessary permissions with IAM role</p>
<p><strong>6.AWS resource management</strong><br>
• The authorized user will now have the ability to manage AWS resources according to the permissions provided by the AWS IAM.</p>
   
    
<p>Let’s now get started on configuring the application…</p>  
    
    
<h2>Step 1: Configuring a User Pool</h2>
<p>The User Pool provides features to control user sign up, sign in and user management with more advanced features. Follow the steps below to create a user pool:</p>  

<p>1.Go to the AWS Cognito service and click “Manage User Pools”.</p>
<p>2.Click “Create a user pool”, provide a “Pool name” and click “Review defaults” as below.</p>

<br>            
<img src="assets/images/2-cog.png" class="img-responsive">    
<br><br>  

<p>3.The next page will display the default settings. It is possible to customize features such as user attributes, password policies, verification by email or phone and multi-factor authentication settings. To keep things simple, this guide will keep the default settings. Click “Create pool”.</p>
<p>4.Copy the generated “Pool Id” from “General settings” section as below.</p>

<br>            
<img src="assets/images/3-cog.png" class="img-responsive">    
<br><br>  

<p>5.Go to the “App Clients” section and click “Add an app client”.</p>
<p>6.Give an “App client name” and uncheck “Generate client secret” as below. The reason for this is, to quote from AWS document, “when creating the App, the ‘generate client secret’ box must be unchecked because the JavaScript SDK doesn’t support apps that have a client secret.” — AWS Document. Click “Create app client”.</p>
<br>            
<img src="assets/images/4-cog.png" class="img-responsive">    
<br><br>
 
<p>7.Copy the generated “App client id” from “App clients” section as below.</p>
    
 <br>            
<img src="assets/images/5-cog.png" class="img-responsive">    
<br><br>
    
    
<h2>Step 2: Configuring an Identity Pool</h2>    
<p>The Identity Pool gives AWS resource access after it verifies that the token provided is a valid token generated by a registered authentication provider. In this case, the authentication provider that will be registered with the Identity Pool will be the AWS Cognito authentication provider that was created in step 1.</p>

    <h2>2.1. Creating an Identity Pool</h2>
    
<p>1.Go to the AWS Cognito service and click “Manage Identity Pools”.</p>
<p>2.	Enter “Identity pool name”, expand the “Authentication providers” section and select the “Cognito” tab. This is where the Cognito authentication provider will be registered with the Identity Pool.</p>
<p>3.Paste the “Pool Id” copied in step 1.4 in the “User Pool ID” field, and paste the “App client id” copied in step 1.7 in the “App client id” field.
</p>  
    
 <br>            
<img src="assets/images/6-cog.png" class="img-responsive">    
<br><br>
<p>4.In the “Your Cognito identities require access to your resources” page, take note of the IAM Roles that will be created for authenticated and unauthenticated users as displayed below.

Necessary IAM Role Policy will need to be given to these roles. In this example, the authenticated user role which is “Cognito_MSNIdentityPoolAuth_Role” will be given full AWS S3 access. This will be done in the next step. Click “Allow” to finish creating Identity Pool.
</p>      
    
 <br>            
<img src="assets/images/7-cog.png" class="img-responsive">    
<br><br>    
    
<p>5.After creation go to the created Identity Pool dashboard and click “Edit Identity Pool” and copy the “Identity pool ID” as displayed below.</p>    
    
  <br>            
<img src="assets/images/8-cog.png" class="img-responsive">    
<br><br>   
    
<h2>2.2. Allow AWS Resource Access to Identity Pool Role   </h2>
    
<p>1.Go to AWS IAM Service -> Roles and find the role that was noted in step 2.1.4. and click “Attach policies”.</p>
<p>2.Search and add “AmazonS3FullAccess” as below and click “Attach policy”. Now any authenticated user that will assume this role will have access to work with AWS S3.
</p>  
    

<br>            
<img src="assets/images/9-cog.png" class="img-responsive">    
<br><br>    
    
<h2>Step 3: Creating an S3 Bucket for Web Hosting  </h2>
    <P>1.Go to AWS S3 page and click “Create bucket” </p>
    <p>2.Enter a “Bucket name” and click “Next” </p>
<p>3.In the “Set permissions” section, set the permissions as below:</p>
 

<br>            
<img src="assets/images/10-cog.png" class="img-responsive">    
<br><br>       
    
<p>4.Click on the created bucket and go to bucket properties.</p>
<p>5.Enable the “Static website hosting” and configure as below. Enter “Index document” as “index.html”. Copy the “Endpoint” URL - the web app that will be hosted is accessed using this endpoint.</p>
<br>            
<img src="assets/images/11-cog.png" class="img-responsive">    
<br><br>       
       
 <p>
6. Click on “Permissions” tab and go to “CORS configuration” and paste the below XML code and click “Save”. This will allow cross origin access.
</p>
<script src="https://gist.github.com/SumindaD/1fdfa3244a234986be272e5d507f1e15.js"></script>
    
    <br>            
<img src="assets/images/12-cog.png" class="img-responsive">    
<br><br> 
    
<h2>Step 4: Creating and Hosting The Web App</h2><br>
    
 <script src="https://gist.github.com/SumindaD/1cd5c1a7189461725212b819c34aff77.js"></script>   
  <br><br>  
 <p><strong>Key points in the code are,</strong></p>   
    
<p><strong>Line 168</strong><br>
Gets the ID token after a user is successfully logged in with AWS Cognito authentication provider.</p>
<p><strong>Line 335</strong><br>
Gets the ID token from an already logged in user session. This method is called on the page load.</p>
<p><strong>Line 272</strong><br>
Gets the temporary credentials for AWS services using ID token, Identity Pool ID and User Pool ID and updates the AWS credentials. </p>
    
  <p>2. Open “index.html” and replace following place holder values and save.</p>
<p id="8742" class="jw jx fe bh jy b jz ka kb kc kd ke kf kg kh ki kj" data-selectable-paragraph=""><code class="ne oi oj ok ol b">&lt;User Pool ID&gt;</code> with the value copied in step “<strong class="jy nj">1.4</strong>”.</p>
<p id="14fa" class="jw jx fe bh jy b jz ka kb kc kd ke kf kg kh ki kj" data-selectable-paragraph=""><code class="ne oi oj ok ol b">&lt;App Client ID&gt;</code> with the value copied in step “<strong class="jy nj">1.7</strong>”.</p>
<p id="d853" class="jw jx fe bh jy b jz ka kb kc kd ke kf kg kh ki kj" data-selectable-paragraph=""><code class="ne oi oj ok ol b">&lt;Region&gt;</code> with the region code of the region that you have created your services. You can get region codes from <a href="https://docs.aws.amazon.com/general/latest/gr/rande.html" class="aq cd ku kv kw kx" target="_blank" rel="noopener">here</a>.</p>
<p id="94c1" class="jw jx fe bh jy b jz ka kb kc kd ke kf kg kh ki kj" data-selectable-paragraph=""><code class="ne oi oj ok ol b">&lt;Identity Pool ID&gt;</code> with the value copied in step “<strong class="jy nj">2.1.5</strong>”.</p>
 <p>3. Go the S3 bucket that was created in step “3” and drag the “index.html” as well as “script” directory as below and click “Upload”.</p>
   
 <br>            
<img src="assets/images/13-cog.png" class="img-responsive">    
<br><br>    
    
<p>4.In order to allow public access, Select all the files, click on “Actions” and select “Make public” as below. </p> 
  <br>            
<img src="assets/images/14-cog.png" class="img-responsive">    
<br><br>   

<p>5.Go to the endpoint that was copied in step 3.5 and you will be presented with the login page. Go ahead and try out create, verify and login a user, and provide the bucket name that was created in step 3 for the S3 bucket name and it will successfully display the files that were uploaded. By default, a verification code will be sent to your email.</p>
 
<p><strong>Congrats! Now you now how to utilize AWS Cognito into your app and unleash the full power of it!</strong></p>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<!-- /article content -->

</div>



<div class="row tab-post padding-top-20">
<!-- post -->
<div class="col-md-2 col-sm-2 col-xs-4">
<img src="assets/images/suminda.jpg" width="90">

</div>
<div class="col-md-10 col-sm-10 col-xs-8">
<h2 class="padding-top-20 size-20">Suminda De Silva

</h2>
<small>Senior Software Engineer
</small>
</div>
</div>
</div>
</div>

<!-- RIGHT -->
<div class="col-md-4 col-sm-4">

<!-- side navigation -->
<?php include 'include/blog-sidebar.php'; ?>

</div>
</div><!-- Row -->
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