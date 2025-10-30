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
              <h1 class="blog-post-title">Developing an authentication service using face recognition
</h1>
            
              <div>
              <p>In modern enterprise application development, <em>authentication</em> is a key deciding factor. We can use various authentication mechanisms to authenticate ourselves with enterprise back ends. Some of the popular authentication mechanisms currently being implemented are Single-Factor Authentication, Two-Factor Authentication (TFA), Single Sign On (SSO), Multi-Factor authentication (MFA), etc. In addition to these key methods, nowadays, we could see <em>face recognition</em> is also heavily used for authentication purposes.</p>
<p>In this blog post, I will be focusing on how we can use <em>face recognition</em> as a way of authenticating an ReactJS based web application along with TensorFlow, which is hosted on AWS.&nbsp;</p>
<p><strong>TensorFlow</strong></p>
<p>TensorFlow is a library which provides machine learning modules for javascript. We can run these modules in the browsers or with Node.js</p>
              
<p><strong>The Solution Architecture</strong></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig1.jpg"></p>
<p><strong>Step 1 - </strong>The user sign up process (See Step 2 and 3).</p>
<p><strong>Step 2 and 3 - </strong>We use AWS Cognito as the authentication service but we cannot use face detection data to authenticate with Cognito as of yet. Hence, in order to store face detection data, we can use a Lambda function<strong>, </strong>which can be triggered via a pre-sign up Lambda trigger from Cognito. While signing up, the face detection data will go and update the DynamoDB.</p>
<p><strong>Step 4 &ndash; </strong>The sign in process(See step 5 to 9).</p>
<p><strong>Step 5 to 9 - </strong>This is how custom authentication flow works. It defines, creates and verifies an auth challenge.&nbsp;</p>
<p>In the verifying process, we can get the user's face detection data from DynamoDB which was stored while signing up. Finally we can compare these values and get a decision if the user is the same or not. If it's the same, we can return successful authentication flag with a new token. If it&rsquo;s not the same we can throw an error message.</p>
<p><strong>The face detection component&nbsp;</strong></p>
<p>As a prerequisite, it is required to install a a few modules.</p>
<p>Firstly install the following module to view the <a href="https://www.npmjs.com/package/react-webcam">webcam</a>,</p>

<pre>
<p>npm i --save react-webcam </p></pre>
<p>Then we need to install facemesh modules,<br /></p>
<pre><p><strong>tensorflow/tfjs </strong></pre>This is required to use other Tensorflow modules<strong><br /></strong><strong>tensorflow-models/facemesh &ndash;</strong> This is used to detect faces and get face values<br /><br /></p>
<pre><p>npm i --save tensorflow/tfjs</p>
<p>npm i --save tensorflow-models/facemesh</p></pre>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig2.jpg"></p>
<p>Before face detection, we can use a <em>canvas</em> to draw sketches (using the <strong>facemesh module</strong>) and add some text to our webcam view. The video details can be obtained via these canvas details. This can be done by using <strong>useRef </strong>and <strong>useState</strong> ReactJS hooks (See Figure 2).&nbsp;</p>
<p><strong>Using the facemesh module</strong></p>
<p>In this component, we are <strong>not</strong> going to capture and store user images in real time. Instead, we are going to draw a sketch like in figure 3 using the <em>facemesh module</em> in <strong>tensorflow.js</strong> with the help of face detection data.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig3.jpg"></p>
<p>We can execute all this logic if the webcam data is present. We need to pass the current video to the <em>facemesh module</em> to obtain the face detection data.&nbsp;</p>
<p>If you need to sketch face data, you can create a function for that. In our case we used a new file and a new function (drawSketch). Also need to update the detect function using the following lines.&nbsp;</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig4.jpg"></p>
<p>And this is our <strong>drawSketch </strong>function</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig5.jpg"></p>
<p>Once the facemesh sketch is completed, it is required to load the <em>facemesh</em> to detect the face. We can create a runFaceDetection() function for this task.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig6.jpg"></p>
<p>Within the runFaceDetection() function, we can execute face detection process (detect) in every 100ms (See Figure 7) until it clearly detects the face.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/face_rec_fig7.jpg"></p>

  



              <h2>References</h2><br>
<ol>
<li><a href="https://www.tensorflow.org/js/models" target="_blank">www.tensorflow.org/js/models</a></li>
<li><a href="https://docs.aws.amazon.com/cognito/latest/developerguide/user-pool-lambda-challenge.html" target="_blank">docs.aws.amazon.com/cognito/latest/developerguide/user-pool-lambda-challenge.html
</a></li>

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