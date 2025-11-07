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
              <h1 class="blog-post-title">AWS Redshift Optimization – A Case Study</h1>

              <!-- article content -->
              <div class="margin-bottom-80">
                <h2>AWS Redshift – An Overview</h2>
                <br>
                <p class="dropcap">
                  Amazon Redshift is a fast, fully managed, petabyte-scaled data warehouse solution that uses columnar storage to minimize
                  Input/Output (I/O), provide high data compression rates, and offer fast performance. As a typical Data
                  Warehouse, it is primarily designed for Online Analytic Processing (OLAP) and Business Intelligence (BI)
                  and not designed to be used as an Online Transaction Processing (OLTP) tool. It supports ANSI-SQL and is
                  a massively parallel processing database.
                </p>

                <p>Redshift architecture (See Figure 01) consists of a tightly coupled EC2 Compute nodes cluster. The Redshift
                  cluster is built on a single availability zone in order to negate any network latency issue between availability
                  zones. Having all nodes in close proximity will reduce network latency and will improve performance.
                </p>
                <p>Users can create one or more clusters with each cluster having multiple databases. Most of the time there
                  is one Redshift cluster and additional clusters can be added for resilience purposes. Any cluster can have
                  two types of nodes, namely a leader node and compute nodes.
                </p>
                <p>The leader node facilitates the communication between the BI client and the compute nodes. Each leader node
                  has a SQL end point. It coordinates the parallel query execution. When a request comes to the leader node,
                  it parses the query and generates an execution plan and a compiled code to be executed in the compute nodes.
                </p>
                <p>The compute nodes process the incoming requests in parallel. Each compute node has a dedicated CPU, memory
                  and a storage. Each compute node can scale out/in and scale up/down (resizing the Redshift cluster). Each
                  compute node consists of slices. The slices are portions of memory and disk. The data is loaded to the
                  slices in parallel. It has a “shared nothing” architecture. All compute nodes are independent of each other
                  and there is no contention between nodes.
                </p>

                <p>Redshift can decide automatically how the data distributes between slices. Also a user can specify one column
                  as the distribution key. When a query is executed, the query optimizer on the leader node redistributes
                  the data on the compute nodes as needed in order to perform any joins and aggregations.
                </p>

                <p>
                  <img class="img-responsive" src="assets/images/redshift-thumb1.jpg" alt="">
                </p>

                <h2>The Challenge</h2>

                <p>With time, as you load more and more data and apply DML commands, the performance can deteriorate. A US client
                  from the healthcare sector wanted to apply best practices on to their Redshift cluster in order to speed up
                  and improve its performance.
                </p>
                <h2>How Auxenta Helped </h2>

                <p>Leveraging Auxenta’s Redshift expertise, the team proposed a set of best practices and optimization strategies
                  for the client’s Redshift cluster installation.
                </p>
                <h2>The Solution </h2>

                <p>The given Redshift cluster was analyzed based on the following key indicators.</p>

                
                <ul class="list-unstyled list-icons">
                    <li><i class="fa fa-angle-double-right"></i><h5>Table Design</h5></li>
                   
                  <li>
                    </i Distribution style</li>
                  <li>
                   </i>Sort keys</li>
                  <li>
                   </i> Compression</li>
                  <li>
                    Analyze</li>
                  <li>
                    Vacuum</li>
                  <li>
                    Primary and foreign keys</li>
                </ul>

                
                <ul class="list-unstyled list-icons">
                    <li><i class="fa fa-angle-double-right"></i><h5>Query Design</h5></li>
                  <li>
                    Queries with alerts</li>
                  <li>
                    Queries affected by work load management (WLM) configurations</li>
                  <li>
                   Tables being used in queries with maximum impact on query performance</li>
                  <li>
                  Percentage of queries being affected by tables</li>
                  <li>
                    Tables scanned in select join queries</li>
                  <li>
                   Select queries in peak CPU usage</li>
                  <li>
                    Tables using peak CPU usage</li>
                </ul>

                
                <ul class="list-unstyled list-icons">
                    <li><i class="fa fa-angle-double-right"></i><h5>WLM Management</h5></li>
                  <li>
                   Queue resources hourly</li>
                  <li>
                    Queue resources hourly with CPU usage</li>
                  <li>
                    Query patterns per user/group</li>
                  <li>
                    WLM configurations for Redshift</li>
                </ul>

                <h2>Benefits to the client </h2>

                <ul class="list-unstyled list-icons">
                   
                  <li>
                    <i class="fa fa-angle-double-right"></i>Identify the causes and performance drawbacks in the Redshift cluster</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Guidelines for improvement </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Gaining a good knowledge about Redshift optimization knowledge</li>
                </ul>

                <h2>References</h2>
                
                <ul class="list-unstyled">
                  <li style="padding-left: 0px">
                    <a href="https://docs.aws.amazon.com/redshift/latest/dg/c_high_level_system_architecture.php" target="_blank"><u>Data Warehouse System Architecture - Amazon Redshift</u></a>
                  </li>
                  <li style="padding-left: 0px">
                    <a href="https://docs.aws.amazon.com/redshift/latest/dg/best-practices.php" target="_blank"><u>Amazon Redshift Best Practices - Amazon Redshift</u></a>
                  </li>
                  <li style="padding-left: 0px">
                    <a href="https://aws.amazon.com/blogs/big-data/top-10-performance-tuning-techniques-for-amazon-redshift" target="_blank"><u>Top 10 Performance Tuning Techniques for Amazon Redshift</u></a>
                  </li>
                </ul>
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/ishara-thumb.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Ishara Nuwan Karunathilake

                </h2>
                <small>Senior Tech Lead
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