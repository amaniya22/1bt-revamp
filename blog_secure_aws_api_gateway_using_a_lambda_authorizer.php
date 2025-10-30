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
<h1 class="blog-post-title">Secure AWS API Gateway Using a Lambda Authorizer</h1>

<!-- article content -->

<div class="margin-bottom-80">
<p>
Amazon API Gateway enables you to create and deploy your own REST and WebSocket APIs at any scale. You can create robust, secure, and scalable APIs that access AWS or other web services, as well as data that’s stored in the AWS Cloud. You can create APIs to use in your own client applications or you can make your APIs available to third-party app developers.</p>
<p>This post will provide a walkthrough on how to secure an AWS API Gateway using Lambda Authorizers.</p>
   

<h2>Prerequisites</h2>
<p>You need to have an AWS account and some basic knowledge working with AWS services. The following AWS services will be utilized throughout this guide.</p>             

<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>Lambda Service</li>
<li><i class="fa fa-angle-double-right"></i>API Gateway Service</li>
</ul>               

<h2>You will learn</h2>                 
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>To create Lambda functions</li>            
<li><i class="fa fa-angle-double-right"></i>To create an API Gateway</li>            
<li><i class="fa fa-angle-double-right"></i>To connect a Lambda function to an API Gateway</li>            
<li><i class="fa fa-angle-double-right"></i>To Add Authorizers to AWS API Gateway</li>            
</ul>

<p>In an AWS API Gateway, you can secure your endpoints using either IAM roles or an API key. That’s all good. But, imagine this scenario.</p>
    
    
<p>You have an external Authentication System (hosted God knows where) that handles user authentication and issue tokens for authenticated users and this same system needs to be used for AWS API Gateway endpoint security as well. Meaning, the token issued from the external Authentication System needs to be passed for each and every request to the API Gateway as well.</p>
<p>Great! But where do we write our code to verify the JWT token?</p>
<p>This is where Lambda Authorizers come in. You can create a Lambda function that will be invoked every time a request is made to an API Gateway endpoint and you can write your own custom code to verify that the token sent to the request is valid by sending the token to the external Authentication System and checked for its validity. Refer to the diagram below to get a better understanding.</p>
 
<br>            
<img src="assets/images/aws_1.png" class="img-responsive">    
<br><br>    
    
<p>The sequence of the above illustration is explained below.</p>
<p>[1] An API Gateway endpoint is invoked with a JWT token.</p>  
<p>[2] Before sending the request to the endpoint, the API Gateway invokes the Lambda Authorizer for JWT token verification.</p>  
<p>[3] The Lambda Authorizer checks the validity of the JWT token using a custom code with an external Authentication System.</p>  
<p>[4] If the JWT token is valid, the request is passed to the related endpoint or explicitly denied if the said token is invalid.</p>  

    
 <h2>A Brief Look at Lambda Authorizers</h2>
<p>A Lambda authorizer gets invoked whenever a request has been made to the AWS API Gateway. When invoking the Lambda authorizer by AWS API Gateway, the payload that is configured will be passed to the Lambda function as input for verification.</p>
<p>As for the output, after the verification, the Lambda should return an AWS policy document (a dictionary like object) which should look like below.</p>
   
 <br>            
<img src="assets/images/aws_2.png" class="img-responsive">    
<br><br>      
    
    
<p><small>principalid</small> — An identifier for the user associated with the token.</p>
<p><small>Effect</small> — Whether the request should be allowed or denied.</p>
<p><small>Resource</small> — The ARN (Amazon Resource Name) for the API Gateway endpoint the request was sent to.</p>
    
    
<p>Optionally, it’s possible to forward additional key value pairs to the target Lambda or the next endpoint via context map. This is useful to pass additional data from the Lambda Authorizer to the next endpoint.</p>
<p>If the API uses a usage plan, one of the usage plan’s API keys must be set in <small>usageIdentifierKey</small> property value.</p>
<p>Of course, you can generate this policy document dynamically, but to make things easy, AWS provides us blueprints with boilerplate code to generate this policy document. This will be used in the demo.</p>
    
 
<h2>Lambda Authorizer Event Payloads</h2>
    
 <p>Event payload is the input sent to the Lambda function. There is a token based payload and a request based payload. Figure 01 refers to a token based Lambda Authorizer.</p>   
    
    
    
 <h2>Token Based Lambda Authorizer</h2>
