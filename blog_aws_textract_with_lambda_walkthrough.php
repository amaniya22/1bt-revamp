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
<h1 class="blog-post-title">AWS Textract with Lambda Walkthrough</h1>

<!-- article content -->

<div class="margin-bottom-80">
<p>
AWS Textract is a document text extraction service.
“Amazon Textract is based on the same proven, highly scalable, deep-learning technology that was developed by Amazon’s computer vision scientists to analyze billions of images and videos daily. You don’t need any machine learning expertise to use it” — AWS Docs</p>
<p>This post will provide a walkthrough of several use cases of the AWS Textract service using AWS Lambda with Python implementations. Mainly:</p>

<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>Extracting Text from a Base64 Image</li>
<li><i class="fa fa-angle-double-right"></i>Extracting Text from an S3 Bucket Image</li>
<li><i class="fa fa-angle-double-right"></i>Extracting Text from an S3 Bucket Document</li>
</ul>     

<h2>Prerequisites</h2>
<p>You need to have an AWS account and some basic knowledge working with AWS services. The following AWS services will be utilized throughout this guide.</p>             

<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>Lambda Service</li>
<li><i class="fa fa-angle-double-right"></i>Textract Service</li>
<li><i class="fa fa-angle-double-right"></i>Simple Notification Service</li>
<li><i class="fa fa-angle-double-right"></i>Simple Storage Service</li>
<li><i class="fa fa-angle-double-right"></i>Identity Access Management Service</li>
</ul>               

<h2>You will learn</h2>                 
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>To use synchronous Textract methods for images using base64 as images and S3 object as images</li>            
<li><i class="fa fa-angle-double-right"></i>To use asynchronous Textract methods for PDF text extraction</li>            
<li><i class="fa fa-angle-double-right"></i>How to add triggers to Lambda function</li>            
<li><i class="fa fa-angle-double-right"></i>How to add an API Gateway and expose a Lambda function</li>            
<li><i class="fa fa-angle-double-right"></i>How to configure the Simple Notification service and utilize AWS Textract services</li>            
<li><i class="fa fa-angle-double-right"></i>How to configure the Identity Access Management service to provide access to only necessary services</li>  
</ul>

<h2>Adding boto3</h2>
<p>Since Lambda functions are executed in an AWS hosted runtime, some of the latest packages that are used by the Lambda code needs to be uploaded manually. In order to use AWS Textract in Python, the latest “boto3” package is needed, which is not currently available in AWS Lambda hosted environments as of this writing, which is needed to be downloaded and uploaded as an AWS Lambda “Layer”. You can follow the below steps to complete this.</p>

<p>1.Python dependency manager “PIP” is needed to download the “boto3” package.<br>
2.Execute following command in command shell. <code>pip install — target ./python boto3</code><br>
3.After the package is downloaded, Zip the “python” folder. Alternatively, the zipped “boto3-layer” can be grabbed from <a href="https://github.com/SumindaD/AWSTextractLamda/blob/master/boto3-layer.zip?source=post_page" target="_blank">here.</a><br>
4.Go to AWS Lambda -> Layers and click “Create Layer”.<br>
5.Give a layer name, select the latest python version and upload the zip file as below.</p>
<br>            
<img src="assets/images/lambda-1.jpg" class="img-responsive">    
<br><br>  
<p>6. Click “Create”<br>
This will create a “boto3" Python package for the AWS Textract SDK which will be used as a Lambda layer. Please note that “Compatible runtimes” should be the same as the Lambda function’s runtime which will use the layer.
</p>

<h2>1.Image Text Extraction</h2>
<p>This section will focus on text extraction using images (JPEG/PNG). 
In the first example, a Base64 converted image will be directly used with AWS SDK to extract text.
In the second example, an S3 bucket triggered Lambda will be used to automatically extract text when images are uploaded to the S3 bucket and write each result to a text file in the S3 bucket.</p>
<h2>1.1 Extracting Text from a Base64 Image</h2>
<br>            
<img src="assets/images/lambda-2.jpg" class="img-responsive">    
<br><br>

