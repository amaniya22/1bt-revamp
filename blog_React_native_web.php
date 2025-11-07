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
              <h1 class="blog-post-title">React Native Web</h1>
              <div>
              <p><em>A library to build Web and Mobile Applications using a single codebase.</em></p>


              <h2>Why React Native&nbsp;Web?</h2><br>
<p>One of the most difficult decisions to make when designing a new application is its target platform. A mobile app gives you more control and better performance, but isn&rsquo;t as universal as the web. If you&rsquo;re designing a mobile app, can you afford to support both iOS and Android? What about trying to build a mobile app and a responsive web app? Ultimately, the best experience you could provide your customers is for your app to work on all platforms with a minimum time and cost investment.</p>
<p>We already know how React Native can help make iOS and Android apps with a shared codebase, without any sacrifices in quality. But, what about the web? This is exactly the problem the <a href="https://github.com/necolas/react-native-web">React Native for Web</a> project is trying to solve. With React Native Web, we are now able to write Mobile and Web applications using a single codebase.&nbsp; So, let&rsquo;s dive into it!</p>
<p>React Native Web uses its Web CLI as the main starting point when it comes to development.</p>
<p><span style="font-weight:700">React Native Web&nbsp;CLI</span></p>
<p>A simple CLI tool to start your React Native Web project to develop the same app for iOS, Android, and Web.</p>
<p><span style="font-weight:700">Installation</span></p>
<p>In the CLI, execute the following commands to create a sample React Native Web application.</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig1.jpg"></p>
<p><span style="font-weight:700">Prerequisites:</span></p>
<p>To work with iOS and Android, it is recommended to install Xcode and Android Studio (not required, but it will make it easier when you&rsquo;re working with a production level or a large scale project).</p>
<p><span style="font-weight:700">iOS Troubleshooting</span></p>
<p>After setting up the above, the Web and Android applications work fine. However, in the case of iOS, you may need to do some configurations.</p>
<p>While building the Xcode project, you might get the following error.</p>
<ol>
<li>configure: error: in node_modules/react-native/third-party/glog-0.3.4' configure: error: C compiler cannot create executables</li>
</ol>
<p>The below steps can resolve this error.</p>
<ul>
<li>under repo: cd node_modules/react-native/third-party/glog-0.3.4</li>
<li>../../scripts/ios-configure-glog.sh</li>
</ul>
<p>During run time you can get the following error.</p>
<ol start="2">
<li>unknown argument type &lsquo;__attribute__&rsquo; in method</li>
</ol>
<p>Modify this file <span style="font-weight:700"><em>[project_folder]/node_modules/react-native/React/Base/RCTModuleMethod.mm</em></span></p>
<p>After this line&nbsp;</p>
<p>return RCTReadString(input, &ldquo;__attribute__((unused))&rdquo;) ||</p>
<p>Add</p>
<p>RCTReadString(input, &ldquo;__attribute__((__unused__))&rdquo;) ||</p>

<p>Once all of the above configurations are completed, and if all is okay, you will see the following screens for the respective platform (see Figure 2a and Figure 2b)</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig2a.jpg"></p>
<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig2b.jpg"></p>
<p><span style="font-weight:700">Dependencies</span></p>
<p>Let&rsquo;s start discussing necessary packages for React Native Web.</p>
<p>At this point, your <span class="codeinline">package.json</span> will look like the following,</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig3.jpg"></p>
<ul>
<li><span style="font-weight:700">react-scripts</span>: contains the scripts used in create-react-app.</li>
<li><span style="font-weight:700">react-dom</span>: allows react-code to be rendered into an HTML page.</li>
<li><span style="font-weight:700">react-native-web</span>: the main source of magic in this app. This library will convert our React Native components into web elements.</li>
<li><span style="font-weight:700">react-art</span>: a <a href="https://nodejs.org/en/blog/npm/peer-dependencies/">peer dependency</a> for React Native Web.</li>
</ul>
<p>React Native Web is not supposed to be a way of moving all of your apps&rsquo; code to the web. Usually, you want (and need) to have a different <span style="font-weight:700">user experience</span> when it comes to a web application. That is why you may need options for differentiating between Android, iOS, and Web platforms. For this, you can use<span class="codeinline"> Platform </span>specific code:</p>
<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig4.jpg"></p>

