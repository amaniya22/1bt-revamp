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
      <div class="container-fluid custom-container">
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
            <div class="video-background">
              <video allowfullscreen="allowfullscreen" src="./assets/videos/banner-video.mp4" autoplay loop muted playsinline style="max-width: 100%"> </video>
            </div>
            <div class="slide-text-overlay">
              <div class="slide-text-div slide-sec-1">
                <div class="slider-title-div">
                  <p class="slider-title">
                    <span class="slider-title-red">AI-Driven</span> <span class="slider-2-title-l-red">Product</span> Incubation
                  <p>
                  <p class="slider-subtitle text-wrap">Achieve up to a 40% acceleration in time to market.<p>
                </div>
              </div>
              <div class="slide-text-div slide-sec-2">
                <p class="slider-content">Leverage our AI-based 90-day MVP program to turn your concept into reality.<br /> <br /> If you’re looking to test new ideas quickly with minimal time and investment, our AI-driven MVP offering is designed for you.</p>
                <button class="slider-content-btn">Read More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="slide-main">
          <div class="slide slide-row">
            <div class="video-background">
              <video allowfullscreen="allowfullscreen" src="./assets/videos/banner-video.mp4" autoplay loop muted playsinline style="max-width: 100%"> </video>
            </div>
            <div class="slide-text-overlay">
              <div class="slide-text-div slide-sec-1">
                <div class="slider-title-div">
                  <p class="slider-title">
                    <span class="slider-title-blue">Microsoft</span> <span class="slider-2-title-l-blue">Dynamics</span> GYDE365
                  <p>
                  <p class="slider-subtitle">Empowering Digital Transformation<p>
                </div>
              </div>
              <div class="slide-text-div slide-sec-2">
                <p class="slider-content">Our team brings extensive experience in Microsoft Dynamics GYDE365, delivering expert support and tailored solutions to meet your unique business needs.</p>
                <button class="slider-content-btn">Read More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="slide-main">
          <div class="slide slide-row">
            <div class="video-background">
              <video allowfullscreen="allowfullscreen" src="./assets/videos/banner-video.mp4" autoplay loop muted playsinline style="max-width: 100%"> </video>
            </div>
            <div class="slide-text-overlay">
              <div class="slide-text-div slide-sec-1">
                <div class="slider-title-div">
                  <p class="slider-title">
                    Product development <span class="slider-title-red">AWS, Azure</span>
                  <p>
                  <p class="slider-subtitle">Your Partner in Cloud Excellence<p>
                </div>
              </div>
              <div class="slide-text-div slide-sec-2">
                <p class="slider-content">We offer end-to-end product development services on AWS and Azure, leveraging our expertise to help clients scale and succeed in the cloud.</p>
                <button class="slider-content-btn">Read More</button>
              </div>
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
      <div class="container-fluid custom-container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 ">
            <div class="border-bottom">
              <a href="product_incubation.php">
                <figure class="margin-bottom-30">
                  <img class="img-responsive" src="assets/images/ai-main.png" alt="service">
                </figure>

                <h4 class="margin-bottom-20">AI Driven Product Incubation</h4>
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

                <h4 class="margin-bottom-20">Microsoft D365</h4> 
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

                <h4 class="margin-bottom-20">Cloud Services</h4> 
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
      <div class="container-fluid custom-container">

        <!-- <header class="text-center margin-bottom-60 section-title">
          <p class="sub-heading"> The Company We Keep </p>
          <h1 class="weight-400"> <span class="font-red">OUR</span> CLIENTS</h1>
        </header> -->
        <div class="row">
          <div class="text-center">
            <div class="owl-carousel" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
          
              <div>
                <img class="img-responsive" src="assets/images/clients/c1.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c2.jpg" alt="icon">
              </div>
               <div>
                <img class="img-responsive" src="assets/images/clients/c3.jpg" alt="icon" >
              </div>
             
              <div>
                <img class="img-responsive" src="assets/images/clients/c4.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c5.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c6.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c7.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c8.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c9.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c10.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c11.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c12.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c13.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c14.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c15.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c16.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c17.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c18.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c19.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c20.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c21.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c22.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c23.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c24.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c25.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c26.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c27.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c28.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c29.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c30.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c31.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c32.jpg" alt="icon" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/clients/c33.jpg" alt="icon" >
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
    <hr class="separator"/>
    <section class="testimonial-highlights-section testimonial-section">
    <div class="custom-container container">
        <header class="section-header text-center margin-bottom-60 section-title">
            <h1 class="heading-main weight-400"><span class="testimonial-color font-red">WHAT OUR</span> CLIENTS SAY</h1>
            <p class="sub-heading">Discover how our clients have achieved their business<br/> goals and exceeded expectations
            </p>
        </header>

        <div class="row">
            <div id="testimonialSlidesContainer" 
                 class="owl-carousel owl-padding-10 buttons-autohide controlls-over slides-container"
                            data-plugin-options='{
                  "singleItem": false, 
                  "items": 2, 
                  "autoPlay": true, 
                  "navigation": true, 
                  "pagination": true,
                   "dots": true,
                  "responsive": {
                      "0": {"items": 1, "margin": 30},
                      "768": {"items": 2, "margin": 10}
                  }
              }'>                 
               <div class="slide-item">
                    <div class="testimonial-card">
                       
                        <div class="card-content">
                            <div class="profile-header">
                                <div class="profile-icon"> <img src="assets/images/client-icon.png" alt="icon" class="icon"></div> 
                                <div class="profile-info">
                                    <p class="name">Shaneel Pathak</p>
                                    <p class="title">CEO and Cofounder, ZoeInsights</p>
                                </div>
                            </div>
                            <p class="quote">
                                Since 2019, our collaboration with 1 Billion Tech led to launching our SaaS health platform. Their dedicated team, managed efficiently, demonstrated commitment and critical thinking, fostering a trusted relationship.
                            </p>
                        </div>
                        <div class="image-overlap-area">
                            <img src="assets/images/Shaneel.png" alt="Shaneel Pathak" class="profile-image">
                        </div>

                    </div>
                </div>

                <div class="slide-item">
                    <div class="testimonial-card">
                        
                        <div class="card-content">
                            <div class="profile-header">
                            <div class="profile-icon"> <img src="assets/images/client-icon2.png" alt="icon" class="icon"></div> 
                            <div class="profile-info">
                                    <p class="name">Deepa Sureka</p>
                                    <p class="title">Founder, My Kora Life</p>
                                </div>
                            </div>
                            <p class="quote">
                            Since 2019, our collaboration with 1 Billion Tech led to launching our SaaS health platform. Their dedicated team, managed efficiently, demonstrated commitment and critical thinking, fostering a trusted relationship.                        </div>

                        <div class="image-overlap-area">
                            <img src="assets/images/Deepa.png" alt="Jane Doe" class="profile-image">
                        </div>

                    </div>
                </div>
               
                </div>
        
              </div>
   
            </div>
