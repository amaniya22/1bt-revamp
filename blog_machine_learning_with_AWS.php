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

                            <h1 class="blog-post-title">Machine Learning with AWS</h1>

                            <br>

                            <!-- article content -->

                            <div class="margin-bottom-80">



                                <p class="dropcap">Machine learning often feels a lot harder than it should be to most developers because the

                                    process to build and train models, and then deploy them into production is too complicated

                                    and too slow. First, you need to collect and prepare your training data to discover which

                                    elements of your data set are important. Then, you need to select which algorithm and

                                    framework you’ll use. After deciding on your approach, you need to teach the model how

                                    to make predictions by training, which requires a lot of compute. Then, you need to tune

                                    the model so it delivers the best possible predictions, which is often a tedious and

                                    manual effort. </p>



                                <p>After you’ve developed a fully trained model, you need to integrate the model with your application

                                    and deploy this application on infrastructure that will scale. All of this takes a lot

                                    of specialized expertise, access to large amounts of compute and storage, and a lot of

                                    time to experiment and optimize every part of the process. In the end, it's not a surprise

                                    that the whole thing feels out of reach for most developers.

                                </p>



                                <p>Amazon SageMaker is a fully-managed platform that enables developers and data scientists

                                    to quickly and easily build, train, and deploy machine learning models at any scale.

                                    Amazon SageMaker removes all the barriers that typically slow down developers who want

                                    to use machine learning.</p>



                                <p>Auxenta is now in the process of building a scalable Machine Learning platform for a large

                                    Sillicon Valley producer, leveraging AWS Sagemaker Machine Learning platform along with

                                    some of the AWS and open source big data platforms such as AWS EMR, Spark, Tensorflow,

                                    SciKit, Apache Atlas and Apache Livy.

                                </p>



                            </div>



                            <!-- /article content -->



                        </div>

                        <div class="row tab-post padding-top-20"><!-- post -->

                            <div class="col-md-2 col-sm-2 col-xs-4">

                             <img src="assets/images/crishantha-blog.jpg" width="90">

                          

                            </div>

                            <div class="col-md-10 col-sm-10 col-xs-8">

                              <h2 class="padding-top-20 size-20">Crishantha Nanayakkara</h2>

                              <small>Director of Technology</small>

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