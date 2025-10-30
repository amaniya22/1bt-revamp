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
              <h1 class="blog-post-title">PPTX file generator using AWS services and python</h1>

              <!-- article content -->
              
                <p>In this article, I'm going to explain how we can generate PPTX files using python, AWS services and PPTX templates.</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig1.jpg" alt=""></p>
              <p>In our case we have already created PPTX templates as listed in figure 1. Now we need to identify the correct template. To do this we can use a unique name to specify each template. In this article I will be using the template name as the unique identifier for the template. and data to update these templates. Also we need to update the red color texts ( those are not in actual pptx template but those are the requirements ) using actual data.so we can identify what are the PPTX operations we need to automate.</p>
<p>I have selected following requirements to explain in this article,</p>
<ul>
<li>Replace text placeholders according to our data.</li>
<li>Execute conditions.</li>
<li>Add Images.</li>
</ul>
<p><strong>Prerequisites&nbsp;</strong></p>
<ul>
<li>Should have knowledge on python</li>
<li>Should have knowledge on AWS serverless stack</li>
</ul>
<p>First of all we should have a solution to mention these operations and positions in the PPTX templates. Therefore I decided to use some syntax that we can add to the pptx templates using text boxes. These syntax can be executed within our code base.<br /><br /><strong>Syntax</strong></p>
<p><strong>Replace text using data </strong>( +++INS data path +++ )<strong><br /></strong><strong><br /></strong>As I mentioned this is the syntax for replacing text according to the data set. If we have a data object like this { &ldquo;name&rdquo; : &ldquo;John&rdquo;, &ldquo;city&rdquo;: &ldquo; Colombo&rdquo; } we can update the pptx template as below ( figure 2).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig2.jpg" alt=""></p>
              <p><strong>Execute conditions using data </strong>( +++IF (( condition data ))&lt;&lt; +++INS data.project_description +++ &gt;&gt;IF-END+++ )<br /><br />We can use this syntax to execute if conditions. We need to mention the condition and syntax to execute content if the condition returns true ( Figure 3) .</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig3.jpg" alt=""></p>

              <p><strong>Add images </strong>( +++IM data path +++ )<br /><br />We can use this syntax to insert images that can be base64 converted data set or image path. In our case we have used image paths in the data set { &ldquo;sample_image&rdquo; : &ldquo;image url | image path | base64 data set&rdquo; } (Figure 4 ).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig4.jpg" alt=""></p>
              <p>These are only a few syntaxes and operations that we have used, according to the requirement, you can use any kind of syntax and operations.</p>
<p><strong>Architecture</strong></p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig5.jpg" alt=""></p>
              <p>Shown above is the solution architecture ( figure 5 ). This service is running on AWS serverless. Therefore, scalability and availability will be handled by AWS.</p>
<p>Now let&rsquo;s go through the details regarding the architecture.</p>
<ol>
<li>User request.<br /><br />This request should include PPTX template key ,data to update pptx template and authentication token.<br /><br /></li>
<li>Lambda function trigger<br /><br />API gateway will validate user request using authentication token and it will trigger the PPTX generation lambda function. Then this function will start to read and update according to the syntax (what we added to the pptx template).<br /><br /></li>
<li>&nbsp;Fetch PPTX template<br /><br />First we need to upload our PPTX template (with syntaxes) to the s3 bucket. After that we can fetch the PPTX template by using the requested template key. Now the PPTX generator function is going to update the PPTX template according to our syntax and requested data. Also we can use this bucket to store images if we need to add images to a PPTX file.<br /><br /></li>
<li>Upload generated PPTX file<br /><br />After the PPTX generation process, the generated PPTX file will be stored in this s3 bucket.</li>
</ol>
<p><strong>Setup AWS serverless environment</strong></p>
<p>This service is based on python because it&rsquo;s open source and very fast (pptx file with 20 slides and more than 40 text replacements would take only 2 seconds).<br />Therefore we need to install python and its version should be over 3.0.</p>
<p>After that we can install the python-pptx module.</p>
<pre>pip install python-pptx</pre>
<p>Now we can create a code base by adding a new folder.</p>
<p>.</p>
<pre>├── .gitignore</br>
├── handler.py</br>
└── serverless.yml</pre>
<p>We can add a gitignore file, handler.py file to write our function and serverless.yml file to connect and create AWS resources. Also we can add requirements.txt&nbsp;file to manage and install python modules.</p>
<p>Let&rsquo;s install serverless using the following code segment</p>
<pre>npm install -g serverless</pre>
<p>The  virtual environment could be created using the following code segment
</p>
<pre><p>pip3 install virtualenv<br /><br />virtualenv venv --python=python3</p></pre>
<p>We can active the virtual environment by running following command</p>
<pre>source venv/bin/activate</pre>
<p>Lets update serverless.yml file by adding s3 bucket creation, permission to access s3 bucket, creation of docx generation lambda function with API endpoint. You can follow the sample serverless file mentioned below ( figure 6).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig6.jpg" alt=""></p>
              <p><strong>PPTX generation function</strong></p>
<p>First we can start with a simple python function like below ( figure 7 ).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig7.jpg" alt=""></p>
              <p>We can get the pptx file content using the python-pptx module. After that we are going to loop every slide to execute our logic contained in the pptx template.</p>
<p>Every slide contains shapes therefore we need to loop shapes inside the slide and need to capture text shapes ( we are using text shapes to add our syntaxes ) figure 8.</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig8.jpg" alt=""></p>
              <p>In this case I have used if else conditions but we can use python class to replace this.<br /><br />Now we can capture the syntaxes.<br /><br />Let's move on to the logics behind the syntaxes.<br /><br /><strong>Text replace</strong><strong><br /></strong><strong><br /></strong>Here, we are going to get actual value from the data object using data path which includes syntax. After that we can replace actual value to syntax. If there isn&rsquo;t any value for the data path then we can clear the syntax ( Figure 9).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig9.jpg" alt=""></p>
              <p><strong>IF conditions</strong><strong><br /></strong><strong><br /></strong>We need to use the eval operator to get the condition output (Figure 10).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig10.jpg" alt=""></p>
              <p>First we need to capture the condition and after that we can get condition output by using eval_executor function, we need to pass the condition and our data object to the eval operator function then it will return the output.<br /><br />After that, if the return value is True we can execute syntaxes inside the if condition. If it is False then we can clear the syntaxes.</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig11.jpg" alt=""></p>
              <p>In this example, we only consider text replacement inside the if condition but we can add any syntax as per the requirement.<br /><br /><strong>Insert Images</strong><br /><br />We need to set left, height, top, width values to insert images, we can get that information from our data set ( Figure 12).</p>
              <p><img class="img-responsive" src="assets/images/PPTX_Fig12.jpg" alt=""></p>
              <p>Now we have updated the PPTX template file. We can save this file in a S3 bucket or we can save this in a file system.<br /><br />This is a very fast and very accurate process to update PPTX files using our custom logics.<br /><br />References:</p>
<ul>
<li><a href="https://python-pptx.readthedocs.io/en/latest/">https://python-pptx.readthedocs.io/en/latest/<br /><br /></a></li>
</ul>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/gayashan-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Gayashan Galagedara
                </h2>
                <small>Associate Technical Lead</small>
              </div>
            </div>
          </div>
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