<p>Another option is the separation via <span style="font-weight:700">file ending.</span> You could create a component with code specific to each platform and still import it via import <span class="codeinline">TestComponent from './TestComponent'</span></p>
<ul>
<li><span class="codeinline">TestComponent.android.js for Android</span></li>
<li><span class="codeinline">TestComponent.ios.js for iOS</span></li>
<li><span class="codeinline">TestComponent.web.js for Web</span></li>
<li>Or just any of those as a fallback, so that you have two files (one for web and another for mobile)</li>
</ul>
<p><span class="codeinline">Ex: TestComponent.web.js TestComponent.js</span></p>
<p><span style="font-weight:700">React Native Web Navigation</span></p>
<p>Setting up navigation in <span style="font-weight:700">React Native Web</span> is challenging as the navigation system works quite differently in <span style="font-weight:700">apps</span> vs <span style="font-weight:700">browser</span>.</p>
<p><span style="font-weight:700">Navigation - Installation</span></p>
<p>Open your terminal, navigate to the project folder, and then run the following command:</p>
<p><span class="codeinline">npm install react-router-native react-router-dom</span></p>
<ul>
<li><span style="font-weight:700">react-router-native:</span> routing library for React Native</li>
<li><span style="font-weight:700">react-router-dom:</span> routing library for React on the web</li>
</ul>
<p>At this point, your <span class="codeinline">package.json</span> will look like the following.</p>
<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig5.jpg"></p>

<p><span style="font-weight:700">Creating&nbsp;Screens</span></p>
<p>Now, let&rsquo;s set up a few screens to test our navigation flow:</p>
<ul>
<li>First screen</li>
<li>Second screen</li>
</ul>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig6.jpg"></p>
<p class="graf">Above is the code for the <span style="font-weight:700">first screen</span>, which is a simple text and a button. The button when clicked should go directly to the second screen.</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig7.jpg"></p>

<p class="graf"><em>The <span style="font-weight:700">second screen</span> is the same as the <span style="font-weight:700">first screen</span>. Both of the screens have a <span style="font-weight:700">button </span>which takes you to the other screen.</em></p>
<p class="graf">Let&rsquo;s also create a <span style="font-weight:700">react-router-native</span> navigation to connect these two screens together in iOS and Android.</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig8.jpg"></p>

<p class="graf">Now let&rsquo;s create a <span style="font-weight:700">react-router-dom</span> navigation to connect these two screens together on the web.</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig9.jpg"></p>

<p><em>The<span style="font-weight:700"> first </spang></em>screen is the <em><span style="font-weight:700">default</span></em> screen of this <span style="font-weight:700">navigation</span>.</p>
<p>Now, in the <em><span style="font-weight:700">App</span></em>.<em><span style="font-weight:700">js</span></em> file, simply render the <span class="codeinline">Route</span> Navigation.</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig10.jpg"></p>
<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig11.jpg"></p>

<p class="graf">Now run the app. The following screen should come up on the display, if all goes well!</p>

<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig12a.jpg"></p>
<p><img class="img-responsive" src="https://auxenta.com/assets/images/blog/react-native_fig12b.jpg"></p>

<p><em>When you click on the </em><em><span class="codeinline">Go to second screen</span> button, it should take you to the <span style="font-weight:700">second</span> screen.</em></p>
<p>In the <em><span style="font-weight:700">Web</span></em> navigation, it is extremely important to have the change in page reflecting in the <em><span style="font-weight:700">URL </span></em>as well. In the app, there is no way a user can directly jump to a <em><span style="font-weight:700">screen </span></em>other than the <em><span style="font-weight:700">default screen</span></em>, but in the <span style="font-weight:700">browser it is possible, by simply entering a URL</span>.</p>
<p>In the <em><span style="font-weight:700">browser</span></em>, by clicking the <span class="codeinline">Go to second screen</span> button, the <em><span style="font-weight:700">URL </span></em>should change to <span class="codeinline">http://localhost:3000/second.</span></p>



<p><span style="font-weight:700">Conclusion</span></p>
<p><span style="font-weight:700">React Native Web</span> is one awesome library, which can be used to run an application on a phone or a browser by using a single codebase. React Native for Web creates all possibilities to run its components and APIs on the web by using React DOM.</p>
<p>The code between Android, iOS, and Web could mostly be shared. Especially libraries like Redux or React Router can be <span style="font-weight:700">100% reused</span>. A downside however is that configuring the projects can be very complicated.</p>

<h2>References</h2>
<br>

<ol>
<li>React Native Web Git Hub URL: <a href="https://github.com/necolas/react-native-web">https://github.com/necolas/react-native-web</a></li>
</ol>


<div class="row">
<div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/chamalka-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Chamalka Gamaralalage

                                                    </h2>
                                                    <small>Software Engineer
                                                    </small>
                                          </div></div>
         </div>

            </div>

                          </div>
              <!-- article content -->
                   
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