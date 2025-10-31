<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <?php include 'include/header.php'; ?>
</head>

<!--
    AVAILABLE BODY CLASSES:
    
    smoothscroll      = create a browser smooth scroll
    enable-animation    = enable WOW animations

    bg-grey         = grey background
    grain-grey        = grey grain background
    grain-blue        = blue grain background
    grain-green       = green grain background
    grain-blue        = blue grain background
    grain-orange      = orange grain background
    grain-yellow      = yellow grain background
    
    boxed           = boxed layout
    pattern1 ... patern11 = pattern background
    menu-vertical-hide    = hidden, open on click
    
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
        .header-md    = 70px nav height
        .header-sm    = 60px nav height

        .noborder     = remove bottom border (only with transparent use)
        .transparent  = transparent header
        .translucent  = translucent header
        .sticky     = sticky header
        .static     = static header
        .dark     = dark header
        .bottom     = header on bottom
        
        shadow-before-1 = shadow 1 header top
        shadow-after-1  = shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2  = shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3  = shadow 3 header bottom

        .clearfix   = required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
      -->
    <div id="header" class="sticky clearfix black-header">

      <!-- TOP NAV -->
      <!-- TOP NAV -->
      <?php include 'include/nav.php'; ?>
      <!-- /Top Nav -->
      <!-- /Top Nav -->

    </div>


    <section id="slider-container" class="slide-mobile">
      <div class="container">
        <div class="slide-container">
          <div class="slide slide-row">
            <div class="video-background">
              <video allowfullscreen="allowfullscreen" src="./assets/videos/banner-video.mp4" autoplay loop muted playsinline style="max-width: 100%"> </video>
            </div>

            <div class="slide-main slide-text-overlay">
              <div class="slide-text-div slide-sec-1">
                <div class="slider-title-div">
                  <p class="slider-title">
                    <span class="slider-title-red">AI Meets</span> Engineering Excellence,
                  <p>
                  <p class="slider-subtitle">Delivering Innovation At Speed<p>
                </div>
              </div>
              <div class="slide-text-div slide-sec-2">
                <p class="slider-content">With AI-driven automation and Agentic Development, we transform ideas into intelligent, scalable products, built for agility and precision.</p>
                <button class="slider-content-btn">Book a consultation call</button>
              </div>
            </div>
          </div>
        </div>
        <div class="slide-main">
          <div class="slide slide-row">
            <div class="slide-text-div">
              <p class="slider-title">
                Microsoft Dynamics</br> GYDE365</p>
              <p class="slider-content">Our team boasts ample experience in Microsoft
                Dynamics GYDE365, ensuring our clients receive
                expert support for their business needs.</p>
            </div>
          </div>
        </div>

        <div class="slide-main">
          <div class="slide slide-row">
            <div class="slide-text-div">
              <p class="slider-title">
                Product development</br>
                AWS, Azure</p>
              <p class="slider-content">We offer end-to-end product development
                services on AWS and Azure, leveraging our expertise
                to help clients scale and succeed in the cloud.</p>
            </div>
          </div>
        </div>

        <div class="slide-main">
          <div class="slide slide-row">
            <div class="slide-text-div">
              <p class="slider-title">
                What our</br>
                Clients Say</p>
              <p class="slider-content">Check out our client testimonials to see
                how we've helped them achieve their goals
                and exceed their expectations.</p>
            </div>
          </div>
        </div>

        <div class="slide-main">
          <div class="slide slide-row">
            <div class="slide-text-div">
              <p class="slider-title">
                Life at</br>
                1BillionTech</p>
              <p class="slider-content">Life at 1 BillionTech is vibrant and fulfilling.
                Our inclusive culture, cutting-edge tech, and career
                development opportunities make it unique.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation dots -->
      <div class="dots-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </section>



    <!-- Small Modal >-->

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">

          <!-- header modal -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <!-- body modal -->
          <div class="modal-body">
            <p> Auxenta (Pvt) Ltd. has changed its name to One Billion Tech (Pvt) Ltd. The company has received approval from the Company Registrar. The Certificate of Incorporation will be received in due time.

            </p>
          </div>

        </div>
      </div>
    </div>




    <section class="alternate service-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 ">
            <div class="border-bottom">
              <a href="product_incubation.php">
                <figure class="margin-bottom-30">
                  <img class="img-responsive" src="assets/images/ai-main.png" alt="service">
                </figure>

                <h4 class="nomargin-bottom">AI Driven Product Incubation</h4>
                <!-- <i class="fa fa-chevron-right text-red margin-left-10"></i> -->
                </span>

                <p class="nomargin-bottom-p">Leverage our AI based MVP offering to realise your concept to reality.</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 ">
            <div class="border-bottom">
              <a href="CRM_services.php">
                <figure class="margin-bottom-30">
                  <img class="img-responsive" src="assets/images/crm.png" alt="service">
                </figure>

                <h4 class="nomargin-bottom">Microsoft D365</h4> 
                <!-- <i class="fa fa-chevron-right text-red margin-left-10"></i> -->
              </span>

                <p class="nomargin-bottom-p">Engage your customers better leveraging the newest trends in Microsoft D365.</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="border-bottom">
              <a href="cloud_services.php">
                <figure class="margin-bottom-30">
                  <img class="img-responsive" src="assets/images/cloud_services.png" alt="service">
                </figure>

                <h4 class="nomargin-bottom">Cloud Services</h4> 
                <!-- <i class="fa fa-chevron-right text-red margin-left-10"></i> -->
              </span>

                <p class="nomargin-bottom-p">Accelerate your cloud initiatives utilizing best-in-class technologies.</p>

              </a>
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- <div class="text-center"><a href="services.php" class="view-btn btn btn-red">VIEW MORE</a></div> -->

        </div>

      </div>
    </section>

    <section class="no-margin clients-section">
      <div class="container-fluid">

        <header class="text-center margin-bottom-60 section-title">
          <p class="sub-heading"> The Company We Keep </p>
          <h1 class="weight-400"> <span class="font-red">OUR</span> CLIENTS</h1>
        </header>
        <div class="col-md-12">
          <div class="text-center">
            <div class="owl-carousel" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
              <div>
                <img class="img-responsive margin-top-25" src="assets/images/clients/cnew-01.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive margin-top-25" src="assets/images/clients/cnew-02.png" alt="" width="70%">
              </div>
                           <div>
                <img class="img-responsive margin-top-30" src="assets/images/clients/cnew-04.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive margin-top-20" src="assets/images/clients/cnew-05.png" alt="" width="40%" style="border-radius: 0px;">
              </div>
              <div>
                <img class="img-responsive margin-top-35" src="assets/images/clients/cnew-06.png" alt="" width="60%">
              </div>
              <div>
                <img class="img-responsive margin-top-35" src="assets/images/clients/cnew-07.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C1.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C2.png" alt="" width="70%%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C3.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C4.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C5.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C6.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C7.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C8.jpg" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C8.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C9.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C9.jpg" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C10.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C11.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C12.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C13.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C14.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C15.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C16.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C16.jpg" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C17.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C18.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C19.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C21.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C22.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C23.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C24.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C25.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C26.png" alt="" width="70%">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/C27.png" alt="" width="70%">
              </div>
            </div>
          </div>
        </div>

        <!--
          controlls-over    = navigation buttons over the image
          buttons-autohide  = navigation buttons visible on mouse hover only

          data-plugin-options:
              "singleItem": true
              "autoPlay": false (or ms. eg: 4000)
              "navigation": true
              "pagination": true
      -->

      </div>
    </section>




    <!-- -->
    <section class="blog-section">
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <p class="sub-heading"> OUR BEST WORK YET </p>
          <h1 class="weight-400"> BLOG</h1>
        </header>

        <div class="row">

          <!-- POST ITEM -->
          <div class="blog-post-item col-md-3 col-sm-6">

            <!-- IMAGE -->
            <a href="blog_How_testers_should_deal_with_GDPR.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/face-rec-main.png" alt="img">
              </figure>
            </a>

            <!-- <h2><a href="blog_How_testers_should_deal_with_GDPR.php" class="weight-400">How testers should deal with GDPR
              </a></h2> -->



          </div>
          <!-- /POST ITEM -->



          <!-- POST ITEM -->
          <div class="blog-post-item col-md-3 col-sm-6">

            <!-- IMAGE -->
            <a href="blog_Lambda_layers_with_NodeJS.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/Amazon_aurora_main.png" alt="img">
              </figure>
            </a>

            <!-- <h2><a href="blog_Lambda_layers_with_NodeJS.php" class="weight-400">Lambda layers with NodeJS
              </a></h2> -->



          </div>
          <!-- /POST ITEM -->

          <!-- POST ITEM -->
          <div class="blog-post-item col-md-3 col-sm-6">

            <!-- IMAGE -->
            <a href="blog_GitHub_Workflows_For_Test_Automation.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/artifical-main.png" alt="img">
              </figure>
            </a>
