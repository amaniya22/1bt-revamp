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
    <div id="header" class="sticky clearfix">

      <!-- TOP NAV -->
    <!-- TOP NAV -->
<?php include 'include/nav.php'; ?>
      <!-- /Top Nav -->
      <!-- /Top Nav -->

    </div>

    <!-- SLIDER -->
    <section class="height-400 hidden-xs" id="slider" style="background:url('assets/images/main-home.jpg')">
      <div class="">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>
      <div class="display-table">
        <div class="display-table-cell vertical-align-middle">
          <div class="container">
            <div class="slider-featured-text padding-top-50">
              <h1 class="text-black wow fadeInUp" data-wow-delay="0.4s"> Cloud-enabled
                <span class="text-yellow"> digital transformation </span>
              </h1>
              <h2>Design, implement and manage your new business endeavors <br>at scale with the experts behind leading Amazon and <br>Microsoft cloud solutions.
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="height-200 hidden-md hidden-lg hidden-sm" id="slider" style="background:url('assets/images/home-bg-sm.jpg')">
      <div class="">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>
          </section>
         
            <div class="callout alert alert-transparent noborder noradius hidden-md hidden-lg hidden-sm">

				<div class="text-left">

        <h1 class="text-black wow fadeInUp" data-wow-delay="0.4s">Cloud enabled  <span class="text-yellow">digital transformation</span></h1>
					<h2 class="font-lato size-20">
          Design, implement and manage your new business endeavors at scale with the experts behind leading Amazon and Microsoft cloud solutions.
					</h2>
					
				

				</div>

			</div>


    <!-- /SLIDER -->
    <section class="info-bar info-bar-color grad-5 padding-20">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center padding-bottom-20">
            <h1>After 6 years of touching lives of employees and clients across the world, gearing up for its next phase of growth, Auxenta takes on its new identity – 1 Billion Tech - a cloud-focused cutting-edge software engineering company developing and managing solutions for billions of users worldwide.</h1>
          </div>
          <div class="text-center"><button type="button" class="view-btn btn btn-red center" data-toggle="modal" data-target=".bs-example-modal-sm">LEARN MORE</button></div>
</div>

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
     <p> Auxenta (Pvt) Ltd.  has changed its name to One Billion Tech (Pvt) Ltd. The company has received approval from the Company Registrar. The Certificate of Incorporation will be received in due time.
    
    </p>
    </div>

		</div>
	</div>
</div>




    <section class="alternate">
				<div class="container">
        

					<div class="row">

						<div class="col-lg-4 col-md-4 col-sm-4">
						<a href="product_incubation.php">	<figure class="margin-bottom-30">
								<img class="img-responsive" src="assets/images/product_incubation.jpg" alt="service">
							</figure>

							<h4 class="nomargin-bottom">Product Incubation</h4> <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
						
							<p >Leverage our 90-day MVP offering to realise your concept to reality.</p>
</a>
						
						</div>
          
						<div class="col-lg-4 col-md-4 col-sm-4">
            <a href="CRM_services.php">
							<figure class="margin-bottom-30">
								<img class="img-responsive" src="assets/images/crm.jpg" alt="service">
							</figure>

							<h4 class="nomargin-bottom">CRM</h4> <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
						
							<p >Engage your customers better leveraging the newest trends in CRM.</p>
							</a>
						
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4">
            <a href="cloud_services.php">
							<figure class="margin-bottom-30">
								<img class="img-responsive" src="assets/images/cloud_services.jpg" alt="service">
							</figure>

							<h4 class="nomargin-bottom">Cloud Services</h4> <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
							
							<p>Accelerate your cloud initiatives utilizing best-in-class technologies.</p>

						</a>
						</div>
            <div class="clearfix"></div>
            <div class="text-center"><a href="services.php" class="view-btn btn btn-red">VIEW MORE</a></div>

					</div>

				</div>
			</section>




    <section class="no-margin">
      <div class="container-fluid">

        <header class="text-center margin-bottom-60 section-title">
          <h2> THE COMPANY WE KEEP </h2>
          <h1> OUR CLIENTS</h1>
        </header>
        <div class="col-md-12">
          <div class="text-center">
            <div class="owl-carousel" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
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
                <img class="img-responsive" src="assets/images/clients/C20.png" alt="" width="70%">
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
			<section>
				<div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <h2> OUR BEST WORK YET</h2>
          <h1> BLOG</h1>
        </header>
          
				<div class="row">

	<!-- POST ITEM -->
  <div class="blog-post-item col-md-3 col-sm-6">

