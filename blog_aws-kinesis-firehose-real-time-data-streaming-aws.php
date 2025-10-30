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

              <h1 class="blog-post-title">AWS Kinesis Firehose – Real-time data streaming on AWS</h1>

              <!-- article content -->

              <div>

                <p>AWS Kinesis Firehose is a fully managed service for transforming and delivering streaming data to a given

                  destination. A Destination can be a S3 bucket, Redshift cluster, Splunk or Elasticsearch Service. In the

                  following tutorial I’ll walk you through the process of streaming CloudWatch Logs to a S3 bucket generated

                  by an AWS Lambda function.</p>

                <h2>Steps</h2>

                <ul class="list-unstyled list-icons padding-bottom-20">

                  <li><i class="fa fa-angle-double-right"></i>Create Lambda function to write some logs</li>

                  <li><i class="fa fa-angle-double-right"></i>Create Firehose delivery stream</li>

                  <li><i class="fa fa-angle-double-right"></i>Create IAM Role for Firehose to subscribe to CloudWatch logs</li>

                  <li><i class="fa fa-angle-double-right"></i>Test executing Lambda function to verify logs in S3</li>

                </ul>

                <h2>Create Lambda function to write some logs</H2>

                

                <p>This Lambda function will simply write a console log in plain javascript. We will call this Lambda function

                  “thilankaFirehoseProducer” and create a new IAM Role as seen below. Hit create function.</p>

              </div>



              <div>

                <img class="responsive-image" src="./assets/images/aws-blog-figure1.jpg" alt="">

              </div>



              <p>This Lambda function by default will have CloudWatch Logs access where it can create log streams and put logs

                in it. We’ll write a simple log statement in our code as below.</p>





              <pre>exports.handler = (event, context, callback) =&gt; {



                              // TODO implement

                              let dt = new Date();

                              console.log('[THILANKA_LOG] log triggered from thilankaFirehoseProducer: '+dt);

                              callback(null, 'Hello from Lambda');

                          };</pre>



              <p>Now we need to verify whether our logs are created in CloudWatch Logs upon execution of our Lambda function.

                To execute our Lambda function we need to create a test event. Select configure test event from the dropdown

                near the test button and configure it as below.</p>

              <div>

                <img class="responsive-image" src="./assets/images/aws-blog-figure2.png" alt="">

              </div>





              <p>Once you hit create and save our Lambda code, you can hit the Test button to execute our code. Once the code

                is executed you can watch the logs in CloudWatch by clicking the ‘logs’ links. If you get an error similar

                to “No log stream found”, make sure you’re in the same region as the Lambda function. If everything went

                well, you can go to the log group link and view the logs.</p>

              <p>Now our Lambda function is working and writing logs to CloudWatch Logs. We can go ahead and create a Firehose

                Delivery Stream to pump those log files into an S3 bucket.</p>

              <h2>

                Create Firehose Delivery Stream</h2>

              

              <p>Go to Kinesis delivery stream in AWS console and hit Create delivery stream button. Specify the delivery stream

                name as “thilanka-delivery-stream” and choose the source as direct PUT and hit next.</p>



              <div>

                <img class="responsive-image" src="./assets/images/aws-blog-figure3.png" alt="">

              </div>

              <div class="wpb_text_column ">

                <div class="wpb_wrapper">

                  <p>Firehose will ask you if you want to do any transformation on our log stream and for the sake of simplicity

                    of this tutorial we won’t be using it, so select disable and hit next.</p>

                </div>

              </div>

              <div>

                <img class="responsive-image" src="./assets/images/aws-blog-figure4.png" alt="">

              </div>



              <p>Once you have configured the source, Firehose needs a destination so that the data in the stream can be put

                somewhere. We will select the S3 bucket as our destination and hit next. It is assumed that you already have

                an S3 bucket created for this purpose.</p>

              <p>This configuration page will set the data buffer and intervals. We will choose the smallest buffer interval

                (60 seconds) so that Firehose will send each record/data to its destination when the time has elapsed. In

                the IAM Role section, click create new IAM Role. This role will contain the necessary permissions to write

                to the specified S3 bucket. Review the configuration and hit finish.</p>



              <div>

                <img class="responsive-image" src="./assets/images/aws-blog-figure5.png" alt="">

              </div>

              <div class="wpb_text_column ">

                <div class="wpb_wrapper">

                  <strong>Create IAM Role for Firehose to subscribe to CloudWatch logs</strong>

                 <p>To perform this you need to install AWS CLI. Once the CLI is installed and private keys have been set you

                    can start using it. Create the file

                    <strong>TrustPolicyForCWL.json</strong> where you can specify the IAM statement as follows:</p>

                  <pre>{

                            "Statement": {

                              "Effect": "Allow",

                              "Principal": { "Service": "logs.us-east-1.amazonaws.com" },

                              "Action": "sts:AssumeRole"

                            }

                          }</pre>

                  <p>Now run the following command to create a role specifying the assume role policy document we have just

                    created.

                  </p>

                  <pre>aws iam create-role --role-name thilankaCWLFirehosePutData --assume-role-policy-document file://TrustPolicyForCWL.json</pre>

                  <p>If the role creation is successful you will receive the following output. Take note of the highlighted

                    ARN of the role.</p>

                  <p>OUTPUT

                    <br> ======

                  </p>

                  <pre>{

                              "Role": {

                                  "AssumeRolePolicyDocument": {

                                      "Statement": {

                                          "Action": "sts:AssumeRole",

                                          "Effect": "Allow",

                                          "Principal": {

                                              "Service": "logs.us-east-1.amazonaws.com"

                                          }

                                      }

                                  },

                                  "RoleId": "AROAJAPAJ2EQY6RGHVU66",

                                  "CreateDate": "2017-12-14T06:43:45.079Z",

                                  "RoleName": "thilankaCWLFirehosePutData",

                                  "Path": "/",

                                  "Arn": "arn:aws:iam::052445111578:role/thilankaCWLFirehosePutData"

                              }

                          }</pre>

                  <p>Now we need to get the stream ARN so that we can create the permission policy to the stream and attach

                    it to the newly created role as follows:</p>

                  <p>aws firehose describe-delivery-stream –delivery-stream-name thilanka-delivery-stream</p>

                  <p>OUTPUT

                    <br> ======

                  </p>

                  <pre>{

                              "DeliveryStreamDescription": {

                                  "DeliveryStreamType": "DirectPut",

                                  "HasMoreDestinations": false,

                                  "LastUpdateTimestamp": 1513078570.058,

                                  "VersionId": "2",

                                  "CreateTimestamp": 1513076387.847,

                                  "DeliveryStreamARN": "arn:aws:firehose:us-east-1:052445111578:deliverystream/thilanka-delivery-stream",</pre>

                  <p>Create the following PermissionsForCWL.json containing the policy permissions.</p>

                  <pre>{

                              "Statement":[

                                {

                                  "Effect":"Allow",

                                  "Action":["firehose:*"],

                                  "Resource":["arn:aws:firehose:us-east-1:052445111578:*"]

                                },

                                {

                                  "Effect":"Allow",

                                  "Action":["iam:PassRole"],

                                  "Resource":["arn:aws:iam::052445111578:role/thilankaCWLFirehosePutData"]

                                }

                              ]

                          }</pre>

                  <p>Run the AWS CLI command to attach the permission to role:</p>

                  <pre>aws iam put-role-policy --role-name thilankaCWLFirehosePutData --policy-name Permissions-Policy-For-CWL --policy-document file://PermissionsForCWL.json</pre>

                  <p>Now that we have the IAM Role with the necessary permission policies we will now create a subscription

                    filter in CloudWatch Logs so that our Kinesis Delivery Stream can listen to log events as follows:</p>

                  <pre>aws logs put-subscription-filter --log-group-name "/aws/lambda/thilankaFirehoseProducer" --filter-name "Destination" --filter-pattern "thilankaFirehoseProducer" --destination-arn "arn:aws:firehose:us-east-1:052445111578:deliverystream/thilanka-delivery-stream" --role-arn "arn:aws:iam::052445111578:role/thilankaCWLFirehosePutData"</pre>

                </div>

              </div>

              <div>

                <h2>Test executing Lambda function to verify logs in S3</h2>

                <p>Finally we can test our delivery stream setup by manually executing our lambda function to verify whether

                  our log files are streamed to S3 bucket. Check your destination bucket for logs.</p>

              </div>

              

            </div>

            <div class="row tab-post padding-top-20"><!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

               <img src="assets/images/thilanka-blog.jpg" width="90">

            

              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Thilanka Liyanarachchi</h2>

                <small>Senior Software Engineer</small>

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

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-117187414-1');

</script>



</body>



</html>