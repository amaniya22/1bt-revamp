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

<h1 class="blog-post-title">AWS Aurora - Why is it better?</h1>



<!-- article content -->



<div class="margin-bottom-80">

    <h1>1.AWS Aurora — Introduction</h1>

<p>

Amazon Aurora, part of the Amazon RDS family, is a fully managed MySQL and PostgreSQL compatible, relational database engine that combines high-end commercial databases with the simplicity and cost-effectiveness of open source databases.</p>

<p>Amazon Aurora provides up to five times better performance than MySQL and three times better performance than PostgreSQL, without doing any programmatic changes to your existing application.</p>



<h1>2.The RDS (MySQL / PostgreSQL) Multi-AZ Architecture</h1>



 <p>In a typical RDS (MySQL, PostgreSQL, etc.), you usually find the following Multi-AZ deployment where the primary, standby and read replicas are in different instances and the storage lies within the EBS volumes of the EC2 instance, which RDS is made of.</p>

  

<br>            

<img src="assets/images/1-aurora.png" class="img-responsive">    

<br><br>   

    

 <h1>3.The Aurora Multi-AZ Architecture</h1>   

    

<br>            

<img src="assets/images/2-aurora.png" class="img-responsive">    

<br><br>     



<p>In a typical Aurora cluster, there should be a minimum of three Availability Zones within the cluster (Note: Aurora only supports regions with a minimum of three Availability Zones). The storage and the compute (EC2) are separated / independent in the Aurora cluster (See the cluster volume in the diagram where the storage exists).

</p>

<p>

Each Availability Zone maintains two copies of the storage of each RDS Aurora instance - altogether a minimum of six copies across the three Availability Zones. The master / primary compute Aurora instance writes data to the data copies in the storage cluster, and the read replicas in the other instances can read the data from the storage cluster. The storage cluster is represented as a single, logical volume to the primary instance and to Aurora Replicas in the Aurora DB cluster.</p>

<p>

An Aurora cluster can have only one master/ primary instance. There are no standby instances in the Aurora cluster.</p>

<p>

Since the Aurora compute instances (EC2) and the Aurora storage cluster is independent, it is quite easy to scale the storage (can scale up to 64 Tebibyte) rather than scaling within EC2 instances in a traditional RDS Multi-AZ architecture.</p>

<p>

There can be fifteen read replicas (compared to five in a typical RDS Multi-AZ architecture). However unlike in a typical RDS cluster, the reading happens synchronously in Aurora.

</p>



<h1>4.High Availability / Fail-Over</h1>    

<p>Aurora maintains HA by having Aurora Read Replicas in the other Availability Zones. Aurora automatically fails over to an Aurora replica in case the primary DB instance becomes unavailable.   </p>

    

<h2>4.1.Aurora Read Replicas</h2>   

<p>

Up to fifteen read replicas can be replicated across multiple Availability Zones. Since the storage cluster is represented as a single, logical volume, Aurora replicas can return the same data as query results with a minimum replica lag. This is quite different to RDS - the data is replicated to RDS Read Replicas in an asynchronous manner - where there is no need to replicate any data because the data is shared among all the instances (primary and read replicas) in the storage cluster</p>

    

<h2>4.2.Primary Instance Fail-Over</h2>

<p>If the primary instance fails, Aurora automatically fails over to a new primary instance. It does so by either creating a new primary instance or promoting a read replica. There is usually a slight interruption to the cluster during this process. The promotion of a read replica takes less time than creating a new primary instance, but if there are no read replicas in the cluster, there is no option but to create a new primary instance. Hence, AWS recommends that you should have at least one or more read replicas (with the same specification of the primary instance) to minimize the down time of the cluster.</p>  

    

    

    

<h1>5.Migration from other Database Engines</h1>   

<h2>5.1.From RDS (MySQL/PostgreSQL) to Aurora</h2>  

<p>The data can be migrated from Amazon RDS for MySQL and Amazon RDS for PostgreSQL into Aurora. (Currently, the migration is limited to these two database engines only). </p>

<p>The migration can be done in two ways;

</p> 

 <p>1.By creating RDS snapshots from RDS MySQL/ PostgreSQL databases and restoring them to Aurora (This is directly facilitated from the AWS Management RDS console)</p>

<p>2.From a standalone MySQL</p>   



    

<br>            

<img src="assets/images/3-aurora.png" class="img-responsive">    

<br><br> 



<h2>2.1.From other Database Engines</h2>

<p>If you wish to migrate databases from databases other than MySQL or PostgreSQL, you can use AWS DMS.</p>

    

 <h1>6.Connection Endpoints</h1>   

    

<p>When you are connecting your application to an Aurora cluster, you will have to route it through a Connection Endpoint. A Connection Endpoint is represented as an Aurora specific URL that contains a host address and a port. In a nutshell, the Connection Endpoints basically abstract the underline database cluster connections allowing them to be more abstract to the application.</p>

<p>When you create an Aurora MySQL / PostgreSQL instance, AWS creates three endpoints at three levels by default.

</p> 

    

 <p>

1.Cluster level endpoints (Cluster endpoints)<br>

2.Read Replica level endpoints (Reader endpoints)<br>

3.Instance level endpoints (Instance endpoints)<br>

</p>   

    

<br>            

<img src="assets/images/4-aurora.png" class="img-responsive">    

<br><br>     

    

 <h2>1.CLUSTER LEVEL ENDPOINTS</h2>

<p>This connects to the current primary DB instance in the DB cluster. This is the only endpoint that can perform write operations. This is the first to be created while setting up the cluster with a single DB instance.</p>

