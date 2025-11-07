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

                            <h1 class="blog-post-title">Single User Performance Benchmarking</h1>

                                                        <!-- article content -->

                            <div class="margin-bottom-50">
                                <h2>Single User Performance Benchmarking using Headless Chrome, Node, NPM, Puppeteer, Lighthouse, Shell scripting and Jenkins.</h2></br>
                            <h3><b>Part 1</b></h3></br>
<p>Implementing automated single-user performance testing, also known as benchmarking, was a dream goal that was postponed due to unforeseen technical difficulties. Some obstacles were the scripting of the web scenarios and scheduled execution. If you have limited understanding of test automation or scripting languages, you cannot create a proper flow to mimic the user scenario. However, nowadays we are talking about&nbsp;<strong>low code</strong>&nbsp;/ <strong>no code</strong>&nbsp;mechanisms to implement automation as end customers and with ISV partners also trying to add their own scenarios to the test suite.</p>
<p>Through this blog, we will describe the way we can do this in a practical way with the help of Google recorder, NPM, Puppeteer Reply, Lighthouse, Shell scripting, and Jenkins.&nbsp;</p>
<p>To make it more accessible, I have divided the content into 2 parts.</p>
<p>In Part 1, there are 5 main steps.</p>
<h3><b>Step 1: Record the User Flow with Google Recorder tool.</b></h3></br>

<p>1. Open the Dev Tools &gt; Recorder&nbsp;</p>

<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_1.jpg"></p>
<p>2. Create a new recoding.</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_2.jpg"></p>
<p>3. Create the scenario by Start recording (make sure to open your web site)</p>

<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_3.jpg"></p>

<p>4. Go through the user flow and Stop.</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_4.jpg"></p>
<p>5. Now you have the script with the timeout value (here it is 5000ms). This will be the benchmark we have to use later.  You need to reply and see the correctness of the script. </p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_5.jpg"></p>
<p>6. Then, Export it as a JSON file.</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_6.jpg"></p>
<h3><b>Step 2: Install Node.js and latest NPM.</b></h3></br>

<p>1. Download Node and install</p>

<p><br />From here: <a href="https://nodejs.org/en/download">https://nodejs.org/en/download</a> you can download the installer according to your platform. Since I am using a mac, I did the following:</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_7.jpg"></p>

<p>Or use Node version manager like&nbsp;<a href="https://github.com/nvm-sh/nvm">nvm</a>&nbsp;to install Node.js</p>
<ol start="2">
<li>Now open the Terminal or CMD and type &lsquo;node &ndash;v&rsquo; to check the version of the node.</li>
</ol>
<ol start="3">
<li>Then install NPM latest by running the &lsquo;npm install -g npm&rsquo; command and then run &lsquo;npm &ndash;v&rsquo; to see the npm version. NPM is the Node Package Manager.</li>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_8.jpg"></p>
</ol>
<h3><b>Step 3: Install Puppeteer and Puppeteer Replay.</b></h3></br>
<p>Puppeteer is&nbsp;a Node library that provides a high-level API to control&nbsp;headless&nbsp;Chrome or&nbsp;Chromium. Puppeteer Reply is also a library that provides an API to replay and stringify recordings created using&nbsp;Chrome DevTools Recorder. Open the terminal and do the following:</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_9.jpg"></p>
<h3><b>Step 4: Run .JSON script using headless and headful modes.</b></h3></br>
<p>Now open the Terminal or CMD again and type the following and run</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_10.jpg"></p>
<p><br />Then it will run in a headless mode and give us the results, as seen below. So, this is not controlled.</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_11.jpg"></p>
<p>This means the scenario we recoded is successfully executed and each step is executed within 5000ms. 
     Below you can see the failed execution after we changed it to 500ms.
</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_12.jpg"></p>
<p>We can do this by changing the timeout property in .JSON file. </p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_13.jpg"></p>
<p>2. Apply headless and headful command control.</p>
<p>Now let&rsquo;s control the headless and headful by adding, &lsquo;PUPPETEER_HEADLESS=true/false&rsquo; command.&nbsp;</p>
<p>Headless</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_14.jpg"></p>

<p>Headful &ndash; Here the chromium browser is getting opened, execute the flow and close the browser automatically. Here we can see the execution.</p>

<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_15.jpg"></p>

<h3><b>Step 5: Creating a shell script to send an email and create the lighthouse front end report.</b></h3></br>
<ol start="1">
<li>Start the script with &lsquo;#!/bin/bash.&rsquo;</li>
</ol>
<ol start="2">
<li>Import data to a report.</li>
</ol>

<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_16.jpg"></p>

<p>Here all the outputs are saved in the CartPerfReport file.</p>
<ol start="3">
<li>Cascade data to an email and send it.</li>
</ol>

<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_17.jpg"></p>

<p>Here, using&nbsp;the &lsquo;cat&rsquo; command you are concatenating&nbsp;the file data to the email body. Then, set the subject and the email you need.</p>
<ol start="4">
<li>Now run the lighthouse script to generate the front-end rules-related report which is vital for optimizing the front-end performance.</li>

</ol>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_18.jpg"></p>

<p>In this command, the coffee cart site is running headless and only the &lsquo;Performance&rsquo; category will be executed in normal mode. Other than the performance category there are a few like &lsquo;Accessibility&rsquo;, &lsquo;SEO&rsquo;, etc.</p>
<p>So, the final shell script (CartPerfTest.sh) is as follows. This can be executed parodically or for a commit using Jenkins (or any other CI). How to schedule this in Jenkins CI will be discussed in Part 2.</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_19.jpg"></p>


<p>Run .sh file in the terminal:</p>
<p><img class="responsive-image" src="assets/images/Single_User_Performance_Benchmarking_20.jpg"></p>
                            </div>



                            <!-- /article content -->



                        </div>

                        <div class="row tab-post padding-top-20"><!-- post -->

                            <div class="col-md-2 col-sm-2 col-xs-4">

                             <img src="assets/images/anushka-thumb.png" width="90">

                          

                            </div>

                            <div class="col-md-10 col-sm-10 col-xs-8">

                              <h2 class="padding-top-20 size-20">Anushka Shehan Wickramaratne</h2>

                              <small>Head of Quality Assurance

                           </small>

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