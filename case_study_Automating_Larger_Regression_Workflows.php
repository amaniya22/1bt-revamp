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
              <h1 class="blog-post-title">Automating Larger Regression Workflows</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap"><p>This automated solution was implemented for a UK-based company that works with financial services institutions and business leaders to provide consultancy services. </p></p>
                
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>1 Billion Tech is engaged by the client to build a fully-fledged cloud native software platform for institutional fund managers to digitize its product/service offerings. In addition to the product development work, 1 Billion Tech also provides testing services, which originally commenced with manual testing. 
<br><br>
Needless to say, performing manual testing for projects that have complex workflows (in this case, roughly 750 steps) is a time consuming and cumbersome process. The client had four (04) such end-to-end regression workflows with nearly 3,000 manual steps that the team had to follow during each regression.
</p>
       </div>
                <div class="padding-top-15">
                  <h3>How 1 Billion Tech helped</h3><br>
                
                  <p>The client wanted 1 Billion Tech to help automate its manual testing process in order to increase testing productivity and the coverage.&nbsp;</p>
<p>Leveraging the <strong>1 Billion Tech open source BDD Framework</strong> [1], we helped the client to automate the four (04) major regression workflows.</p>
<p>The following steps were initiated to help the client:&nbsp;</p>
<ol>
<li>Allocating a specialized automation engineer who is highly skilled and experienced in test automation.</li><br>
<li>The existing manual test cases were detailed out to identify all possible automation steps, which basically gave a clear visibility to the client on the automation scope.&nbsp;</li><br>
<li>A detailed <strong>test automation architecture</strong> document was given to the client to give them a comprehensive architectural overview of the proposed test automation solution.</li><br>

<li>All end-to-end regression workflows were automated within the agreed time frame, which comprised of a fully <strong>automated test suite</strong> with more than 3,000 automation steps including all verification points.&nbsp;</li><br>
<li>Finally, the automation framework was integrated with extent reports, and this gave a comprehensive <strong>test execution report</strong> to the client to analyze test results in an efficient manner.</li><br>
</ol>
<p>The following diagram (figure 1) shows the conceptual architecture of our test automation framework.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/test-automation-fig1.jpg"></p>

                </div>
                <div class="padding-top-15">
                <h3>BENEFITS TO THE CLIENT</h3><br>
                  <ul>
<li>Reduction in test execution time by 70% for the defined regression scope.&nbsp;</li><br>
<li>Low maintenance effort due to handling object properties and test data separately in Excel sheets. This helped avoid changes at the script/code level to run the scripts on a different version of the application.&nbsp;</li><br>
<li>With the use of the Cucumber BDD approach, client-side test engineers were also able to quickly grasp knowledge by maintaining existing scripts due to any object property changes of the screen on the same path.&nbsp;</li><br>
<li>30% effort reduction on any future script automations (outside of this registration flow) due to the reusable methods that have been implemented.&nbsp;</li>
</ul>


<h3>References</h3>  <br>
<ul>
<li>1. Test automation with Behavior Driven Development (BDD) &ndash;- <a href="https://1billiontech.com/case_study_QA_BDD.php" target="blank">https://1billiontech.com/case_study_QA_BDD.php</a></li>
</ul>
          
                </div>
              </div>

              <!-- /article content -->

            </div>
          </div>
          <!-- RIGHT -->
          <div class="col-md-4 col-sm-4">
            <!-- side navigation -->
            <div class="box-static box-border-top">

<?php include 'include/casestudy-sidebar.php'; ?>

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