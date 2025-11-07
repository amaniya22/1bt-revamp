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
              <h1 class="blog-post-title">Relationship Insights in Dynamics 365</h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                <p class="dropcap">It is interesting to see how intelligent components come into play in Dynamics 365.
                  Let&rsquo;s have a look at Relationship Insights, which is a key set of features within the Embedded
                  Intelligence suite. The suite analyses Dynamics 365 data as well as the Microsoft Exchange database
                  to produce constructive insights to understand relationships through behavior of relationships. <br><br>
                </p>
                <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb1.jpg"></div><br>
                     
                <p>As illustrated, Relationship Insights consist of three separate solutions; namely <em>Relationship
                    Assistant</em>, <em>Email Engagement</em> and <em>Auto Capture</em>. Let&rsquo;s have a close look
                  at each and how they help the end user. (Note: Sales Insights Add-on is not discussed in this post)</p>
                 <h2>Enable Embedded Intelligence</h2>
                 <p>Go to <em>Settings</em> &gt; <em>Intelligence Configuration</em> and enable EI by Accepting the
                  Privacy note.</p>
                  <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb2.jpg"></div><br>
                 
                  <p>It is important to understand that the features we are going to work with would track behavior and
                  collect data about clients. In fact, you&rsquo;ve got to be careful in making sure you are not
                  violating privacy policies of the organization. <br><br>
                  Let&rsquo;s have a quick look at three separate solutions provided by Relationship Insights.<br>
                </p>
                <h2>A. Relationship Assistant</h2>
                <p>As illustrated in the first diagram, Relationship Assistant requires configuration of <em>Action
                    Cards</em>. An <em>Action Card</em> represents one reminder tile that the user will be shown. These
                  are categorized as <em>Base Cards</em> and <em>Advance Cards</em>. <em>Advance Cards</em> are further
                  subcategorized. </p>
                  <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb3.jpg"></div><br>
                 
                  <p>One example of an Action Card would be &lsquo;<em>No Activity about an Opportunity for last 30
                    days&rsquo;</em>. Also, it can be as simple as a reminder for an important meeting. These Cards are
                  globally enabled by the Administrator through the Embedded Intelligence configuration page. However,
                  Users can re-configure this from a personal level based on their choice.<br>
                  As per the configuration, Cards are shown in a timely manner in the frontend so that the User is
                  equipped to take necessary steps. </p>
                  <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb4.jpg"></div><br>
                 
                  <p>For example, the above two Cards are reminders on a <em>Phone Call</em> and <em>Appointment</em>
                  scheduled for today. Notice the different actions provided in each Card based on the type. For
                  Appointment, it&rsquo;s handy to have the option to Email all the attendees at once or modify the
                  Appointment.  </p>
                <h2>B. Email Engagement</h2>
                <p>As soon as Email Engagement is enabled, the User can use the below list of rich features, otherwise
                  possible only through third party add-ons such as ClickDimensions. <br><br>
                  </p>
                  <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb5.jpg"></div><br>
                 
                    <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Review the full interaction history of the message</li>
                  <li><i class="fa fa-angle-double-right"></i>See when recipients opened your message, clicked a link, opened an attachment, or sent a reply</li>
                  <li><i class="fa fa-angle-double-right"></i>Receive an alert right away, the first time a recipient opens your message</li>
                  <li><i class="fa fa-angle-double-right"></i>Schedule the most effective delivery time and receive advice on the best time based on the
                    recipient's time zone</li>
                  <li><i class="fa fa-angle-double-right"></i>Choose the most effective message template with recommendations based on your organization's
                    previous email interaction history</li>
                  <li><i class="fa fa-angle-double-right"></i>Set an alert to remind you when it's time to follow up on an email message</li>
                </ul>
                <h2>C. Auto Capture</h2>
                <p>The Auto Capture feature accesses your Microsoft Exchange (Server-Side sync should have been
                  configured) and displays Emails that are not necessarily Tracked in Dynamics 365, but likely to be
                  related to important types like Opportunity, Lead, etc. </p>
                <p>See the below screenshot of the Activities Tab, which shows the list of Emails including one
                  untracked Email. This Email subject is the same as one of the Opportunity&rsquo;s topics in the
                  System. In fact, Auto Capture suggests that this Email could be related to that opportunity and
                  states clearly that the item is not tracked, but has the option to be tracked. Once Track is clicked,
                  it will create related records in Dynamics 365, which is visible to all. Till then, it is only
                  visible to the owner of the record to decide whether to enable tracking or not.</p>
                  <div style="text-align: center;"> <img src="./assets/images/dynamic365-thumb6.jpg"></div><br>
                 
                 <p> As in other features explained here, this feature too needs to first be globally enabled by the
                  administrator. Yet, individual users can switch this on/off at the user level. <br><br>
                  In summary, Embedded Intelligence is a promising futuristic approach to improve user-friendliness and
                  enhance functionalities through insights in Dynamics 365. Relationship Insights, at this early stage,
                  already highlights what value it can leverage for day to day business activities through intelligent
                  analysis of relationships. </p>

              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/sumedha-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Sumedha Obeysekera
                </h2>
                <small>Senior Software Architect
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