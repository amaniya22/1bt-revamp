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

<h1 class="blog-post-title">Power Platform Analytics for Microsoft Dynamics 365 CE Part 1 – Capacity
</h1>



<!-- article content -->



<div class="margin-bottom-80">
<p>With recent power platform releases, Microsoft introduced a great combination of analytics. This is really helpful in analyzing current CE instances and to make informed decisions.</p>
<p>These analytics are crucial in order to maintain a CE instance with optimum performance. Also, it helps all relevant stakeholders to make critical decisions.</p>
<p>Let&rsquo;s see how to navigate to the &ldquo;Power Platform Admin Center&rdquo;.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig1.jpg"></p>
<p>Then click on the admin link.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig2.jpg"></p>

<p>Under Admin centers, navigate to All Admin Centers and then click on Dynamics 365.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig3.jpg"></p>
<p>Expand the Analytics tab in the left pane.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig4.jpg"></p>
<p>Note:&nbsp;<strong>You should have relevant D365 roles in order to open the D365 admin page.</strong></p>
<p><span style="font-weight:700">Capacity:</span></p>
<p>The capacity section will demonstrate database usage analytics. It will show you how much disk space you&rsquo;ve already used up, how much disk space remains, and additional details like how much disk space is being used for database, logs and files. It will also list down all the environments in which you are a tenant. If you hover over the bar chart at the bottom of the page, you will see the exact storage usage for each category (file/database).</p>
<p>Note: For the purpose of this blog, I&rsquo;ve used a trial environment, therefore it shows that the database has been exceeded. However, if you use a trial organization database, the space will not count.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig5.jpg"></p>
<p>Alternatively, you can use the Storage Capacity tab to view these capacity data by category.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig6.jpg"></p>
<p>If you click on the chart icon corresponding to your CE environment name, it will provide you with a more detailed analysis on your environment as illustrated below.</p>
<p>Note: You can export all these graphs and data by clicking on the menu icon at the top right corner.<br /></p>
<p>The first chart will show top database usages based on category. A user can delete unnecessary files/data based on these figures.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig7.jpg"></p>
<p>In addition, by utilising the following chart, a user can get an idea about file storage and how it is utilised. Based on this, administrators can decide whether to remove unwanted annotations or solutions or any other unnecessary artifact to reduce file storage.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig8.jpg"></p>
<p>The last graph will show you how space is utilised for logs (plugin trace logs).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/power-platform-fig9.jpg"></p>
 

<!-- /article content -->



</div>







<div class="row tab-post padding-top-20">

<!-- post -->

<div class="col-md-2 col-sm-2 col-xs-4">

<img src="assets/images/gihan-thumb.jpg" width="90">



</div>

<div class="col-md-10 col-sm-10 col-xs-8">

<h2 class="padding-top-20 size-20">Gihan Lakmal



</h2>

<small>Tech Lead

</small>

</div>

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