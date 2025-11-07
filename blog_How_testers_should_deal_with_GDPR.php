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
              <h1 class="blog-post-title">How testers should deal with GDPR</h1>
              <div>



              <h3>Overview of GDPR</h3><br>
<p>Software testing begins with an idea of delivering a product that will help to simplify or improve the quality of a process or task.&nbsp;Software testing should follow a methodology with key activities to ensure that the final product is able to protect private data. There is some technical literature that focuses on security by design as part of testing the software. However, there is less about data protection by design and by default as part of testing the software.&nbsp;An understanding of data protection should be a prerequisite for developing and testing the software. The project team should know what requirements are applicable, what they should look out for, and which tools enables them to convert knowledge of data protection into software that safeguards it.</p>
<ol>
<li><strong>What is GDPR and key features</strong>
<p>With the growing of data sources in digital era, the volume of data created and stored continues to grow at an unpredictable rate. While the primary focus for most organizations is on data gathering and processing, it is important to safeguard the data from corruption, compromise, or loss.&nbsp;</p>
<p>A new regulation called GDPR in European Union law had come into force in 2018 with the primary objective of introducing strongest enforcement measures and thereby to improve the trust in the digital economy. It gives more control to individuals to know what information businesses can collect about them and understand how it is handled. It also mandatory for organizations to protect personal data and provide proofing on how the data is protected. Failing to align with GDPR not only attracts penalty but also tarnishes business reputation. There are some key features related to GDPR described as below:

  </li>
 <ol>
<li><strong>Specific permission</strong>
<p>Unless you give permission to an app or website to use your details in a specific way, they can&rsquo;t use it for any other purpose or sell it to third parties.</p>
</li>
</ol>

<ol start="2">
<li><strong>Privacy by design</strong>
<p>According to this when you sign up for a service, you should not be asked for data that is not directly relevant for the purposes of using that app or service.</p>
</li>
</ol>
<ol start="3">
<li><strong>Data portability</strong>
<p>The right to ask for any data that a company has about you in a readable format so that you can reuse it.</p>
</li>
</ol>
<ol start="4">
<li><strong>Right to be forgotten</strong>
<p>By providing someone your data does not mean they have the right to keep it forever. According to the GDPR you have a right to be forgotten and will be able to ask companies or relevant parties to delete your data.
However, the two exceptions are: </br></br>
a) It will not apply to information that there is a legal requirement to keep, such as medical records.<br><br>
b) it is also a personal right to forget, where individuals can request that outdated or undesirable information about them be removed from search engines.</p>

</li>
</ol>


<ol start="5">
<li><strong>Definitive consent</strong>
<p>There should be a clear procedure before private data is processed.&nbsp;</p>
</li>
</ol>

<ol start="6">
<li><strong>Information in clear readable language</strong>
<p>It is the right of the individuals to get and read the information clearly. So, the new rules will put an end to &ldquo;small print&rdquo; privacy policies and that information should be given in clear and plain language before any data is collected.</p>
</li>
</ol>

<ol start="7">
<li><strong>Limits on the use of profiling</strong>
<p>Personal data is automatically used to access and analyze personal choices, predict a person&rsquo;s performance at work, economic situation, health, location, behavior, creditworthiness, etc. Under GDPR, it will be allowed with the consent of the person concerned, where permitted by law or when needed to pursue a contract and requires human intervention.</p>
</li>
</ol>

<ol start="8">
<li><strong>Everyone follows the same law</strong>
<p>The regulation will ensure that everyone follows the same rules.</p></li>
</ol>

<ol start="9">
<li><strong>One &ndash; Stop Solution</strong>
<p>More beneficial for EU companies as they only need to deal with one regulatory body.</p></li>
</ol>

<ol start="10">
<li><strong>Adopting Techniques</strong>
<p>The new GDPR rules provides techniques such as removing personally identifiable information where it is not needed, replacing personally identifiable with artificial identifiers, encoding messages so only those authorized can read the privacy information.&nbsp;</p>
<p>Therefore, the new data protection rules not just give individuals a precise and effective information about how their data is being used, they also give businesses the opportunity to innovate and win back trust from consumers.</p>
</li>
</ol>
</p>
</ol>

<ol start="2">
<li><strong>Data Security within GDPR</strong></li>

<p>Let&rsquo;s find out how data protection is handled by GDPR.</p>
<ol start="1">
<li>Take data protection into consideration at all times, from the moment you started developing the product up to each time data is processed.</li><br>
</ol>
<ol start="2">
<li>Encrypt, pseudonymize, or anonymize personal data wherever possible.</li><br>
</ol>
<ol start="3">
<li>Create an internal data security policy for your team members and build data awareness about data protection.</li><br>
</ol>
<ol start="4">
<li>Know when to conduct a data impact assessment and there should be a proper process implemented for this assessment.</li><br>
</ol>
<ol start="5">
<li>Need to have a process to notify the authorities and your data subjects in a situation of data breach.</li><br>
</ol>
</ol>

<h3>Focus areas of testing related to GDPR</h3><br>

