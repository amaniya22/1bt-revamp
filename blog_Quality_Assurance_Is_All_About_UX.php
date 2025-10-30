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

                            <h1 class="blog-post-title">Quality Assurance Is All About UX</h1>

                                                        <!-- article content -->

                            <div class="margin-bottom-50">
                            <p><img class="responsive-image" src="assets/images/qa-ux1.jpg"></p>
                            <p>User Experience is a buzzword these days as the stakeholders discuss it other than requirement readiness. This field is famous for quite a sometime but due to the agile transformation, there were a lot of changes related to methodologies, practices, and the thinking pattern of the software people, especially designers.</p>
<p>However, I feel UX is misunderstood by many parties as we have separated it from core development without knowing the <strong>BIG PICTURE</strong>. Because the main purpose of user experience engineering is to deliver an excellent service, make users happy, and generate faith. Or in other words, not only complies with the requirements but should also be a fit for use.</p>
<p>Fit for use in the sense, the users should be able to do their tasks efficiently and effectively without wasting time and money. If they have to wait for something without a proper indication or cannot perform the task due to a failure, then the customers will be disappointed. So, those users will be fatal because they will go and tell others about their experience, and eventually the popularity will be decreased, the hits will be very low and maybe that will be the end.</p>
<p>In this article, I want to emphasize one factor in which we can make a difference. That is QA is all about UX. In the following diagram you can see that the UX is a very broad area:</p>
<p><img class="responsive-image" src="assets/images/qa-ux2.jpg"></p>

<p>In today&rsquo;s world, we are working directly with product owners and stakeholders to get their requirements. This is a better move than requirements coming from a 3rd party dealing with the customer. Hence, this is a good chance to get the advantage of making awareness about the real user experience factors rather than worrying about only the UI, Colors, etc.</p>
<p>Let's pitch like this. According to what I have experienced during my 15+ years of work, the above User Experience components can be categorized into the following types:</p>
<p><img class="responsive-image" src="assets/images/qa-ux4.jpg"></p>
<p>According to the diagram, the first area is related to the UI/UX engineers of the project. They need to make sure that the website should be designed according to the user's expectations and standards. For example, if we create a website for Scandinavian countries, they have a different color set and unique thinking patterns which we need toadhere to. In today&rsquo;s world, if we say UX, everybody thinks about this part. In my opinion that is wrong.</p>
<p>In the second part, Business Analysts, Developers, and Quality Assurance Engineerss have a big part to ensure the functional and non-functional user experience. How come functional and non-functional areas related to user experience? What is the relationship? This is what most people do not understand. That is why there will be no attention to performance, security, and accessibility in the early stage of the development life cycle. So, quality engineering ensures functional and non-functional user expectations and improves the experience. Now let&rsquo;s have a look at how exactly this works.</p>
<p><strong>Functional User Experience:</strong></p>
<p>In an application, the priority should go to functionality. I will take Adding items to a shopping cart as my user story. Let's say this functionality is not working properly and customers can add only one item to their shopping cart. You can see that the user experience is ruined and there will be very less purchases on that day. Finally, users are not satisfied and there will be a lot of customer complaints. To fix this issue in the application, we need to check the root cause and the quality process to understand why it is not being developed correctly and tested. So the point is that functionality is directly affected by User Experience (UX).</p>
<p><strong>Non Functional User Experience:</strong></p>
<p>Even though the priority should go to the functional areas, some of the big issues come from the nonfunctional components of the application. For example, in my previous project, we had to spend 2 weeks finding the problem due to a performance issue. Fortunately, we were able to, but at a cost. Some experts say that nonfunctional requirements or problems are not clear enough and it&rsquo;s like a hidden part of the iceberg. Hence user experience in nonfunctional areas is crucial and we need to spend more time on it.</p>
<p><img class="responsive-image" src="assets/images/qa-ux3.jpg"></p>
<p><strong><em>Security:</em></strong></p>
<p>Let's say due to a weak password validation mechanism, an unauthorized user entered the system and deleted some valuable information. Now some of the real users cannot access the application as their login data is missing in the system or the page content is changed. So this triggers a huge impact on the user experience (UX) and it is bad for the reputation. Sometimes, an entire business can be collapsed within a few days due to such incidents. Hence, all the engineers need to concentrate on the security aspect and need to learn how to apply security standards in the development and testing process.</p>
<p><strong><em>Performance:</em></strong></p>
<p>During the peak time of the day, if some of the regular customers cannot log in to the site due to a performance issue, it will lead to a big loss in reputation and business growth. This is a common situation on the Sri Lankan GOV websites. But, if it is a service for a certain cost or an online banking site, we have to face many problems from the users. Even though it is a performance issue immediately, it is impacting the user experience and trust. Hence, we should look at these nonfunctional areas from the beginning of the production cycle rather wait till the very last moment.</p>
<p>On this blog post I will not be discussing about the other nonfunctional factors like accessibility, reliability, maintainability, etc., but those components are also big pieces of the UX puzzle. Therefore, when you get the requirements from the customers, you need to check the SLAs (Service Level Agreements), Domain, User groups, etc., of the application to get an better understanding of what they need. And you need to encourage the shift left testing (testing from the requirements gathering phase) to make sure the product&rsquo;s quality at the early stage of the SDLC. I mean early code walkthroughs, reviews, performance testing, and security testing. Then we can catch a lot of critical issues without involving much cost.</p>
<p>Finally, even though we have divided it into several areas such as Unit Testing, Developer Testing, Manual testing, Test Automation, Security Engineering, Performance Engineering, etc., User Experience (UX) is the <strong>MOTHER OF ALL</strong>. Hence, all the UI, BA, Dev, and QA Engineers should first think from the user perspective before designing the technical landscape. In other words, we all should play the role of <strong>UX Engineers.</strong></p>

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