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



    <section id="portfolio" class="nopadding-bottom">

      <div class="container">



        <div class="row">

          <!-- LEFT -->

          <div class="col-md-8 col-sm-8">



            <div class="careers-left">

              <h1 class="blog-post-title">Building SaaS based enterprise cloud applications – white Paper</h1>

              <br>

              <!-- article content -->

              <div class="margin-bottom-80">

                <h2>INTRODUCTION</h2>

                <p class="dropcap">According to NIST, “cloud computing is a model for enabling ubiquitous, convenient, on-demand network access

                  to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications and

                  services) that can be rapidly provisioned and released with minimal management effort or service provider

                  interaction (NIST, 2011The traditional approach incur a huge capital expenditure upfront along with too

                  much excess capacity not allowing to predict the capacity based on the market demand. The Cloud Computing

                  approach has the ability to provision computing capabilities without requiring the human interaction with

                  the service provider. In addition to that, its ability to have a broad network access, resource pooling,

                  elasticity and measured services are a few of the characteristics, which basically overpower the traditional

                  hardware approach. As benefits, it can drastically cut down the procurement lead time, can produce better

                  scalability, substantial cost savings (no capital cost, pay for what you use) with less management headaches

                  in terms of operational costs.</p>



                <h2>CLOUD SERVICE MODELS</h2>

                <p>There are three (03) basic cloud service models such as IaaS (Infrastructure as a Service), Platform as a

                  Service (PaaS) and Software as a Service (SaaS).</p>

                <h2>SAAS SERVICE MODEL</h2>

                <p>In the SaaS cloud service model the consumer does not manage or control the underlying cloud infrastructure

                  including network, servers, operating systems, storage or even individual application capabilities with

                  the possible exception of limited user specific application configuration settings. A typical SaaS based

                  application primarily provide multi-tenancy, scalability, customization and resource pooling features to

                  the client.</p>

                <h2>MULTI-TENANACY MODELS</h2>

                <p>There are three basic multi-tenancy models. (See Figure 01)</p>

                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>Separate applications and separate databases</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>One shared application and separate databases</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>One shared application and one shared database</li>

                </ul>

                <p>

                  <img class="img-responsive" src="assets/images/fig-1.png">

                </p>

                <h2>MULTY-TENANACY DATA ARCHITECTURE</h2>

                <p>Based on above multi-tenancy models, there can be three types of multi-tenancy data architecture approaches

                  explained considering the way the data is stored (See Figure 2).</p>



                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>

                    <h2>Separate Database</h2>

                  </li>

                  <p>In this approach, each tenant data is stored in a separate database ensuring that the tenant can access

                    only the specific tenant database. A separate database connection pool should be set up and need to select

                    the connection pool based on the tenant ID associated with the logged in user.</p>

                </ul>

                <p class="text-center">

                  <img class="img-responsive" src="assets/images/fig-2.png">

                  <br>

                  <br>Figure 2 – Multi-tenancy Data Architectures</p>

                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>

                    <h2>Shared Database – Separate Schema</h2>

                  </li>

                  <p>In this approach, the data is stored in separate schema in a single database for each tenant. Similar to

                    the first approach separate connection pools can be created for each database schema. Alternatively a

                    single connection pool also can be used and based on the connection tenant ID (i.e. using SET SCHEMA

                    SQL command), the relevant schema is selected.</p>

                  <li>

                    <i class="fa fa-angle-double-right"></i>

                    <h2>Shared Database – Shared Schema (Horizontally Partitioned)</h2>

                  </li>

                  <p>In this approach, the data is stored in a single database schema. The tenant is separated from the tenant

                    ID, which is represented by a separate column in each table in the schema. Only one connection pool is

                    configured at the application level. Based on the tenant ID the database schema should be partitioned

                    (horizontally) or indexed to speed up the performance.</p>

                </ul>



                <h2>WHAT IS THE BEST APPROACH?</h2>

                <p>Each approach has its own advantages and limitations. The solution architects can basically decide the best

                  possible architectural approach based on the client requirements and the severity of the application.

                  <br>

                  <br> The isolated/ separated database approach is considered as the easiest and the “premium” approach, considering

                  the high capability of data isolation. However, as a downside, the cost of hardware is relatively high

                  mainly because of the number of databases that are created for all the required tenants. This approach

                  is ideal for applications with very high data isolation requirement with relatively a high deployment budget.

                  <br>

                  <br> The shared database – separate schema approach is again an easy to implement approach. As a downside,

                  in the event of a failure, the restoration of tenant data is a time consuming and a costly affair. Since

                  this approach can handle multiple schema within a single database, this application cost is quite low compared

                  to the isolated database approach.

                  <br>

                  <br> The shared database – shared schema approach has the lowest hardware and backup cost compared to other

                  two approaches. However the development time is relatively more compared to other approaches mainly because

                  it is required to apply the maximum level of security not allowing to share data of other tenants.</p>



                <h2>THE CASE STUDY</h2>

                <p>Auxenta recently engaged in an enterprise SaaS based cloud implementation for an European client. Prior introducing

                  the new application, the client was managing the operations with a standalone application, which they had

                  to deploy at each client location. This basically added more operational overheads on a day to day basis.

                  <br>

                  <br> Due to these limitations, the company wanted to re-write and re-engineer the application leveraging the

                  latest technologies along with SaaS based multi-tenant features. The developed application consists of

                  both web and mobile fronts, which can seamlessly interact with the cloud (See Figure 3). Separate native

                  mobile applications were developed (for iOS and Android) to provide the maximum usability with its asynchronous

                  data synchronization feature. A lightweight database was used with native mobile application distributions

                  to facilitate this task. The mobile web application, which has more application features along with administrative

                  functions communicates real-time with the application back-end via REST APIs.

                  <br>

                  <br> The product can create multiple instances for each enterprise and allow each enterprise to manage their

                  own instances. The complete infrastructure is maintained in the Amazon Web Services (AWS) IaaS service

                  offering.

                  <br>

                  <br> In addition to its multi-tenant capability, the application was built considering the following key architectural

                  goals.</p>

                <ul class="list-unstyled list-icons">

                  <li>

                    <i class="fa fa-angle-double-right"></i>Availability – Application server capability was catered by having elastic load balancers and the

                    database level availability is managed through AWS native features such as RDS.</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Scalability – The AWS auto scale ability will be used to scale out the databases depending on the

                    load situation.</li>

                  <li>

                    <i class="fa fa-angle-double-right"></i>Integration – Internal integrations are via REST web services and external integrations can be SOAP/REST

                    web services</li>

                </ul>

                <p class="text-center">

                  <img src="assets/images/fig-3.png">

                  <br>

                  <br>Figure 3 – The Solution Architecture</p>

                <h2>REFERENCES</h2>

                <p>NIST (2011), NIST Definition, https://www.nist.gov/news-events/news/2011/10/final-version-nist-cloud-computing-definition-published

                  <br>

                  <br> Cloud Computing Concepts, Technology and Architecture (Book) – Thomas Erl</p>

              </div>



    



            </div>

                      <!-- /article content -->

                      <div class="row tab-post padding-top-20"><!-- post -->

                        <div class="col-md-2 col-sm-2 col-xs-4">

                         <img src="assets/images/crishantha-blog.jpg" width="90">

                      

                        </div>

                        <div class="col-md-10 col-sm-10 col-xs-8">

                          <h2 class="padding-top-20 size-20">Crishantha Nanayakkara</h2>

                          <small>Director of Technology</small>

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

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-117187414-1');

</script>



</body>



</html>