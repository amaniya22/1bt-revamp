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
    <!-- SLIDER -->
    <section class="height-400 black-section" id="slider" style="background:url('assets/images/main-blog.jpg')">
      <div class="overlay dark-6">
        <!-- dark overlay [0 to 9 opacity] -->
      </div>
      <div class="display-table">
        <div class="display-table-cell vertical-align-middle">
          <div class="container">
            <div class="slider-featured-text padding-top-50">
              <h1 class="text-white wow fadeInUp" data-wow-delay="0.4s"> About
                <span class="text-yellow">1 Billion Tech</span>
              </h1>
              <h2 class="text-white">We work with enterprises, independent software vendors (ISVs), startups and non-profit organizations. Our
                ethos is to enable digital transformation by leveraging a focused set of service offerings
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /SLIDER -->

    <a name="why-1billiontech"></a>
    <section id="" class="black-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-right">
            <img src="assets/images/why-auxenta-left.jpg" class="img-responsive" alt=""> </div>
          <div class="col-sm-6">
            <p>1 Billion Tech is an innovative software engineering services and technology product consulting company headquartered
              in Silicon Valley, USA.
              <br>
              <br> Our global clients are distributed into multiple industry verticals including telco, financial services, logistics,
              security, capital markets, apparel and manufacturing. We believe in a core set of values which are an intrinsic
              part of each of our team members.
            </p>
          </div>
        </div>
      </div>
    </section>
    <a name="bod"></a>
    <section id=""  class="black-section">
      <div class="container">
        <header class="text-center margin-bottom-60 section-title">
          <h1>BOARD OF DIRECTORS</h1>
        </header>
        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
              <div class="box-icon-title">
                <img src="./assets/images/prasath-thumb.png">
                <h2 class="size-30">Prasath Nanayakkara</h2>
                <span>Founder, Chairman & CEO</span>
              </div>
              <p class="size-15">MIT graduate (BS in EE) and MBA holder from INSEAD, France. Former Senior Tech Lead of Kenan Billing Platform – Acquired
                by Lucent for $1B. Former Head of Technology Delivery at Virtusa, a global IT services firm.</p>
            </div>

          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
              <div class="box-icon-title">
                <img src="./assets/images/eric.png">
                <h2 class="size-30">Erik Sebesta</h2>
                <span>President</span>
              </div>
              <p class="size-15">Founder, Chief Architect and Board Member of Cloud Technology Partners, acquired by Hewlett Packard Enterprises in 2017 for 6x revenue. Leads strategy, design and development of new enterprise-class consulting services and products on leading cloud platforms. 
              </p>
            </div>

          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
              <div class="box-icon-title">
                <img src="./assets/images/rizvan.png">
                <h2 class="size-30">Rizwan Virk
                </h2>
                <span>Co founder of Midverse Studios & Gameview Studios</span>
              </div>
              <p class="size-15">Rizwan (Riz) Virk is a successful hi tech entrepreneur, angel investor, bestselling author, video game industry pioneer, and independent film producer.


              </p>
            </div>

          </div>

        </div>
  </div>
  </section>
  <a name="leadership"></a>
  <section id=""  class="black-section">
    <div class="container">
      <header class="text-center margin-bottom-60 section-title">
        <h1>LEADERSHIP TEAM</h1>
      </header>
      <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">

          <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
            <div class="box-icon-title">
              <img src="./assets/images/prasath-thumb.png">
              <h2 class="size-30">Prasath Nanayakkara</h2>
              <span>Founder, Chairman & CEO</span>
            </div>
            <p class="size-15">MIT graduate (BS in EE) and MBA holder from INSEAD, France. Former Senior Tech Lead of Kenan Billing Platform – Acquired
              by Lucent for $1B. Former Head of Technology Delivery at Virtusa, a global IT services firm.
            </p>
          </div>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
                <div class="box-icon-title">
                  <img src="./assets/images/randika.png">
                  <h2 class="size-30">Randika Swaris
                  </h2>
                  <span>Head of Engineering</span>
                </div>
                <p class="size-15">Head of Engineering
Seasoned software specialist with the ability to grasp complex business problems</br></br>
                </p>
              </div>
