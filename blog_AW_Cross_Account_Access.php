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
              <h1 class="blog-post-title">AWS Cross-Account Access</h1>
              <div>


              <p><em>Using IAM Role Switching</em></p>
<h2>Introduction</h2><br>
<p>AWS Cross-Account Access is all about its ability to access resources of one AWS account from another.</p>
<p>This is possible using a feature called&nbsp;<span style="font-weight:700">Role Switching</span>. Role Switching can happen between AWS Accounts within an&nbsp;<a href="https://aws.amazon.com/organizations/">AWS organization</a>&nbsp;or between AWS organizations.</p>
<p>However, in this blog, we limit our discussion to role switching between AWS accounts within a single AWS organization.</p>
<p>The following diagram explains these scenarios from a high level (see Figure 01).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig1.jpg"></p>


              <p>Let&rsquo;s discuss these steps in bit more detail now.</p>
<h2>AWS Organizations</h2><br>
<p>Before we get into the nitty gritties of AWS cross-account access, let&rsquo;s first discuss AWS organizations and its hierarchy (see Figure 02).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig2.jpg"></p>

              <p>AWS organizations help you centrally govern your environment as you grow your workloadsd on AWS. As explained, it helps you to manage multiple AWS accounts within a single business. Instead of managing many accounts with many isolated sets of logins and individual bills, this allows you to have a more consolidated setup with better performance.</p>
<p>In a typical AWS organization, you will find an account hierarchy, some logical units and a service policy to govern each of its accounts.</p>
<p><span style="font-weight:700">Master Account</span>: When you create an AWS Organization under the ROOT account, you basically create the Master Account. The Master Account cannot be restricted. The consolidated billing and centralized logging happens here.</p>
<p><span style="font-weight:700">Member Account</span>: This is basically an AWS account which is created under the ROOT account, which is not a Master Account.</p>
<p><span style="font-weight:700">Organizational Unit (OU)</span>: These are groups that can be created and have AWS accounts assigned to them. These are useful when you want to assign certain Service Control Policies (SCPs) to all accounts under the OU.</p>
<p><span style="font-weight:700">Service Control Policies (SCPs)</span>: These are a type of organizational policies that you can use to manage permissions in your organization. SCPs, by default, offer central control over the maximum available permissions for all accounts in your organization. Once a Member Account is created, a default IAM Role is created named&nbsp;<strong>OrganizationAccountAccessRole</strong>. By default, this role has full Admin Access privileges (<strong>FullAdminAccess</strong>).</p>
<p>In this blog, switching accounts will be explained in two scenarios.</p>
<ol>
<li><span style="font-weight:700">Scenario 01</span>&nbsp;&mdash; Switching to a Member Account from the Master Account within the same AWS organization with Full Admin Access using&nbsp;<em>OrganizationAccountAccessRole</em></li><br>
<li><span style="font-weight:700">Scenario 02</span>&nbsp;&mdash; Switching to a Member Account from the Master Account IAM user within the same AWS organization with a customized IAM Role</li>
</ol>
<p><span style="font-weight:700">Scenario 01 &mdash; Switching with Full Admin Access IAM Role</span></p>
<p>As explained, by default you can switch to a member account from the master account with Full Admin Access. Here, you need to use a static Role Name called&nbsp;<em>OrganizationAccountAccessRole&nbsp;</em>(see Figure 3)<em>.</em></p>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig3.jpg"></p>

              <p>Step 1 &mdash; Create an AWS organization (if your AWS account does not have it already). This step will create the Master Account for your AWS account.</p>
<p>Step 2 &mdash; Create a Member AWS account within your AWS organization.</p>
<p>Step 3 &mdash; Sign in to the AWS Console as an admin user (you cannot do Role switching with a ROOT account) and do a role switch to the member account you created in step 2.</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig4.jpg"></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig5.jpg"></p>

              <p>If all works well, the switch to a Member Account should have taken place as shown in Figure 5. You can find the member account ID on the AWS organization dashboard. If you browse through the member account, you can see that you have been granted admin access privileges. If you want to provide less privileges, you can adjust the Service Control Policy for the respective member account.</p>
