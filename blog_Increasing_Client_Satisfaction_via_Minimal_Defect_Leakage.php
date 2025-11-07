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
              <h1 class="blog-post-title">Increasing Client Satisfaction via Minimal Defect Leakage</h1>
              <div>
              <p>We all love to build a software and test it within a comfortable timeline similar to what&rsquo;s prescribed in certain old-fashioned software development methodologies like the waterfall method, but the reality of today&rsquo;s world is unfortunately not always like that. Most development projects today require a fast-paced development approach coupled with shorter release cycles, but with the intention of not compromising software quality.&nbsp;</p>
<p>So, no matter how competent you are in testing or how much effort you put into testing your product within the agreed timelines/budget, it will prove in vain if the Client starts uncovering more defects than the SLAs during their UAT cycle. Now the question is how can we bring this down in order to maintain defect leakage SLA at 5% or less? Thankfully, there are some best practices that can be adopted to facilitate this.</p>
<ol>
<li><strong><strong>Getting involved in requirement discussions/workshops</strong></strong></li><br>

<p><strong>Shift Left Testing</strong> is a popular jargon we hear in today&rsquo;s agile development world. The&nbsp;focus here is to involve QA Engineers right from the initial stages of the program to prevent defects rather than having to put more effort in defect detection later on.&nbsp;</p>
<p>One important aspect of that is that the QA Engineer also becomes a critical contributor towards finalizing the requirements by identifying any requirement defects/anomalies at the beginning (defect prevention). They can draw on their past experiences and put forward suggestions if the requirements are deviating from its boundaries.&nbsp;</p>


              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/client-satisfaction-fig1.jpg"></p>

            
              
<li><strong>Understanding requirements thoroughly&nbsp;</strong></li><br>

<p>As testing professionals, we always must be proficient in correctly understanding the domain and the application requirements. This is essential because the QA Team cannot rely on the Development Team for requirements. Lack of clarity in software requirements is one of the biggest barriers for effective software development and hence clear understanding on application requirements via proper requirement analysis, studies on previous systems with similar domains, better collaboration with Client partners are some of the key action items we have to consider in order to fulfill this.&nbsp;</p>
<p>QA Teams should act as advocates to developers in terms of requirements and support the Client in any requirement refinements, whenever necessary. Requirement Clarity Index (AKA RCI) is a key metric that can be used to track the level of clarity each team member has on application requirements.</p>


<p><img class="img-responsive" src="https://1billiontech.com/assets/images/client-satisfaction-fig2.jpg"></p>

<li><h2>Clear out the test boundary</h2></br>

<p>Understanding who is doing what, what should be the test environments/devices, the test scope you are responsible for, types of tests to be carried out are some important aspects that need to be addressed in any form of software test. As an example, the application you are testing may not always work independently because there could be external systems that want to communicate with it. Also, there could be non-functional requirements that your Client keeps in their head but gets uncovered at the time they start the UAT.</p>
<p>Needless to say, it is paramount that these variables are identified and responsibilities are known, from the very onset. Therefore, clearing your test boundary is a task that needs to take place at the planning stage to avoid any surprises at UAT.</p>
</li><br>
<li><h2>Knowing what the Client is going to test as part of their UAT</h2><br>
<p>Getting an understanding of what your Client is planning to verify as part of their UAT is advantageous. They will be the ones to analyze all business-critical flows/features that require minimum risk of being broken in the production environment. Hence, getting an understanding on this should be planned from the test designing phase. This is sometimes quite challenging because UAT testers are not always easily reachable if the project is large and if there are multiple UAT testers across different geo locations.&nbsp;</p>
<p>Therefore, one strategic approach you can take is to share test scenarios with some of the key UAT testers during your test designing stage to validate whether you missed any important business-critical scenarios. Also, if your UAT Team is planning to come up with any UAT test plans/test cases, try to get this done from them in advance so you can plan to have a proper test coverage prior to your UAT release.</p>
</li><br>
<li><h2>Always try to use real/production like data and not dummy data</h2></li><br>
<p>We have to use <a href="https://qatestlab.com/resources/knowledge-center/5-types-of-test-data-that-should-be-used-during-software-testing/" target="_blank">different types of test data</a> during our tests such as valid, invalid, wrong, boundary, etc. for a successful test execution. But to make your testing a realistic one, test data plays a major role, especially on valid data pertaining to happy path testing. Of all the test data demonstrated in Figure 3, valid data is important as it is combined with the application requirements.&nbsp;</p>
<p>Real data will show you certain major characteristics of data, such as the length of them, types of characters they use, how much of volume, etc. Therefore, try to get a data dump to your test environment from the production environment with necessary data masking to make your testing a realistic one (this is possible if it is a migration or a maintenance project). If this is something you cannot do, try to at least get some sample production data through your Client project stakeholders/UAT Team prior to kicking off test execution.</p>
</li><br>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/client-satisfaction-fig3.jpg"></p>

