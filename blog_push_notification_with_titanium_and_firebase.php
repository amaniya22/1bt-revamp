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
              <h1 class="blog-post-title">Push Notifications with Titanium and Firebase</h1>

              <!-- article content -->
                
              <div class="margin-bottom-80">
                <p class="dropcap">
                  In this blog, I hope to give you a basic knowledge on how to implement push notifications with appcelerator titanium and firebase. Firebase is a platform that offers various services for both mobile and web applications that help developers build apps, with many features, quickly.To send notifications, we will use the service called Cloud Messaging, which allows a user to send messages to any device using HTTP requests. </p><p>To send push notifications, Appcelerator Mobile Backend Services rely on Google Cloud Messaging (GCM) or Firebase Cloud Messaging for Android applications, and Apple Push Notification (APN) service for iOS applications. Firebase Cloud Messaging (FCM) is the new version of GCM. To use these services in your Titanium application, you first need to enable either FCM or GCM or APN for your application, and then configure Mobile Backend Services with information about your push service. This guide walks you through the process of creating and configuring push services for your application.
                </p>
                <br>
                  <p style="text-transform: uppercase;"><strong>How to setup a project to send and receive push notifications</strong></p>
 <h2>Setup Titanium Studio</h2>
<p>01. Open Titanium Studio<br>
02. Create new project - At the top of the screen click on File > New > Mobile App Project > Alloy > Default Alloy Project then click next</p>
<ul>
  <li>● When creating a new application in Appcelerator Studio, make sure the Enable Appcelerator Services checkbox is enabled</li>
</ul>

<img src="assets/images/push-nofitication-with-titanium-and-firebase-1.jpg" class="img-responsive" style="width: 60%;">

<ul><br>
<li>● For a previously created project, open your tiapp.xml file, then click the Enable Services button under the Appcelerator Services section</li>
</ul>

<img src="assets/images/push-nofitication-with-titanium-and-firebase-2.jpg" class="img-responsive" style="width: 60%;">


<br><br>
 <h2>Update manifest</h2>
<p>Merge the following keys to the <android> section of the tiapp.xml in order to use Google Cloud Messaging (GCM).</p>

<script src="https://gist.github.com/kaumadie/96e0d957664d275b64e6c5bc2314ec42.js"></script>
<br><br>
<h2>Setup Firebase</h2>                                                                                                                                                            <p><p>First of all, you need to have a <a href="https://console.firebase.google.com/u/0/?pli=1" target="_blank">Firebase</a> account and you’ll need to create a new project within it. </p>
<p>How to create firebase account and project :</p>
<a href="https://help.appsheet.com/manage/white-label-native-apps/creating-a-firebase-account" target="_blank" style="color:#5858f9">https://help.appsheet.com/manage/white-label-native-apps/creating-a-firebase-account</a><br><br>


<p>Then select your <strong>project</strong> and go to <strong>Project settings</strong> > click <strong>Add Firebase to your Android app</strong> > enter Android package name > tap <strong>Register app</strong> button > download the <code>google-services.json</code> file.</p>

<p>Note : follow similar steps to Add Firebase to an iOS app and download <code>GoogleService-Info.plist</code>  file</p>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-4.jpg" class="img-responsive" style="width: 100%;"><br><br>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-5.jpg" class="img-responsive" style="width: 100%;"><br><br>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-6.jpg" class="img-responsive" style="width: 100%;"><br><br>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-7.jpg" class="img-responsive" style="width: 100%;"><br><br>

<h2>Requirements to implement push notifications to your Alloy project</h2>
<p>01. Android: Download the <code>google-services.json</code> from your project and copy it to <code>Resources</code> (classic) or <code>app/assets/android</code> (Alloy)</p>
  <img src="assets/images/push-nofitication-with-titanium-and-firebase-8.jpg" class="img-responsive" style="width: 50%;"><br><br> 
<p>02. iOS: Download the <code>GoogleService-Info.plist</code> and copy it to <code>Resources</code> (classic) or <code>app/assets/iphone</code> (Alloy)</p>          <img src="assets/images/push-nofitication-with-titanium-and-firebase-9.jpg" class="img-responsive" style="width: 50%;"><br><br> 
                  <p>03. Download the core-module <a href="https://github.com/hansemannn/titanium-firebase-core/releases" target="_blank">titanium-firebase-core</a></p>
