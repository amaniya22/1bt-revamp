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
              <h1 class="blog-post-title">Building an OCR Backend with AWS Textract – A Case Study</h1>
              <div>
              <p>This blog primarily talks about how AWS Textract [1] can be leveraged, along with other AWS services, to extract document/image data into a NOSQL database (DynamoDB) for further processing. Auxenta has used this solution architecture for multiple client engagements in the AWS stack.
  </p>

  <h2> The Solution Architecture</h2>
  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_OCR_fig1.jpg"></p><br>
  <p>The complete solution architecture can be explained in a few steps.</p>

<p><span style="font-weight:700">Step 01</span><strong>- Storing images in S3</strong></p>
<p>All the front-end web/mobile requests run through an AWS API Gateway with a valid JWT token. The AWS API Gateway uses the Lambda Authorizer for the JWT token verification. After a successful token verification, the API gateway will invoke a Lambda function in order to store the received document/image into an S3 bucket. All the documents/images are encrypted using AWS KMS.</p>

<p><span style="font-weight:700">Step 02</span><strong>- Text extraction using AWS Textract</strong></p>
<p>As of now, AWS Textract has a limitation of only supporting 2 asynchronous image text extraction processes per account. To overcome this and to make the process more asynchronous and decoupled, AWS SQS has been proposed.</p>
<p>The SQS will trigger a Lambda function for image/document extraction with the help of AWS Textract. Once AWS Textract completes the extraction process, SNS invokes another Lambda function to store the extracted text data in DynamoDB.</p>
<p>[P.Note: A detailed step-by-step guide on how to use AWS Textract with Lambda could be found <a href="https://1billiontech.com/blog_aws_textract_with_lambda_walkthrough.php">here</a>.]</p>
<p><span style="font-weight:700">Step 03</span><strong>- Handling of high priority images with multiple queues</strong></p>
<p>A particular Auxenta client had a requirement for high priority messaging. Since AWS SQS does not support high priority message processing, the solution architecture had to go through the following change (see Figure 02).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_OCR_fig2.jpg"></p><br>

<p>The solution entailed creating multiple SQS instances for each priority level.</p>
<p>Here the Lambda function checks the priority of the request and adds the job to the relevant priority queue. The Lambda function starts text extraction using AWS Textract processing for high priority messages. If Textract rejects the request due to any issue, the messages are put back in the queue for later retrial.</p>
<p>The CI/CD aspect is completely automated with the help of <em>AWS CodePipeline</em>, <em>AWS CodeBuild</em> and <em>Serverless Framework [2]</em>.</p>

<p><span style="font-weight:700">AWS CodePipeline</span></p>
<p>AWS CodePipeline will be used to configure the CI/CD pipeline for separate environments such as Dev, Staging, QA and Production.</p>

<p><span style="font-weight:700">AWS CodeBuild</span></p>
<p>AWS CodeBuild will be utilized to provide a build environment in which the Serverless Framework will be executing deployment steps from within.</p>

<p><span style="font-weight:700">Serverless Framework</span></p>
<p>This will provision all the required AWS resources for a given environment (Dev/QA/Production).</p>

<p>Please refer the following CI/CD sequence (see figure 03).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/AWS_OCR_fig3.jpg"></p><br>

<ol>
<li>A developer commits code to project master branch and this triggers the AWS CodePipeline.</li>
<li>AWS CodeBuild will pull the source code from Github and start the build process.</li>
<li>[Optional] AWS CodePipeline will send the approval notification and wait.</li>
<li>AWS CodePipeline will start the Serverless Framework deployment.</li>
<li>The Serverless Framework starts provisioning AWS resources or updates them.</li>
</ol>


<div><h2>References</h2>
 
<p>[1] AWS Textract : <a href="https://aws.amazon.com/textract/">www.aws.amazon.com/textract</a></p>
<p>[2] Serverless Framework : <a href="https://www.serverless.com/">www.serverless.com</a></p>
<p>[3] AWS Textract with Lambda Walkthrough: <a href="https://1billiontech.com/blog_aws_textract_with_lambda_walkthrough.php">www.1billiontech.com/blog_aws_textract_with_lambda_walkthrough.php</a></p>

</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/suminda.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Suminda De Silva</h2>
                                                    <small>Associate Technical Lead
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