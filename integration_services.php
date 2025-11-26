<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->

<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->

<html xmlns="http://www.w3.org/1999/html">

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



    <!-- SLIDER -->

    <!-- <section class="height-400" id="slider" style="background:url('assets/images/main-integration-services.webp')">

      <div class="overlay dark-5">

        dark overlay [0 to 9 opacity]

      </div>



      <div class="display-table">

        <div class="display-table-cell vertical-align-middle padding-top-50">

          <div class="container">

            <div class="slider-featured-text ">

              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">INTEGRATION

                <span class="text-yellow"> SERVICES </span>

              </h1>

              <h2 class="weight-300 text-white wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">Aggregate data assets from disparate systems into a unified platform

              </h2>



            </div>

          </div>

        </div>

      </div>



    </section> -->

    <section class="black-section">
      <div class="container">
        <header class="text-center section-title section-titles">
          <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">INTEGRATION
            <span class="text-yellow"> SERVICES </span>
          </h1>
        </header>
      </div>
    </section>



    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Solution-workshop.jpg" alt="">

        </div>



        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Solution Workshop</h1>

          </header>

          <p>Quick and comprehensive assessment of the suitability of the WSO2 integrated products suite into any integration

            scenario.

            <br>

            <br> Experts in carrying out Proof of Concepts (POCs) and user trainings in the enterprise integration domain.

            <br>

            <br> Well equipped resources, who can deploy in the client sites in a short notice to solve industry enterprise integration

            issues especially with exposure to wide range of AWS and WSO2 product offerings.</p>

        </div>

      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Architecture Blueprint</h1>

          </header>

          <p>Acheive all your aggregation needs accross data sources, workflows and subsidiaries by leveraging tried and tested

            best in class middleware platforms.

            <br>

            <br> We specialize in implementing Micro Services Architecture based integration solutions. The process we use encompasses

            digital Enterprise Architecture (EA) tranformation to Enterprises. We further specialize in transforming legacy

            back-ends via middlware components which includes Enterprise Service Bus (ESB), API management, Identity Management

            and Message Orchestration.</p>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Architecture-blueprint.jpg" alt="">

        </div>



      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Deployment.jpg" alt="">

        </div>



        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Deployment Services</h1>

          </header>

          <p>We are experts in AWS cloud deployments and on-premise deployments with certified professionals in-house.

            <br>

            <br> Gain our expertise in deploying lightweight Micro Services based components in cloud native container architectures

            via Docker, Docker Swarm, Kubernetes. </p>

        </div>

      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Implementation</h1>

          </header>

          <p>In-house expertise in implementing SOA wide national level integrated platforms and Microservices based back-end

            integrations for large telcos and Government programmes.

            <br>

            <br> Specialized in implementing, 1). WSO2 Product Suite (WSO2 EI, WSO2 Identity Server, WSO2 API Manager, WSO2 Analytics

            Server, WSO2 IoT Server) 2). AWS Integration Services Stack (AWS API Gateway, AWS Lambda, AWS SQS, AWS SNS,AWS

            CloudFormation, AWS Data Pipeline, AWS Kinesis Streams/ Firehose,AWS EMR, Spark/ Flink on EMR, AWS IAM, etc)

          </p>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Implementation.jpg" alt="">

        </div>



      </div>

    </section>

    <section id="#" class="black-section">

      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-6">

          <img class="img-responsive" src="assets/images/serviceicons/crm_Support-and-Maintenance.jpg" alt="">

        </div>



        <div class="col-lg-6 col-md-6 col-sm-6">

          <header class="margin-bottom-10 section-title">

            <h1>Support and Maintenance</h1>

          </header>

          <p>1 Billiontech will provide L2 and L3 support and carry out a broad coverage of Reactive and Proactive Support services for applications, middleware platforms, and technologies.

            <br>

            <br> Tools to be used for automation and workflow management can be mutually agreed upon, however Auxenta's recommendation

            is to leverage a tool such as ZenDesk which provides a comprehensive set of services with a great degree of accuracy

            and efficiency.

          </p>

        </div>

      </div>

    </section>
   

      <!-- FOOTER -->

      <footer id="footer">

        <?php include 'include/footer.php'; ?>

      </footer>

      <!-- /FOOTER --

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