</section>


    <!-- -->
    <section class="blog-section">
      <div class="container-fluid custom-container">
        <header class="section-header text-center margin-bottom-60 section-title">
            <h1 class="heading-main weight-400"><span class="testimonial-color font-red">Podcast</span> hub</h1>
            <p class="sub-heading">Featuring Conversations that Build the Future!
            </p>
        </header>

        <div class="row" gutter="40">
                    <!-- POST ITEM -->
                    <div class="blog-post-item col-md-4 col-sm-6">
            <!-- <figure class="margin-bottom-20 embed-responsive embed-responsive-16by9" 
                    style="border-radius: 15px; overflow: hidden;"> 
                    </figure> -->
                    <a href="https://www.youtube.com/watch?v=vIUIj80at4E&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=2">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast1.png" alt="img" target="_blank">
              </figure>
            </a>
          </div>
          <!-- /POST ITEM -->

          <!-- POST ITEM -->
          <div class="blog-post-item col-md-4 col-sm-6">
          <a href="https://www.youtube.com/watch?v=Wf7vDVz9Tvo&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=1" target="_blank">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast2.png" alt="img">
              </figure>
            </a>
          </div>
          <!-- /POST ITEM -->
          <!-- POST ITEM -->
          <div class="blog-post-item col-md-4 col-sm-6">
          <a href="https://www.youtube.com/watch?v=-ijBw5Mz5nE&list=PLyf5MDnlR2xDSjEv0HWwhs7XtB32L8kOa&index=3" target="_blank">
              <figure class="margin-bottom-20">
                <img class="img-responsive" src="assets/images/podcast3.png" alt="img">
              </figure>
            </a>
                    </div>

          <div class="clearfix"></div>

        </div>

      </div>



    </section>


    <section class="technology-section">
      <div class="container-fluid custom-container">
        <header class="text-center margin-bottom-40 section-title">
          <!-- <p class="sub-heading"> OUR TECH ARSENAL </p> -->
          <h1><span class="font-red">TECHNOLOGY</span> STACK</h1>
        </header>

        <div class="row">
          <div class="text-center">
            <div class="owl-carousel tech-carousel-div" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech1.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech2.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech3.jpg" alt="tech">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech4.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech5.jpg" alt="tech">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech6.jpg" alt="tech">
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech7.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech8.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech9.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech10.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech11.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech12.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech13.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech14.jpg" alt="tech" >
              </div>
              <div>
                <img class="img-responsive" src="assets/images/tech/tech15.jpg" alt="tech" >
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="alternate case-studies-section">
      <div class="container-fluid custom-container">
        
        <div class="row">
        <div>
        <header class="text-left margin-bottom-20 section-title">
          <!-- <p class="sub-heading"> LET OUR WORK SPEAK FOR ITSELF </p> -->
          <h1><span class="font-red">CASE</span> STUDIES</h1>
        </header>
        </div>
        <!-- <div class="col-md-6 ">
          <p class="case-study-title">At 1BillionTech, we don't just build solutions—we deliver measurable business impact. Our case studies demonstrate how our expertise in AI-driven automation, cloud modernization, and enterprise solutions transforms complex challenges into competitive advantages for our clients. See the strategies, technologies, and results that define our partnerships.</p>
        </div> -->
        <div class="col-lg-12 case-study-content">
          <div class="col-md-12 col-lg-6 case-section-item">

            <div class="box-image text-left">

              <a href="case_study_ideapoint.php">
                <img class="img-responsive" src="assets/images/ideapoint-casestudy.jpg" alt="img">
              </a>

              <a href="case_study_ideapoint.php" class="box-image-title">
                <div>
                  <h2 class="weight-600">Accelerating Enterprise Software Development with AI</h2>
                  <h5 class="weight-400">Through a strategic multi-year partnership, 1BT provided end-to-end development support to IdeaPoint,</h5>
                </div>
                <span class="font-red font-italic weight-600 text-underline">Read Full Study</span>
              </a>

            </div>

          </div>
          <div class="col-md-12 col-lg-6 case-section-item">

            <div class="box-image text-left">

              <a href="case_study_millionspaces.php">
                <img class="img-responsive" src="assets/images/ms-casestudy.png" alt="icon">
              </a>

              <a href="case_study_millionspaces.php" class="box-image-title">
                <div>
                  <h2 class="weight-600">MillionSpMillionSpaces – Redefining Workspace Booking with AI
                  </h2>
                  <h5 class="weight-400">Find and book the perfect workspace with MillionSpaces</h5>
                </div>
                <span class="font-red font-italic weight-600 text-underline">Read Full Study</span>
              </a>

            </div>

          </div>
          <div class="clearfix"></div>


        </div>

      </div>
    </section>


   

    <section class="bg-light highlight-section">
      <div class="container-fluid custom-container">
        <header class="text-center margin-bottom-20 section-title">
          <!-- <p class="sub-heading"> LET OUR WORK SPEAK FOR ITSELF </p> -->
          <h1 class="weight-400"><span class="font-red">1BT</span> HIGHLIGHTS</h1>
        </header>
        <div class="col-md-12 slider-wrapper">
          <div id="highlightSlidesContainer" class="owl-carousel owl-padding-10 buttons-autohide controlls-over slides-container" data-plugin-options='{"singleItem": true, "items":"1", "autoPlay": true, "navigation": false, "pagination": false}'>
            <div class="img-hover mr-10 slide-item">
              <div class="text-right">
                <img class="img-responsive" src="assets/images/highlights-img-1.png" alt="icon" width="60%">
              </div>

              <div class="text-left margin-top-20 highlights">
                <!-- <a href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php">The VelocentAI Framework</a> -->
                <!-- <span> <a href="1-Billion-Tech-and-ZoeInsights-team-up-to-revolutionize-how-patients-track-their-health-data.php">
                    <i class="fa fa-chevron-right text-red margin-left-10"></i></span> -->

                <!-- <p>Meet VelocentAI — an agentic AI framework that transforms Agile development into an intelligent, self-optimizing process. Smarter decisions. Faster builds. Limitless evolution.</p> -->
                <div class="box-image-title">
                  <h2 class="weight-600 text-underline">The VelocentAI Framework</h2>
                  <h5 class="weight-400">Meet VelocentAI, an agentic AI framework that transforms Agile development into an intelligent, self-optimizing process. Smarter decisions. Faster builds. Limitless evolution.</h5>
                </div>
                <a href="/The_VelocentAI_Framework.php" class="font-red font-italic weight-600 text-underline">Read Full Article</a>
              </div>

              </a>
            </div>
          </div>
        </div>

        <!-- <div class="slider-controls">
          <button id="prevBtn" class="slider-btn left-arrow">
            <img src="./assets/images/slider-left-btn.svg" />
          </button>
          <button id="nextBtn" class="slider-btn right-arrow">
            <img src="./assets/images/slider-right-btn.svg" />
          </button>
        </div> -->
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

    document.addEventListener('DOMContentLoaded', () => {
      const slidesContainer = document.getElementById('highlightSlidesContainer');
      const slides = slidesContainer.querySelectorAll('.slide-item');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');

      const itemsPerView = 2; // Show 2 slides at a time
      let currentIndex = 0;

      slidesContainer.style.transition = 'transform 0.5s ease-in-out';
      slidesContainer.style.display = 'flex';
      slidesContainer.style.overflow = 'hidden';
      slidesContainer.style.flexWrap = 'nowrap'; 

      // Helper function to handle button state (disable + opacity)
      function setButtonState(button, disabled) {
        button.disabled = disabled;
        button.style.opacity = disabled ? '0.5' : '1';
        button.style.cursor = disabled ? 'not-allowed' : 'pointer';
      }

      // Function to calculate slide width dynamically
      function getSlideWidth() {
        const slide = slides[0];
        const style = getComputedStyle(slide);
        const margin = parseFloat(style.marginLeft) + parseFloat(style.marginRight);
        return slide.offsetWidth + margin;
      }

      // Function to update the slider position
      function updateSlider() {
        const slideWidth = getSlideWidth();
        const maxIndex = slides.length - itemsPerView;

        currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));

        const offset = -(slideWidth * currentIndex);
        slidesContainer.style.transform = `translateX(${offset}px)`;

        // Update button states
        setButtonState(prevBtn, currentIndex === 0 || slides.length <= itemsPerView);
        setButtonState(nextBtn, currentIndex >= maxIndex || slides.length <= itemsPerView);
      }

      // Button click handlers
      prevBtn.addEventListener('click', () => {
        currentIndex--;
        updateSlider();
      });

      nextBtn.addEventListener('click', () => {
        currentIndex++;
        updateSlider();
      });

      // Initialize slider and button states
      updateSlider();
    });

  </script>


</body>

</html>