<!-- IMAGE -->
<figure class="margin-bottom-20">
  <img class="img-responsive" src="assets/images/CDSA_main.jpg" alt="">
</figure>

<h2><a href="blog_Power_Platform_Analytics_for_Microsoft_Dynamics_365_CE_Part1_Common_Data_Service_Analytics_Part 1.php">Power Platform Analytics for Microsoft Dynamics 365 CE Part 2 - Common Data Service Analytics Part 1</a></h2>



</div>
<!-- /POST ITEM -->

              	<!-- POST ITEM -->
                <div class="blog-post-item col-md-3 col-sm-6">

<!-- IMAGE -->
<figure class="margin-bottom-20">
  <img class="img-responsive" src="assets/images/power_platform_main.jpg" alt="">
</figure>

<h2><a href="blog_Power_Platform_Analytics_for_Microsoft_Dynamics_365_CE_Part1–Capacity.php">Power Platform Analytics for Microsoft Dynamics 365 CE Part 1 – Capacity</a></h2>



</div>
<!-- /POST ITEM -->

          	<!-- POST ITEM -->
            <div class="blog-post-item col-md-3 col-sm-6">

<!-- IMAGE -->
<figure class="margin-bottom-20">
  <img class="img-responsive" src="assets/images/AWS_cross_main.jpg" alt="">
</figure>

<h2><a href="blog_AW_Cross_Account_Access.php">AWS Cross-Account Access
</a></h2>



</div>
<!-- /POST ITEM -->



          	<!-- POST ITEM -->
            <div class="blog-post-item col-md-3 col-sm-6">

<!-- IMAGE -->
<figure class="margin-bottom-20">
  <img class="img-responsive" src="assets/images/HA_main.jpg" alt="">
</figure>

<h2><a href="blog_Handling_Service_Quotas_in.php">Handling Service Quotas in AWS
</a></h2>



</div>
<!-- /POST ITEM -->
        






					
<div class="clearfix"></div>
<div class="text-center"><a href="blog.php" class="view-btn btn btn-red">VIEW MORE</a></div>

</div>