<p>Having mentioned so much about the need for and importance of GDPR, it becomes even more crucial to validate the application against all the parameters and identify all the requirements are satisfied. Therefore, QA process plays a vital role in testing the functionality, features and behavioral changes in the application complying with the regulatory policies. Some of the possible test areas are:</p>
<p><strong>1)Validate all the policies from requirements:</strong></p>
<p>Testers need to ensure that the privacy policies are easily accessible and are written in a simple language covering all aspects of personal data processing. Privacy policy should clearly state the reasons for processing personal data and should give the user the right to either allow/object to a certain type of processing.</p>
<p><strong>Ex:</strong>&nbsp;If a client&rsquo;s ask is to develop a privacy policy that is GDPR compliant, the requirements should be very detailed about the law and acceptance criteria should be clear and concise. QA should perform various tests to assure the application adheres to the terms compliant, without any deviation from the expected requirements.</p>
<p><strong>2)Use Masked/synthetic data for Test:</strong></p>
<p>While performing data validations on website forms, third-party integrated components and so on, test data is the key to guarantee that the end-to-end functionalities work properly for all customers. Hence, it is important to use production like test data to validate the business requirements. A copy of the actual production data should be either masked, or a synthetic data must be created by using various data generation tools available.&nbsp;</p>
<p><strong>3)Level of Customer data usage:</strong></p>
<p>&nbsp;Identifying the different levels of data, guarding, and protecting them is necessary as per the GDPR compliance. The information supplied by the customer can confine to a PII(Personally Identifiable Information),however, it might be varying from individual to individual.</p>
<p><strong>4)Disposal of unused/unnecessary data:</strong></p>
<p>Whenever the data is consumed and after a certain period it might not be relevant or needed, the customer might question about what has been done to the previous information that was captured. In this case, it is the responsibility of the company to notify the customer about the data and securely dispose-off all the unnecessary or unused data from the database and all the other sources. Here, the QA must pitch in to check if the unwanted information has been removed from the systems successfully with no impact to the existing customers data .</p>
<p><strong>&nbsp;Ex:&nbsp;</strong>If the details such as the customer&rsquo;s middle name, birthplace, driving license number is not needed to maintain a profile, these must be notified to the customer in advance and should be discarded securely without impacting any other areas while using the application.</p>
<p>&nbsp;<strong>5)Data Trust cliff:</strong></p>
<p>One wrong step can cause data breach and completely lead to collapse the reputation of the organization. Not only confidential/restricted but also public information should be protected from the cyber threats. Hence, while gathering or collecting bulks of information from the customers where the risks of data intruders/hackers is unavoidable, the governing of data is even more critical.</p>

<p><strong>6)Historical data:</strong></p>
<p>Organizations providing customer services should keep a complete record of all the data including current and historical information about the clients. Any necessary information should be identifiable and be easy to access by the clients at any moment. This can help customers if they wish to trace their own details.</p>
<p><strong>Ex:&nbsp;</strong>Customers may like to seek information from their past transactions to trace any orders. In such cases, the company should be able to provide all the data the client is looking for without any data loss. QA tests should focus on whether the legacy data is correct, secure, and consistent.</p>
<h3>Steps to make your test GDPR compliant</h3><br>
<p>After the introduction of the General Data Protection Regulation (GDPR), a lot has been said and discussed about the use of production data for the testing of software systems and processes. This matter can be discussed under five main questions.</p>
<ol>
<li>Can you use production data related to personally identifiable information for software development and testing or not?</li><br>
<li>If you request permission from your customers to use their personal data for software development and testing purposes by including it in your terms and conditions, will they allow it?</li><br>
<li>What about an act or temporary exemption? To what extent can an act be given for these purposes?</li><br>
<li>Is there any accepted way to anonymize the test data?</li><br>
<li>Can you place responsibility for the loss of data with the processor via a processing agreement.</li>
</ol>
<p><strong>Let&rsquo;s discuss how to make your test GDPR complaint</strong></p><br>
<p><strong>1.Document the use of personal data in test environments:</strong></p>
<p>Documenting the personal data should be the first step in your GDPR compliance process. This includes listing down the data in backups and the subsequent replicas that the testers have created for themselves.&nbsp;</p>
<p>&nbsp;<strong>2.Develop a smooth test data management process:</strong></p>
<p>A lean and adaptable process is needed to stay in control for a smooth test data management process. As per&nbsp;<strong>General Data Protection Regulation</strong>, it is important to ensure that no personal data is open to business users, software testers, test managers, and other team members during software development, maintenance, and test phases.</p>
<p><strong>3.Establish a combination of masked data or synthetic data for testing:</strong></p>
<p>Masking test data seems to be the desirable option, but it may not yield right results, especially when you are dealing with test data management at enterprise level where multiple systems with redundant data is involved. Hence, it might be preferred to use a combination of carefully masked data along with synthetic data.</p>
<p>&nbsp;<strong>4.A proper review of privacy policies:</strong></p>
<p>Privacy policies must be articulated accurately. There should be a specific reason for collecting, sharing, storing, and using the personal data among third-party processors. Consequently, it is also important that you are reviewing the third-party policies as well to make sure that they also adhere to GDPR compliance.</p>
<p><br /><br /></p>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/rachini-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Rachini Perera

                                                    </h2>
                                                    <small>Senior Quality Assurance Engineer
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