<h2>1.1.1 Creating The Lambda Function</h2>
<p>1.Go to the AWS Lambda service and click “Create Function”.<br>
2.Give a “Function name” as indicated below and provide the “Execution role” as “Create a new role from AWS policy templates” and enter a “Role name” as well. Note that “Runtime” is selected as “Python 3.6”. This is compatible with the “boto3-layer” created previously as the specified runtimes were both “Python 3.6” and “Python 3.7”.
</p>
<br>            
<img src="assets/images/lambda-3.jpg" class="img-responsive">    
<br><br>
<p>3.Click “Create function”.</p>
<h2>1.1.2 Attaching Permission Policies to Lambda</h2>
<p>1.Once Lambda is created, click on “View the getTextFromImageRole role” under the “Execution role” section in the Lambda configuration window as displayed below.</p>
<br>            
<img src="assets/images/lambda-4.jpg" class="img-responsive">    
<br><br>
<p>2. This will open the “getTextFromImageRole” configuration page as below. Click “Attach policy”. Then select “AmazonTextractFullAccess” policy and click “Attach policy” as displayed below. This will give the Lambda function permission to access the AWS Textract service.</p>
<br>            
<img src="assets/images/lambda-5.jpg" class="img-responsive">    
<br><br>

<h2>1.1.3 Adding a Custom “boto3-layer” to Lambda</h2>
<p>1.Click “Layers” in the Lambda designer and then click “Add a layer” as indicated below. This will help add the “boto3-layer” that was created previously.</p>

<br>            
<img src="assets/images/lambda-6.jpg" class="img-responsive">    
<br><br>

<p>2.Select the “boto3-layer” under “Compatible layers” and then select version 1 as below.</p>

<br>            
<img src="assets/images/lambda-7.jpg" class="img-responsive">    
<br><br>
<p>3.Click “Save” in the Lambda configuration.</p>
<h2>1.1.4 Implementing Lambda Code</h2>
<p>Go to the Lambda code editor and paste the code below.</p>
<script src="https://gist.github.com/SumindaD/462f4d74721b2335866dc88d7df461af.js"></script> 

<p>This code expects a Json body with an “Image” parameter and its value as the Base64 encoded image string. A sample payload which you can use is displayed below.</p>   

<script src="https://gist.github.com/SumindaD/49ff1138ba9a5b3f6ef6ddee645ba0bc.js"></script>

<h2>1.1.5 Exposing The Lambda Using API Gateway</h2>
<p>Currently, the Lambda is not exposed over public internet. This needs to be exposed via an AWS API Gateway endpoint. You can follow the steps below.</p>
<p>1.Click on “Add trigger” from the Lambda configuration page.</p>

<br>
<img src="assets/images/lambda-8.jpg" class="img-responsive"> 
<br><br>

<p>2.Select “API Gateway” and fill out details as below. Note that “Security” is set to “Open with API key” to protect Lambda from anonymous access.</p>   

<br>
<img src="assets/images/lambda-8-1.jpg" class="img-responsive"> 
<br><br>   
<p>3.Click “Add”.<br>
4.Go to the Lambda configuration page and expand the “API Gateway” section to get the API endpoint and the API key as displayed below.</p>

<br>
<img src="assets/images/lambda-9.jpg" class="img-responsive"> 
<br><br>   

<h2>1.1.6 Invoking The Lambda Function</h2>
<p>Use an API testing tool to invoke the endpoint. In this example “Postman” is used.</p>
<p>1.Add the API endpoint with headers “x-api-key” with the value of “API Key” and “Content-Type” as “application/json”.</p>

<br>
<img src="assets/images/lambda-10.jpg" class="img-responsive"> 
<br><br>  
<p>2.Copy the sample body provided in section “1.1.4” into the raw body section as below.</p>
<br>
<img src="assets/images/lambda-12.jpg" class="img-responsive"> 
<br><br>    
<p>3. Execute the call and the response will return with the extracted text as below.</p>     
<br>
<img src="assets/images/lambda-13.jpg" class="img-responsive"> 
<br><br>   

<h2>1.2 Extracting Text from an S3 Bucket Image</h2>
<br>
<img src="assets/images/lambda-14.jpg" class="img-responsive"> 
<br><br>   

