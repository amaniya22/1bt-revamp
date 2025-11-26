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

    <section id="portfolio" class="nopadding-bottom  black-section">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">AI-Powered Space Booking Platform</h1>
              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">MillionSpaces, a product of 1 Billion Tech, is transforming how individuals and businesses discover and book workspaces. Often called the “Airbnb or Uber for workspaces,” MillionSpaces connects users to flexible, on-demand work environments from meeting rooms and coworking desks to private offices and creative studios across Sri Lanka.<br><br>
In a world where hybrid work is here to stay, MillionSpaces bridges the gap between businesses needing space and hosts seeking to maximize utilization all through a seamless, AI-driven platform.
</p>
 <p align="center">
                  <img class="responsive-image" src="assets/images/ms-img.png">
                </p>

                <h3>The Challenge</h3>
                <p class="padding-top-15">With over 1,000+ spaces across multiple categories, the challenge was helping users quickly find the <em>right</em> space that fits their needs without having to browse endlessly or rely on hotline calls.&nbsp;</p>
<p>Additionally, the team wanted to improve:</p>
<ul>
<li>User experience: Simplify how customers discover and compare spaces.</li>
<li>Host engagement: Automate responses and increase bookings.</li>
<li>Operational efficiency: Reduce manual support through smart automation.</li>
</ul></p>
                <h3>The Solution: AI at the Core</h3>
                <p class="padding-top-15">To address these challenges, 1 Billion Tech integrated an AI-powered chatbot , Spacey directly into the MillionSpaces platform.</p>
<p>Spacey, the platform&rsquo;s intelligent virtual assistant, was designed to:</p>
<ul>
<li>Understand user needs through conversational queries (e.g., &ldquo;Find me a meeting room for 5 people in Colombo 05 tomorrow&rdquo;).</li>
<li>Curate personalized recommendations by analyzing preferences such as location, budget, and purpose.</li>
<li>Provide 24/7 instant support, eliminating the need for hotline assistance.</li>
<li>Assist hosts by managing inquiries, confirming availability, and streamlining the booking process.</li>
</ul>
<p>Through Agentic AI capabilities, Spacey not only responds to users but also <em>learns</em> from interactions, becoming smarter over time &mdash; improving accuracy, user satisfaction, and overall platform engagement.</p>
                
                  <h3>The Impacts</h3>
                  <p class="padding-top-15">Since introducing AI-driven discovery, MillionSpaces has seen:</p>
<p>30% faster search-to-booking conversion as users find spaces more efficiently.<br /> 40% reduction in support queries, thanks to Spacey&rsquo;s 24/7 instant assistance.<br /> Higher host engagement, with automated responses improving lead conversions.<br /> Personalized user experiences, resulting in stronger repeat bookings.</p>
<p>By embedding AI into its core, MillionSpaces is not just a workspace marketplace, it's an intelligent ecosystem where technology meets convenience.</p>
                  <h3>The Future</h3>
                 <p>MillionSpaces aims to expand globally, starting with the UK market in 2026, continuing to refine its AI capabilities to enhance predictive booking, pricing intelligence, and space recommendations.</p>
<p>With 1 Billion Tech&rsquo;s expertise in Agentic AI, offshore development, and UI/UX, MillionSpaces is paving the way for the next generation of workspace solutions that are smart, scalable, and AI-powered.</p>
<p>MillionSpaces demonstrates how AI can redefine user experience, automate workflows, and create smarter business outcomes - proving that the future of work isn&rsquo;t just flexible; it&rsquo;s intelligent.</p>

                  <a href="https://millionspaces.com">www.millionspaces.com</a>


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