<p>04. Download the Cloud Messaging <a href="https://github.com/hansemannn/titanium-firebase-cloud-messaging/releases" target="_blank">titanium-firebase-cloud-messaging</a> </p>
<p>05. iOS: Titanium SDK 6.3.0+ </p>
<p>06. Android: Titanium SDK 7.0.0+ and <a href="https://github.com/appcelerator-modules/ti.playservices" target="_blank">Ti.PlayServices</a> </p>
<p><strong>Note:</strong> How to add modules to your project will be described in the below section of the blog.</p>
<p>For a push notification to reach the user, the user (or device) must be subscribed to receive push notifications on one or more notification channels. The application must also obtain a device token, which permits Mobile Backend Services to communicate with the push service provider (Google Cloud Messaging, Firebase Cloud Messaging or Apple Push Notification). This guide explains how to obtain a device token and how to use the Push Notifications API to manage your user's notification subscriptions.</p><br>
<p style="text-transform: uppercase;"><strong>Obtaining a device token</strong></p>
<h2>Need of a device token</h2>
<p>When sending a <strong>push notification</strong>, the server <strong>uses tokens</strong> as “addresses” to deliver it to the correct <strong>devices</strong>. In your app, <strong>you</strong> would now send this <strong>token</strong> to your server so that <strong>it</strong> could be saved and later <strong>used</strong> for sending notifications.</p>
<p>To receive push notifications, your application first needs to obtain a device token. To obtain a device token:</p>
<ul>
<li>● On Android, call the CloudPush module's retrieveDeviceToken() method or firebase.cloudmessaging module’s registerForPushNotifications() method</li>
<li>● On iOS, call the Titanium.Network.registerForPushNotifications()</li>
</ul>
<p>Once your application has obtained a device token it should save it for later use.</p>
<p style="text-transform: uppercase;"><strong>Obtaining a device token on Android</strong></p>
<p>To obtain a device token from GCM or FCM, first you need to add the CloudPush module to your project. This module is included with the Titanium SDK, but is not included by default in new projects.</p>
<p><strong>To add the CloudPush module to your project:</strong></p>
<p> In Studio, open your project's tiapp.xml file.<br>
  In the Modules section, click the add (+) button.</p>
 <img src="assets/images/push-nofitication-with-titanium-and-firebase-10.jpg" class="img-responsive">
 <p>  Select <strong>ti.cloudpush</strong> and click <strong>OK.</strong></p>
 <img src="assets/images/push-nofitication-with-titanium-and-firebase-11.jpg" class="img-responsive"><br><br>
  <img src="assets/images/push-nofitication-with-titanium-and-firebase-12.jpg" class="img-responsive"><br><br>
<p><strong>Note</strong> : Similarly, add other modules to implement push notifications.<br>
<strong>Modules</strong> : ti.cloudpush, ti.cloud, ti.playservices</p>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-13.jpg" class="img-responsive"><br><br>

<p> <strong>To add the downloaded modules to your project:</strong></p>
<p><strong>Downloaded Modules :</strong>  firebase.cloudmessaging, firebase.core</p>
<p>
1. Extract the downloaded zip files<br>
2.  Put the <strong>modules</strong> folder in the root of your application so it is on the same level as <strong>tiapp.xml</strong></p>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-14.jpg" class="img-responsive" style="width: 50%;"><br><br>
 <p>
3.  Double-click on the <strong>tiapp.xml</strong> file<br>
4.  In the right-hand column, click the + to add a new module. It will show you a list of modules available in your global directory and in your project.<br>
5.  Select modules (firebase.cloudmessaging, firebase.core) and click <strong>ok</strong><br>
</p>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-15.jpg" class="img-responsive" style="width:100%;"><br><br>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-16.jpg" class="img-responsive"><br><br>

<p style="text-transform: uppercase;"><strong>Setup Appcelerator cloud console</strong></p>
<h2>Configuring push services for Android devices</h2>
<p>Once you've created a Google API project with FCM or GCM enabled, you need to update your application's settings page in the <a href="https://platform.appcelerator.com/" target="_blank">Dashboard</a> with the API key and sender ID that you generated.</p>
<p>Getting started with the appcelerator Dashboard : </p>
<p><a href="https://docs.appcelerator.com/platform/latest/#!/guide/Appcelerator_Dashboard_Getting_Started-section-src-53873222_AppceleratorDashboardGettingStarted-Learn" target="_blank">https://docs.appcelerator.com/platform/latest/#!/guide/Appcelerator_Dashboard_Getting_Started-section-src-53873222_AppceleratorDashboardGettingStarted-Learn</a>
</p>