<p>
- Specify the header name in which the JWT token will be supplied.<br>
- Can only verify the caller using the token.</p>
   
<h2>Request Based Lambda Authorizer</h2>
<p>- Specify multiple request parameters to be extracted from the request that needs to be sent to the Lambda Authorizer.<br>
- Can verify the caller using multiple request parameters.</p>
   
 <p>Depending on the need you can decide which type of event payload to use. If you have a token that needs to be validated, the obvious choice will be a token based payload. If you need to validate some values in the request parameters, a request based payload is the way to go.</p>   
    
    
<h2>A Simple Demo</h2>
<p>This demo will be based on the token based Lambda Authorizer.</p>
  
<h2>1. Creating an API Gateway</h2>
<p>
1.Go to the API Gateway service in the AWS Console.<br>
2.Click on “Get Started” and fill out information as displayed below and click on “Create API”.</p>

 
<br>            
<img src="assets/images/aws_3.png" class="img-responsive">    
<br><br>    

    
<h2>2. Creating the Lambda Authorizer</h2>
<p>Before configuring an Authorizer in the AWS API Gateway, we need to create a Lambda function that will be set as the Authorizer in the API Gateway.</p>
    
<p>
1.Go to the Lambda service and click “Create a function”.<br>
2.Select “Use a blueprint” and search for the Python based AWS API Gateway Authorizer blueprint as displayed below and click “Configure”.
</p>  
    
<br>            
<img src="assets/images/aws_4.png" class="img-responsive">    
<br><br>    

    
<p>3. Give a “Function name”, select “Create a new role with basic lambda permissions” under “Execution role” and click “Create function”. </p> 
    
 <br>            
<img src="assets/images/aws_5.png" class="img-responsive">    
<br><br>   
    
    
<p>4. Go to the Lambda designer and paste the code below. lambda_handler was changed from the blueprint code to allow all methods if the token value is equal to “allow” and deny all methods if token value is something else.</p>
<p>
This is typically when the token will be sent to an external Authentication System to be checked for its validity. But for the purposes of this demo, let’s keep it simple.</p>
  
 <script src="https://gist.github.com/SumindaD/5535d110690b141c671cc29917d4091c.js"></script>   
    
<h2>3.Adding an Authorizer to the API Gateway</h2>
<p>
1.Go to the API Gateway created in step 1.<br>
2.Go to the “Authorizers” section and click “Create New Authorizer”.<br>
3.Enter a “Name”, select “Type” as “Lambda”, select the Lambda function that was created in step 2 as the “Lambda Function”. For the field “Token Source” enter the name “jwt_token”. This will be the header name in which the token should be supplied. Deselect “Authorization Caching” and click “Create”.<br>
</p>


<br>            
<img src="assets/images/aws_6.png" class="img-responsive">    
<br><br>   


<p>3.AWS will ask to grant permission to the API Gateway to invoke the Lambda function. Click “Grant & Create”.</p>
<p>
Now this Authorizer will be available to be used in API Gateway resources.</p>
   
<h2>4.Creating the Target Lambda</h2>    
    
<p>
1.Go to the Lambda service and click “Create function”.<br>
2.Select “Author from scratch”, enter a “Function name”, select “Python 3.6” as “Runtime” and click “Create function”.
</p>   
    
 <br>            
<img src="assets/images/aws_7.png" class="img-responsive">    
<br><br>   
  
<h2>5.Connecting the Target Lambda with the API Gateway</h2>    
    
 <p>
1.Go to the API Gateway that was created in step 1 and go to “Resources”.<br>
2.Click “Actions” -> “Create Resource” and enter “Resource Name” as “sayhello” as displayed below. Click “Create Resource”.
</p>   
<br>            
<img src="assets/images/aws_8.png" class="img-responsive">    
<br><br>    
<p>   
3. Select the resource that was created in the previous step and go to “Actions” -> “Create Method” and add the method as “Get”.  </p>  

<br>            
<img src="assets/images/aws_9.png" class="img-responsive">    
<br><br>  
<p>
 4. In the Get method configuration page that appears next, enter the name of the Lambda that was created in step 4 and click “Save”.  </p>
    
<br>            
<img src="assets/images/aws_10.png" class="img-responsive">    
<br><br>    
    
