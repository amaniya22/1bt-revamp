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
    <section class="height-400" id="slider" style="background:url('assets/images/ai-main.jpg')">
      <div class="overlay dark-5">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>

      <div class="display-table">
        <div class="display-table-cell vertical-align-middle padding-top-50">
          <div class="container">
            <div class="slider-featured-text ">
              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">AI Driven

                <span class="text-yellow"> Product Incubation</span>
              </h1>
              <h2 class="weight-300 text-white wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">Leverage our AI based MVP offering to realise your concept to reality.


            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /SLIDER -->
  

    <section class="callout-dark heading-title heading-arrow-bottom">
      <div class="container">

        <div class="text-center">
          <h3 class="size-40 weight-800">Realize upto 40% time to market acceleration.</h3>
          <div class="size-30 padding-top-20">If you are looking to test new ideas quickly with minimum time and investment, our AI driven MVP program is made for you! </div>
                 </div>

      </div>
    </section>

    <section id="#">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/strategic_roadmap.jpg" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Strategic Roadmap</h1>
          </header>
          <ul class="list-unstyled list-icons">
            <li>
              <i class="fa fa-angle-double-right"></i>Set business/ IT direction</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Prioritize requirements, initiatives, budget</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Develop high level solution approach</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Short term objectives and long term goals </li>
            <li>
              <i class="fa fa-angle-double-right"></i>Technology/ mobility advisory consultation</li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Customer Experience Transformation</h1>
          </header>
          <ul class="list-unstyled list-icons">
            <li>
              <i class="fa fa-angle-double-right"></i>Assess customer experience internally or externally</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Identify ways to improve usability</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Simplify and enhance the customer experience</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/customer_experience_transdormation.jpg" alt="">
        </div>
      </div>
    </section>
    <section id="#">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/solution_tech_solution.jpg" alt=""> </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Solution & Technology Selection</h1>
          </header>
          <ul class="list-unstyled list-icons">
            <li>
              <i class="fa fa-angle-double-right"></i>Define solution requirements</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Assess various technology options and select solution</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Select the best technologies</li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <header class="margin-bottom-10 section-title">
            <h1>Solution Design & Implementation</h1>
          </header>
          <ul class="list-unstyled list-icons">
            <li>
              <i class="fa fa-angle-double-right"></i>Application/ solution prototyping </li>
            <li>
              <i class="fa fa-angle-double-right"></i>Application development</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Architecture and design</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Web/ cloud/ SaaS/ standalone solutions</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Data warehousing and data migration services</li>
            <li>
              <i class="fa fa-angle-double-right"></i>System intergration and enterprise security services</li>
            <li>
              <i class="fa fa-angle-double-right"></i>Process engineering and project management services</li>

          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img class="img-responsive" src="assets/images/serviceicons/solution-design_implementation.jpg" alt="">
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <a name="Engineering-IP"></a>
        <header class="text-center margin-bottom-60 section-title">
          <h2>1 BILLION TECH ENGINEERING SERVICES</h2>
          <h1>INTELLECTUAL PROPERTY</h1>
        </header>
        <div class="row padding-bottom-30">

          <div class="col-md-6">

            <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
              <div class="front">
                <div class="box1" style="background-color:#e50913; min-height: 610px;">
                  <img class="img-responsive" src="assets/images/engineering-IP-thumb1.jpg" alt="" />
                  <div class="box-icon-title">
                    <h4>Distributed Computing Framework</h4>
                  </div>
                  <div class="tex-white">ClusterRunner is an open source parallel test execution tool that can be deployed into any distributed
                    computing infrastructure in the fastest and most efficient way possible.

                  </div>

                </div>
              </div>

              <div class="back">
                <div class="box2" style="background-color:#252525; min-height: 610px;">
                  <div class="tex-white">
                      <div class="tex-white">ClusterRunner is an open source parallel test execution tool that can be deployed into any distributed
                          computing infrastructure in the fastest and most efficient way possible.
      
                        </div><br>
                    <h4 class="size-20"> Benefits that were provided with the tool:</h4>
                    <div align="center">Make linear (i.e.: single-threaded) test jobs run in parallel
                      <hr/> Consistently utilize 100% of your testing infrastructure
                      <hr/> Get test feedback faster
                      <hr/>
                    </div>

                    <p>Its master-slave architecture allows easy horizontal dynamic scaling. In other words, it&rsquo;s a matter
                      of adding more slaves to the cluster to speed up test execution. Furthermore, its intelligent job distribution
                      engine leverages past job execution metrics to make future runs even faster.</p>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
              <div class="front">
                <div class="box1" style="background-color:#e50913; min-height: 610px;">
                  <img class="img-responsive" src="assets/images/engineering-IP-thumb2.jpg" alt="" />
                  <div class="box-icon-title">
                    <h4>Time Reservation Framework </h4>
                  </div>
                  <p>The portal helps to connect the end-user with different types of service providers. The centralised system
                    will show consumers the service provider's availability.
                  </p>
                </div>
              </div>

              <div class="back">
                <div class="box2" style="background-color:#252525; min-height: 610px;">
                  <p>The portal helps to connect the end-user with different types of service providers. The centralised system
                    will show consumers the service provider's availability with their service specialities.
                    <br><br> While this is
                    based on a market place between multiple service providers and cosnumers, the Time Reservation Framework
                    can also be used for a customised solution for one specific service provider. 
                    <br><br>The unique element of the
                    feature call "Run time attribute parameter" make sure the better service experience.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
 

    <!--<div id="portfolio" class="portfolio-nogutter portfolio-title-over">-->
    <!--<div class="row mix-grid">-->
    <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

    <!--<div class="item-box">-->
    <!--<figure>-->
    <!--<a href="index-mobility.html">-->
    <!--&lt;!&ndash; overlay title &ndash;&gt;-->
    <!--<div class="item-box-overlay-title">-->

    <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->

    <!--<h3 class="dig-med">Mobility Services</h3>-->
    <!--<p></p>-->

    <!--</div>-->
    <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

    <!--<img class="img-responsive grid-item " src="assets/images/grid-mb.jpg" width="600" height="399" alt=""  ></a> </figure>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-3 col-sm-3">-->

    <!--<div class="item-box">-->
    <!--<figure>-->

    <!--<a href="index-QA-service.html">  &lt;!&ndash; overlay title &ndash;&gt;-->
    <!--<div class="item-box-overlay-title">-->
    <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
    <!--<h3 class="mob">Quality Assurance</h3>-->
    <!--<p></p>-->
    <!--</div>-->
    <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

    <!--<img class="img-responsive grid-item " src="assets/images/grid-qa.jpg" width="600" height="399" alt=""  ></a> </figure>-->
    <!--</div></div>-->
    <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

    <!--<div class="item-box">-->
    <!--<figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner">-->

    <!--&lt;!&ndash; details &ndash;&gt;-->
    <!--<a class="ico-rounded"  href="index-SE.html"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>-->

    <!--&lt;!&ndash; overlay title &ndash;&gt;-->
    <!--<a href="index-SE.html">  <div class="item-box-overlay-title">-->
    <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
    <!--<h3 class="seo">Software Engineering</h3>-->
    <!--<p></p>-->
    <!--</div>-->
    <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

    <!--<img class="img-responsive grid-item " src="assets/images/grid-dg.jpg" width="600" height="399" alt=""  ></a> </figure>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

    <!--<div class="item-box">-->
    <!--<figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner">-->

    <!--&lt;!&ndash; details &ndash;&gt;-->
    <!--<a class="ico-rounded"  href="index-SE.html"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>-->

    <!--&lt;!&ndash; overlay title &ndash;&gt;-->
    <!--<a href="index-CRM.html">  <div class="item-box-overlay-title">-->
    <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
    <!--<h3 class="seo">CRM services</h3>-->
    <!--<p></p>-->
    <!--</div>-->
    <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

    <!--<img class="img-responsive grid-item " src="assets/images/grid-crm.jpg" width="600" height="399" alt=""  ></a> </figure>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</section>-->

    <section style="background-image: url(&quot;assets/images/casestudy-bg.jpg&quot;); background-position: 50% 93px;">

      <div class="container-fluid">
        <header class="text-center section-title">
          <h2 class="tex-white">LET OUR WORK SPEAK FOR ITSELF </h2>
          <h1 class="tex-white">CASE STUDIES</h1>
        </header>

        <div class="row padding-20">

          <div class="col-md-4">

            <div class="box-image text-center">
              <a href="case_study_bitcoin_bazaar.php">
                <img class="img-responsive" src="assets/images/bitcoin-casestudy.jpg" alt="">
              </a>

              <a class="box-image-title">
                <h2 style="color: #ffffff;">Crypto-currency trading product</h2>
              </a>

            </div>

          </div>

          <div class="col-md-4">

            <div class="box-image text-center">
              <a href="case_study_millionspaces.php">
                <img class="img-responsive" src="assets/images/ms-casestudy.jpg" alt="">
              </a>

              <a class="box-image-title" href="case_study_millionspaces.php">
                <h2 class="tex-white">Product incubation</h2>
              </a>
            </div>

          </div>

          <div class="col-md-4">

            <div class="box-image text-center">

              <a href="case_study_assetminder.php">
                <img class="img-responsive" src="assets/images/assetminder-casestudy.jpg" alt="">
              </a>

              <a class="box-image-title">
                <h2 class="tex-white">Cross-platform fleet management</h2>
              </a>

            </div>

          </div>

       
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