<h2>To configure the API Builder for push notifications using Dashboard:</h2>
<p>
1. Open <a href="https://dashboard.appcelerator.com/" target="_blank">Dashboard</a> and select your application<br>
2.  Click <strong>Push Notifications</strong> on the left-side navigation
</p>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-17.jpg" class="img-responsive"><br><br>
<p>
3. Select the <strong>Android</strong> tab<br>
4.  Enter the server key in the <strong>Server Key</strong> field and the sender ID in the <strong>Sender ID</strong> field. To find your Server Key and Sender ID, go to <a href="https://firebase.google.com/" target="_blank">Firebase</a>. From there, click on <strong>Settings</strong> (cog) > <strong>Cloud Messaging</strong>. This page will show your Sender ID (this should be the same as your project number) and your Server Key.</p>

<img src="assets/images/push-nofitication-with-titanium-and-firebase-18.jpg" class="img-responsive"><br><br>
<img src="assets/images/push-nofitication-with-titanium-and-firebase-19.jpg" class="img-responsive"><br><br>
<p>5. Click <strong>Save Changes</strong></p>

<h2>Configuring push services for iOS devices</h2>
</p>To enable the Apple Push Notification service for your application, you need to create an Apple Push Notification certificate and upload the certificate to the MBS server. Note that, iOS simulators cannot receive Apple push notifications. Use <a href="https://login.axway.com/auth/realms/Broker/protocol/openid-connect/auth?client_id=platform&redirect_uri=https%3A%2F%2Fplatform.axway.com%2F&state=55ded9b4-c9c9-421c-88e4-b8bdcb1cbf8d&response_mode=fragment&response_type=code&scope=openid&nonce=42285cc4-52b0-4658-811e-cd1067782f98" target="_blank">Dashboard</a> to upload the .p12 certificate file to the API Builder and enable notifications within your application.</p>
<p>To upload the certificate using Dashboard:</p>
<p>
1.  Open <a href="https://login.axway.com/auth/realms/Broker/protocol/openid-connect/auth?client_id=platform&redirect_uri=https%3A%2F%2Fplatform.axway.com%2F&state=55ded9b4-c9c9-421c-88e4-b8bdcb1cbf8d&response_mode=fragment&response_type=code&scope=openid&nonce=42285cc4-52b0-4658-811e-cd1067782f98" target="_blank">Dashboard</a> and select your MBS application from the Apps drop-down menu<br>
2.  Select <strong>Push Notifications</strong> on the left-side navigation<br>
3.  Select the <strong>iOS</strong> tab<br>
4.  Click Choose File, locate the .p12 file you exported previously, and click Open<br>
5.  In the Certificate Password field enter the password you selected when you generated the certificate<br>
</p>

<img src="assets/images/push-nofitication-with-titanium-and-firebase-20.jpg" class="img-responsive"><br><br>
<p>6.  Click Save Changes. If the password you entered was incorrect, an error dialog will alert you</p>
<p>To read more about iOS certificates follow this link : <a href="http://www.stencyl.com/help/view/ios-certificates-guide" target="_blank">http://www.stencyl.com/help/view/ios-certificates-guide</a></p>

<h2>Receive FCM  messages with Appcelerator</h2>
<p>Call the <strong>registerFirebase</strong> function to register for push notifications with firebase.</p>
<script src="https://gist.github.com/kaumadie/12d67d774e3a81dd78a5de7578b7b5b3.js"></script>
<h2>Send FCM  messages with PHP</h2><br>

<script src="https://gist.github.com/kaumadie/c838d6a4ab87115da32063bbb6f9de37.js"></script>
                  
                  

              </div>

              <!-- /article content -->

            </div>



           <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                  <img src="/assets/images/chamalka-auxenta.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Chamalka Gamaralalage

                </h2>
                <small> Associate Software Engineer
                </small>
              </div>
            </div>
          </div>

             <!-- RIGHT -->
             <div class="col-md-4 col-sm-4">

                <!-- side navigation -->
               <?php include 'include/blog-sidebar.php'; ?>
    
                </div>
              </div><!-- Row -->
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