<p><strong>Scenario 02 &mdash; Switching with less privileges</strong></p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig6.jpg"></p>

              <p>Step 1 &mdash; Sign in as the Admin user and create an IAM user (e.g.&nbsp;<em>demo1</em>).</p>
<p>Step 2 &mdash; Create an IAM Group with the following policies attached to it.</p>
<ol>
<li>AWS Managed Policy &mdash; Add&nbsp;<em>ReadOnlyAccess</em></li>
<li>Inline Policy &mdash; (Service: STS, Actions: AssumeRole, Resources: *)</li>
</ol>
<p>Click &ldquo;Inline Policy&rdquo; and use the Policy Editor to add STS Assume Role.</p>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig7.jpg"></p>

              <p>Once both policies have been added you will be able to see the following screen (see Figure 8).</p>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig8.jpg"></p>

              <p>Click&nbsp;<em>Show Policy</em>&nbsp;under Inline Policy and you will see this in JSON format (see Figure 9).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig9.jpg"></p>
              <p>Step 3 &mdash; Attach the above created group to the user&nbsp;<em>demo1,&nbsp;</em>which was created in step 1.</p>
<p>Step 4 &mdash; Do an Admin Role switch to the DEMO Member Account now in order to create an IAM Role.</p>
<p>Step 5 &mdash; Go to IAM -&gt; Roles -&gt; Create Role -&gt;Select&nbsp;<em>Another AWS Account</em>&nbsp;tab -&gt; Enter the&nbsp;<em>Account ID of the Master Account</em>&nbsp;(From the AWS Account that you are doing the Role Switching) (see Figure 10).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig10.jpg"></p>
              <p>Step 6 &mdash; Add permissions by clicking the&nbsp;<em>Next Permissions</em>&nbsp;button and add the&nbsp;<em>ReadOnlyAccess</em>&nbsp;permission (see Figure 11).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig11.jpg"></p>
              <p>Step 7 &mdash; Enter a valid Role name (<em>MemberReadOnlyAccess</em>) and create the IAM Role (see Figure 12).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig12.jpg"></p>
              <p>Step 8 &mdash; From the IAM Roles dashboard, select the newly created IAM Role under step 7.</p>
<p>Step 9 &mdash; Click the&nbsp;<em>Trust Relationship</em>&nbsp;tab -&gt; Click the&nbsp;<em>Edit Trust Relationship</em>&nbsp;tab. You will see a JSON policy like below (see Figure 13).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig13.jpg"></p>
              <p>Step 10 &mdash; In order to restrict this Trust Relationship only to&nbsp;<em>demo1</em>&nbsp;IAM User, you need to change the AWS principle of the above JSON Trust policy. After changing the IAM user ARN, it will be visualized like below (see Figure 14).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig14.jpg"></p>
              <p>Step 11 &mdash; If you have managed to complete all of the above steps without any issues, then you are set to experiment a bit further now.</p>
<p>Step 12 &mdash; Use the&nbsp;<em>Switch Role</em>&nbsp;feature and now try and switch back to the IAM member account (DEMO). Use the Member Account ID and the Role (<em>MemberReadOnlyAcces</em>) as the one that you created under step 7 (see Figure 15).</p>
              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/aws-cross-fig15.jpg"></p>
              <p>Step 13 &mdash; If everything went to plan, you should now see the new Member Account AWS console with&nbsp;<em>ReadOnlyAccess</em>.</p>
<p>Congratulations!</p>

<h2>Conclusion</h2><br>
<p>Role switching among AWS accounts is a very strong feature provided by AWS in order to govern multiple AWS accounts within an organization. It is simply a matter of creating an IAM Role with a Trust relationship with an IAM user (with a policy with an STS Assume Role) in another AWS account.</p>

<div><h2>References</h2><br>
    
<ol>
<li>How to use Service Control Policies:&nbsp;<a href="https://aws.amazon.com/blogs/security/how-to-use-service-control-policies-in-aws-organizations/">https://aws.amazon.com/blogs/security/how-to-use-service-control-policies-in-aws-organizations/</a></li>
</ol>
</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/chrishantha.jpeg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Crishantha Nanayakkara

                                                    </h2>
                                                    <small>Vice President - Technology
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