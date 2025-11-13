<!DOCTYPE html>
<!--[if IE 8]>                  <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>                  <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
<head>
  <?php include 'include/header.php'; ?>
  <title></title>
</head><!--

                AVAILABLE BODY CLASSES:

                

                smoothscroll                    = create a browser smooth scroll

                enable-animation                = enable WOW animations



                bg-grey                                 = grey background

                grain-grey                              = grey grain background

                grain-blue                              = blue grain background

                grain-green                             = green grain background

                grain-blue                              = blue grain background

                grain-orange                    = orange grain background

                grain-yellow                    = yellow grain background

                

                boxed                                   = boxed layout

                pattern1 ... patern11   = pattern background

                menu-vertical-hide              = hidden, open on click

                

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

                                .header-md              = 70px nav height

                                .header-sm              = 60px nav height



                                .noborder               = remove bottom border (only with transparent use)

                                .transparent    = transparent header

                                .translucent    = translucent header

                                .sticky                 = sticky header

                                .static                 = static header

                                .dark                   = dark header

                                .bottom                 = header on bottom

                                

                                shadow-before-1 = shadow 1 header top

                                shadow-after-1  = shadow 1 header bottom

                                shadow-before-2 = shadow 2 header top

                                shadow-after-2  = shadow 2 header bottom

                                shadow-before-3 = shadow 3 header top

                                shadow-after-3  = shadow 3 header bottom



                                .clearfix               = required for mobile menu, do not remove!



                                Example Usage:  class="clearfix sticky header-sm transparent noborder"

                        -->
    <div id="header" class="sticky clearfix">
      <!-- TOP NAV -->
      <?php include 'include/nav.php'; ?><!-- /Top Nav -->
    </div><!-- SLIDER -->
    <section class="height-95" id="slider" style="background:url('assets/images/innerbanner.jpg')">
      <div class="overlay dark-5">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>
      <div class="display-table">
        <div class="display-table-cell vertical-align-middle">
          <div class="container"></div>
        </div>
      </div>
    </section><!-- /SLIDER -->
    <!-- <section class="page-header page-header-xs">
      <div class="container">
        <ol class="breadcrumb breadcrumb-inverse">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="Careers.php">Careers</a>
          </li>
          <li class="active">Senior Business Analyst</li>
        </ol>
      </div>
    </section> -->
    <section id="portfolio" class="nopadding-bottom black-section">
      <div class="container">
        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">
            <div class="careers-left">
              <h1 class="blog-post-title">Senior Business Analyst</h1><!-- article content -->
<h2 class="margin-bottom-20">Key Responsibilities</h2>
              <div class="p-b-20">
                <ul class="list-unstyled list-icons">
                <li><i class="fa fa-angle-double-right"></i>Collaborate with clients and internal stakeholders to gather, analyze, and document business requirements for software development projects.</li>


<li><i class="fa fa-angle-double-right"></i>Translate complex business needs into clear and concise functional specifications, including use cases, user stories, process flows, and data models.</li>


<li><i class="fa fa-angle-double-right"></i>Lead or support requirement workshops, interviews, and discussions with internal and external teams.</li>


<li><i class="fa fa-angle-double-right"></i>Support QA and UAT phases by reviewing test cases and validating deliverables against business requirements.</li>


<li><i class="fa fa-angle-double-right"></i>Facilitate effective communication between business, technical, and QA teams.</li>


<li><i class="fa fa-angle-double-right"></i>Work closely with software developers, designers, and project managers to ensure accurate implementation of requirements.</li>


<li><i class="fa fa-angle-double-right"></i>Analyze existing systems, processes, and workflows to identify areas for improvement and propose innovative solutions.</li>


<li><i class="fa fa-angle-double-right"></i>Act as a liaison between technical and non-technical teams to ensure alignment throughout the project lifecycle.</li>

 </ul>
</div>

<h2 class="margin-bottom-20">Qualifications and Experience</h2>
              <div class="p-b-20">
                <ul class="list-unstyled list-icons">
                <li><i class="fa fa-angle-double-right"></i>Bachelor’s degree in IT, Software Engineering, or a related field.</li>


  <li><i class="fa fa-angle-double-right"></i>Minimum of 5 years’ experience as a Business Analyst in the IT industry.</li>


  <li><i class="fa fa-angle-double-right"></i>Strong understanding of software development methodologies, processes, and lifecycles.</li>


  <li><i class="fa fa-angle-double-right"></i>Excellent analytical and critical thinking skills with the ability to solve complex problems.</li>


  <li><i class="fa fa-angle-double-right"></i>Proven experience in conducting requirement workshops, stakeholder interviews, and requirement analysis.</li>


  <li><i class="fa fa-angle-double-right"></i>Hands-on experience working in Agile/Scrum environments using tools such as JIRA, Confluence, or Azure DevOps.</li>


  <li><i class="fa fa-angle-double-right"></i>Familiarity with recruitment lifecycle processes (e.g., onboarding, offboarding, payroll) is a plus.</li>


  <li><i class="fa fa-angle-double-right"></i>Previous software development experience is an added advantage.</li>


 </ul>
</div>

                        <!-- article content -->
              <h2 class="margin-bottom-20">COMPANY OVERVIEW</h2>
              <p>1 Billion Tech is an innovative software engineering services and technology product consulting company headquartered in Silicon Valley, USA.<br>
              <br>
              Our global clients are distributed into multiple industry verticals including telco, financial services, logistics, security, capital markets, apparel and manufacturing. We believe in a core set of values which is an intrinsic part of each of our team members.</p>
            </div><!-- /article content -->
          </div>
        <!-- RIGHT -->
        <div class="col-md-4 col-sm-4">
          <!-- side navigation -->
          <div class="box-static box-border-top">
            <?php include 'include/careers-sidebar.php'; ?>
          </div>
        </div>
      </div><!-- RELATED -->
    </section>
    <section class="callout-dark heading-title heading-arrow-top">
      <div class="container">
        <div class="text-center">
          <h3 class="size-40 weight-800">Interested in joining our team?</h3>
          <div class="size-30 padding-top-20">
            Please send your resume to <a style="color:#17b8f4" href="mailto:careers@1billiontech.com">careers@1billiontech.com</a>
          </div>
        </div>
      </div>
    </section><!-- FOOTER -->
    <footer id="footer">
      <?php include 'include/footer.php'; ?>
    </footer><!-- /FOOTER ==

        </div>

        <!== /wrapper -->
  </div><!-- /OVERLAY NAVIGATION -->
  <!-- /SIDE PANEL -->
  <!-- SCROLL TO TOP -->
  <a href="#" id="toTop"></a> <!-- JAVASCRIPT FILES -->
   
  <script type="text/javascript">

  var plugin_path = 'assets/plugins/';
  </script> 
  <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script> <!-- REVOLUTION SLIDER -->
   
  <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script> 
  <script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script> 
  <script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script> <!-- SCRIPTS -->
   
  <script type="text/javascript" src="assets/js/scripts.js"></script> <!-- Global site tag (gtag.js) - Google Analytics -->
   
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117187414-1"></script> 
  <script>



        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }

        gtag('js', new Date());



        gtag('config', 'UA-117187414-1');

  </script>
</body>
</html>