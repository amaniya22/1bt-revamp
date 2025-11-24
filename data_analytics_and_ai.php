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

    <!-- <section class="height-400" id="slider" style="background:url('assets/images/main-crm-services.webp')">

      <div class="overlay dark-5">

        dark overlay [0 to 9 opacity]

      </div>



      <div class="display-table">

        <div class="display-table-cell vertical-align-middle padding-top-50">

          <div class="container">

            <div class="slider-featured-text ">

              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">Microsoft 

                <span class="text-yellow"> D365 </span>

              </h1>

              <h2 class="weight-300 text-white wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">Engage your customers more effectively by leveraging the newest trends in Microsoft D365.

              </h2>



            </div>

          </div>

        </div>

      </div>



    </section> -->

    <section class="black-section ai-consult-services ai-consult-services-title-sec margin-bottom-0">
      <div class="container">
        <header class="text-center section-titles section-title">
          <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">DATA ANALYTICS 
          <span class="text-yellow"> AND AI </span>
          </h1>
        </header>
      </div>
    </section>

    <section class="black-section ai-consult-services ai-consult-services-sec2">

      <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 padding-top-20 text-justify">
          <p class="weight-700">Turning Data into Intelligent Action</p>
          <p>
            At <span class="weight-500">1 Billion Tech (1BT)</span>, we architect the fusion of advanced data analytics 
            and strategic AI to drive <span class="weight-500">predictive insights, operational automation, 
            and business innovation</span>. Our services modernize your data landscape, establish trust, 
            and build an intelligence layer that informs every critical decision, guaranteeing measurable ROI.
          </p>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 padding-top-15 text-justify">
          <p>
            We offer an end-to-end framework to guide your organization through the data lifecycle, 
            from cloud infrastructure to real-time insights.
          </p>

        </div>

      </div>

    </section>

    <a name="ai strategy"></a>

    <section class="black-section ai-consult-services">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <div>
            <header class="margin-bottom-20 section-title">
              <h1>Data Strategy & Cloud Engineering (Foundation)</h1>
            </header>
            <p>
              We build the resilient, scalable data foundations required for enterprise-grade 
              AI applications.
            </p>
          </div>

          <div>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Cloud Data Migration & Modernization:</span> Move legacy data to agile cloud platforms (AWS, Azure, GCP).
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Data Mesh & Fabric:</span> Implement modern distributed data architectures for enhanced speed and governance.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Real-Time Data Pipelines:</span> Deploy streaming solutions for immediate decision-making.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Semantic Layer Development:</span> Create unified data models for consistency and clarity across the business.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/data-analytics-pic1.png" alt="">
        </div>
      </div>
    </section>

    <a name="ai audits"></a>

    <section class="black-section ai-consult-services">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/data-analytics-pic2.png" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <div>
            <header class="margin-bottom-20 section-title">
              <h1>Advanced AI & Predictive Analytics (Intelligence Layer)</h1>
            </header>
            <p>
              We deploy Machine Learning (ML) and Generative AI models to automate 
              and personalize at scale.
            </p>
          </div>

          <div>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Generative AI Insight Engines:</span> Integrate LLMs for advanced search, automated content summarization, and interactive data querying.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Business Intelligence & Visualization:</span> Build interactive dashboards that make complex insights accessible and actionable.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">AI-Driven Optimization:</span> Apply AI to optimize operational processes and resource allocation.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <a name="ai audits"></a>

    <section class="black-section ai-consult-services">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <div>
            <header class="margin-bottom-20 section-title">
              <h1>Data Governance, Trust, & Compliance (Assurance)</h1>
            </header>
            <p>
              We ensure your data is managed securely, ethically,
               and in full compliance with industry regulations.
            </p>
          </div>

          <div>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Data Quality Management:</span>  Implement frameworks to ensure data accuracy before AI use.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Regulatory Compliance:</span> Establish security and governance protocols (e.g., GDPR, CCPA).
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">AI Explainability (XAI):</span> Provide mechanisms to understand and interpret AI model decisions for transparency.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Data Security & Privacy:</span> Deploy security measures like tokenization and anonymization.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/data-analytics-pic3.png" alt="">
        </div>
      </div>
    </section>

    <section class="services-white-section ai-consult-footer-section">
      <div class="container">
        <header class="text-center margin-bottom-20 section-title">
          <h1 class="section-title-h1">WHY PARTNER WITH <span class="text-yellow"> 1BT? </span> </h1>
        </header>

        <p>
          Our unified <span class="weight-600">Data + AI approach</span> ensures that every architecture decision directly 
          supports a long-term AI strategy, maximizing your return on transformation.
          <br>
          <br>
          Ready to build your intelligent enterprise?
        </p>

        <div class="text-center">
          <button class="footer-btn-red" onclick='window.location.href="bookaconsultation.php"'>Book Your Data & AI Strategy Session</button>
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