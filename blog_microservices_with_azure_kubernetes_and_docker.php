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
              <h1 class="blog-post-title">Microservices with Azure Kubernetes and Docker</h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                <h2>Abstract</h2>

                <p>
                  This blog will provide an understanding of microservices architecture followed by data issues that
                  arise when working with microservices. It will then provide an overview of the demo microservices
                  application, which will be configured step by step. The demo application will use Docker images to
                  host microservices inside the Azure Kubernetes service. Finally, how to utilize the power of
                  Kubernetes will be discussed.
                </p>

                <h2>Introduction</h2>

                <p>
                  Microservices have become increasingly popular and for good reason. In this blog post, you will learn
                  how to create a microservices architecture application using the following technologies:
                </p>

                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i><a
                      href="https://azure.microsoft.com/en-us/topic/kubernetes/" target="blank">Azure Kubernetes</a>
                  </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="https://docs.docker.com/"
                      target="blank">Docker</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a
                      href="https://docs.microsoft.com/en-us/azure/service-bus-messaging/service-bus-messaging-overview"
                      target="blank">Azure Service Bus</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a
                      href="https://docs.microsoft.com/en-us/azure/logic-apps/" target="blank">Azure Logic Apps</a>
                  </li>
                  <li> <i class="fa fa-angle-double-right"></i><a
                      href="https://docs.microsoft.com/en-us/azure/sql-database/" target="blank">Azure SQL Database</a>
                  </li>
                </ul>

                <h2>Prerequisites</h2>
                <p>You need to have a basic knowledge of working with Azure services, .Net Core and SQL databases and
                  also have Docker installed on your machine.<br><br>
                  Before we dive into the implementation, let’s have a look at what a microservice is.</p>

                <h1>Microservices Architecture</h1>
                <p>Microservices architecture lets you have an application distributed across services independent of
                  each other. Following are some important attributes of a microservice:</p>

                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Provides high availability, partition tolerance and
                    eventual consistency</li>
                  <li><i class="fa fa-angle-double-right"></i>Communication between microservices should be asynchronus
                    and fewer the communication, the better</li>
                  <li><i class="fa fa-angle-double-right"></i>A microservice does one thing and it does it well</li>
                  <li><i class="fa fa-angle-double-right"></i>Allows you to scale a certain area of the application</li>
                  <li> <i class="fa fa-angle-double-right"></i>Free to use any technology for each microservice </li>
                </ul>

                <p><span style=font-weight:700;>High availability</span> — Every microservice should return a response
                  for every request within an acceptable amount of time </p>
                <p><span style=font-weight:700;>Partition tolerance</span> — When an instance of a microservice goes
                  down, it shouldn’t affect the system. It should guarantee the consistency of the microservice’s
                  availability.
                </p>
                <p> <span style=font-weight:700;>Eventual consistency</span> — Whenever a change happens to the data in
                  a single microservice, that change should be propagated to other relevant microservices, eventually
                </p>
                <p><span style=font-weight:700;>Asynchronous communication</span> — Microservices should not communicate
                  with each other directly. Instead, it should use a message broker to handle the communication for
                  them.
                </p>

                <h1>Microservices and Data</h1>
                <p>This is where most of the issues arise in microservices. Let’s take an example. Imagine an
                  <code>OrderService</code>needs <code>buyer details</code>(Who are customers in CustomerService) from<code>CustomerService</code> . In order
                  to get data, if you make a synchronous call to the <code>CustomerService</code> from <code>OrderService</code>, <code>OrderService</code>
                  will be depending on the <code>CustomerService</code> for data.
                  If the <code>CustomerService</code> goes down, <code>OrderService</code>will
                  not be able to carry out an order.</p>

                <p> The solution to this is to replicate the data required for the <code>OrderService</code>in its own database so
                  it is not required to make a service request to get the data. But, this introduces another problem.
                  What happens when the <code>CustomerService</code> modifies
                  some customer data ? That would make the buyer data
                  obsolete in OrderService. This is called the system data being in an inconsistent state.
                </p>
                <p>The solution to this is asynchronous communication. The <code>CustomerService</code> should notify the
                 <code>OrderService</code> of the data change via asynchronous
                  communication so the <code>OrderService</code> can update its
                  data. Please refer Figure 01.
                </p>

                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog1.jpg"></p>

                <h1>Sample Application</h1>
                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog2.jpg"></p>

                <p>The application we’re going to create consists of two .Net Core Web API services called <code>AuditAPI</code> and <code>CatalogAPI.</code> Each service has its own SQL database hosted in Azure.
                  Both services are Dockerized and are hosted in a DockerHub public repository and are deployed into a
                  Kubernetes cluster hosted in Azure. The asynchronous communication is handled by Azure Service Bus and
                  Logic Apps. Please refer Figure 02.
                </p>
                <p>Both the <code>CatalogAPI</code> and <code>AuditAPI</code> provide basic CRUD operations for Products and <code>AuditLogs</code>entities respectively. Furthermore,
                  whenever a new Product is added via <code>CatalogAPI</code>, an
                 <code>AuditLog</code> should be inserted into the <code>AuditLogs</code> Table. This is handled via asynchronous
                  communication.</p>
                <p> Now let’s start the implementation.</p>

                <h1>1. Getting the APIs Working</h1>
                <p>Go into the Azure portal and create SQL databases. We need two SQL databases called <code>AuditDB</code> and
                  <code>CatalogDB</code>. Refer Figure 03.</p>
                <p class="img-responsive"><img src="https://1billiontech.com/assets/images/microservice-data-blog3.jpg"></p>
                <p>Clone my code from this Repo and open the <code>Catalog</code> solution. Navigate to <code>Properties ->
                  LaunchSettings.json</code> file and insert values <code>DB_SERVER, DB_USER and DB_PASSWORD</code> of the <code>CatalogDB</code>
                  database you just created. Now run the API and you should be redirected to
                  <code>http://localhost:5001/api/version</code> endpoint. To make sure database migrations worked, go to
                  <code>http://localhost:5001/api/products</code> and an empty result should return.
                </p>
                <p>Now open the <code>Audit</code> solution. Navigate to <code>Properties -> LaunchSettings.json</code> file and insert values
                  <code>DB_SERVER, DB_USER and DB_PASSWORD</code> of the AuditDB database you created. Now run the API and you should
                  be redirected to <code>http://localhost:5000/api/version</code> endpoint. To make sure the database migrations
                  worked, go to <code>http://localhost:5000/api/auditlogs</code> and an empty result should return.
                </p>
                <p>Now in <code>CatalogDB</code> and <code>AuditDB</code> databases, there should be <code>Products</code> and <code>AuditLogs</code> tables created
                  respectively from .Net migrations.

                </p>

                <h1>2. Creating an Asynchronous Messaging Back-end in Azure</h1>
                <p>Create an Azure service bus. The basic pricing tier is enough as we are only using a Queue. Then
                  create a Queue called <code>auditqueue</code>. Refer Figure 04. Whenever a new Product is added, a queue message
                  with new <code>Product</code> details will be inserted into the queue.</p>

                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog4.jpg"></p>
                <p>Now create an Azure Logic App to react to the Service Bus queue messages. The logic app will have a
                  trigger <code>When a message is received in a queue</code> and it will have an SQL server action <code>Insert Row</code>. Refer
                  Figure 05.</p>

                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog5.jpg"></p>
                <p>Please note that the content of the queue message will be inserted to the <code>LogMessage</code> column of the
                  <code>AuditLogs</code> table.</p>

                <h1>3. Verifying the Asynchronous Messaging is Working</h1>
                <p>Open the Catalog solution and navigate to the file <code>Properties -> LaunchSettings.json</code> and add your
                  Azure service bus connection string value to the property <code>SB_CONNECTION</code>.
                </p>
                <p> Now run both the Catalog and Audit solutions and insert a new <code>Product</code> by sending a POST request to
                  the the endpoint,<br>
                  <code>http://localhost:5001/api/products</code><br>
                  Use a tool of your preference. Figure 06 shows the request using Postman.</p>
                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog6.jpg"></p>
                <p>Now go to the endpoint:<br>
                 <code> http://localhost:5000/api/auditlogs</code><br>
                  You should be able to see that a new <code>AuditLog</code> message has been inserted for the <code>Product</code> we just added.
                  This was achieved using asynchronous communication using Azure service bus and logic app.
                </p>

                <h1>4. Dockerizing the APIs</h1>
                <p>Now that we have our APIs working, let’s Dockerize them!</p>

                <h1>Prerequisites</h1>

                <p>1. You need to have a DockerHub repository<br>
                  2. Docker must be installed and logged in<br>

                  In each <code>Catalog</code> and <code>Audit</code> project, I have included a Dockerfile which we will build to get a Docker
                  image for each API.<br>

                  Following is the Dockerfile for <code>CatalogAPI</code>.
                </p>
                <p>
                  <script src="https://gist.github.com/SumindaD/50f490dba5b89007da6b2dbb90537bd5.js"></script>
                </p>

                <h2>Following is the Dockerfile for <code>AuditAPI</code>.</h2>
                <p>
                  <script src="https://gist.github.com/SumindaD/50f490dba5b89007da6b2dbb90537bd5.js"></script>
                </p>

                <h2>Let’s build the <code>catalogapi</code>image first.</h2><br>
                <p>1. Open Powershell or CMD and navigate in CLI to the following directory.
                  <code> Docker-Kubernetes-ASB-Microservices\Catalog</code></p>

                <p> 2. Run this command.<br>
                  <code>docker build -f .\CatalogAPI\Dockerfile -t catalogapi:local .</code>

                </p>

                <h2>Let’s build the <code>auditapi</code> image.</h2><br>
                <p>1. Open Powershell or CMD and navigate in CLI to the following directory.<br>
                  <code> Docker-Kubernetes-ASB-Microservices\Audit</code> </p>

                <p> 2. Run this command.
                  <code> docker build -f .\Audit\Dockerfile -t auditapi:local .</code>
                </p>
                <h2>Verify that images are built successfully using the following command:</h2>
                <code>docker images</code>
                <p>Refer Figure 07.</p>
                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog7.jpg"></p>
                <p>In order to upload both images to DockerHub, run these commands to tag and upload the
                  <code>catalogapi</code> and
                  <code>auditapi </code>images to your DockerHub.</p>
                <code>docker tag catalogapi:local <DockerHub Username>/catalogapi:v1<br><br>

                  docker push <DockerHub Username>/catalogapi:v1<br><br>
                  
                  docker tag auditapi:local <DockerHub Username>/auditapi:v1<br><br>
                  
                  docker push <DockerHub Username>/auditapi:v1</code><br><br>
                <p>Verify that the images were successfully uploaded to your repository.</p>
                <h1>5. Deploying API Docker Images in Azure Kubernetes Cluster</h1>
                <h2>Prerequisites</h2>
                <p>1. A Kubernetes Service must be created in the Azure portal.<br>
                  2. It must be connected to the Kubernetes Service in Powershell or CMD.
                </p>
                <p>Once you have the above prerequisites, open the Kubernetes manifest file in the path
                  <code>Docker-Kubernetes-ASB-Microservices\Kubernetes\deployment.yaml</code> and edit the following
                  properties with your details.</p>

                <p><code><-Base 64 Encoded Service Bus Connection String-><br>
  <-Your DockerHub Catalog API Image->:<-Tag-><br>
    <-Your DockerHub Audit API Image->:<-Tag-><br>
    <-DB Server-><br>
    <-DB Username-><br>
    <-DB Password-></code></p>



                <p>Refer the sample Kubernetes manifest file <code>deployment-example.yaml</code> in the same directory.
                </p>
                <p>
                  <script src="https://gist.github.com/SumindaD/68ccf1a9fb812b2252dafbaedff29d8c.js"></script>
                </p>

                <p>1. Open Powershell or CMD and navigate in CLI to the following directory. <br>
                  <code>Docker-Kubernetes-ASB-Microservices\Kubernetes</code>
                  <br> <br>
                  2. Run the following command. <br>
                  <code> kubectl apply -f deployment.yaml</code>
                  <br> <br>
                  3. Run command: <br>
                  <code>kubectl get all</code> <br>
                  and make sure all the pods are in running state. Wait until external IPs are allocated to API
                  services.
                </p>
                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog8.jpg"></p>

                <p>Refer Figure 08. Note the external IP addresses for <code>catalogapi-service</code> and <code>auditapi-service.</code> Now we
                  can do an end to end testing like we did on step 3, but in this case for these Kubernetes hosted API
                  services instead of the locally hosted APIs.</p>

                <h1>6. Verifying Kubernetes Cluster Services are Working</h1>
                <p>Insert a new <code>Product</code> by sending a <code>POST request</code> to the the endpoint,<br>
                 <code> http://<-catalogapi-service external IP->/api/products</code>
                    <br><br>
                    Figure 09 shows the request using Postman.
                </p>

                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog9.jpg"></p>
                <p>Now go to the endpoint:<br>
        <code>http://<-auditapi-service external IP->/api/auditlogs</code>
        You should be able to see that a new AuditLog message has been inserted for the Product we just added.
                </p>
                
                <p><img src="https://1billiontech.com/assets/images/microservice-data-blog10.jpg"></p>
                <h1>Utilizing The Power of Kubernetes</h1>
                <p>Now that we have a fully working Kubernetes cluster with two API services, we can fully utilize all
                  the features provided by Kubernetes. To name a few:</p>
                <ul class="list-unstyled list-icons">
                  <li><i class="fa fa-angle-double-right"></i>Auto upgrades and rollbacks </li>
                  <li><i class="fa fa-angle-double-right"></i> Patching </li>
                  <li><i class="fa fa-angle-double-right"></i> Self healing </li>
                  <li><i class="fa fa-angle-double-right"></i> Auto scaling </li>
                  <li><i class="fa fa-angle-double-right"></i>Highly secured </li>
                  <li><i class="fa fa-angle-double-right"></i>Reduced cost </li>
                  <li><i class="fa fa-angle-double-right"></i> Faster start up speeds </li>

                </ul>
                <p>Following are some useful commands to manage the cluster.<br><br>

                  To change the number of replicas in a deployment<br>
                  <code>kubectl scale deployment/<-deployment name-> --replicas=10</code><br><br>
                  
                  To change the pod image in a deployment (this is used for upgrades)<br>
                 <code> kubectl set image deployment/<-deployment name> <image name>=<DockerHub Username>/<image name>:<-tag></tag></code><br><br>
                  
                  To check the roll-out history<br>
                 <code> kubectl rollout history deployment/<-deployment name></deployment></code><br><br>
                  
                  To undo a deployment<br>
                 <code> kubectl rollout undo deployment/<-deployment name></deployment></code>
                  </p>

                <h1>Link to my Github Repo</h1>
                <p>https://github.com/SumindaD/Docker-Kubernetes-ASB-Microservices</p>

                <h2>References</h2><br>
                <div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

                  <!-- IMAGE -->
                  <figure class="blog-item-small-image margin-bottom-20">
                    <img class="img-responsive" src="assets/images/kubernetes.png" alt="">
                  </figure>
  
                  <div class="blog-item-small-content">
  
                    <h2><a href="https://kubernetes.io/docs/home/">Kubernetes Documentation</a></h2>
    <p>Kubernetes is an open source container orchestration engine for automating deployment, scaling, and management of…</p>
    <p><a href="https://kubernetes.io/">kubernetes.io</a></p>
                                     
                  </div>
  
                </div>

                <div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

                  <!-- IMAGE -->
                  <figure class="blog-item-small-image margin-bottom-20">
                    <img class="img-responsive" src="assets/images/docs-docker.png" alt="">
                  </figure>
  
                  <div class="blog-item-small-content">
  
                    <h2><a href="https://docs.docker.com/">Docker Documentation</a></h2>
   <p>Get started with Docker Try our new multi-part walkthrough that covers writing your first app, data storage…</p>
    <p><a href="https://docs.docker.com/">docs.docker.com</a></p>
                                     
                  </div>
  
                </div>
                <div style="clear: both"></div>
                <div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

                  <!-- IMAGE -->
                  <figure class="blog-item-small-image margin-bottom-20">
                    <img class="img-responsive" src="assets/images/azure-thumb.png" alt="">
                  </figure>
  
                  <div class="blog-item-small-content">
  
                    <h2><a href="https://docs.docker.com/">Azure Service Bus messaging overview </a></h2>
<p>Microsoft Azure Service Bus is a fully managed enterprise integration message broker...</p>
    <p><a href="https://docs.docker.com/">docs.microsoft.com</a></p>
                                     
                  </div>
  
                </div>

               
                <div style="clear: both"></div>
                
              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="https://1billiontech.com/assets/images/suminda.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Suminda De Silva

                </h2>
                <small>Senior Software Engineer
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