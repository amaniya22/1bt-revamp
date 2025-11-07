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
            <h1 class="blog-post-title">Essence Of QA</h1>
              <div>
            
              <p>I was thinking of writing an article for QAs who are new to the IT industry and who are planning to start their career as a software quality assurance engineer. Objective of this article is to create awareness around what the IT industry is expecting from QA engineers.</p>
<p>Firstly, you must understand why you selected QA as your profession ? if it is because you did your bachelors in IT and/or you don&rsquo;t know how to code and/or you just wanted a job in the IT sector or you are really passionate and you want to start your career in the QA industry.</p>
<p>I leave you to answer the above questions. However, most of the QAs I met in my life belong to the first three categories.</p>
<p>In this article I will try to touch upon the essence of QA in summary</p>
<p>Below diagram illustrates what you need to focus on to start your career as a QA engineer. I have used different color codes to emphasize the importance of each area where you need to focus more on.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/essenceofQA-thumb.jpg"></p>

<p><strong>Manual Testing</strong></p>
<p>Under manual testing you need to know the theory of QA. The best way to get this knowledge is following the ISTQB certification(Foundation Level) which will boost your theoretical knowledge while gaining the required qualification. On the other hand, this will create a good impression in the interviewer's mind. Apart from the theoretical knowledge you need to enhance your knowledge on API testing with different tools like Postman and soapUI.</p>
<p><strong>Automation</strong></p>
<p>Automation would be your main area. As a beginner to the QA automation world you need to learn automation step by step without mixing everything. I will be writing another blog to detail out automation in summary. You need to learn FrontEnd automation, API automation and mobile automation along with different tools and technologies used and how the frameworks are being built.</p>
<p><strong>Defect Management</strong></p>
<p>Under defect management it is required to fully understand the defect management life cycle. What information needs to be filled when reporting an issue. Different tools used for defect management like Jira, Bugzilla.&nbsp;</p>
<p><strong>Agile&nbsp;</strong></p>
<p>Scrum and Kanban would be commonly practiced in most of the companies, therefore it&rsquo;s required to understand these two methodologies. What is the size of a typical scrum team ? What are the main roles in scrum ? What are the ceremonies in scrum ? Knowledge in Agile would surely boost your knowledge and confidence. There are certifications like scrum master and Agile tester specially designed to enhance this knowledge.</p>
<p><strong>Non Functional Testing</strong></p>
<p>For a beginner, Under non-functional testing you should mainly focus on performance testing and some knowledge on security testing would be beneficial. What are the different types of performance testing and what tools to use for performance testing. Tools like Jmeter can be used to prepare scripts and trigger performance testing while tools like yourKit, jprofiler, etc. can be used to check the server status while performance testing is being executed.</p>
<p><strong>Communication</strong></p>
<p>Irrespective of your English speaking ability you need to improve your communication skills everyday. Especially effective communication with clients. To become an effective communicator I recommend you to joining a club like Toastmasters.<br /><br /></p>
<p><strong>Awareness of Technologies and Other Departments</strong></p>
<p>Basically if you are new to the IT industry you need to have some sort of knowledge on other departments. At least you should be aware of what are the different roles and departments functioning in an IT organization. Development, QA, Operation, Business Analyst, Project Management are the main departments which can be seen in a typical IT organization. On the other hand you need to have at least the basic knowledge of new technological trends such as AI, Machine Learning, Data science, etc.</p>
<p><strong>Leadership</strong></p>
<p>As a beginner you don&rsquo;t need to worry much about leadership skills but you need to make sure that you can work independently, grasp the whole requirement quickly and work under pressure to meet deadlines.</p>
<p>These are the main areas that you need to focus on as a beginner to the QA industry</p>
<p>Happy Testing!</p>

<div class="row">
<div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/jayanath-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Jayanath Buddhika
                                                    </h2>
                                                    <small>Senior Quality Assurance Lead
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