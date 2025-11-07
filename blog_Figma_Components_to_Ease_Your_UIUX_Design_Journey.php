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
              <h1 class="blog-post-title">Figma Components to Ease Your UIUX Design Journey</h1>

              <div>
             
              <p>Figma is a cloud-based design tool that is similar to Sketch in functionality and features, but with big differences that make Figma better for team collaboration. For those skeptical of such claims, I&rsquo;ll explain how Figma simplifies the design process and is more effective than other programs at helping designers and teams work together efficiently.<br /><br />Using components in Figma will help you to save time and resources on your next design project. Creating the simplest UI element can take up many hours. This article will explain what components areand how to make UI elements reusable across projects.</p>
<h2><strong>What are components?</strong></h2><br>
<p>Components are reusable UI elements that you can use across your design. A component can be any UI element from a label, an icon to a more complex data table.</p>
<p>You can now avoid working on boring and repetitive parts of designing. When you use components, updates will be automatically applied to every instance of that component, saving valuable design time. This also helps in maintaining consistency across instances of the same element.</p>
<h2><strong>Designing with components</strong></h2><br>
<p>Since elements are most often part of a bigger design, components help to maintain consistency as well as speed up the design process by applying changes done to an element to all its instances immediately. Let&rsquo;s look at an example.</p>
<p>An address book application might have a table that lists one contact per row. Designing a good list view requires finding the right type size, spacing, icons and other graphics. The same component can be used in many places at once, each at a different size with local modifications and differences:</p>


              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/figma-fig1.jpg"></p>

              <h2><strong>How it works</strong></h2><br>
<p>You start by creating the master component. The first time you create a component, it becomes a master component. To create a master component, you need at least two layers. First, select a UI element to make into a component and click the <strong>Create Component</strong> action in the toolbar. Then define the properties.&nbsp;</p>
<p>Changes made to the master component will automatically affect its instances. However, editing an instance will not affect the master component or its other instances. Editing an instance is overriding the master component&rsquo;s style and properties.</p>
<p>In the layers panel, you can identify which elements are master components and which are instances by the icon. Master components use a 4-diamond icon and instances use a single diamond icon.</p>
<p>The example below shows the color update of a button&rsquo;s background and how it updates its instances.</p>
<p><img class="img-responsive" src="https://1billiontech.com/assets/images/figma-fig2.jpg"></p>

<p>Let&rsquo;s see what happens if we override the color and stroke in our instances, and then change the original component:</p>
<p>What happens here is that we said, &ldquo;For this particular instance, let the fill color be dark gray, and for this one let the color and width of the stroke be red and 6px, no matter what the values are for the original component.&rdquo; When we later make changes to the component, our overrides remain, but other properties which we didn&rsquo;t override are reflected verbatim.</p>
<p>Any property of any part of an instance can be overridden, including any sub-layers and their properties. If you want to reset the instances and clear the overrides, simply select what you want to clear and click <strong>Reset Instance</strong>.&nbsp;</p>
<p>Components will greatly improve your design and, more importantly, make your life much easier.</p>


<h2>References</h2><br>
<ol>
<li><a href="https://www.figma.com/blog/components-in-figma/" target="blank">www.figma.com/blog/components-in-figma</a></li>
<li><a href="https://www.figma.com/collaboration/" target="blank">www.figma.com/collaboration</a></li>
</ol>
           
              


<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/mahen-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Mahen Jayasena

                                                    </h2>
                                                    <small>Senior Lead UI
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