<p>5. AWS will ask to grant permission for the API Gateway to invoke the Lambda function. Click “OK”.<br>
Now the target Lambda that was created in step 4 is connected with this “sayhello” API endpoint.<br>
Whenever you have made changes in the API Gateway, for them to get applied to the environment, it needs to be deployed. However, you can test locally from within the AWS Gateway console without having it deployed.</p>
   
    
<h2>6.Deploying the API</h2>
    
<p>
1.Select “Actions” -> “Deploy API”.<br>
2.Create a new deployment stage as below and click “Deploy”.    
</p>   
    
 <br>            
<img src="assets/images/aws_11.png" class="img-responsive">    
<br><br>    
    
<h2>7.Invoking the Target Lambda Without the Authorizer </h2>   
    
<p>Before securing our API Gateway endpoint, let’s make sure we can call them without any authorization.</p>   
    
 <p>1.Go to the deployment stage that was created in the previous step and copy the invoke URL. This is our API Gateway endpoint.</p>   
  
<br>            
<img src="assets/images/aws_12.png" class="img-responsive">    
<br><br>    
    
<p>2.Append the “Resource Name” that was created in step 5.2 which was “/sayhello” and call the complete URL in the browser. The result should return from the target Lambda as below.</p>  
    
<br>            
<img src="assets/images/aws_13.png" class="img-responsive">    
<br><br>     
    
<p>Let’s add an authorization and secure our endpoint.  </p>
 
<h2>8.Adding an Authorizer to the API Gateway Endpoint</h2>
<p>1.Go to the “Get” method that was created in step 5.3 and select “Method Request”.</p>  
    
 <br>            
<img src="assets/images/aws_14.png" class="img-responsive">    
<br><br>    
  
<p>2.In the next configuration page, select the Authorizer as “api-authorizer”, which was created in step 3 and apply changes.</p>
    
  <br>            
<img src="assets/images/aws_15.png" class="img-responsive">    
<br><br>   
  
<p>3. For the changes to take affect, the API needs to be redeployed.</p>
    
 <h2>9.Re-deploying the API</h2>   
<p>1.Select “Actions” -> “Deploy API”.<br>
2.Select the “Deployment stage” that was created in step 6.2 and click “Deploy”.
</p>  
    
  <br>            
<img src="assets/images/aws_16.png" class="img-responsive">    
<br><br>     
    
  
<h2>10.Invoking the Target Lambda with Authorizer</h2>
<p>1.Wait for a few seconds for the changes to take effect and reload the URL that was invoked in step 7.2. Now this endpoint needs the correct header with a valid token in order to be successfully invoked. It should trigger an error since there’s no “jwt_token” header given.</p>  
<br>            
<img src="assets/images/aws_17.png" class="img-responsive">    
<br><br>   
    
    
<p>2.In order to pass the token header with the request, use an API testing tool. In this case “Postman” is used.</p>
<p>The header name in which the token should be passed is the “Token Source” that was specified in step 3.3.</p>
<p>In our Lambda Authorizer, for the purposes of this demo and to keep things simple, the token is valid if the value is “allow”.</p>
<p>The Postman configuration to send this request is displayed below. Notice the header “jwt_token” and its value “allow”.</p>

<br>            
<img src="assets/images/aws_17.png" class="img-responsive">    
<br><br> 
    
 <p>You can see the response from the target Lambda.</p>   
    
    
<h2>Congratulations! Your Lambda Authorizer is doing its job perfectly!</h2>   
    
 
<h2>Summary</h2>
<p>You have seen how you can secure an AWS API Gateway using your own logic or an external authentication system. This is specially useful when you want to integrate microservices with an existing system.</p>   
    

<h2>References</h2>
    
<p>
Use API Gateway Lambda Authorizers - Amazon API Gateway
Enable an Amazon API Gateway Lambda authorizer to authenticate API requests.
docs.aws.amazon.com</p>

<p>
Output from an Amazon API Gateway Lambda Authorizer - Amazon API Gateway
A Lambda authorizer function's output is a dictionary-like object, which must include the principal identifier (…
docs.aws.amazon.com</p>

<p>
AWS Lambda - Serverless Compute - Amazon Web Services
AWS Lambda lets you run code without provisioning or managing servers. You pay only for the compute time you consume.
aws.amazon.com</p>



    
    
    
    
    

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