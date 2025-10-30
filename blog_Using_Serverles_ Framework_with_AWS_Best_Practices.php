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
              <h1 class="blog-post-title">Using Serverless Framework with AWS – Best Practices</h1>
              <div>
              <p>Recently, I was able to be part of a fully-fledged AWS serverless project implementation at 1 Billion Tech. In this project, we used <strong>Serverless Framework</strong> [1] as the primary deployment framework. Here are some of the best practices that were practiced while engaging in the project.</p>
<ol>
<li><strong><strong>Use serverless plugins. Do not reinvent the wheel</strong>.</strong>
<p>While you are developing your serverless application, you may come across certain features that a <strong>serverless framework</strong> [1] does not provide natively. For example, let&rsquo;s say you want to set up your serverless application in your local environment (your development PC). Since this is not supported natively by the serverless framework, you may think you need to write certain scripts to emulate and setup the serverless application in your local development environment.</p>
<p>This task can take a significant amount of your development time. But, if you search serverless framework plugin library [2], you can find a plugin called <strong>serverless offline </strong>[3].This plugin emulates AWS Lambda and API Gateway on your local machine. In addition, there is a plugin called <strong>serverless-dynamodb-local</strong> [4], which allows you to run DynamoDB locally. So, if you combine these two plugins, you can setup most of your serverless app components locally.</p>
<p>There are hundreds of other serverless plugins in the serverless plugin library [2]. Therefore, whenever you come across a task or requirement that serverless frameworks do not support natively, always check the serverless plugin library first, because there is a good chance that someone faced the same issue as you have and developed a plugin. In the event you can&rsquo;t find any suitable plugin to complete your task/requirement, and you decided to develop your own plugin, don&rsquo;t forget to publish it in the serverless plugin library to help other people who are facing the same issue in the future.</p>
<p>Few serverless plugins that I found useful were:
<ul>
<li>Serverless Webpack &ndash; allows you to use webpack with your serverless code</li>
<li>Warmup &ndash; Reduces Lambda cold starts by warming up lambda functions</li>
<li>Prune &ndash; Purges previous versions of the Lambda function</li>
<li>Step Functions - Adds step function support to serverless framework</li>
<li>Dotenv &ndash; Preloads environment variables into serverless from .env files</li>
</ul></p></li>

<li><strong><strong>Paying attention to the resource limit of the stack.&nbsp;</strong></strong>
<p>A serverless application consists of a serverless.yml and we need to include every AWS resource that should be created using the serverless framework into this serverless.yml file. When you deploy the serverless application using <em>serverless deploy </em>command, the framework will create a AWS CloudFormation stack based on the configuration you have added to serverless.yml. AWS CloudFormation stacks have a hard limit of 200 resources per stack.&nbsp;</p>
<p>You may think this 200 resource limit is hard to hit, but even if you are creating a microservice architecture-based application and you are creating a serverless application associated with each microservice, it is quite easy to hit this 200 resources limit. The simple solution to this problem is to create nested stacks. A nested stack is a child stack of a CloudFormation stack. One stack can have 200 nested stacks. In my experience the best strategy will be splitting the stack into resource type based nested stacks. For example, let&rsquo;s say you have a stack that contains an API gateway, Lambda functions, and DynamoDB tables. You can group the resources based on the type and create an API gateway nested stack, Lambda nested stack and DynamoDB stack.</p>
</li>
<li><strong><strong>Warm up your lambda functions if you want consistent predictable performance.</strong></strong>
<p>AWS lambda functions are super cheap compared to other AWS compute services like EC2 or ECS. You only have to pay for the running time of the Lambda function. How AWS handles this is by shutting down the Lambda container after a certain idle time (15-40 minutes). After AWS shuts down the Lambda container and if a new invocation happens, AWS will redeploy the Lambda container. This process is known as a <strong>cold start</strong>. In my experience, a cold start can vary between 400ms to 700ms.&nbsp;</p>
<p>Code <em>package size</em> of the Lambda function is a big factor in a cold start. Because AWS stores your Lambda function code in an encrypted S3 bucket. When deploying the Lambda container, AWS will copy your code from the S3 bucket and as a result of that, larger the code package size, more the time AWS will take to deploy the Lambda function.</p>
<p>Cold start can be an issue if you want consistent predictable performance out of your Lambda function. For example, let&rsquo;s say you have a Lambda function that handles the login process, and you want this login process to be completed within 600ms. Let&rsquo;s assume the cold start is around 400ms and it takes 500ms to complete the login process. So, with a cold start, the complete login process will take 900ms.</p>
<p>There are 2 ways to solve this:</p>
<ul>
<li>Create a scheduled Lambda function and invoke other Lambda functions that you want to keep warm. Inside Lambda functions that get invoked, write a small piece of code to ignore the invocation from scheduled the Lambda function.</li><br>
<li>If you are using a serverless framework, you can use &ldquo;<strong>serverless-plugin-warmup</strong>&rdquo; plugin [5] to easily achieve this with less code.&nbsp;</li><br>
<li>If you do not like the previous option because it feels a bit hackish, you can use the recently introduced provisioned concurrency feature. Using this feature, you can keep Lambda functions initialized and ready to invoke. The downside of this option is although it is easier than the first option, it&rsquo;s also expensiver than the first option.</li>
</ul></li><br>
<li><strong><strong>Do not use wildcards for IAM Role configuration.</strong></strong>
<p>This is a very common mistake that most developers make. Most of the time developers use wildcards for either &lsquo;action&rsquo;, &lsquo;effect&rsquo; or both. This violates the principle of least privilege. Always grant permission only for the required action and required effect. Also, wildcard IAM role configs will get highlighted in cloud security assessments. Most of the time this will be categorized as a high security risk. Always practice &ldquo;principle of least privilege&rdquo; from the beginning of the project. Otherwise, it will be significantly time consuming to go back and configure your old IAM role configs at the end of the project.</p>
<p>I hope you learned a few valuable practices from this article. Happy coding! :)&nbsp;</p>
</li>

</ol>


<div><h2>References</h2><br>

<ol>
<li>Serverless Framework: <a href="https://www.serverless.com/" target="_blank">https://www.serverless.com/</a></li>
<li>Serverless Framework Plugin Directory: <a href="https://www.serverless.com/plugins/" target="_blank">https://www.serverless.com/plugins/</a></li>
<li>Serverless Offline Plugin: <a href="https://www.serverless.com/plugins/serverless-offline" target="_blank">https://www.serverless.com/plugins/serverless-offline</a></li>
<li>Serverless DynamoDB Local: <a href="https://www.serverless.com/plugins/serverless-dynamodb-local" target="_blank">https://www.serverless.com/plugins/serverless-dynamodb-local</a></li>
  
  <li>Serverless Warmup Plugin Repo: <a href="https://github.com/juanjoDiaz/serverless-plugin-warmup" target="_blank">https://github.com/juanjoDiaz/serverless-plugin-warmup</a></li>
</ol>


</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/shehan-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Shehan Ekanayake

                                                    </h2>
                                                    <small>Associate Technical Lead

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