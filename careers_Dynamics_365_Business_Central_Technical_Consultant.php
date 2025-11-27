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
          <li class="active">Dynamics 365 Business Central Developer / Technical Consultant</li>
        </ol>
      </div>
    </section> -->
    <section id="portfolio" class="nopadding-bottom black-section">
      <div class="container">
        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">
            <div class="careers-left">
              <h1 class="blog-post-title">Dynamics 365 Business Central Technical Consultant</h1><!-- article content -->

<h2 class="margin-bottom-20">Key Responsibilities</h2>
              <div class="p-b-20">
                <ul class="list-unstyled list-icons">
                <li><i class="fa fa-angle-double-right"></i>3rd Line Escalation Support: Troubleshoot and resolve complex technical issues escalated from L1/L2 teams, work with functional consultants and infrastructure teams to close critical issues.</li>
<li><i class="fa fa-angle-double-right"></i>Scoping of Development CRs: Engage with clients to gather development-related business needs, assess feasibility, technical dependencies, and risks. Break down requirements into technical design documents, collaborate with the functional team for complete scope definition.</li>
<li><i class="fa fa-angle-double-right"></i>Estimation and DevOps Preparation: Provide detailed estimates for development CRs. Document scope, risks, and dependencies, create and manage DevOps work items through the delivery lifecycle.</li>
<li><i class="fa fa-angle-double-right"></i>Delivery of Development CRs: Execute full lifecycle: development, testing (including automated), documentation, and deployments across environments, work closely with QA and functional teams to validate the delivery, ensure timely and quality ticket closure.</li>
<li><i class="fa fa-angle-double-right"></i>Best Practice Technical Reviews: Audit environments and code to ensure alignment with Microsoft best practices, recommend performance optimizations and refactoring where applicable.</li>
<li><i class="fa fa-angle-double-right"></i>Technical Leadership and Mentoring: Provide guidance to team members, enforce development standards, contribute to architectural decisions, and foster a culture of continuous improvement through knowledge sharing and mentoring.</li>
</ul>
</div>

<h2 class="margin-bottom-20">Qualifications</h2>
              <div class="p-b-20">
                <ul class="list-unstyled list-icons">
                <li><i class="fa fa-angle-double-right"></i>Experience with full CR lifecycle in BC DevOps context.
 <li><i class="fa fa-angle-double-right"></i>Ability to work closely with functional and client teams to convert user needs into technical deliverables.
 <li><i class="fa fa-angle-double-right"></i>Strong estimation and documentation skills for client-facing outputs.
 <li><i class="fa fa-angle-double-right"></i>5+ Years previous experience.

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