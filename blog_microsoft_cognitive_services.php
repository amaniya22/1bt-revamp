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

              <h1 class="blog-post-title">Microsoft Cognitive Services – Connect the Dots with AI Services</h1>



              <!-- article content -->

              <div class="margin-bottom-80">



                <h2>What are Cognitive Services?</h2>



                <p>Microsoft Cognitive Services is a set of cloud services available for developers to build intelligent

                  applications without having direct Machine Learning or Data Science knowledge. Services are ready to

                  be consumed through easy-to-use APIs without any hassle. Microsoft highlights this catalog of services

                  within the Azure stack as another supportive initiative towards democratization of artificial

                  intelligence. The idea behind this is that every person and every organization should be able to

                  access the AI capabilities.



                </p>

                <p> This comprehensive library of services is becoming a game changer in many competitive business

                  domains. <span style="font-weight:700;"><i>Sabre, Prism Skylabs</i></span> and <span

                    style="font-weight:700;"><i>Uber</i></span> are not only few of the businesses already enjoying

                  these

                  services, but has been highlighted as successful in accomplishing their intended outcomes.

                </p>

                <p>These are the main categories of available services;</p>

                <p><img src="http://1billiontech.com/assets/images/Microsoft-Cognitive-img1.jpg"></p>





                <h2>Why Cognitive Services</h2>

                <ul class="list-unstyled list-icons">

                  <li><i class="fa fa-angle-double-right"></i>Easy to use – It’s a matter of accessing APIs through REST

                    calls. In fact, it’s easy to integrate with any application</li>

                  <li><i class="fa fa-angle-double-right"></i>Interoperability – Services can be utilized in any

                    language, framework or platform. Services cater to a wide audience.</li>

                  <li><i class="fa fa-angle-double-right"></i>Well tested – Each API is a result of Microsoft Research

                    and has gone through an extensive testing procedure before being made available.</li>

                  <li><i class="fa fa-angle-double-right"></i>Growing – Different services that address new challenges

                    are being released regularly. </li>

                  <li> <i class="fa fa-angle-double-right"></i>Cost effectiveness – Less costly since they are

                    pay-as-you-go services. Also, it’s worth considering its advantages, such as credibility of service

                    provider, being a tested solution and having a high-standard infrastructure which services are

                    hosted on. </li>

                </ul>



                <h2>Closer look at Vision API</h2>

                <p>Vision API is an exciting API which is getting popular day-by-day. It recognizes different objects

                  and `It should be noted that, accuracy and level of granularity in detail would grow with time,

                  enabling more real-world applications.</p>

                <p><img src="http://1billiontech.com/assets/images/Microsoft-Cognitive-img2.jpg"></p>

                <p>The above illustration shows how an image is analyzed. Yet, Vision API can be used in many other ways

                  such as to read text in an image, to read handwritten text, to identify a celebrity, etc.

                </p>

                <p>Just as Vision API, other APIs such as Speech, Search, etc. work well to address relevant scenarios

                  with decent accuracy.

                </p>

                <h2>Uber’s Real-Time ID Check</h2>



                <p>One effective solution given to solve a real business problem through Microsoft Cognitive Services

                  (Vision API to be exact) is Uber’s Real-Time ID Check.</p>

                <p><img src="http://1billiontech.com/assets/images/Microsoft-Cognitive-img3.jpg"></p>

                <p>

                  An Uber driver is requested to take a selfie once a service request is accepted in order to verify

                  that the driver is the same person who underwent Uber’s screening process.

                </p>

                <p> Below are the main steps of the facial verification process;</p>

                <ul>

                  <li><span style="font-weight:700;">1. Face Detection: </span>Identify a face in a given image. If a

                    face is not detected, the next steps are skipped as there is no face to match.</li><br>



                  <li> <span style="font-weight:700;">2. Feature Extraction:</span> Build a feature set by extracting

                    facial features, like eye position and face shape from the image.</li><br>



                  <li> <span style="font-weight:700;"> 3. Face Matching:</span> Compare the feature set with an already

                    validated feature set for a given face.</li>

                </ul>



                <p>The business has selected Microsoft Face API of Cognitive Services because it was the most accurate service and it produced the strongest set of critical features demanded by the business case. In order to cater to the above process, it utilizes two separate functionalities as mentioned below;</p>

                <p> Below are the main steps of the facial verification process;</p>

                <ul>

                  <li><span style="font-weight:700;">1. Face Detect: </span>Detects human faces in an image and provides additional attributes, such as whether the face has glasses. This API is smart enough to also differentiate between reading glasses and sunglasses. This helped Uber filter out images without a face and improved the match score for verification of the selfies.</li><br>



                  <li> <span style="font-weight:700;">2. Face Verify:</span> Compares a face detected from Face-Detect API with an already verified face and provides a confidence score on whether the two faces belong to the same person or not. Based on the confidence score, Uber can take appropriate verification action, such as asking the user to retake the selfie.

               

                </ul>

                <p>So, this is one creative solution provided, utilizing Microsoft Cognitive services to solve a real business problem. More such exciting applications would propagate in the near future. While tools are readily available, what matters in this moment is how creative you are in connecting the dots. </p>

            

            <h2>References</h2>

   <p><a href="https://docs.microsoft.com/en-us/azure/cognitive-services/welcome" target="_blank">www.docs.microsoft.com</a><br>



    <a href="https://theflyingmaverick.com/2018/03/13/give-your-solutions-a-more-human-side-with-microsoft-cognitive-services" target="_blank">www.theflyingmaverick.com</a><br>

    

    <a href="https://blogs.windows.com/buildingapps/2017/02/13/cognitive-services-apis-vision/" target="_blank">www.blogs.windows.com</a><br>

    

    <a href="https://eng.uber.com/real-time-id-check/" target="_blank">www.eng.uber.com</a><br>

    

    <a href="https://news.microsoft.com/europe/2017/07/12/meet-companies-harnessing-incredible-power-artificial-intelligence/" target="_blank">www.news.microsoft.com</a> </p>

              </div>



            



              <!-- /article content -->



            </div>

            <div class="row tab-post padding-top-20">

              <!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

                <img src="http://1billiontech.com/assets/images/sumedha.jpg" width="90">



              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Sumedha Obeysekera



                </h2>

                <small>Senior Software Architect

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