<p>It provides the fail-over support for read / write connections to the DB cluster. If the current primary DB instance of a DB cluster fails, Aurora automatically routes to a read replica and promotes that instance to a primary DB instance. That will be automatically reflected to the handler and everything is done automatically. Due to this smooth transition by the handler, the client will not experience a significant downtime during the fail-over.</p>

<h2>2.READER LEVEL ENDPOINTS</h2>

<p>These are built-in endpoints for read replicas. If you have multiple read replicas, the reader level endpoint will balance the load among all the read replicas. If there are no read replicas available in the cluster, then the traffic will be transferred to the master instance.</p>

<h2>3.INSTANCE LEVEL ENDPOINTS</h2>

<p>At the instance level, one endpoint is created per instance. With the instance endpoint, you are connecting directly to the instance just like a traditional connection. Use of the instance endpoint only (without the cluster endpoint) is discouraged without a strong justification. You can use cluster endpoints along with instance endpoints for the manual load balancing of read queries.</p>

<h2>4.CUSTOM LEVEL ENDPOINTS</h2>

<p>In addition to the above three endpoint levels, you can create your own Custom Level Endpoints for your custom level requirements. Unlike the other three endpoint levels, you have to create these endpoints yourself.</p>

   

<h1>7.Aurora — Security</h1> 

<p>AWS Aurora security is managed at many levels.</p>    

 <p>   

• Using IAM controls access to the Aurora DB cluster<br>

• At the VPC level, the Aurora cluster should be created within a VPC<br>

• Encryption is handled in-transit and at rest. When creating the cluster, there is a check box to be selected to activate the cluster encryption. However, you cannot encrypt an already created cluster. But you can restore an unencrypted cluster snapshot as an encrypted one. Once you encrypt the cluster, you cannot decrypt it.

 </p>   

    

<h1>8.Aurora — Global Databases</h1>   

    

 <br>            

<img src="assets/images/5-aurora.png" class="img-responsive">    

<br><br>    

    

    

    

 <p>The Aurora Global Database consists of;   </p>

<p>

• One primary region — performs both read and write functions<br>

• One secondary region — this is where the read-only replicas reside. It can be scaled out to have more replicas within the region itself</p>

<p>The Global Databases are useful when any application has a worldwide access. Then the secondary region can be located based on the demand it has worldwide. It can be useful in a regional fail-over as well. If for some reason, a cluster goes down, the replica can be promoted to be the primary one and can be provided with read - write capability under one minute.</p>

<p>The data replication happens between regions with very low latency (even under a second). A dedicated infrastructure is being used to do this task.

</p>  

    

 <h1>9.Aurora — BackTrack</h1>   

<p>Backtracking is bit similar to the Backup-Restore procedure but it does not have the same versatility that you see in the Backup-Restore process. However, if you have to backtrack to the previous state due to a mistake in the databases, it is quite an easy process. Backtracking takes less time than Backup-Restore, but the Backup-Restore process allows you to work with snapshots and can work with different clusters, whereas Backtrack confines you to a single cluster.</p>  

    

<h1>10.Aurora MySQL Cross Region Replication</h1>    

    

<p>This is different to Backtrack and does not use any global databases. This is a Aurora MySQL database replication from one region to another. You can have up to five cross-region DB clusters that are read replicas.</p>

<p>Aurora takes a snapshot of the source cluster and transfers the snapshot to the read replica region. This takes more time for cross region read replica created compared to Global Databases, but these regional read replicas can always be promoted to a standalone cluster at any point.

</p>    

    

<h1>11.	Aurora Serverless</h1>   

<p><a href="https://aws.amazon.com/rds/aurora/serverless/" target="_blank">Aurora Serverless</a> is the only RDBMS serverless offering of AWS other than the NoSQL serverless offering, DynamoDB. It is compatible with both MySQL and PostgreSQL database engines.  </p>  

<p>Aurora Serverless has following benefits:</p>  



<p>

1.Simple — Removes the complexity of managing database instances and capacity. The database will automatically start up, shut down, and scale to match your application’s needs. It is a simple, cost effective option for infrequent, intermittent or unpredictable workloads.<br>

2.Scalable — Seamlessly scale compute and memory capacity as needed with no disruption to client connections.<br>

3.Cost Effective — Pay on a per-second basis only for the database resources you consume. You don’t pay for the database instance unless it’s actually running.<br>

4.Highly Available — Built on distributed, fault-tolerant, self-healing Aurora storage with 6-way replication to protect against data loss.

</p>

   

    

<h2>References</h2>

<p>

1.Tebibyte (Wiki) : https://en.wikipedia.org/wiki/Tebibyte<br>

2.Failover with Amazon Aurora PostgreSQL : https://aws.amazon.com/blogs/database/failover-with-amazon-aurora-postgresql/<br>

3.Deep Dive into Aurora (Youtube) : https://www.youtube.com/watch?v=U42mC_iKSBg<br>

4.Deep Dive into Aurora (Slidesshare): https://www.slideshare.net/AmazonWebServices/srv308-deep-dive-on-amazon-aurora<br>

</p>

   

    

    

    

    

    



<!-- /article content -->



</div>







<div class="row tab-post padding-top-20">

<!-- post -->

<div class="col-md-2 col-sm-2 col-xs-4">

<img src="assets/images/chrishantha.jpeg" width="90">



</div>

<div class="col-md-10 col-sm-10 col-xs-8">

<h2 class="padding-top-20 size-20">Crishantha Nanayakkara



</h2>

<small>Vice President - Technology

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