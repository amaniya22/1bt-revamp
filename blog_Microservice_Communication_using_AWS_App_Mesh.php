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
              <h1 class="blog-post-title">Microservice Communication using AWS App Mesh</h1>
              <div>
              <p><strong>The Service Mesh</strong></p>
<p>In a typical monolithic application, internal communication can be a trivial exercise. We can invoke another component of the application using a native call or using a simple request/response API.&nbsp;</p>
<p>In a typical Microservice Architecture (MSA), we can directly invoke a microservice from another microservice as done in a Service Oriented Architecture (SOA) monolithic based design. However, when our application scales and we have a lot of microservices communicating with each other, it is hard to track requests and we have no visibility to the application.</p>
<p>As a solution, the Service Mesh Architecture was introduced in the industry. Service Mesh is an abstracted infrastructure layer that provides service to service communication.&nbsp;</p>
<p><strong>The Sidecar Pattern</strong></p>
<p>Service Mesh routes requests between microservices using an Edge Proxy. Each microservice will have an Edge Proxy attached to them. Rather than communicating directly, incoming and outgoing communications between services will be handled via these Edge Proxies.&nbsp;</p>
<p>Since the Edge Proxy has the visibility of all incoming and outgoing requests, it can handle monitoring, request tracing, logging and configuration without modifying the microservices application code. Therefore, microservices don&rsquo;t have to worry about Non-Functional Requirements (NFRs). Basically, microservices are delegating the inter-service communication to the Edge Proxy. This method of segregating application functionalities to a separate process/container is explained as the sidecar pattern (see Figure 1).</p>

              <p><img class="img-responsive" src="https://1billiontech.com/assets/images/aws-mesh-thumb.jpg"></p>

            
              
              <p>There are few popular and well-established open-source Service Mesh offerings in the market, such as <a href="http://istio.io/">Istio</a> and <a href="http://linkerd.io/">Linkerd</a>.&nbsp;</p>
<p><strong>AWS App Mesh</strong></p>
<p><a href="https://aws.amazon.com/app-mesh/">AWS App Mesh</a> [1] is the AWS implementation of the Service Mesh. This fully managed service can be used with Amazon Elastic Container Service (ECS), AWS Fargate, Elastic Kubernetes Service (EKS) or vanilla containers hosted in EC2. Currently, App Mesh doesn&rsquo;t support AWS Lambda, but it&rsquo;s in the App Mesh future roadmap [2].</p>
<p>In addition, App Mesh is integrated with AWS services like Cloud Map, Certificate Manager, CloudWatch, X-Ray and third party tools like Datadog,Alcide, HashiCorp, Sysdig, SignalFx, Spotinst, Tetrate, NeuVector, Weaveworks, Twistlock, Wavefront by VMware, and Aqua.</p>
<p>App mesh uses an Envoy proxy as it is a sidecar proxy. You need to include an Envoy proxy with your ECS task/Kubernetes pod or add it to the EC2 instance that the microservices container is running, if you are not using ECS or EKS. Also, you need to enable/configure service discovery to use App Mesh. If you are using ECS, you can easily enable service discovery in ECS create service wizard [3].&nbsp;</p>
<p><strong>Key Components of the App Mesh Control Plane</strong></p>
<p>There are two main components of a Service Mesh.&nbsp;</p>
<ol>
<li>Data Pane &ndash; Consists of the Sidecar Proxy along with its Microservice</li>
<li>Control Pane &ndash; NFR components</li>
</ol>
<p>Just like in any other Service Mesh, the App Mesh Control Pane consists of the following key components (see Figure 2).</p>
<p><strong>Service Mesh</strong>: This is the boundary of the App Mesh. All components of the mesh reside inside this.</p>
<p><strong>Virtual Services</strong>: This is a virtual representation of your microservice. Each microservice should have a virtual service.</p>
<p><strong>Virtual Nodes</strong>: This is the logical representation of a task group such as ECS service or Kubernetes deployment. You can directly attach a virtual node to a virtual service or you can attach it to a virtual route. Here you have to configure the service discovery config of the microservice, virtual service that the virtual node will communicate with, Transport Layer Security (TLS) configuration and HTTP access logs path.&nbsp;</p>
<p><strong>Virtual Routers</strong>: Handles traffic for one or more virtual services within your mesh. Using virtual routers, you can direct incoming requests to different virtual nodes. You need to define routes inside the virtual routers to configure traffic direction.</p>
<p><strong>Routes</strong>: Associated with a virtual router, it directs traffic that matches a service name prefix to one or more virtual nodes. You can specify the weightage and the percentage of traffic that each virtual node should receive. This feature can be used for canary deployments.</p>

<p><img class="img-responsive" src="https://1billiontech.com/assets/images/aws-mesh-thumb2.jpg"></p>

<p><strong>App Mesh Features</strong></p>
<ul>
<li>Easy integration with Amazon ECS, Amazon EKS, AWS Fargate and Kubernetes running on EC2</li>
<li>Logging and monitoring using Amazon CloudWatch</li>
<li>End to end visibility of the application using Amazon X-Ray</li>
<li>Service-to-Service Authentication with Mutual TLS (mTLS)</li>
<li>Canary deployments using virtual routers and routes</li>
<li>Fully managed AWS service</li>
</ul>
<p><strong>App Mesh Pricing</strong></p>
<p>Using App Mesh is free of charge. You are paying for the underlying infrastructure/resources that you use with the App Mesh.</p>
<p><strong>Missing Features</strong></p>
<p>App Mesh was introduced back in 2018 and it&rsquo;s relatively new compared to Istio and Linkerd. Therefore, it lacks certain features and is not fully integrated with a few AWS services.</p>
<ul>
<li>Limiting rates to protect services from traffic spikes is not available yet</li>
<li>There is no way to configure options for the circuit breaker</li>
<li>AWS Lambda integration</li>
<li>AWS API Gateway support</li>
</ul>

<p><h2>Conclusion</h2><br>
<p>Although App Mesh is a relatively new service mesh, it offers seamless integration with most AWS services. it is a free managed service and is easy to configure. Since more and more developers are shifting towards microservice architecture, AWS is focusing on integrating the App Mesh with other AWS services like Lambda, API Gateway and bringing in features like rate limiting in the near future.</p>            
<div><h2>References</h2><br>
<ol>
<li>AWS App Mesh: <a href="https://aws.amazon.com/app-mesh" target="_blank">www.aws.amazon.com/app-mesh</a></li>
<li>App Mesh Roadmap: <a href="https://github.com/aws/aws-app-mesh-roadmap/projects"target="_blank">www.github.com/aws/aws-app-mesh-roadmap/projects</a></li>
<li>App Mesh Service Discovery: <a href="https://docs.aws.amazon.com/AmazonECS/latest/developerguide/service-configure-servicediscovery.html" target="_blank">www.docs.aws.amazon.com/AmazonECS/latest/developerguide/service-configure-servicediscovery.html</a></li>
<li><a href="https://docs.aws.amazon.com/app-mesh/latest/userguide/images/simple-app-with-mesh-diagram.png"target="_blank" >www.docs.aws.amazon.com/app-mesh/latest/userguide/images/simple-app-with-mesh-diagram.png</a></li>
</ol>
</div>

<div class="row">
                                       <div class="col-md-2 col-sm-2 col-xs-4">
                                                    <img src="assets/images/shehan-thumb.jpg" width="90">

                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-8">
                                                    <h2 class="padding-top-20 size-20">Shehan Ekanayake

                                                    </h2>
                                                    <small>Associate Technical Lead

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