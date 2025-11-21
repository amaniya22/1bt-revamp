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
          <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">AI STRATEGY   
          <span class="text-yellow"> CONSULTING </span>
          </h1>
        </header>
      </div>
    </section>

    <section class="black-section ai-consult-services ai-consult-services-sec2">

      <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 padding-top-20 text-center">
          <p class="weight-700">From Strategic Vision to Tangible Value</p>
          <p>The future of business is powered by Artificial Intelligence. 
            At 1 Billion Tech, our AI Consulting services are designed to move you beyond simple 
            adoption to strategic integration, ensuring AI drives measurable business impact, 
            operational excellence, and a sustained competitive edge. 
          </p>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 padding-top-15 text-center">
          <p class="weight-700">Our Core AI Consulting Services</p>

          <p>We offer a comprehensive suite of services to guide your AI journey, 
            from initial strategy to custom product development and optimization.
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
              <h1>AI Strategy & Program Development Consulting</h1>
            </header>
            <p>Navigating the AI landscape requires a clear, forward-looking roadmap. 
              Our expert consultants work with your leadership to build robust, 
              future-proof AI strategies that align directly with your long-term business goals.
            </p>
          </div>

          <div>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Strategic Roadmap Creation:</span> Identifying high-value AI applications and potential technological evolutions to create an adaptable integration plan.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Feasibility and Impact Assessment:</span> Evaluating AI opportunities across your organization to ensure genuine business transformation, not just technological adoption.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Ethical AI Governance:</span> Establishing frameworks for responsible, compliant, and unbiased AI usage across your enterprise.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/ai-consulting1.webp" alt="">
        </div>
      </div>
    </section>

    <a name="ai audits"></a>

    <section class="black-section ai-consult-services">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 padding-top-15">
            <header class="margin-bottom-20 section-title">
              <h1>AI Readiness Audits & Operational Optimization</h1>
            </header>
            <p>Understanding your organization’s readiness for AI adoption is crucial before 
              embarking on any AI transformation journey. At 1BT, we conduct a comprehensive 
              AI Readiness Audit to evaluate your business processes, data landscape, 
              technical capabilities, and team preparedness.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <div>
            <p>
              Our team analyzes how your operations currently run and identifies where AI can 
              add the most value whether it's automating repetitive tasks, solving existing 
              business challenges, or unlocking new opportunities to drive measurable ROI. 
              We highlight quick wins, potential risks, and long-term strategic priorities 
              tailored to your unique context.
            </p>
            <p>
              This assessment is offered as part of our AI Consulting service, 
              ensuring you receive a clear, actionable roadmap to confidently move forward in 
              your AI journey.
            </p>
          </div>

          <div>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Process Automation Identification:</span> Meticulously examining business workflows to pinpoint prime areas where AI integration can streamline operations and increase efficiency.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Technology Stack Assessment:</span> Reviewing your existing infrastructure to ensure readiness and compatibility with cutting-edge AI technologies.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Continuous Improvement Planning:</span> Providing post-audit refinement and updates to ensure your solutions remain optimized as AI technology rapidly evolves.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/ai-consulting2.webp" alt="">
        </div>
      </div>
    </section>

    <a name="ai audits"></a>

    <section class="black-section ai-consult-services">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <div>
            <header class="margin-bottom-20 section-title">
              <h1>Custom AI Product Development</h1>
            </header>
            <p>
              We specialize in crafting bespoke AI solutions meticulously tailored to solve 
              your unique business challenges, from process optimization to next-generation 
              customer engagement tools. We determine the right technology whether it's advanced 
              Generative AI, traditional machine learning, or operational refinements to deliver 
              superior results.
            </p>
          </div>

          <div>
            <p class="weight-600">Key Development Areas:</p>
            <ul class="list-unstyled list-icons">
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">AI App Development:</span> Expert guidance in building functional, user-centric applications powered by large language models and generative AI.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Workflow Automation & AI Agents:</span>  Implementing intelligent agents and automation to handle routine tasks, freeing up human capital for strategic work.
              </li>
              <li class="margin-bottom-15">
                <i class="fa fa-angle-double-right"></i>  <span class="weight-600">Operational Efficiency Tools:</span> Custom-built machine learning solutions for forecasting, resource management, predictive maintenance, and data analysis.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-15">
          <img class="img-responsive" src="assets/images/ai-consulting4.webp" alt="">
        </div>
      </div>
    </section>

    <section class="services-white-section ai-consult-footer-section">
      <div class="container">
        <header class="text-center margin-bottom-20 section-title">
          <h1 class="section-title-h1"> READY TO IMPLEMENT AI<br> INTO YOUR <span class="text-yellow"> BUSINESS? </span> </h1>
        </header>

        <p>
          Our expert team is prepared to guide you through the vast landscape of artificial 
          intelligence. Contact 1BT today to book a consultation and take the first step toward 
          becoming an AI-driven leader in your industry.
        </p>

        <div class="text-center">
          <button class="footer-btn-red" onclick='window.location.href="bookaconsultation.php"'>Book a Consultation</button>
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