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
              <h1 class="blog-post-title">GitHub Workflows For Test Automation</h1>
            
              <div>
              <p><strong>What are GitHub Actions?</strong></p>
<p><a href="https://github.com/features/actions">GitHub Actions</a> are event driven. It allows us to automate tasks within the software development lifecycle. For example, let&rsquo;s say if any teammate creates a PR (pull request) on repo, we can automatically run a command that executes a software testing script with the help of GitHub Actions.</p>
<p>Since GitHub marketplace has plenty of actions which are already created by other parties, an extra effort is not needed to get going.</p>
<p><strong>Components of GitHub Actions</strong></p>
<p>GitHub Actions mainly includes the following components.</p>
<ul>
<li>Workflows</li>
<li>Events</li>
<li>Jobs</li>
<li>Steps</li>
<li>Actions</li>
<li>Runners</li>
</ul>
<p>A very important aspect of GitHub Action is the&nbsp;<strong>.yml </strong>file(this is a human-readable data-serialization language which supports all programing languages).</p>
<h1><strong>Scenario</strong></h1>
<p>In this blog, I am going to test some of the REST APIs and invoke these APIs through the Postman tool (CLI tool: Newman) and run some tests based on the results returned.&nbsp;</p>
<p>Even though this blog explains only about the process of running tests, this process can be incorporated as part of Continuous Integration <strong>(CI)</strong>, and then in each of the release pipelines for Continuous Deployment <strong>(CD)</strong> or a step prior to release in Continuous Delivery <strong>(CD).</strong></p>
<p><strong>Setting up GitHub Actions</strong></p>
<ol>
<li><strong>Adding an ACTION</strong></li>
<p>You need to create a folder named&nbsp;<strong>.github/workflows/</strong>&nbsp;in the root directory of your repo to store workflows.</p>
             
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig1.jpg"></p>
  
<li><strong>Workflow File</strong>

<p>The below lines of code define the name of the workflow and that it will run when a&nbsp;<strong>push</strong>&nbsp;event occurs on the&nbsp;<strong>master/main</strong>&nbsp;branch of the repo.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig2.jpg"></p>
              <ul> 
<li>
<p><strong>2.1</strong> Now create the <strong>job</strong> which will run the Postman collection</p>
</li>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig3.jpg"></p>
            
<li>
<p><strong>2.2 </strong>Installing Node and Newman (including newman-reporter--htmlextra)</p>
<p>Postman can be run inside <strong>CI/CD </strong>agents using the CLI Tool called&nbsp;<strong>Newman</strong>. Before installing Newman we need to install node.js first since Newman is built on node.js as shown below.</p>
</li>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig4.jpg"></p>
            
<li>
<p><strong>2.3</strong> Directory for test results</p>
<p>Then we need to create a directory and upload the results to it. The directory can be created using the following steps.</p>
</li>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig5.jpg"></p>
              
<li>
<p><strong>2.4</strong> Running the Postman collection</p>
<p>Our next task is to execute the tests defined in the Postman collection. The Postman collection file (.json) is available in the repository as shown below.&nbsp;</p>
</li>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig6.jpg"></p>
              
<p>As shown below, it executes the Postman collection via Newman and generates the html report for the test run using newman-reporter--htmlextra.</p>


              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig7.jpg"></p>
              
<li>
<p><strong>2.5</strong> Uploading artifacts</p>
<p>For the last step we need to upload the artifacts to the workspace.&nbsp;</p>
</li>
</ul></li>



              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig8.jpg"></p>
              
<li><strong>Testing</strong></li>
<p>We can push some code to the&nbsp;master/main&nbsp;repository to check how the workflow is triggered.</p>


              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig9.jpg"></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig10.jpg"></p>
            
<p><strong>The entire workflow file (.yml) is as below:</strong></p>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig11.jpg"></p>

          

<p><strong>Note:</strong> Please refer the GitHub repo for more info<a href="https://github.com/nirmalasl/PotmanNewman"> link</a></p>
<p><strong>Email notifications &amp; configuration</strong></p>
<p>By default, a notification is sent to the owner of the repository to inform them of the failed build. But we can change this by unchecking &ldquo;Send notifications for failed workflows only&rdquo;.</p>
</ol>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig12.jpg"></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/github-fig13.jpg"></p>
            

<h2><strong>Conclusion</strong></h2>
<p><br />Automation is one of the best ways to increase productivity in a software project and <strong>GitHub Actions </strong>provides an easy way to improve the quality of our code and make life more productive.</p>

             
             
              <h2>References</h2><br>
<ol>
<li><a href="https://github.com/features/actions">https://github.com/features/actions </a></li>
<li><a href="https://docs.github.com/en/actions/learn-github-actions/introduction-to-github-actions">https://docs.github.com/en/actions/learn-github-actions/introduction-to-github-actions</a></li>
</ol>
           
  
          
              
<div class="row">   <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/nirmala-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Nirmala Katupothage

                                                    </h2>
                                                    <small>Associate QA Lead
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