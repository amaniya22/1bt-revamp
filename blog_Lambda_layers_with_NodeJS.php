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
              <h1 class="blog-post-title">Lambda layers with NodeJS</h4>

 
              <div>
              <p><strong>Why Lambda layers</strong></p>
<p><span style="font-weight: 400;">When developing nodeJS microservices applications in AWS most of the time developers need to share common libraries between micro services. Re-writing those common libraries or importing those common libraries into every microservice, will increase file size of the lambda function and slow down the deployment process. As a solution developers can use lambda layers.&nbsp;</span></p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig1.jpg"></p>
 <p>Lambda layers are very useful for sharing code between lambda functions, which is a zip archive that can contain additional codes, such as libraries and dependencies. By moving dependencies or libraries from your function code to a layer, it reduces the overall size of the archive uploaded during a deployment. Developers can include up to five layers per function. By default lambda layers are private but developers can share it with other AWS accounts or can make it public.</p>
<p>Lambda layers are immutable and can be versioned to manage updates. When a version is deleted or permissions to use it are revoked, functions that used it previously will continue to work, but you won&rsquo;t be able to create new ones.</p>
<p>The storage of lambda layers takes part in the AWS Lambda function storage per region limit which is 75GB.</p>
<p><strong>Benefits of lambda layers</strong></p>
<ul>
<li>Keep the size of deployments small.&nbsp;</li>
<li>Each lambda function can have the code only specific to the action it is intended to perform.</li>
<li>Single package for all shared dependencies. No need to package shared dependencies with your lambda functions. Instead, create a layer and reuse it with different functions.</li>
<li>Easier code updates. If the common dependencies are managed in the layers, then updating the dependency is very easy, as you only need to update the layer in which the dependency is packaged.</li>
</ul>
<p><strong>Lambda Layer Permissions</strong></p>
<p>Layers can be used within</p>
<ul>
<li>An AWS account</li>
<li>Shared between accounts</li>
<li>Shared publicly with the broad developer community&nbsp;</li>
</ul>
<p><strong>Simple guide to lambda layers</strong></p>
<p>In this example I am going to create a lambda layer for a simple response helper so that we can use that response helper layer in all our services without implementing it individually in every service.</p>
<p>First we have to create a serverless project using <strong>sls create -t node-js</strong>. Then in nodeJS we have to create a folder structure as per the image below.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig2.jpg"></p>
 <p>Then within the response-helper directory you have to initialize a npm module by using <strong>npm init</strong>.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig3.jpg"></p>
 <p>Afterwards you have to create an index.js file in the response-helper directory and you have to write your response helper logic there and you have to export it.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig4.jpg"></p>
 <p>In the serverless.yml file under the layers you have to define your response helper and you have to specify the path.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig5.jpg"></p>
 <p>Once everything is properly configured you have to deploy the service by using <strong>sls deploy</strong>. After you deploy it your lambda layer will display in the layer section in the lambda function service.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig6.jpg"></p>
 <p>Once you go into the layer section you can see your lambda layer with a version number 1. When you do any changes in your lambda layer and re-deploy your version number will increase accordingly.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig7.jpg"></p>
 <p>In the cloudformation now you can see the stack of the lambda layer.&nbsp;</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig8.jpg"></p>
 <p>In the stack in the <strong>output</strong> section you can see the <strong>qualified</strong><strong>arn</strong> of your lambda layer. You can reference that in your lambda functions now.&nbsp;</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig9.jpg"></p>
  <p>To add a lambda layer to your handler function, under the layers section you have to reference the lambda layer&rsquo;s qualified arn as per the below image.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig10.jpg"></p>
 <p>To import the response helper into your service handler function, you have to import it as you normally import a javascript module.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig11.jpg"></p>
 <p>Once you do everything properly and you invoke your API using an API client you can get your desired response as shown below.</p>
 <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/Lambdalayers-fig12.jpg"></p>
 <p><strong>Limitations of lambda layers</strong></p>
<ul>
<li>A Lambda function can use up to five layers.</li>
<li>The maximum size of the total unzipped function and all layers is 250 MB.</li>
</ul>
<p><strong>References</strong></p>
<ol>
<li>Creating and sharing Lambda layers <a href="https://docs.aws.amazon.com/lambda/latest/dg/configuration-layers.html" target="blank">www.docs.aws.amazon.com/lambda/latest/dg/configuration-layers.html</a></li>

<li>Using Lambda layers to simplify your development process <a href="https://aws.amazon.com/blogs/compute/using-lambda-layers-to-simplify-your-development-process/" target="blank">www.aws.amazon.com/blogs/compute/using-lambda-layers-to-simplify-your-development-process/</a></li>
</ol>
             
            
           
              


<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/thivanka-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Thivanka Nimesh	

                                                    </h2>
                                                    <small>Software Engineer
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