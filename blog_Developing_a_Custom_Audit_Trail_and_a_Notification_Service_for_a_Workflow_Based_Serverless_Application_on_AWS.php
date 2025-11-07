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
              <h1 class="blog-post-title">Developing a Custom Audit Trail and a Notification Service for a Workflow Based Serverless Application on AWS</h1>
            
              <div>
              <p>Nowadays, most complex enterprise systems are required to have a good user action tracking system or a real time notification system. Having such a system can be beneficial to all stakeholders of these systems.</p>
<p>This blog talks about how to implement a custom audit trail and a notification service for a serverless application deployed on AWS.&nbsp;</p>
<p><strong>The Solution Architecture</strong></p>
<p>The solution architecture of this sample workflow application can be explained as below. The complete architecture is explained using multiple steps, and each of these steps is conceptualized in Figure 01.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig1.jpg"></p>
              <p><strong>Step 1 - User Action</strong></p>
<p>Application users can save, request, approve or reject workflow data. We use a common microservice to handle all these actions. Here we can identify each user action by attaching a user action type to the request body.&nbsp;</p>
<p><strong>Step 2 &ndash; The Authorization Process</strong></p>
<p>The authorization process is handled by a JWT token (included within the user request) via the API Gateway and AWS Cognito.<br /><br /></p>
<p><strong>Step 3 / 4 / 11 - Execute the Workflow Update Lambda Function</strong></p>
<p>After a successful authorization process, the user request is forwarded to a Lambda function via an API Gateway.</p>
<p>The following (Figure 02) is a sample Lambda function with a simple workflow update. As you can see, just after the workflow logic, the process is pushing the <em>audit trail</em> and <em>notification data sets </em>via its respective SQS queues.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig2.jpg"></p>
              <p><strong>Step 5 / 12 - SQS Triggers a Lambda Function</strong></p>
<p>Once the request comes to the respective SQS queue, we can set triggers to invoke the respective Lambda function.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig3.jpg"></p>
              <p>In this scenario, we set the <strong>createAuditTrail</strong> Lambda function for the <em>audit trail queue</em> and the <strong>sendNotifications</strong> Lambda function for the <em>notification queue</em>.</p>
<p>The following (Figure 04) shows how we can create an AWS Lambda function within a serverless.yaml file and we how we can set an audit trail queue as an event trigger for this Lambda function.&nbsp;</p>
<p>When we push the audit trail data set to the audit trail queue, it will wait for the time to trigger the Lambda function. If it fails, the data moves to the <em>dead letter queue</em> and it will retry to trigger a new Lambda function. The same process can be followed for executing the <strong>sendNotification</strong> function using the notification queue.&nbsp;</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig4.jpg"></p>
              <p><strong>Step 6 / 7 - Create an Elasticsearch Record</strong></p>
<p>To speed up the audit trail data fetches and searching, we can use the <a href="https://aws.amazon.com/opensearch-service/">Elasticsearch</a> service. In this process, it is required to identify certain domains to store the audit trail data, rather than storing the entire audit trail data set within the Elasticsearch service. We need to identify a searchable dataset (e.g. scheme, workflow id, step id, action owner) and create a <em>dataset id</em>, as a result. After this, we need to store our full dataset within the DynamoDB table. We can use <em>dataset id</em> as a primary key. It is easy to get a full data set using Elasticsearch results.</p>
<p><strong>Step 13 / 14 Send Notifications</strong></p>
<p>Finally, it is required to create a notification dataset using the respective action and to store this data within the DynamoDB table. We can set the <em>notificationId</em> as a primary key.&nbsp;</p>
<p>After this, it is required to send related notifications to relevant recipients. We can use a socket connection to achieve this task. In our example, we use AWS IOT.&nbsp;</p>
<p>As the first step, it is required to create an AWS IOT socket connection properly when a user logs in to the system. We can use &ldquo;aws-iot-device-sdk&rdquo; module [4] for React applications.&nbsp;</p>
<p>In addition to this, <em>topics</em> can be used to subscribe and publish our data.<br />EX - topic =&gt; notifications-64ea2780-c371-11eb-a905-a3c ( notifications-{ userId} )</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig5.jpg"></p>
              <p>The above illustrates how we can publish our data to an IOT socket (Figure 05). We can create <em>topics</em> using <em>recipient ids</em> (Figure 06). The <em>payload</em> is an object, which includes a <em>notification</em> and a <em>notificationId</em>.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/Solution-Architecture-fig6.jpg"></p>
             
             
              <h2>References</h2><br>
<ol>
<li><a href="https://docs.aws.amazon.com/lambda/latest/dg/welcome.html">www.docs.aws.amazon.com/lambda/latest/dg/welcome.html</a></li>
<li><a href="https://docs.aws.amazon.com/iot/latest/developerguide/protocols.html">www.docs.aws.amazon.com/iot/latest/developerguide/protocols.html</a></li>
<li><a href="https://aws.amazon.com/elasticsearch-service/getting-started/">www.aws.amazon.com/elasticsearch-service/getting-started</a></li>
<li><a href="https://www.npmjs.com/package/aws-iot-device-sdk">www.www.npmjs.com/package/aws-iot-device-sdk</a></li>

</ol>
           
  
          
              
<div class="row">   <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/gayashan-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Gayashan Galagedara

                                                    </h2>
                                                    <small>Senior Software Engineer
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