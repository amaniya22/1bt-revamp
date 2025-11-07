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

<h1 class="blog-post-title">Power Platform Analytics for Microsoft Dynamics 365 CE Part 2 - Common Data Service Analytics Part 1
</h1>



<!-- article content -->



<div class="margin-bottom-80">
<p>The Common Data Service Analytics tab shows all common data service call related statistics for further analysis. Using this, developers can get a better idea about the following areas.</p>
<ul>
<li>Performance of plugins/APIs/workflows</li>
<li>Failure or pass rate of plugins/APIs/workflows</li>
<li>Entity usage of dynamics CE</li>
<li>User operations</li>
<li>User access modes</li>
<li>Mailbox usage</li>
</ul>
<p>I will describe each component in the related section.</p>
<p>In the home section, you will be able to see a brief summary on active users, API calls, API pass rate and total executions. If you wish to see more details on these components, it is easily available in its relevant section.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig1.jpg"></p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig2.jpg"></p>
<p>However, you will first need to set the correct date range for analysis. This can be done by adjusting the filters including the environment filter. This will apply to all other tabs as well and will show historical data according to the filter settings.
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig3.jpg"></p>
<p><strong>Active Users Analytics</strong></p>
<p>In this analytics group, you will be able to see how many active users are present in your system. To get more details on the graphs, I have filtered the data to a single day.</p>
<p>The first graph will illustrate how many users are logged in to the given environment. If you select a single day, it will display the data hourly or it will scale up based on the filters you have added (e.g. if you select a month it will show active users by day).</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig4.jpg"></p>
<p>The following graph shows different operations performed by the user based on a time distribution. This graph also shows the exact operation count by time and operation. In essence, it helps get an idea about most performed operations by time.
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig5.jpg"></p>
<p>The following graph will show the most active users based on operations performed by the user. This will help administrators to identify usage of CRM and which of the users are most active. In addition, it will help to get a better idea on which of the operations are mostly performed and to adjust the CRM performance based on operations. According to this example, we have a considerable amount of data reads in comparison to creates. We can optimize our read queries with “nolock” after some analysis on entities and data.
</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig6.jpg"></p>
<p>The total operations graph helps to identify peak hours in which the system executes a large number of operations. This will help administrators to modify resource allocation plans dynamically. If you adjust the filter criteria to reflect years, you will be able to observe which time periods generate the most traffic.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig7.jpg"></p>
<p>The total page requests graph shows how much page requests are generated by the system/users in forms/reports/dashboards. At the moment, the environment has not generated such a request. However, in live environments, you can expect data to be populated to this graph as well.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/blog/CDSA_fig8.jpg"></p>

 

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