<p>This will consist of a Lambda function which gets triggered whenever an image gets uploaded to the S3 Bucket. Follow the steps below and create the S3 bucket.</p>
<h2>1.2.1 Creating the S3 Bucket</h2>
<p>1.Go to the AWS S3 page and click “Create bucket”.<br>
2.Enter “Bucket name” and “Region” same as the region that will be used in the Lambda function and click “Next”.<br>
3.In the “Set permissions” section, set the permissions as below.
</p>
<br>
<img src="assets/images/lambda-15.jpg" class="img-responsive"> 
<br><br>   
<p>4.Click “Create bucket”.</p>
<h2>1.2.2 Creating The S3 Lambda Trigger</h2>
<p>Follow the steps below to create a Lambda that will be executed upon new image uploads.</p>
<p>1.Go to the AWS Lambda service page and click “Create function”.<br>
2.Select “Use a blueprint” and search for “s3-get-object-python” template and click “Configure”.<br>
3.Enter “Function name”, “Role name” and select the “Bucket name” as the S3 bucket created in the previous step. Make sure to add “Suffix” to restrict the trigger only for PNG images. Fill out the rest of the settings as below.<br>
</p>
<br>
<img src="assets/images/lambda-16.jpg" class="img-responsive"> 
<br><br> 
<p>4. Click “Create function” and copy the code below. The below code will send the uploaded image to the AWS Textract and write the response as a text file with the same name to the S3 bucket.</p>

<script src="https://gist.github.com/SumindaD/ad2108d8c3d63a072d086770869732db.js"></script>
<p>5.Follow the steps in section “1.1.2” and add “AmazonTextractFullAccess” and “AmazonS3FullAccess” policies to the “getTextFromS3ImageRole” role that was created for this Lambda. This will provide access to both AWS Textract and S3 services.</p>
<p>6.Please follow the steps in section “1.1.3” and add the “boto3-layer” to the “getTextFromS3Image” Lambda.</p>
<h2>1.2.3 Testing The S3 Lambda Trigger</h2>
<p>Go to the S3 bucket created in step 1.2.1 and upload a png image with some text. You can download a sample image <a href="https://github.com/SumindaD/ASW_Textract_Lambda_MediumBlog/blob/master/sample_text.png?source=post_page---------------------------" target="_blank">here.</a><br>
Once the image is uploaded, after a few seconds, the extracted text file should be created in the same location with the same name as displayed below.
</p>
<br>
<img src="assets/images/lambda-17.jpg" class="img-responsive"> 
<br><br> 

<p>2.Extracting PDF Text from an S3 Bucket Document</p>
<br>
<img src="assets/images/lambda-18.jpg" class="img-responsive"> 
<br><br> 

<p>This example will implement a Lambda which will be triggered whenever a PDF document is uploaded to the S3 bucket. The Lambda function will start a text extraction processing job. Once the AWS Textract completes the job, it will send a notification to the AWS Simple Notification Service which will trigger another Lambda. The Lambda triggered from the AWS SNS Service will get the text extraction job result from the payload. It will write the results to a text file in the S3 bucket with the same name as the PDF.</p>   

<h2>2.1 Creating the S3 Triggered Lambda Function</h2>
<p>1.Create another S3 triggered Lambda function following steps listed in section 1.2.2, with the only difference being instead of the suffix “png” the suffix “pdf” will be used to trigger PDF documents.</p>    
<br>
<img src="assets/images/lambda-19.jpg" class="img-responsive"> 
<br><br>   
<p>2.Follow the steps in section 1.1.2 and add “AmazonTextractFullAccess” and “AmazonS3FullAccess” policies to the “getTextFromS3PDFRole” role that was created for this Lambda. This will provide access to both AWS Textract and S3 services.</p>  
<p>3. Follow the steps in section 1.1.3 and add the “boto3-layer” to the “getTextFromS3PDF” Lambda.</p>
<p>
The API method “StartDocumentTextDetection” is asynchronous. This method starts a text extraction process and returns the “JobId”. Once the text extraction process is completed, it will trigger a notification to the AWS Simple Notification Service. Follow the below steps to create an AWS SNS.
</p>   
<h2>2.2 Creating The AWS SNS Topic</h2>    
<p>A Simple Notification Service topic is needed for Textract service to send a job completed notification along with “JobId”. Follow following steps to create a topic.</p>   
<p>
1.Go to AWS SNS service -> Topics and click “Create topic”.<br>
2.Enter a Name, keep the rest of the settings as default and create the topic as below.
</p>   
<br>
<img src="assets/images/lambda-20.jpg" class="img-responsive"> 
<br><br>   