</div>

					
          
        </section>




    <section class="alternate">
      <div class="container-fluid">
        <header class="text-center margin-bottom-60 section-title">
          <h2>LET OUR WORK SPEAK FOR ITSELF </h2>
          <h1>CASE STUDIES</h1>
        </header>

        <div class="col-lg-12">

          <div class="col-md-4">

            <div class="box-image text-center">

              <a href="case_study_symbox.php">
                <img class="img-responsive" src="assets/images/symbox-casestudy.jpg" alt="">
              </a>

              <a href="case_study_symbox.php" class="box-image-title">
                <h2 class="tex-white">End to end testing service</h2>
              </a>

            </div>

          </div>
          <div class="col-md-4">

            <div class="box-image text-center">

              <a href="case_study_assetminder.php">
                <img class="img-responsive" src="assets/images/assetminder-casestudy.jpg" alt="">
              </a>

              <a href="case_study_assetminder.php" class="box-image-title">
                <h2 class="tex-white">Cross-platform fleet management</h2>
              </a>

            </div>

          </div>
          <div class="col-md-4">

            <div class="box-image text-center">

              <a href="case_study_millionspaces.php">
                <img class="img-responsive" src="assets/images/ms-casestudy.jpg" alt="">
              </a>

              <a href="case_study_millionspaces.php" class="box-image-title">
                <h2 class="tex-white">Product incubation</h2>
              </a>

            </div>

          </div>
          <div class="clearfix"></div>
       
            <div class="text-center"><a href="case_studies.php" class="view-btn btn btn-red">VIEW MORE</a></div>


        </div>

      </div>
    </section>


    <section>
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <h2> OUR TECH ARSENAL </h2>
          <h1>TECHNOLOGY STACK</h1>
        </header>

        <ul class="row clients-dotted list-inline">
          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T20.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T9.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T19.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T26.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T27.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T28.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T7.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T12.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T29.png" alt="tech" width="130">
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
            <img class="img-responsive" src="assets/images/tech/T0.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T1.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T3.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T4.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T5.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T6.png" alt="tech" width="130">
          </li>


          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T8.png" alt="tech" width="130">
          </li>


          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T10.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T11.png" alt="tech" width="130">
          </li>



          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T13.png" alt="tech" width="130">
          </li>


          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T14.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T15.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T16.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T17.png" alt="tech" width="130">
          </li>

          <li class="col-md-3 col-sm-3 col-xs-6">
            <img class="img-responsive" src="assets/images/tech/T2.png" alt="tech" width="130">
          </li>

        </ul>
      </div>
    </section>

    <section class="bg-grey">
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <h2> 1 BILLION TECH</h2>
          <h1> HIGHLIGHTS</h1>
        </header>

        <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"3", "autoPlay": false, "navigation": true, "pagination": false}'>
          <div class="img-hover">
            <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">
              <img class="img-responsive" src="assets/images/eric-main.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">1 Billion Tech welcomes new President Erik Sebesta</a>
              <span> <a href="1-Billion-Tech-welcomes-new-President-Erik-Sebesta.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
           
            </a>
          </div>
          <div class="img-hover">
            <a href="auxenta-opens-new-office-dedicated-to-product-innovation.php">
              <img class="img-responsive" src="assets/images/ms-opening.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="auxenta-opens-new-office-dedicated-to-product-innovation.php">Auxenta opens new office dedicated to product innovation</a>
              <span> <a href="auxenta-opens-new-office-dedicated-to-product-innovation.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
           
          </div>
          <div class="img-hover">
            <a href="millionspaces-booking-event-spaces-redefined.php">
              <img class="img-responsive" src="assets/images/MillionSpaces-Homepage.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="millionspaces-booking-event-spaces-redefined.php">MillionSpaces – booking event spaces, redefined</a>

              <span> <a href="millionspaces-booking-event-spaces-redefined.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
           
          </div>
          <div class="img-hover">
            <a href="auxenta-wins-the-best-startup.php">
              <img class="img-responsive" src="assets/images/award.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="auxenta-wins-the-best-startup.php">Auxenta wins the Best Startup of the Year award </a>
              <span> <a href="auxenta-wins-the-best-startup.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
          
          </div>
          <div class="img-hover">
            <a href="auxenta-assestminder-international-award.php">
              <img class="img-responsive" src="assets/images/fleetminder-img.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="auxenta-assestminder-international-award.php">Auxenta’s Assetminder Bags International Innovation Award in Ireland</a>
              <span> <a href="auxenta-assestminder-international-award.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
           
          </div>
         
          <div class="img-hover">
            <a href="former-google-product-marketing-global-head.php">
              <img class="img-responsive" src="assets/images/sanjeev.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="former-google-product-marketing-global-head.php">Former Google product marketing global head takes on advisory role</a>
              <span> <a href="former-google-product-marketing-global-head.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
            
          </div>
          <div class="img-hover">
            <a href="sri-lankan-silicon-valley-firm-auxenta-looks-to-expand-into-apac-region.php">
              <img class="img-responsive" src="assets/images/apac-sillicon-valley.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="sri-lankan-silicon-valley-firm-auxenta-looks-to-expand-into-apac-region.php">Sri Lankan Silicon Valley firm Auxenta looks to expand into APAC region</a>
              <span> <a href="sri-lankan-silicon-valley-firm-auxenta-looks-to-expand-into-apac-region.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
         
          </div>

          <div class="img-hover">
            <a href="silicon-valley-based-auxenta-launch-bitcoin-bazaar.php">
              <img class="img-responsive" src="assets/images/bitcoins.jpg" alt="">
            </a>

            <h5 class="text-left margin-top-20">
              <a href="silicon-valley-based-auxenta-launch-bitcoin-bazaar.php">Silicon Valley based Auxenta Launch ‘Bitcoin Bazaar’</a>
              <span> <a href="silicon-valley-based-auxenta-launch-bitcoin-bazaar.php">
              <i class="fa fa-chevron-right text-red margin-left-10"></i></span>
            </h5>
           
            </a>
          </div>
        </div>
      </div>
    </section>
    <a name="contact"></a>
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