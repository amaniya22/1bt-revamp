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

              <h1 class="blog-post-title">1 Billion Tech welcomes new President Erik Sebesta</h1>

              <br>

              <!-- article content -->

              <div class="margin-bottom-80">

               <p class="dropcap">

                The Board of Directors of Silicon Valley  based 1 Billion Tech Inc. (formerly Auxenta Inc.) announced that Erik Sebesta will be joining the company as a board member effective 21st of September, 2020. Erik will also function as the President of the Board, driving the corporate strategy. 
<br><br>
Erik is a parallel entrepreneur with multiple successful startups in the USA. He is a visionary and practical executive leader with 25+ years in planning, funding, designing, implementing, testing, selling, launching and operating secure user-friendly technology solutions to improve people's lives.
<br><br>
Erik was a Co-founder, Chief Architect and Board Member of Cloud Technology Partners, acquired by Hewlett Packard Enterprises in 2017 for 6x revenue. Previously, he was the former National Principal Architect with Cambridge Technology Partners, acquired by Novell. 
<br><br>
Graduate of Williams college, Erik’s technical specialty includes building, marketing and selling secure, distributed, large scale, mission-critical cloud SaaS products and applications.  He enjoys building successful and fun teams to implement and deploy highest value initiatives on-time and on-budget. 
<br><br>
Team 1 Billion Tech is excited to welcome Erik to our rapidly growing organization. We look forward to an exciting journey ahead!

                </p>

                <div>

                  <div id="disqus_thread"></div>

                  <script>

                    /**

                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 

                     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 

                     *  PLATFORM OR CMS.

                     *  

                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 

                     *  https://disqus.com/admin/universalcode/#configuration-variables

                     */

                    /*

                    var disqus_config = function () {

                        // Replace PAGE_URL with your page's canonical URL variable

                        this.page.url = PAGE_URL;  

                        

                        // Replace PAGE_IDENTIFIER with your page's unique identifier variable

                        this.page.identifier = PAGE_IDENTIFIER; 

                    };

                    */



                    (function () {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW

                      var d = document, s = d.createElement('script');



                      // IMPORTANT: Replace EXAMPLE with your forum shortname!

                      s.src = 'https://auxenta.disqus.com/embed.js';



                      s.setAttribute('data-timestamp', +new Date());

                      (d.head || d.body).appendChild(s);

                    })();

                  </script>

                  <noscript>

                    Please enable JavaScript to view the

                    <a href="https://disqus.com/?ref_noscript" rel="nofollow">

                      comments powered by Disqus.

                    </a>

                  </noscript>





                </div>







              </div>



              <!-- /article content -->



            </div>

          </div>



         <!-- RIGHT -->

         <div class="col-md-4 col-sm-4">



            <!-- side navigation -->

            <div class="box-static box-border-top">


             

            <div class="item-box">

<div class="item-box-desc">

  <h4>

    <a class="size-16" href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php" target="_blank">1 Billion Tech and ZoeInsights team up to revolutionize how patients track their health data</a>

  </h4>

  <a href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php" target="_blank" class="btn btn-xs btn-bordered">

    <span class="margin-right-6 size-14">READ ARTICLE</span>

    <i class="fa fa-angle-double-right"></i>

  </a>

</div>



</div>


<div class="item-box">

<div class="item-box-desc">

<h4>

<a class="size-16" href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php" target="_blank">1 Billion Tech welcomes new President Erik Sebesta</a>

</h4>

<a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php" target="_blank" class="btn btn-xs btn-bordered">

<span class="margin-right-6 size-14">READ ARTICLE</span>

<i class="fa fa-angle-double-right"></i>

</a>

</div>



</div>




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