<h2>2.3 Creating an IAM Role AWS SNS Access</h2> 
<p>An IAM Role is needed to get access to the AWS SNS service for AWS Textract to successfully send notifications.</p>   
<p>
1.Go to IAM -> Roles and click “Create role”.<br>
2.Select Lambda as the “Service that will use this role”.
</p> 
<br>
<img src="assets/images/lambda-21.jpg" class="img-responsive"> 
<br><br>    
<p>3.Go to the “Permissions” section and add the “AmazonSNSFullAccess” policy.</p>    
<br>
<img src="assets/images/lambda-22.jpg" class="img-responsive"> 
<br><br>    
<p>4.Give the role name as “AWSSNSFullAccessRole” and create the role. Please note, under “Trusted entities” Lambda service is provided. This is because the AWS Textract service was not available to be selected in the initial “Create role” page. We need to change the “Lambda” service to “Textract” service.</p>   
<br>
<img src="assets/images/lambda-23.jpg" class="img-responsive"> 
<br><br>   
<p>5.Go to “AWSSNSFullAccessRole” role settings and go to “Trust relationships” and click “Edit trust relationship”.</p>  
<br>
<img src="assets/images/lambda-24.jpg" class="img-responsive"> 
<br><br>    
<p>6.Change <small>lambda.amazonaws.com</small> to <small>textract.amazonaws.com</small> and update the trust policy. AWS Textract service will now have permission to send notifications to AWS SNS.</p>
<br>
<img src="assets/images/lambda-25.jpg" class="img-responsive"> 
<br><br>

<h2>2.4 Implementing The PDF Triggered Lambda</h2>   
<p>1.Go to the “getTextFromS3PDF” Lambda code editor and paste the code below.</p>    
<script src="https://gist.github.com/SumindaD/c73608b1402b2fdaea7ccdcb55487299.js"></script>   
<p>2. Replace<RoleArn> with the Role ARN found in the IAM Role summary section of “AWSSNSFullAccessRole” that was created in step 1.3.3.</p>   

<br>
<img src="assets/images/lambda-26.jpg" class="img-responsive"> 
<br><br>   

<p>3. Replace<SNSTopicArn> with the ARN found in the details section of “PDF_TextProcess_Completed” topic that was created in step 2.2.</p>

<br>
<img src="assets/images/lambda-27.jpg" class="img-responsive"> 
<br><br>      
<p>2.5 Creating the AWS SNS Triggered Lambda Function</p> 
<p>This Lambda will be triggered once the notification indicating that the text extraction job is completed is delivered from the AWS Textract service.</p>    
<p>1.Create a new Lambda function from scratch with the name “writePDFResultToS3”.</p>   
<br>
<img src="assets/images/lambda-28.jpg" class="img-responsive"> 
<br><br>     
<p>2. Follow the steps in section 1.1.2 and add “AmazonTextractFullAccess” and “AmazonS3FullAccess” policies to the “writePDFResultToS3Role” role that was created for this Lambda. This will provide access to both AWS Textract and S3 services.</p> <p>3.Follow the steps in section 1.1.3 and add the “boto3-layer” to the “writePDFResultToS3” Lambda.</p>
<p>4. Click “Add trigger” from the Lambda designer and configure the subscription to the “PDF_TextProcess_Completed” topic that was created in step 2.2 and add the trigger.</p>
<br>
<img src="assets/images/lambda-29.jpg" class="img-responsive"> 
<br><br>
<p>5.Go to the “writePDFResultToS3” Lambda code editor and paste the code below. This code will check if the job status is “SUCCEEDED” and retrieve the job result using the “JobId”, process the result into a text file with the same name as the PDF file and write it to the S3 bucket.</p>
<script src="https://gist.github.com/SumindaD/ca868fab4104480b609ee55f1301ad15.js"></script>
<h2>2.6 Testing PDF Text Extraction</h2>    
<p>Go to the S3 bucket and upload a PDF file. You can get a sample PDF file from <a href="https://github.com/SumindaD/ASW_Textract_Lambda_MediumBlog/blob/master/Sample.pdf?source=post_page---------------------------" target="_blank">here</a>. After about 1 minute a text file with the same name as the PDF will be generated. This text file contains the text result extracted from the PDF.</p>
<br>
<img src="assets/images/lambda-30.jpg" class="img-responsive"> 
<br><br>

<h2>Summary</h2>
<p>You have seen several ways of utilizing AWS Textract services. Using available AWS SDKs, the possibilities of integrating these services into your applications are endless.</p>

<h2>References</h2>

<p style="font-size:14px;">
- Automatically extract text and structured data from documents with Amazon Textract | Amazon Web…<br>
- Limits in Amazon Textract - Amazon Textract<br>
- Object Key and Metadata - Amazon Simple Storage Service<br>
- AWS Lambda - Serverless Compute - Amazon Web Services<br>
- Amazon Simple Notification Service (SNS) | AWS<br>
- Cloud Object Storage | Store & Retrieve Data Anywhere | Amazon Simple Storage Service<br>
- AWS Identity & Access Management
</p>


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