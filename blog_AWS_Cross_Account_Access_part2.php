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
              <h1 class="blog-post-title">AWS Cross Account Access</h1>
              <h4>[Part 02 — Access Between Two AWS Accounts]</h4>


              <div>
                <p>In&nbsp;<a href="https://1billiontech.com/blog_AW_Cross_Account_Access.php">Part 01&nbsp;</a>of the AWS Cross Account Access blog series, I discussed cross account access between AWS accounts within a given AWS organizational hierarchy.</p>
                <p>In this blog article, I will be concentrating on the other aspect of cross account switching, which is role switching between two AWS accounts.</p>
                <p><strong>Scenario</strong>: You are required to have two AWS accounts (Account A and Account B) with ROOT user access. A user from AWS Account A should be able to access Account B resources (let&rsquo;s say ReadOnlyAccess).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig0.jpg"></p>
                <p><strong>Step 1</strong>: Sign-in&nbsp;to Account A and create an IAM user (&ldquo;userA&rdquo;) with required permissions.</p>
                <p><strong>Step 2</strong>: Create an IAM Group and create two policies and attach them to the group.</p>
                <p><strong>Adding the AWS Managed Policy&nbsp;</strong>&mdash; W<em>ith ReadOnlyAccess&nbsp;</em>(see Figure 01).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig1.jpg"></p>
                <p><strong>Adding the Inline Policy</strong>&nbsp;&mdash; With&nbsp;<em>AssumeRole</em></p>
                <p>Once the&nbsp;<em>ReadOnlyAccess</em>&nbsp;managed policy is attached, click the group and add the inline policy by clicking the link, which is under&nbsp;the <em>Inline Policies&nbsp;</em>tab (see Figure 02).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig2.jpg"></p>
                <p>Once you click the above link, a&nbsp;<em>Policy Generator</em>&nbsp;page appears.</p>
                <p>Click the &ldquo;Select&rdquo; button under the&nbsp;<em>Policy Generator. Then&nbsp;</em>you will see the following figure (figure 03).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig3.jpg"></p>
                <p>Click &ldquo;Inline Policy&rdquo; and use the Policy Editor to add the STS Assume Role to the Inline Policy.</p>
                <p>Select the following parameters while creating the inline permissions</p>
                <ul>
                  <li>Select Policy Generator &rarr; Effect = &ldquo;Allow&rdquo; &rarr; AWS Service = &ldquo;AWS STS&rdquo; &rarr; Actions = &ldquo;AssumeRole&rdquo; &rarr; ARN = &ldquo;*&rdquo; &rarr; Click &ldquo;Add Statement&rdquo; &rarr; Click &ldquo;Next Step&rdquo; &rarr; Click &ldquo;Apply Policy&rdquo;</li>
                </ul>
                <p>Once both the policies are created, the group policies can be listed as below (see Figure 04).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig4.jpg"></p>
                <p>Click &ldquo;Show Policy&rdquo; under Inline Policies to check the the inline policy we added (see Figure 05).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig5.jpg"></p>
                <p>Now you are required to add the user that you have created to the above IAM Group in order to apply the required permissions to the user that we have chosen (see Figure 06).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig6.jpg"></p>
                <p><strong>Step 3</strong>&nbsp;: Sign-in to Account B and create a Role (this is to connect Account A users to Account B).</p>
                <p>Go to IAM &rarr; Select &ldquo;Roles&rdquo; &rarr; Click &ldquo;Create Role&rdquo; &rarr; Select &ldquo;Another AWS Account&rdquo; &rarr; Enter the 12-digit account ID (this is the Account ID of AWS Account A)&rarr; Click &ldquo;Next&rdquo; and add permissions (here you can add &ldquo;ReadOnlyAccess&rdquo;) &rarr; Click &ldquo;Next&rdquo; and give a &ldquo;Role Name&rdquo; and a &ldquo;Description&rdquo; (RoleName = &ldquo;SecurityReadOnlyRole&rdquo;)</p>
                <p>Go back to &ldquo;Roles&rdquo; and see the newly created Role and its Permissions and Trust Relationships. Under Permissions you can see &ldquo;ReadOnlyAccess&rdquo; and under &ldquo;Trust Relationship&rdquo; (see Figure 07 to see the edited relationshop) you can see the Trusted AWS account (Account A &mdash; Account ID)</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig7.jpg"></p>
                <p>The above configuration confirms that any user from Account A can access Account B resources in the &ldquo;ReadOnly&rdquo; mode.</p>
                <p>However, if we want to restrict this access to only UserA in Account A, we should be able to do that by changing the above inline policy by replacing the user name to &ldquo;UserA&rdquo; (see Figure 08).</p>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig8.jpg"></p>
                <p><strong>Step 4</strong>: Now it is the time to login to &ldquo;userA&rdquo; in AWS Account A.</p>
                <p><strong>Step 5</strong>: Go to &ldquo;Switch Role&rdquo; and enter the following details:</p>
                <ul>
                  <li>Account ID (account ID of AWS Account B)</li>
                  <li>Role (&ldquo;SecurityReadOnlyRole&rdquo;)</li>
                  <li>Display Name and Color can be anything you like</li>
                </ul>
                <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-account-fig9.jpg"></p>
                <p>If all turns out okay, you will be logged into Account B without using its username/password credentials and it is purely on the roles defined.</p>
                <p>If you want, you can always go back to Account A and vice versa.</p>
                <h2>References</h2><br>
                <ol>
                  <li><a href="https://1billiontech.com/blog_AW_Cross_Account_Access.php" target="blank">AWS Cross Account Access &mdash; Part 01</a></li>
                </ol>




                <div class="row">
                  <div class="col-md-2 col-sm-2 col-xs-4">
                    <img src="assets/images/chrishantha.jpeg" width="90">

                  </div>
                  <div class="col-md-10 col-sm-10 col-xs-8">
                    <h2 class="padding-top-20 size-20">Crishantha Nanayakkara

                    </h2>
                    <small>Vice President - Technology
                    </small>
                  </div>
                </div>
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

</body>

</html>