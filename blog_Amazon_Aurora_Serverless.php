<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <?php include 'include/header.php'; ?>
  <style>


:root {
    --bg-table-stripe: #f6f6f5;
    --b-table: #e3e3e2;
    --caption: #242423;
}

table {
    background-color: transparent;
    border-collapse:collapse;
  
}

th {
    text-align:left
}

.dcf-txt-center {
      text-align: center!important
    }

    .dcf-txt-left {
      text-align: left!important
    }

    .dcf-txt-right {
      text-align: right!important
    }
    
.dcf-table caption {
      color: var(--caption);
      font-size: 1.13em;
      font-weight: 700;
      padding-bottom: .56rem
    }

    .dcf-table thead {
      font-size: .84em
    }

    .dcf-table tbody {
      border-bottom: 1px solid var(--b-table);
      border-top: 1px solid var(--b-table);
      font-size: .84em
    }

    .dcf-table tfoot {
      font-size: .84em
    }

    .dcf-table td, .dcf-table th {
      padding-right: 1.78em
    }

    .dcf-table-bordered, .dcf-table-bordered td, .dcf-table-bordered th {
      border: 1px solid var(--b-table)
    }

    .dcf-table-bordered td, .dcf-table-bordered th, .dcf-table-striped td, .dcf-table-striped th {
      padding-left: 1em;
      padding-right: 1em
    }

    .dcf-table-bordered tr:not(:last-child), .dcf-table-striped tr:not(:last-child) {
      border-bottom: 1px solid var(--b-table)
    }

    .dcf-table-striped tbody tr:nth-of-type(2n) {
      background-color: var(--bg-table-stripe)
    }

    .dcf-table thead td, .dcf-table thead th {
      padding-bottom: .75em;
      vertical-align: bottom
    }

    .dcf-table tbody td, .dcf-table tbody th, .dcf-table tfoot td, .dcf-table tfoot th {
      padding-top: .75em;
      vertical-align: top
    }

    .dcf-table tbody td, .dcf-table tbody th {
      padding-bottom: .75em
    }

    .dcf-table-bordered thead th {
      padding-top: 1.33em
    }

    .dcf-wrapper-table-scroll {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      left: 50%;
      margin-left: -50vw;
      margin-right: -50vw;
      padding-bottom: 1em;
      position: relative;
      right: 50%;
      width: 100vw
    }

    @media only screen and (max-width:42.09em) {
      .dcf-table-responsive thead {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        width: 1px;
        white-space: nowrap
      }
      .dcf-table-responsive tr {
        display: block
      }
      .dcf-table-responsive td {
        -webkit-column-gap: 3.16vw;
        -moz-column-gap: 3.16vw;
        column-gap: 3.16vw;
        display: grid;
        grid-template-columns: 1fr 2fr;
        text-align: left!important
      }
      .dcf-table-responsive.dcf-table-bordered, .dcf-table-responsive.dcf-table-bordered thead th {
        border-width: 0
      }
      .dcf-table-responsive.dcf-table-bordered tbody td {
        border-top-width: 0
      }
      .dcf-table-responsive:not(.dcf-table-bordered) tbody tr {
        padding-bottom: .75em
      }
      .dcf-table-responsive:not(.dcf-table-bordered) tbody td {
        padding-bottom: 0
      }
      .dcf-table-responsive:not(.dcf-table-bordered):not(.dcf-table-striped) tbody td {
        padding-right: 0
      }
      .dcf-table-responsive.dcf-table-bordered tbody tr:last-child td:last-child {
        border-bottom-width: 0
      }
      .dcf-table-responsive tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: 700;
        padding-right: 1.78em
      }
    }

.dcf-overflow-x-auto {
      overflow-x: auto!important;
      -webkit-overflow-scrolling: touch
    }
    
</style>
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

    <section id="portfolio" class="nopadding-bottom">
      <div class="container">

        <div class="row">
          <!-- LEFT -->
          <div class="col-md-8 col-sm-8">

            <div class="careers-left">
              <h1 class="blog-post-title">Amazon Aurora Serverless</h1>

              <div>
             
         
              <p><strong>Amazon Aurora</strong></p>
<p>Amazon Aurora [1] is a fully managed relational database engine introduced in October 2014. It was designed with speed and database performance reliability in mind. It is also easy to manage and cost-effective in nature. Initially, it was only compatible with MySQL 5.6, and thereafter PostgreSQL compatibility was also added. The Aurora engine is designed to be five (05) times faster than MySQL and three (03) times faster than PostgreSQL.
  </p>
<p><strong>Amazon Aurora Serverless</strong></p>
<p>Aurora serverless was released in 2018. With Aurora serverless, developers gained the ability to configure Aurora to automatically start up, shut down and scale down or scale up in terms of capacity, based on application needs. There are two versions of Aurora serverless (v1 and v2).&nbsp;</p>
<p>Aurora serverless v2 is the latest version and it is still in preview stage. Currently, Aurora serverless v2 only supports MySQL.</p>

