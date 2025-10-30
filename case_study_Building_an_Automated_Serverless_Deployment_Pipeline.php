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
              <h1 class="blog-post-title">Building an Automated Serverless Deployment Pipeline</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap"><p>The client is a UK-based fintech company specializing in financial management systems and process reengineering. The company provides consultancy services to top financial institutions across the globe. The client partnered with 1 Billion Tech to build a fintech application from scratch on top of AWS with multi-tenant capability.&nbsp;</p></p>
                
                <div class="padding-top-15">
                  <h3>The Challenge</h3><br>
                  <p>Though microservices can be developed and deployed in isolation, the client needed all modules to be built and deployed together to have a more integrated approach. The different environments/stages and deployment process needed to be separated without any dependency between these environments.&nbsp;The deployment process was required to be very flexible and the implementation needed to be as simple as possible to facilitate the creation of a new environment.</p>
                 <ul> <li><h3><strong><strong>Project Environments</strong></strong></h3><br></li>
<p>In this project, there were three different environments (DEV/QA/ PROD) identified.&nbsp;</p>
<ol>
<li>DEV &ndash; Development environment</li>
<li>QA &ndash; Quality Assurance environment</li>
<li>PROD &ndash; Production environment</li>
</ol>
<p>The process should be flexible enough to create a new environment at any given point too.</p>
</ul>
                </div>
                <div class="padding-top-15">
                  <h3>How 1 Billion Tech helped</h3><br>
                  <p>The 1 Billion Tech development team helped the client to automate the complete development and deployment process.  
</p>
                </div>
                <div class="padding-top-15">
                  <h3>The Solution</h3><br>
                  <p>The solution was fully automated based on AWS DevOps Services such as AWS CodeCommit, AWS CodeBuild, AWS Code Pipeline and the Open Source <a href="https://www.serverless.com/">Serverless Framework</a>. This stack helped the team with <em>Source Control.</em></p>
<ul>
<li>
<h3><strong><strong>Source Control</strong></strong></h3>
</li>
</ul>
<p>The application used <a href="https://git-scm.com/"><strong>Git version control system</strong></a> for managing the source code and used its branching strategy to separate our source code version to multiple environments. As illustrated, there are three different environments and we maintained three different Git branches for each environment (DEV/QA/PROD). All developments are managed by the <strong>origin/DEV</strong> branch. When there is a feature development, the developer needs to create a new branch based on the <strong>origin/DEV</strong> branch. After completion of the new feature development, the feature development branch needs to be merged with the origin/DEV branch as well (see Figure 1).</p>
                  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig1.jpg"></p>
                  <p>Figure 2 below shows you how to manage separate branches for different environments.</p>
                  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig2.jpg"></p>
                  
<ul>
<li>
<h3><strong><strong>Code Build</strong></strong></h3>
</li>
</ul>
<p>This application fully utilizes the AWS serverless architecture and many of its DevOps features such as <strong>CodeCommit, CodeBuild</strong> and <strong>CodePipeline</strong>. While <strong>CodePipeline</strong> orchestrated the complete DevOps channel, <strong>CodeCommit</strong> and <strong>CodeBuild</strong> helped to maintain the code build process.&nbsp;</p>
<p>However, <strong>CodeDeploy</strong> was skipped in the CodePipeline, allowing the <a href="https://www.serverless.com/">Serverless Framework</a> to take over the task (see <em>Code Deployment</em> section).</p>
<p>The code pipeline consisted of two main stages (see Figure 3).</p>
<ol>
<li>Setting up the Source Provider (CodeCommit/GitHub/S3).</li>
<li>Setting up the Code Build Process (CodeBuild) - This stage provides the capability to listen to source code changes for the specified branches.</li>
</ol>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig3.jpg"></p>

<p>The Code Pipeline execution strategy used a source code change event. With this approach, any commits pushed to the Git branch will trigger a pipeline execution (see Figure 4).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig4.jpg"></p>
<p>As the “Dev” branch is usually busy with feature commits, bug fixes, experimental code changes, etc., developers may not need to execute the pipeline for every change that they push into it. In order to tackle this, we added another approval stage for the “Dev” environment Code Pipeline, which required a manual approval to continue with the pipeline execution (see Figure 5).</p>
                
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig5.jpg"></p>  <ul>
<li>
<h3><strong>The .env file</strong></h3>
</li>
</ul>
<p>As mentioned above, this project can have multiple running environments with a single source code repository. Therefore, we had to maintain a file (.env file) that contains all the environment-specific details, which can be used to fetch configurations for the running environment (see Figure 6).&nbsp;</p>
                  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig6.jpg"></p>
                  <ul>
<li>
<h3><strong>DevOps Files</strong></h3><br>
</li>
<p>When we consider microservice level deployments, each microservice was built as a <strong>BuildProject</strong>. The <strong>BuildProject</strong> requires a <strong>build specification file</strong> that contains details about the build environment and command execution. Hence, a separate <strong>DevOps file</strong> is maintained here (see Figure 7).</p>

</ul>
                  <p><img class="img-responsive" src="https://1billiontech.com/assets/images/building-devop-fig7.jpg"></p>
                  <ul>
<li>
<h3><strong>Code Deployment</strong></h3><br>
</li>

<p>After completing the code build process with AWS CodePipeline, the deployment process was managed with the help of the <a href="https://www.serverless.com/">Serverless Framework</a>. With this, all related Lambda functions can be updated using its built-in CloudFormation templates.</p>


</ul>

  <h3>BENEFITS TO THE CLIENT</h3>
                  <ul class="padding-top-15">
                 

<ol>
<li>A fully automated code build and deployment process</li>
<li>New releases can be easily deployed</li>
<li>Ability to introduce new microservices to the project with minimal changes</li>
<li>All pipeline services are fully managed by AWS</li>
<li>Minimum effort to create a new environment</li>
</ol>

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