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
              <h1 class="blog-post-title">Coworking Booking Platform - UX Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap"><p>The professional world has changed and there is a major rise in coworking spaces in the last 10 years. More and more freelancers, small businesses, startups and nonprofits are moving to coworking spaces to enjoy the flexibility and convenience of working in such spaces.<br /><br />CoWorx platform is a marketplace that connects coworking spaces with those seeking an office or coworking space.</p>

                <div class="padding-top-15">
                  <h3>The Challenge</h3>
                  <p>Users spend a lot of time & effort finding the workspaces that suit their needs. Users should be able to find a workspace with good amenities, infrastructure & good ambience. Also users should be able to compare prices of the different spaces.
</p>
<h3>The Solution</h3>
<p>To create a web based platform that connects potential users and hosts, which will  allow users to explore coworking spaces with its prices, amenities and facilities. The platform will provide the ability to book a visit to the space before booking the space (Especially for the long term and large team bookings)</p>
                  <div class="padding-top-15">
                
                    <h3>HOW 1 BILLION TECH HELPED</h3><br>
                    <h3>1.Design Thinking</h3><br>
                    <img class="responsive-image" src="assets/images/design-thinking_img.png">
                    <br>  <br>
                    <h3>2. User Research</h3>
<p>We investigated the target users from Singapore and Sri Lanka to gather insights that will help us in deriving the design process. The objective of the research is to understand their needs, behavior, attitude and pain points.</p>
<h3><strong>1.1.1. Qualitative Analysis</strong></h3>
<p>To get some qualitative insights we ran interviews focussing on people who have used some kind of coworking space in the past or fall under our target audience.</p>
<ul>
<li>What kind of work do you do?</li>
<li>How often do you use a co-working space?</li>
<li>What convinced you to decide on a co-working space over cafes/home/regular offices?</li>
<li>What do you think about the concept of co-working?</li>
<li>How did you find this current co-working space?</li>
<li>Would you like to have all the solutions catering to your problems in a smartphone?</li>
</ul>
<h3><strong>1.1.2. Quantitative Analysis</strong></h3>
<p>To quantify the opinions and behavior of the target audience, we use quantitative data gathering to generate numerical data that can be measured and analyzed. We created a survey using google form and gathered 100 responses. Below are some results from the survey.</p>
<br><img class="responsive-image" src="assets/images/user_research_img.png"><br><br>

<h3>3. User Persona</h3>
<p>Based on the insights obtained from user interviews and surveys, one major user type was defined and a user persona & empathy mapping was created to represent those types of users.
</p><br>
<img class="responsive-image" src="assets/images/user_persona_img.png"><br><br>
<h3>4. Empathy Mapping</h3><br>
<img class="responsive-image" src="assets/images/empathy_mapping_img.png"><br><br>
<h3>Prototyping & Testing</h3><br>
<p>We presented the high fidelity wireframe screens and flows to many users and received the following insights.</p>
<ul>
<li>Some users wanted the option to schedule a visit, to explore the space and facility before committing.</li>
<li>Many users brought up similar questions which we converted to an FAQ page.</li>
<li>The current system only allowed a single booking in one instance. Users wanted the ability to make multiple bookings at a given time.</li>
<li>Users found it difficult to understand how to use promo codes. This process was simplified and made more intuitive.</li>
<li>Aesthetic improvements with regard to transitions, icons, images and animations were added to make the user experience more enjoyable.</li>
</ul>
<h3>Reference</h3><br>
<ol>
<li><a href="https://www.statista.com/topics/5842/smartphones-in-singapore">Mobile Phone Penetration in Singapore: www.statista.com/topics/5842/smartphones-in-singapore/</li>
<li>What are UX Case Studies (IxDF): <a href="https://www.interaction-design.org/literature/topics/ux-case-studies">www.interaction-design.org/literature/topics/ux-case-studies</a></li>
<li>User Persona: <a href="https://www.nngroup.com/articles/persona">www.nngroup.com/articles/persona</a></li>
<li>Empathy Mapping:<a href="https://www.nngroup.com/articles/empathy-mapping">www.nngroup.com/articles/empathy-mapping</a></li>
</ol>
 </div>
                
                
                </div>

              </div>

              <!-- /article content -->

            </div>
          </div>

          <!-- RIGHT -->
          <div class="col-md-4 col-sm-4">
          <div class="box-static box-border-top">

<?php include 'include/casestudy-sidebar.php'; ?>

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