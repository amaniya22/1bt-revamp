<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <?php include 'include/header.php'; ?>
</head>

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
              <h1 class="blog-post-title">Basics of K-Means Clustering</h1>

              <!-- article content -->
              <div class="margin-bottom-80">

                <h2>Introduction to Machine-Learning:</h2>
                <br>
                <p class="dropcap">
                  Machine Learning is considered as the execution of utilizing the existing algorithms, in order to inject data, grasp from
                  it, and then make a resolution or forecast about something. So rather than developing software procedures
                  with a certain set of directives to achieve a specific task, the machine is instructed using huge amounts
                  of data and algorithms that provides it the capability to absorb, how to accomplish the endeavour.
                </p>
                <p>As an example, one type of algorithm is a classification algorithm. This basically injects data into different
                  clusters or rather segments. The classification algorithm is generally used to distinguish handwritten
                  alphabets and also could be utilized to categorize emails into spam and not-spam.</p>

                <div> Some real world use-cases which utilize Machine Learning:
                  <br>
                  <br>
                  <ul class="list-unstyled list-icons">
                    <li>
                      <i class="fa fa-angle-double-right"></i>Face detection: Identify faces in images (or indicate if a face is present).</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Email filtering: Classify emails into spam and not-spam.</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Medical diagnosis: Diagnose a patient as a sufferer or non-sufferer of some disease.</li>
                    <li>
                      <i class="fa fa-angle-double-right"></i>Weather prediction: Predict, for instance, whether or not it will rain tomorrow.</li>

                  </ul>
                </div>

                <h2>Why do we need Machine Learning:</h2>
                <p>Identifying patterns in a given data-set could only be possible by human brains. When the data-set being
                  immense, the time consumption to evaluate the entire dataset increases. This is where Machine Learning
                  comes into play to reduce the time consumption, when the given data-set is large.
                  <br>
                  <br> In machine learning, tasks are generally classified into broad categories. These categories are based
                  on how learning is received or how feedback on the learning is given to the system developed.</p>

                <p>Machine Learning is typically divided into two major categories:</p>
                <h2>Unsupervised</h2>

                <p>This is used to outline conclusions from data-sets, which contains of input data without labeled responses.
                  It can be notified that, in machine learning it’s differentiated from the supervised algorithm, where the
                  learner is only disposed with some unlabeled samples. The most common unsupervised machine learning approach
                  is cluster analysis, which is utilized for experimental data analysis to discover hidden patterns or grouping,
                  in a given data-set. The appropriate time to utilize the unsupervised algorithm in machine learning, to
                  the greatest extent is when there’s no data on required outcomes, like discovering a target market for
                  a completely new product that, a business has never sold before.
                </p>
                <h2>Supervised</h2>
                <p>A technique in machine learning, where a machine utilizes a cluster of training samples to pursue, to precisely
                  accomplish a task. In supervised learning, we do have access to samples of faultless input-output pairs
                  that we can show to the machine during the training phase. The example of handwriting recognition is generally
                  considered as a supervised learning task. We’ll be injecting the algorithm, a bunch of images of handwritten
                  digits alongside with the accurate labels for those digits, and the algorithm typically absorbs the patterns
                  that relate images to their labels. The it will grasp the correlation among the images and their interconnected
                  numerals, and execute that learned correlation to categorize entirely new images that the algorithm hasn’t
                  seen before.
                </p>
                <p>Supervised Learning is divided into 2 types: Few examples:</p>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>the price of a house in a specific area?</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>the value of the stock?</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>total runs that can be scored in a cricket game?</li>

                </ul>
                <p>Classification: This is where the forecast is based on categorical response values where the data can be
                  divided into certain classifications. The labels normally appears to be in categorical form and symbolizes
                  a finite number of classes. Few examples could be:
                  <br> 1. Given a set of input features, predict whether a Breast Cancer is Benign or Malignant. 2. Given an
                  image correctly, classify as containing Birds or Fishes. 3. From a given email, predict whether it’s a
                  spam or not.</p>

                <h2>What is clustering in machine learning?</h2>
                <p>Clustering algorithms are predominantly utilized in an unsupervised way. They are proposed with a bunch of
                  data instances that must be classified corresponding to some notion of similarity. Basically, clustering
                  is an approach of gathering homogeneous entities together. The end objective of this unsupervised learning
                  technique, is to identify similarities in the data point and group related data points together.
                  <br>
                  <br> The sole intent of clustering is to decide the internal grouping in a bunch of unlabeled data. But how
                  to determine what establishes a good clustering? It can be shown that there is no definite best criterion
                  which would be unbiased of the final aim of the clustering. </p>
               There are number of algorithms implemented to do clustering. Some of them are:
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Centroid based algorithms — K-means, GMM (Gaussian Mixture Model), Fuzzy c-means</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Connectivity based algorithms — All the hierarchical clustering algorithms</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Dimensional Reduction — tSNE, PCA</li>
                </ul>
                <p>But for this post, let’s stick to the most popular and widely used algorithm K-Means.<br>
                  <img class="img-responsive" src="assets/images/clustering-blog-thumb.jpg" alt="">
                </p>
                <p><a href="http://www.mit.edu/~9.54/fall14/slides/Class13.pdf"><b>Ref:</b>www.mit.edu</a></p>

                <h2>What is K-Means clustering?</h2>
                <p>Clustering is generally seen as an unsupervised learning method for data analysis. Nevertheless, in few cases,
                  information about the problem domain is available in addition to the data instances themselves.
                  <br>
                  <br> K-means clustering is mainly utilized, when you have unlabeled data (i.e., data without defined categories
                  or groups). The purpose of this unsupervised machine learning algorithm is to choose clusters or rather
                  groups ,in a given data set, with the number of groups indicated by the variable K. This works repeatedly,
                  in order to assign each and every data point to one of the K cluster, based on the features that are given.
                  The data points are generally grouped based on the feature similarity. The end results of the K-means clustering
                  algorithm would be:
                  <br>
                  <br>1. Centroids of the number of clusters, which were identified (denoted as K).
                  <br> 2. Labels for the training data.
                </p>
                <h2>How it works?</h2>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Categorizes the data into a number of groups as K (K is predefined).</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Choose K points arbitrarily, as centers of clusters.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Distribute the points to their nearest cluster center, conforming to the Euclidean distance function.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Compute the mean or centroid of the entire objects within each cluster.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Iterate steps 2, 3 and 4 up until the matching points are allocated to each cluster in continuous
                    rounds.
                  </li>

                </ul>
                <p>It is known that the seeding procedure utilized throughout the clustering, can remarkably transform the model.
                  Here, the seeding is being considered as the primary position of data points into possible centroids.
                  <br>
                  <br> As an example, if the given data-set includes a number of outliers, and an outlier is chosen to seed the
                  clusters, none of the other data points would fit well with that cluster, and the cluster could be a singleton.
                  In other words, a cluster with only one data point. Selecting the random initial centroids badly will take
                  longer to intersect which may result in poor clustering. There are few solutions to overcome this:
                </p>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>Try different sets of random centroids, and choose the best set.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Eliminate the existing parameters, to change the number of centroids and try multiple seed values.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Generate several models by altering the metric or iterating it even more.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Use a method such as PCA(Principal Components Analysis) to determine variables that have a dangerous
                    consequence on clustering.</li>

                </ul>

                <p>Some use-cases on which this algorithm has been applied?</p>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>K-Means on Digits: Here k-means is used to determine similar digits without using the original label
                    information. </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i> Document Classification: Cluster, documents in multiple categories based on tags, topics, and the
                    content of the document. This is a very common classification problem and k-means is an extremely acceptable
                    algorithm for this intention. The initial processing of the documents is required to portray each document
                    as a vector and uses term frequency to determine generally used terms, that helps to categorize the document.
                    The document vectors are then grouped to help distinguish similarity in document groups.</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Customer Segmentation: Clustering helps marketers , to enhance their customer base, focus on target
                    areas, and divide customers, based on interests and purchase history. The classification would assist
                    the company to focus on certain clusters of customers for certain campaigns.
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>Insurance Fraud Detection: By using the historical data on fraudulent claims, it is feasible to separate
                    new claims based on its nearness to clusters that shows fraudulent patterns. Since insurance fraud can
                    likely have a huge cost impact on an organization, the capability to distinguish frauds is critical.
                  </li>

                </ul>
                <h2>References & Further Readings:</h2>
                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="https://blogs.nvidia.com/blog/2016/07/29/whats-difference-artificial-intelligence-machine-learning-deep-learning-ai/">www.blogs.nvidia.com/blog/2016/07/29/whats-difference-artificial-intelligence-machine-learning-deep-learning-ai/</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="https://jakevdp.github.io/PythonDataScienceHandbook/05.11-k-means.html">www.jakevdp.github.io/PythonDataScienceHandbook/05.11-k-means.html</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="http://docs.h2o.ai/h2o/latest-stable/h2o-docs/data-science/k-means.html">www.docs.h2o.ai/h2o/latest-stable/h2o-docs/data-science/k-means.html</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="https://www.digitalocean.com/community/tutorials/an-introduction-to-machine-learning">www.digitalocean.com/community/tutorials/an-introduction-to-machine-learning</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="http://alex.smola.org/drafts/thebook.pdf">www.alex.smola.org/drafts/thebook.pdf</a>
                  </li>

                </ul>

              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                <img src="/assets/images/K_Gawri.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Kulasangar Gowrisangar
                </h2>
                <small>Author</small>
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