<li><h2>Put yourself in a real business user&rsquo;s shoes and not just as a tester&nbsp;</strong></h2><br>
<p>As normal protocol goes, what we basically do is start executing test cases we write to find bugs, but have you ever thought how a real user would actually use the product in the real world? For instance, the real users might not want to execute the process workflow till the end, and instead they may want to save completed steps and resume it at a later time. So, you may not encounter any problem when you perform your test without a break, but problems might occur when you perform the same action with periodic breaks in the workflow.&nbsp;</p>
<p>Identifying who the real users would be and acquiring knowledge on the real business domain and how it operates would immensely help overcome such challenges and provide confidence among the test you do as well.</p>
</li><br>
<li><h2>Continuous Regression Testing</strong></h2><br>
<p>Regression testing should be performed ideally on a regular basis, such as at the end of each day, weekly, bi-weekly, at the end of functional tests, and so forth, based on the development model being followed. Even if we perform a thorough functional testing, the system could be error-prone with the changes incurred during the development lifecycle and this defect injection rate is quite high if the Development Team is on a tight schedule and working in a pressurized environment.&nbsp;</p>
<p>Performing more regression could reveal more defects, which could help minimize production defects significantly. Continuous maintenance of your regression suite is of utmost importance and therefore revisiting the regression test cases at the end of each sprint/release is also an important task to be followed throughout the project.&nbsp;</p>
</li>


<li><h2>Learn from the past</h2><br>
<p>As humans, we always tend to do mistakes and this could be as a result of lack of work experience, lack of domain knowledge, not being productive, lack of proper reviews, not having proper communication among project stakeholders, and so on. Therefore, at the end of every sprint/release, looking back in retrospect at areas where there were mistakes, and identifying areas of improvement is very much needed.&nbsp;</p>
<p>Completing a thorough review on UAT defects also must take place in order to see what went wrong and why it went wrong so that such defect leakages can be avoided in the future.&nbsp;</p>
</li>
</ol>
<p><h2>Conclusion</h2><br>
<p>Our primary goal should always be to get the maximum benefit from conducting a test and to increase client satisfaction by delivering a quality product. Achieving this is not rocket science and if we grasp the requirements clearly, set the test boundary, know the user and how the UAT will be performed, use real/production-like data as much as possible, think from a business user&rsquo;s perspective, do continuous regression, and look back at the past to adjust the things that went wrong, it could help achieve this milestone in a fairly easy manner.</p>
              
<div><h2>References</h2><br>
<p><a href="https://qatestlab.com/resources/knowledge-center/5-types-of-test-data-that-should-be-used-during-software-testing/" target="_blank">https://qatestlab.com/resources/knowledge-center/5-types-of-test-data-that-should-be-used-during-software-testing/</a></p>

</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/lalindra-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Lalindra Weliwita

                                                    </h2>
                                                    <small>Quality Assurance Manager
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