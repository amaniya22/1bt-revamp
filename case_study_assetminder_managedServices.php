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
              <h1 class="blog-post-title">Providing world class product support to a leading fleet management company in Europe</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <!-- article content -->
                <p class="dropcap">Assetminder is a cloud-based fleet maintenance and workshop management system that was awarded the prestigious
                  Innovation Award at the recent 2017 Fleet Transport awards in Dublin. It was built ground up into a comprehensive
                  platform. The previous version of the Assetminder application, known as Fleetminder, was designed and developed
                  as a client-server application.</p>

                The Fleetminder application has been adopted by enterprises across Ireland for fleet maintenance and workshop management.
                The support services for this application was initially carried out within the company.
                <div class="padding-top-15">
                  <br>
                  <h3>The Challenge</h3>
                  <p>Upon the successful launch of the application, Assetminder gathered traction and numerous enterprises signed
                    up to obtain the service. Furthermore, majority of the existing Fleetminder clients migrated to Assetminder
                    to reap benefits of the cloud-based application with upgraded features.</p>

                  To cope up with the traction received and to ensure a smooth transition, Assetminder Limited (owners of Assetminder and Fleetminder)
                  required a strong team with the right expertise to provide support services for their clients.




                  <div class="padding-top-15">
                    <br>
                    <h3>HOW 1 BILLION TECH HELPED</h3>
                    <br>
                    <ul class="list-unstyled list-icons">
                      <li>
                        <i class="fa fa-angle-double-right"></i>A highly skilled offshore team with technical capabilities was deployed to gain domain expertise
                        in 6 weeks</li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>We provide 1st and 2nd level support to the Assetminder application and strengthen the Fleetminder
                        team by providing 1st level support to their clients</li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>The team works to Irish business hours and communicates directly with the end users of the Assetminder
                        and Fleetminder applications</li>
                    </ul>

                  </div>
                  <div class="padding-top-15">
                    <h3>The Solution</h3>
                    <p align="center">
                      <img class="responsive-image" src="assets/images/onprogress">
                    </p>
                    <p align="center">Figure 1 : The Solution Architecture</p>
                  </div>

                  <div class="padding-top-15">

                    <p>Support queries are raised through the following methods by the end users</p>
                    <ul class="list-unstyled list-icons">
                      <li>
                        <i class="fa fa-angle-double-right"></i>Chat app embedded in the application – the end user will raise a query from the chat app. This
                        raises a ticket on the helpdesk application and an email notification is sent to the support service
                        members
                      </li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>By raising a ticket on the Help Desk application – the end user will directly raise a ticket
                        on the helpdesk application stating the issue they are facing</li>
                      <li>
                        <i class="fa fa-angle-double-right"></i>Directly calling the help desk through the support hot line – The end user will make a call to
                        the hot line which connects the user directly with a help desk support staff</li>
                    </ul>

                  </div>
                  <div class="padding-top-15">

                    <p>The level 1 support engineer analyzes the query raised to understand if the query could be resolved by
                      him/herself. This would involve the support engineer checking the list of FAQ’s or making required
                      database updates.
                      <br>
                      <br> If the query raised by the end user can be resolved by the level 1 support team, the issue will be
                      resolved and communicated to the user through the channel used to contact the help desk. If further
                      information is needed, the support staff will make a direct call to the end user and guide them through
                      the process to fix the issue.
                      <br>
                      <br> If the issue cannot be solved by the level 1 support staff (fixes that will need to be made at the
                      code level) the issue will be escalated to level 2 support. In the meantime, level 1 support staff
                      will maintain the communication link with the end user to get any further information regarding the
                      issue or to update the user of the progress on the issue.
                      <br>
                      <br> The level 2 support staff will fix the issue based on the agreed SLAs depending on severity. In situations
                      where a production environment update is required, a new software build will be pushed during the early
                      hours of the day in Ireland to minimize interference to live operations.

                    </p>

                  </div>
                  <div class="padding-top-15">
                    <p>The following SLAs have been agreed with the client to provide the most optimal support to the end users
                      <br>
                      <br>
                      <img class="responsive-image" src="assets/images/assetminder_managedService_SLA.png">

                    </p>

                    <div class="padding-top-15">


                      <div class="padding-top-15">

                        <h3>BENEFITS TO CLIENT</h3>
                        <br>
                        <ul class="list-unstyled list-icons">
                          <li>
                            <i class="fa fa-angle-double-right"></i>Identifying issues promptly – The team possess domain and technical knowledge for the Assetminder
                            application
                          </li>
                          <li>
                            <i class="fa fa-angle-double-right"></i>High return on investment in running the support arm offshore</li>
                          <li>
                            <i class="fa fa-angle-double-right"></i>Faster response time – Extra time to leverage to fix issues due to the time difference onsite
                            and offshore</li>
                          <li>
                            <i class="fa fa-angle-double-right"></i>No downtime required to update production environment – If production needs to be updated
                            with issue fixes, it is done during the non-business hours of the client</li>
                          <li>
                            <i class="fa fa-angle-double-right"></i>Multi-channel reach to the help desk – End users can use one of the 3 methods (embedded chat
                            app, help desk ticket app or hot line) to raise an issue</li>


                        </ul>

                      </div>

                    </div>

                  </div>

                </div>





              </div>

              <!-- /article content -->

            </div>
          </div>

          <!-- RIGHT -->
          <div class="col-md-4 col-sm-4">
          <div class="box-static box-border-top">

<?php include 'include/casestudy-sidebar.php'; ?>

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
    <!-- /FOOTER --
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117187414-1');
</script>

</body>

</html>