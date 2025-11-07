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
              <h1 class="blog-post-title">Android Things
               </h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <h2>Introduction</h2><br />
                <p class="dropcap">The Global Mobile Trends 2017 Report [2] confirms that three quarters of the
                  population is now connected to the Internet via mobile phones. The Internet of things (IoT) is the
                  network of physical devices, vehicles, home appliances, and other items embedded with electronics,
                  software, sensors, actuators, and connectivity which enables these things to connect, collect and
                  exchange data [5]. The IoT concept was first introduced by Kevin Ashton, co-founder of the Auto-ID
                  Center at MIT when he wanted to present the idea of radio frequency ID (RFID) to Procter &amp; Gamble
                  (P&amp;G) in 1999 [6].</p>
                <p>The &ldquo;things&rdquo; may include smart devices, sensors, analytical data, <strong>vehicle</strong>
                  diagnostic systems data, weather reports, health monitors, etc. It may be your smart home,
                  surveilling your home, checking your doors, managing your lighting, watering your plants, monitoring
                  your health, reading your heartbeat, detecting your sleep patterns and notifying you when to wake up.</p>
                <p>But the concept of IoT is simple. It&rsquo;s a large stream of data that provide us information of
                  what is going on around us. The IoT platform consumes the data, integrates the information and
                  provides very meaningful information to the end-users. </p>
                <p>Imagine your car is an IoT device. What will it do differently? First, let&rsquo;s think about how
                  it would be today, without IoT.</p>
                <p>You will keep a track of your service records, mileage and be mindful of scheduled maintenance. No
                  one will know when the next fault will arise, and your repairs will then be reactive. In other words,
                  you will do a repair only when you notice that your car is not doing right.</p>
                <p>But imagine the car you used was an IoT compatible car. It would know when the service is due, it
                  will keep track of your service records, it can even initiate preventive maintenance. When you take
                  your car to the service station, it could even be ready for your service. The IoT network can
                  communicate what needs to be replaced and can ensure that the required spare parts are ordered and
                  ready when the car is sent for service.</p>
                <p>Imagine, your fridge was an IoT device, it would know what&rsquo;s in it, and it will know what
                  items are running low. It can even notify you about the things you need to buy, and if you&rsquo;ve
                  enabled auto purchasing, it will order the stuff online and the items would be at your door step
                  within hours.</p>
                <p>When technology advances, processors become cheaper, integrating smart features become more and more
                  affordable, and IoT gets integrated into our lives. </p>
                <h2>What is &ldquo;Android Things&rdquo;?
                </h2><br/>
                <p>In terms of Google, Google&rsquo;s IoT solutions make it easy to build connected devices. If anyone
                  wants to create a smart device, there are a few steps that need to be completed beforehand. These
                  steps basically convert this whole flow into a simple process in just a few minutes. With that,
                  developers can focus on the real development directly. On top of this, if developers want to connect
                  to Google services or need a turnkey hardware solution, Google provides that with a way to create
                  secure and innovative products.</p>
                <p>Android Things, which is formally known as <em>Project Brillo,</em> provides a rich platform to
                  develop IoT solutions over a prototype or a system onboard a hardware platform, which is based on an
                  existing Android stack. It provides an OS built on the power, ease, and security of Android and
                  certified hardware to get you from prototype to production quickly. Because it's based on Android,
                  you get access to Android APIs, Google services, and Android developer tools (see Figure 1).</p>
                <p align="center">
                  <img src="assets/images/android-things-figure1.jpg">
                </p>
                <p>
                  Android Things uses most of the Android components with additional APIs provided by the <em>Things
                    Support</em> Library, which lets you integrate new types of hardware not found on mobile devices.</p>
                <p>Developing apps for embedded devices is different from mobile in a few important ways such as: </p>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>More flexible access to hardware peripherals and drivers
                    than mobile devices </li>
                  <li><i class="fa fa-angle-double-right"></i>System apps are not present to optimize startup and
                    storage requirements </li>
                  <li><i class="fa fa-angle-double-right"></i>Apps are launched automatically on startup to immerse
                    your users in the app experience</li>
                  <li><i class="fa fa-angle-double-right"></i>Devices expose only one app to users, instead of multiple
                    like with mobile devices</li>
                </ul>

                <h2>Supported Hardware </h2><br />
                <p>The Android Things hardware platform support can basically divide into two pathways, namely
                  production and development. </p>
                <p>Production System-on-Modules (SoMs) are fully supported for production use cases and SoMs are
                  certified by Google to meet security requirements. Android Things&rsquo; stability and security
                  updates will be available for a minimum of 3 years on all production SoMs. The following table will
                  show SoMs currently supported by Google (see Table 1).</p>
                <p align="center"><img src="assets/images/android-things-figure2.jpg"></p>
                <p align="center">
                  Table 1: Source : <a href="https://developer.android.com/things/hardware/" target="blank">www.developer.android.com/things/hardware</a>
                  </p>
                <p>Development platforms are provided to enable prototyping and testing. They do not meet Google's
                  security standards and may not receive stability and security updates. Google will continue to
                  provide feature updates to ensure that you can develop on these platforms and seamlessly port your
                  code over to a production platform. Table 2 shows the development platforms currently supported.</p>
                <p align="center"><img src="assets/images/android-things-figure3.jpg"></p>
                <p align="center">
                  Source : <a href="https://developer.android.com/things/hardware/" target="blank">www.developer.android.com/things/hardware</a>
                 </p>

                <h2>Privacy and Security </h2><br />
                <p>IoT allows a lot of &ldquo;things&rdquo; to be interconnected to a single point, but as the number
                  of devices increase, it increases the points of vulnerability on the system. In 2016, ForeScout
                  Technologies, a company specializing in IoT Security &amp; Device Visibility, released a report
                  taking seven commonly used IoT devices, that included smart fridges, connected printers and
                  IP-connected security systems. The report conveyed alarming information about the security of these
                  devices. Most devices could be hacked within 3 minutes. Being able to be hacked in 3 minutes triggers
                  a high security risk for these commercially available devices.</p>
                <p>Just imagine your IoT device being hacked and it has a camera or a microphone. Your video feeds and
                  voice feeds could be all over the Internet. Imagine your smart home being hacked. Doors will start to
                  open, lights will start to blink, and only the hackers will know what your smart home&rsquo;s next
                  move will be!</p>
                <p>IoT brings you great convenience, but it needs to be secured properly. Any vulnerabilities could be
                  very costly to the IoT industry.</p>
                <h2>References</h2><br/>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Android Things Official web site: <a href="https://developer.android.com/things/" target="blank">www.developer.android.com/things</a></li>
                  <li><i class="fa fa-angle-double-right"></i>Global Mobile Trends 2017, GSMA Intelligence Report, September 2017: <a href="https://www.gsmaintelligence.com/research/?file=3df1b7d57b1e63a0cbc3d585feb82dc2&download " target="blank">www.gsmaintelligence.com</a></li>
                  <li><i class="fa fa-angle-double-right"></i>Android Developer Blog: <a href="https://android-developers.googleblog.com/search/label/Android%20Things" target="blank">www.android-developers.googleblog.com</a></li>
                  <li><i class="fa fa-angle-double-right"></i>IBM IoT Blog: <a href="https://www.ibm.com/blogs/internet-of-things/" target="blank">www.ibm.com</a></li>
                  <li><i class="fa fa-angle-double-right"></i>What is IoT: <a href="https://en.wikipedia.org/wiki/Internet_of_things" target="blank">www.en.wikipedia.org</a></li>
                  <li><i class="fa fa-angle-double-right"></i>Meet Kevin Ashton, the man behind the Internet of Things: <a href="https://www.campaignlive.co.uk/article/meet-kevin-ashton-man-behind-internet-things/1291707" target="blank">www.campaignlive.co.uk</a></li>
                  <li><i class="fa fa-angle-double-right"></i>Project Brillo: <a href="https://www.sdxcentral.com/products/google-android-things-project-brillo/" target="blank">www.sdxcentral.com</a></li>
                </ul>
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/kasun-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Kasun De Silva

                </h2>
                <small>Associate Tech Lead
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