<!-- 
            <h2><a href="blog_GitHub_Workflows_For_Test_Automation.php" class="weight-400">Amazon Aurora Serverless

              </a></h2> -->



          </div>
          <!-- /POST ITEM -->

          <!-- POST ITEM -->
          <div class="blog-post-item col-md-3 col-sm-6">

            <!-- IMAGE -->
            <a href="blog_Developing_an_authentication_service_using_face_recognition.php">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/Amazon_aurora_main.png" alt="img">
              </figure>
            </a>

            <!-- <h2><a href="blog_Developing_an_authentication_service_using_face_recognition.php" class="weight-400">Developing an authentication service using face recognition

              </a></h2> -->



          </div>
          <!-- /POST ITEM -->


          <div class="clearfix"></div>

        </div>

      </div>



    </section>


    <section class="technology-section">
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <p class="sub-heading"> OUR TECH ARSENAL </p>
          <h1><span class="font-red">TECHNOLOGY</span> STACK</h1>
        </header>

        <ul class="row clients-dotted list-inline">
          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T01.png" alt="tech" width="130px">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T02.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T03.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T04.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T05.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T06.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T07.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T08.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T09.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T10.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T11.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T12.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T13.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T14.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T15.png" alt="tech" width="75">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T16.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T17.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T18.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T19.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T20.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T21.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T22.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T23.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T24.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T25.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T26.png" alt="tech" width="75">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T27.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T28.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T29.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T30.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T31.png" alt="tech" width="75">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T32.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6 border-left-none-icon border-bottom-none-icon">
            <img class="img-responsive" src="assets/images/tech/T33.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6 border-bottom-none-icon">
            <img class="img-responsive" src="assets/images/tech/T34.png" alt="tech" width="130">
          </li>
        </ul>
      </div>
    </section>


    <section class="alternate case-studies-section">
      <div class="container">
        
        <div class="col-lg-12">
        <div class="col-md-6">
        <header class="text-left margin-bottom-60 section-title">
          <p class="sub-heading"> LET OUR WORK SPEAK FOR ITSELF </p>
          <h1><span class="font-red">CASE</span> STUDIES</h1>
        </header>
        </div>
        <div class="col-md-6 ">
          <p class="case-study-title">At 1BillionTech, we don't just build solutions—we deliver measurable business impact. Our case studies demonstrate how our expertise in AI-driven automation, cloud modernization, and enterprise solutions transforms complex challenges into competitive advantages for our clients. See the strategies, technologies, and results that define our partnerships.</p>
        </div>
        <div class="col-lg-12">

          <div class="col-md-6">

            <div class="box-image text-left">

              <a href="case_study_symbox.php">
                <img class="img-responsive" src="assets/images/symbox-casestudy.webp" alt="">
              </a>

              <a href="case_study_symbox.php" class="box-image-title">
                <h2 class="weight-600">End to end testing service</h2>
                <h5 class="weight-400">A UK-based consultancy working with financial services institutions and business leaders.</h5>
                <span class="font-red font-italic weight-600 text-underline">Read Full Study</span>
              </a>

            </div>

          </div>
          <div class="col-md-6">

            <div class="box-image text-left">

              <a href="case_study_assetminder.php">
                <img class="img-responsive" src="assets/images/assetminder-casestudy.webp" alt="">
              </a>

              <a href="case_study_assetminder.php" class="box-image-title">
                <h2 class="weight-600">Cross-platform fleet management</h2>
                <h5 class="weight-400">A UK-based consultancy working with financial services institutions and business leaders.</h5>
                <span class="font-red font-italic weight-600 text-underline">Read Full Study</span>
              </a>

            </div>

          </div>
          <div class="col-md-6">

            <div class="box-image text-left">

              <a href="case_study_millionspaces.php">
                <img class="img-responsive" src="assets/images/ms-casestudy.webp" alt="">
              </a>

              <a href="case_study_millionspaces.php" class="box-image-title">
                <h2 class="weight-600">Product incubation</h2>
                <h5 class="weight-400">A UK-based consultancy working with financial services institutions and business leaders.</h5>
                <span class="font-red font-italic weight-600 text-underline">Read Full Study</span>
              </a>

            </div>

          </div>
          <div class="clearfix"></div>

          <div class="text-center"><a href="case_studies.php" class="view-btn btn btn-red">VIEW MORE</a></div>


        </div>

      </div>
    </section>


   

    <section class="bg-light highlight-section">
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <p class="sub-heading"> LET OUR WORK SPEAK FOR ITSELF </p>
          <h1 class="weight-400"><span class="font-red">1BT</span> HIGHLIGHTS</h1>
        </header>
        <div class="col-md-12">
          <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"2", "autoPlay": false, "navigation": false, "pagination": false}'>
            <div class="img-hover mr-10">
              <!-- <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">
                <img class="img-responsive" src="assets/images/zoe-highlights-thumb.jpg" alt="">
              </a> -->

              <h5 class="text-left margin-top-20 highlights">
                <a href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php">1 Billion Tech and ZoeInsights team up to revolutionize how patients track their health data</a>
                <!-- <span> <a href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php">
                    <i class="fa fa-chevron-right text-red margin-left-10"></i></span> -->
              </h5>

              </a>
            </div>
            <div class="img-hover ml-10">
              <!-- <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">
                <img class="img-responsive" src="assets/images/eric-main.webp" alt="">
              </a> -->

              <h5 class="text-left margin-top-20 highlights">
                <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">1 Billion Tech welcomes new President Erik Sebesta</a>
                <!-- <span> <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">
                    <i class="fa fa-chevron-right text-red margin-left-10"></i></span> -->
              </h5>

              </a>
            </div>

          </div>
        </div>
      </div>

    </section>

    <a name="contact"></a>
    <!-- FOOTER -->
    <footer id="footer" class="black-footer">
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
  <script type="text/javascript">
    var plugin_path = 'assets/plugins/';
  </script>
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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-117187414-1');
  </script>

  <!-- Slider container -->
  <!-- <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    let slideshowInterval = setInterval(function() {
      plusSlides(1);
    }, 5000);

    function plusSlides(n) {
      clearInterval(slideshowInterval);
      showSlides(slideIndex += n);
      slideshowInterval = setInterval(function() {
        plusSlides(1);
      }, 5000);
    }

    function currentSlide(n) {
      clearInterval(slideshowInterval);
      showSlides(slideIndex = n);
      slideshowInterval = setInterval(function() {
        plusSlides(1);
      }, 5000);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > 5) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = 5
      }
      for (i = 0; i < 5; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < 5; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "flex";
      dots[slideIndex - 1].className += " active";
    }
  </script> -->
  <script>
    $(document).ready(function() {
      // Initialize the slider
      let currentSlide = 0;
      let totalSlides = $(".slide-main").length;

      // Show the first slide and set the first dot as active
      $(".slide-main:first").show();
      $(".dot:first").addClass("active");

      // Function to show a specific slide
      function showSlide(index) {
        $(".slide-main").hide();
        $(".slide-main:eq(" + index + ")").fadeIn();
        $(".dot").removeClass("active");
        $(".dot:eq(" + index + ")").addClass("active");
      }

      // Automatic slider interval
      let interval = setInterval(function() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
      }, 5000); // Change the interval as needed

      // Click event for navigation dots
      $(".dot").click(function() {
        clearInterval(interval); // Stop the automatic slider when a dot is clicked
        currentSlide = $(this).index();
        showSlide(currentSlide);
      });
    });
  </script>


</body>

</html>