</div>
       
        

          <div class="clearfix">

        </div>
        
      </div>
  </div></section>
  <a name="advisors"></a>
  <section id=""  class="black-section">
    <div class="container">
      <header class="text-center margin-bottom-60 section-title">
        <h1>ADVISORS</h1>
      </header>
      <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
              <div class="box-icon-title">
                <img src="./assets/images/shahani_markus.png">
                <h2 class="size-30">Shahani Markus</h2>
                <span>Founder of Emojot Inc</span>
              </div>
              <p class="size-15">Shahani Markus has global experience in the IT industry, government and academia in a professional career that has spanned many interesting roles, including being an educator, engineer, entrepreneur, strategist and researcher.
              </p>
            </div>

          </div>

        <div class="col-md-4 col-sm-6 col-xs-12">

          <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
            <div class="box-icon-title">
              <img src="./assets/images/sanjeev.png">
              <h2 class="size-30">Sanjeev Agraval</h2>
              <span>President, Healthcare & CMO at LeanTaaS
              </span>
            </div>
            <p class="size-15">
              Google’s first GLOBAL Head of Product Marketing, Led three successful startups from inception to exit CEO at Aloqa (acquired
              by Motorola), VP Products & Marketing at TellMe Networks (acquired by Microsoft, Founder & CEO at Collegefeed
              (acquired by AfterCollege), Forbes contributor Phi Beta Kappa with an EECS degree from MIT
            </p>
          </div>

        </div>
     
        <div class="col-md-4 col-sm-6 col-xs-12">

          <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
            <div class="box-icon-title">
              <img src="./assets/images/roamal.png">
              <h2 class="size-30">Raomal Perera</h2>
              <span>Co-founder of ISOCOR & Network365</span>
            </div>
            <p class="size-15">
              Veteran of multiple entrepreneurial ventures and an adjunct professor. Irish Software Association (ISA) Award winner, Finalist
              in the Ernst & Young "Entrepreneur of the year" award, Wall street journal innovaation GOLD award, One of 40
              entrepreneurs worldwide chosen to the prestigious World Economic Forum (WEF) as a technology pioneer. He has
              experience in setting up off-shore engineering facilities and having build vast geographical footprint.
            </p>
          </div>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">

<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
  <div class="box-icon-title">
    <img src="./assets/images/rajeev.png">
    <h2 class="size-30">Rajeev Surati, Ph.D.</h2>
    <span>Co founder Flash communication & Scalable Display Technology
    </span>
  </div>
  <p class="size-15">
    A serial entrepreneur and inventor, Rajeev has built several successful technology companies and been granted nine patents
    to date. Vectured world's largest high-end photography community call phono.net, Angel investor for the last
    15 years for Lucid Chart, Uplevel Security, Elemental Machines, Grush, etc., Graduated from Massachusetts
    Institute of Technology
  </p>
</div>

</div>

<div class="col-md-4 col-sm-4 col-xs-12">

<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
  <div class="box-icon-title">
    <img src="./assets/images/soumitra.png">
    <h2 class="size-30">Soumitra Dutta</h2>
    <span>Dean Elect, Said School of Business, Oxford University</span>
  </div>
  <p class="size-15">
  Soumitra Dutta is a Professor of Management and the former founding Dean of the Cornell SC Johnson College of Business at Cornell University, New York. Previously, he was the Anne and Elmer Lindseth Dean of the Johnson Graduate School of Management. Prior to joining Cornell in 2012, he was on the faculty of INSEAD, a leading international business school with campuses in France and Singapore. He is the co-editor and author of the Global Information Technology Report, published by the World Economic Forum and the Global Innovation Index, published by the World Intellectual Property Organization.
  </p>
</div>

</div>

        <div class="clearfix">
        </div>
     
      </div>
  </div></section>
  <a name="offices"></a>
  <section class="black-section">
    <div class="container">
      <header class="text-center margin-bottom-60 section-title">
        <h1>OUR OFFICES</h1>
      </header>

      <div class="col-md-4">

        <div class="box-image text-center">
          <img class="img-responsive" src="assets/images/US_Office.jpg" alt="" />
          </a>

          <a class="box-image-title" href="#">
            <h2>1 Billion Tech Inc.
              <br> 22 Sunnyhill Rd., Emerald Hills, CA 94062-3948
</h2>
          </a>


          <p class="font-lato weight-800">+1 408 607 0461 (USA)</p>
        </div>

      </div>
      <div class="col-md-4">

        <div class="box-image text-center">
          <img class="img-responsive" src="assets/images/SL-Offfice.jpg" alt="" />
          </a>

          <a class="box-image-title" href="#">
            <h2>One Billion Tech (Pvt) Ltd.
              <br> 61, 3rd Level, Janadhipathi Mawatha
              <br> Colombo 1</h2>
          </a>
          <p class="font-lato weight-800">+94 117 112 191 (SL)</p>
        </div>

      </div>

      <div class="col-md-4">

        <div class="box-image text-center">
          <img class="img-responsive" src="assets/images/canada-location.jpg" alt="" />
          </a>

          <a class="box-image-title" href="#">
            <h2>Auxenta Solutions Ltd.
              <br>5577 153A Street, Suite 207 <br>
              Surrey BC V3S 5K7
              <br> Canada</h2>
          </a>
               </div>

      </div>

    </div>
  </section>

  
  <!--<div id="portfolio" class="portfolio-nogutter portfolio-title-over">-->
  <!--<div class="row mix-grid">-->
  <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

  <!--<div class="item-box">-->
  <!--<figure>-->
  <!--<a href="index-mobility.html">-->
  <!--&lt;!&ndash; overlay title &ndash;&gt;-->
  <!--<div class="item-box-overlay-title">-->

  <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->

  <!--<h3 class="dig-med">Mobility Services</h3>-->
  <!--<p></p>-->

  <!--</div>-->
  <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

  <!--<img class="img-responsive grid-item " src="assets/images/grid-mb.jpg" width="600" height="399" alt=""  ></a> </figure>-->
  <!--</div>-->
  <!--</div>-->
  <!--<div class="col-md-3 col-sm-3">-->

  <!--<div class="item-box">-->
  <!--<figure>-->

  <!--<a href="index-QA-service.html">  &lt;!&ndash; overlay title &ndash;&gt;-->
  <!--<div class="item-box-overlay-title">-->
  <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
  <!--<h3 class="mob">Quality Assurance</h3>-->
  <!--<p></p>-->
  <!--</div>-->
  <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

  <!--<img class="img-responsive grid-item " src="assets/images/grid-qa.jpg" width="600" height="399" alt=""  ></a> </figure>-->
  <!--</div></div>-->
  <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

  <!--<div class="item-box">-->
  <!--<figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner">-->

  <!--&lt;!&ndash; details &ndash;&gt;-->
  <!--<a class="ico-rounded"  href="index-SE.html"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>-->

  <!--&lt;!&ndash; overlay title &ndash;&gt;-->
  <!--<a href="index-SE.html">  <div class="item-box-overlay-title">-->
  <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
  <!--<h3 class="seo">Software Engineering</h3>-->
  <!--<p></p>-->
  <!--</div>-->
  <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

  <!--<img class="img-responsive grid-item " src="assets/images/grid-dg.jpg" width="600" height="399" alt=""  ></a> </figure>-->
  <!--</div>-->
  <!--</div>-->
  <!--<div class="col-md-3 col-sm-3">&lt;!&ndash; item &ndash;&gt;-->

  <!--<div class="item-box">-->
  <!--<figure> <span class="item-hover"> <span class="overlay dark-5"></span> <span class="inner">-->

  <!--&lt;!&ndash; details &ndash;&gt;-->
  <!--<a class="ico-rounded"  href="index-SE.html"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a> </span> </span>-->

  <!--&lt;!&ndash; overlay title &ndash;&gt;-->
  <!--<a href="index-CRM.html">  <div class="item-box-overlay-title">-->
  <!--<div class="rdm"><img src="assets/images/ico-rta.png" width="30" height="30" alt=""/> </div>-->
  <!--<h3 class="seo">CRM services</h3>-->
  <!--<p></p>-->
  <!--</div>-->
  <!--&lt;!&ndash; /overlay title &ndash;&gt;-->

  <!--<img class="img-responsive grid-item " src="assets/images/grid-crm.jpg" width="600" height="399" alt=""  ></a> </figure>-->
  <!--</div>-->
  <!--</div>-->
  <!--</div>-->
  <!--</div>-->

  <!--</section>-->

 

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