<p><strong>Benefits of Aurora Serverless</strong></p>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>No provisioning needed</li>
<li><i class="fa fa-angle-double-right"></i>Auto scaling</li>
<li><i class="fa fa-angle-double-right"></i>Cost effective</li>
<li><i class="fa fa-angle-double-right"></i>Highly available</li>
</ul>
<p><strong>Aurora Capacity Units (ACUs)</strong></p>
<p>When you create an RDS/Aurora database, you need to provision it irrespective of its usage. However, with Aurora serverless, you do not have to go through that process and provision instances. You have to only set minimum and maximum Aurora Capacity Units (ACUs). Each ACU is equivalent to a specific compute and memory configuration. Users are only charged for the ACUs that are actively being used and the allocated storage capacity. If no ACUs are used no charge will be applied.&nbsp;</p>
<p><strong>Use Cases</strong></p>
<p>Aurora serverless is suitable for applications that have unpredictable workloads. This is because of auto scaling. Also, if an application has infrequent workloads (used only few times a day), Aurora serverless will be a good choice because of its cost saving aspect.</p>
<p>Aurora serverless will be a perfect SQL solution for a serverless based application, because until now there were no good serverless SQL solutions in the market.</p>
<p><strong>Pricing</strong></p>
<p>The Amazon Aurora serverless capacity cost is calculated based on the Aurora Capacity Unit (ACU) running time. One (01) ACU has 2 GB of memory and a certain CPU power. The amount of CPU power allocated to a single ACU is not disclosed by AWS.</p>
<table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-w-100%">
	<thead>
		<tr>
			<th scope="col">Serverless version</th>
			<th scope="col">MySQL</th>
			<th scope="col">PostgreSQL</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">V1</th>
			<td data-label="MySQL">$0.06 per ACU hour

</td>
			<td data-label="PostgreSQL">$0.06 per ACU hour

</td>
		</tr>
		<tr>
			<th scope="row">V2</th>
			<td data-label="MySQL">$0.12 per ACU hour

</td>
			<td data-label="PostgreSQL"></td>
		</tr>
	</tbody>
</table>

<p>Other than ACUs, there are certain other factors to be considered like storage cost, I/O cost, backup storage, and snapshot export cost. Please refer to the detailed Aurora pricing reference material [3] for more details.</p>
<p><strong>How Auto scaling works</strong></p>

<p>Aurora serverless is designed to scale ACUs up or down based on the current load and storage capacity based on the amount of data used by the Aurora database cluster. You can set 256 ACUs as the maximum capacity, which is around 488GB of memory. Database storage automatically scales from 10GB to 128TB.</p>
<p>Aurora serverless cluster will scale up if:</p>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>CPU utilization is above 70% or</li>
<li><i class="fa fa-angle-double-right"></i>More than 90% of the database connections are being used</li>
</ul>
<p>There is no cool down period for scale up.</p>
<p>Aurora serverless cluster will scale down if:</p>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>CPU utilization drops to 30% or</li>
<li><i class="fa fa-angle-double-right"></i>Less than 90% of the database connections are being used</li>
</ul>
<p>There is a 15-minute cool down period for scale down.</p>



<p><strong>Using Aurora Serverless with Lambda Functions</strong></p>
<p>You can only create an Aurora serverless cluster inside a Virtual Private Cloud (VPC) and you can only access the DB cluster within the VPC. This will be an issue if developers don&rsquo;t want to put Lambda functions inside a VPC. Another issue is that since in a Lambda function there is no place to store the connection for reuse, the maximum connection limit of the Aurora serverless cluster can be reached very quickly.</p>
<p>Fortunately, AWS provides a mechanism to solve both these issues. This mechanism is called the Data API. You can choose to enable Data API when you create the database cluster. Instead of directly connecting to the database cluster, you can use Data API endpoint, which is a https endpoint backed by a connection pool. Data API will manage establishing a connection to the cluster and the connection pool. Also, using Data API, you can connect to the Aurora serverless database cluster even if your code is deployed outside of the DB cluster VPC. To use the Data API, you only need to have appropriate permission to the DB cluster and DB cluster secret, which is stored in the AWS secret manager.&nbsp;</p>
<p>If you are using NodeJS, there is a NPM library called Data API client, which makes using Data API even easier. This library converts input and response data into JavaScript types [4].</p>
<p><strong>Limitations</strong></p>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>Does not support Aurora cloning</li>
<li><i class="fa fa-angle-double-right"></i>Does not support Aurora global databases</li>
<li><i class="fa fa-angle-double-right"></i>Does not support Aurora replicas</li>
<li><i class="fa fa-angle-double-right"></i>Does not support IAM database authentication</li>
<li><i class="fa fa-angle-double-right"></i>Cannot change the default ports (MYSQL 3306 and PostgreSQL 5432)</li>
<li><i class="fa fa-angle-double-right"></i>Cannot be accessed publicly. Only works inside the VPC</li>
<li><i class="fa fa-angle-double-right"></i>Can onlymodify a limited number of cluster-level parameters</li>
</ul>


<h2>References</h2><br>
<ol>
<li>Amazon Aurora: <a href="https://aws.amazon.com/rds/aurora" target="blank">www.aws.amazon.com/rds/aurora</a></li><br>
<li>Amazon Aurora Serverless: <a href="https://aws.amazon.com/rds/aurora/serverless/"  target="blank">www.aws.amazon.com/rds/aurora/serverless/</a></li><br>
<li>Amazon Aurora Pricing: <a href="https://aws.amazon.com/rds/aurora/pricing"  target="blank">www.aws.amazon.com/rds/aurora/pricing</a></li><br>
<li>Data API Client: <a href="https://www.npmjs.com/package/data-api-client"  target="blank">www.npmjs.com/package/data-api-client</a></li><br>
<li>Advantages of Aurora Serverless v1:<a href="https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/aurora-serverless.html#aurora-serverless.advantages"  target="blank">www.docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/aurora-serverless.html#aurora-serverless.advantages</a></li><br>
<li>Best practices for working with Amazon Aurora Serverless:<a href="https://aws.amazon.com/blogs/database/best-practices-for-working-with-amazon-aurora-serverless/"  target="blank">www.aws.amazon.com/blogs/database/best-practices-for-working-with-amazon-aurora-serverless/</a></li><br>
</ol>


           
              


<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/shehan-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Shehan Ekanayake

                                                    </h2>
                                                    <small>Technical Lead
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