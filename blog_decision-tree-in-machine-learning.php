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
              <h1 class="blog-post-title">Decision Tree in Machine Learning</h1>

              <!-- article content -->
                <h2>What are Machine Learning Algorithms?</h2><br>
              <div class="margin-bottom-80">
                <p class="dropcap">
                  Algorithms are step-by-step computational procedures for solving a problem, similar to decision-making flowcharts, used for information processing, mathematical calculation, and other related operations.
                </p>
                  <h2 style="text-transform: uppercase;">Basics of decision tree algorithm</h2><br>
                  <h2>Introduction to decision tree</h2>
                <p>Decision Tree is a type of Supervised Learning Algorithm (i.e. you explain what the input is and what the corresponding output is in the training data) that can be used for solving regression and classification problems by using tree representation. Decision trees can handle both <strong>categorical</strong> and <strong>continuous</strong> data. The tree can be explained by two entities, namely <strong>decision nodes</strong> and <strong>leaf nodes</strong>. The leaf nodes are the decisions or the final outcomes (categorical or continuous value) and each leaf node corresponds to a class label. The decision nodes or internal nodes are where the data is split (has two or more branches) and each internal nodes of the tree corresponds to an attribute. The topmost decision node in a tree which corresponds to the best predictor is call called the <strong>root node.</strong> 
                </p>
                  <img src="assets/images/Decision-tree.jpg"><br><br>
                  
                  <p style="text-transform: uppercase;"><strong>There are two main types of Decision Trees:</strong></p>
 <h2>1.	Classification trees (Yes/No types)</h2>
<p>What we’ve seen above was an example of a classification tree, where the outcome was a variable like ‘accept
offer’ or Decline offer. Here the decision variable is Categorical.</p>
<h2>2.  Regression trees (Continuous data types)</h2>
<p>Here the decision or the outcome variable is Continuous and is considered a real number (i.e. a number like 1,2,3). Example of real numbers is price of a house or a patient's length of stay in a hospital</p>

                <p>
                  <strong>Use Case 01</strong> - Analysis by making best efforts to process the analytics data to identify business
                  queries and visualize data with AWS based BI tools.
                </p>
                <p>
                  <strong>Use Case 02</strong> - Build a predictive model that leverages the AWS ML and associated services using
                  the available Adobe Analytics data and make business decisions using a ML model.
                </p>
                  <img src="assets/images/Decision-tree-1.jpg"><br><br>

                <h2>How to build this??</h2>
                  <p>There are many specific decision-tree algorithms to build a decision tree.</p>

                <ul class="list-unstyled list-icons">
                  <li>
                    <i class="fa fa-angle-double-right"></i><a href="https://en.wikipedia.org/wiki/ID3_algorithm" target="_blank">ID3</a> (Iterative Dichotomiser 3)</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i><a href="https://en.wikipedia.org/wiki/C4.5_algorithm" target="_blank">C4.5</a> (successor of ID3)</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i><a href="https://en.wikipedia.org/wiki/Predictive_analytics#Classification_and_regression_trees_.28CART.29" target="_blank">CART</a> (Classification And Regression Tree)</li>
                  <li>
                    <i class="fa fa-angle-double-right"></i><a href="https://en.wikipedia.org/wiki/Chi-square_automatic_interaction_detection" target="_blank">CHAID</a> (CHi-squared Automatic Interaction Detector). Performs multi-level splits when computing classification trees.</li>
                  <li>
                      <i class="fa fa-angle-double-right"></i><a href="https://en.wikipedia.org/wiki/Multivariate_adaptive_regression_spline" target="_blank">MARS: extends decision trees to handle numerical data better</a></li>
                </ul>
                  
                  
                  
<h2>Here we only talk about a few which are,</h2>
<ul class="list-unstyled list-icons">
<li><i class="fa fa-angle-double-right"></i>ID3 (Iterative Dichotomiser 3) → uses Entropy and Information Gain as metrics.</li>
<li><i class="fa fa-angle-double-right"></i>CART (Classification And Regression Tree) → uses the Gini Index (Classification) as a metric.</li></ul>
                  
<h2> ID3 (Iterative Dichotomiser 3) Algorithm</h2>
<p>ID3 (Iterative Dichotomiser 3) is one of the most common decision tree algorithm introduced in 1986 by Ross Quinlan. The ID3 algorithm builds decision trees using a top-down, greedy approach and it uses Entropy and Information Gain to construct a decision tree. 
Before discussing the ID3 algorithm, we’ll go through a few definitions.</p>

<h2> Entropy</h2>
<p>Entropy, also called as Shannon Entropy is denoted by H(S) for a finite set S, is the measure of the amount 
of uncertainty or randomness in data.</p>
<img src="assets/images/Decision-tree-2.jpg"><br><br>
                  
<p>S - The current (data) set for which entropy is being calculated (change every iteration of the ID3 algorithm)<br>
x - Set of classes in S	x={ yes, no }</br>
p(x) - The proportion of the number of elements in class x to the number of elements in set S</p>
                  
<p>Given a collection S containing positive and negative examples of some target concept, the entropy of S relative to
this boolean classification is:</p>
    <img src="assets/images/Decision-tree-3.jpg"><br>
                  <caption>Here, p+ and p- are the proportion of positive and negative examples in S.</caption><br><br>

<h2>For a binary classification problem with only two classes, positive and negative class.</h2>
  <ul class="list-unstyled list-icons">                
<li><i class="fa fa-angle-double-right"></i>If all examples are positive or all negative (if all members of S belong to the same class) then entropy will be 0 i.e, low.</li> 
<li><i class="fa fa-angle-double-right"></i>For example, if all examples are positive (p+ = 1), then p- is 0, and Entropy(S) = -1. log2(1) – 0. log2 0 = -1. 0 – 0. log2 0 = 0.</li>
<li><i class="fa fa-angle-double-right"></i>If half of the records are of positive class and half are of negative class (collection contains an equal number of positive and negative examples) then entropy is 1 i.e, high.</li>
<li><i class="fa fa-angle-double-right"></i>For example, if half of the records are of positive (p+ = 0.5) , then p- is 0.5, and Entropy(S) = -0.5. log2(0.5) – 0.5. log2 0.5 = 1.</li>
<li><i class="fa fa-angle-double-right"></i>If the collection contains unequal numbers of positive and negative examples, the entropy is between 0 and 1.</li></ul>

                  <h2>Information Gain</h2>
<p>Information gain is also called as Kullback-Leibler divergence denoted by IG(S,A) for a set ‘S’ is the effective change in entropy after deciding on a particular attribute ‘A’. It measures the relative change in entropy with respect to the independent variables. IG(A) is the measure of the difference in entropy from before to after the set ‘S’ is split on an attribute ‘A’. In other words, how much uncertainty in ‘S’ was reduced after splitting set ‘S’ on attribute ‘A’. It decides which attribute goes into a decision node. To minimize the decision tree depth, the attribute with the most entropy reduction is the best choice.</p>
<img src="assets/images/Decision-tree-4.jpg"><br>
<p>Alternatively</p>
  <img src="assets/images/Decision-tree-5.jpg"><br>              
<p><strong>where,</strong><br>
		IG(S, A) - information gain by applying feature A.<br>
		H(S) - Entropy of set S<br>
		T  - The subset created from splitting S by attributing A such that<img src="assets/images/Decision-tree-6.jpg">  <br>
		p(x) - The proportion of the number of elements in x to the number of elements in set S<br>
		H(x) - Entropy of subset x</p>
                  
<p>To get a clear understanding of calculating <strong>information gain & entropy</strong>, we will try to implement it on sample data.
Consider a piece of data collected from a computer shop where the features are age, income, student, credit rating and the outcome variable is whether the customer buys a computer or not. Now, our job is to build a predictive model which takes in above 4 parameters and predicts whether the customer will buy a computer or not. We’ll build a decision tree to do that using <strong>ID3 algorithm.</strong>
</p>                  
    <img src="assets/images/Decision-tree-table.jpg"><br><br>              
                  
 <h2>ID3 Algorithm will perform following tasks recursively</h2>
1.	Create a root node for the tree<br>
2.	If all examples are positive, return leaf node ‘positive’<br>
3.	Else if all examples are negative, return leaf node ‘negative’<br>
4.	Calculate the entropy of current state H(S)<br>
5.	For each attribute, calculate the entropy with respect to the attribute ‘x’ denoted by H(S, x)<br>
6.	Select the attribute which has the maximum value of IG(S, x)<br>
7.	Remove the attribute that offers highest IG from the set of attributes<br>
8.	Repeat until we run out of all attributes, or the decision tree has all leaf nodes.<br>
                 
<p>Step 1: The initial step is to calculate H(S), the Entropy of the current state. In the above example, we can see in total there are 5 No’s and 9 Yes’s. </p>
   <img src="assets/images/Decision-tree-table1.jpg">   <img src="assets/images/Decision-tree-7.jpg">  <br><br>           
                  
                  
<p>Step 2 : The next step is to calculate H(S,x), the entropy with respect to the attribute ‘x’ for each attribute. 
In the above example, The expected information needed to classify a tuple in ‘S’ if the tuples are 
partitioned according to age is,</p>
    <img src="assets/images/Decision-tree-table2.jpg">   <img src="assets/images/Decision-tree-8.jpg"> <br><br>       
        
    <p>Hence, the gain in information from such partitioning would be,</p>
                   <img src="assets/images/Decision-tree-9.jpg">    <br><br>  
                                    
<p> Similarly,</p>                 
<img src="assets/images/Decision-tree-10.jpg">  <br><br>               
                  
<p>Step 3: Choose attribute with the largest information gain, IG(S,x) as the decision node, divide the dataset by its branches and repeat the same process on every branch.
Age has the highest information gain among the attributes, so Age is selected as the splitting attribute.</p>
<img src="assets/images/Decision-tree-11.jpg">    <br><br> 

<p>Step 4a: A branch with an entropy of 0 is a leaf node.</p>                 
<img src="assets/images/Decision-tree-12.jpg">   <br><br>              

<p>Step 4b : A branch with entropy more than 0 needs further splitting. </p>                      
<img src="assets/images/Decision-tree-13.jpg">   <br><br>            
<p>Step 5: The ID3 algorithm is run recursively on the non-leaf branches until all data is classified.</p>                

  <h2>Decision Tree to Decision Rules</h2>
<p>A decision tree can easily be transformed into a set of rules by mapping from the root node to the leaf nodes one by one. </p>             <img src="assets/images/Decision-tree-14.jpg">   <br><br>
    
<p>R1 : If (Age=Youth) AND (Student=Yes) THEN Buys_computer=Yes<br>
R2 : If (Age=Youth) AND (Student=No) THEN Buys_computer=No<br>
R3 : If (Age=middle_aged) THEN Buys_computer=Yes<br>
R4 : If (Age=Senior) AND (Credit_rating=Fair) THEN Buys_computer=No<br>
R5 : If (Age=Senior) AND (Credit_rating =Excellent) THEN Buys_computer=Yes
</p>
                
 <p>Pseudocode: ID3 is a greedy algorithm that grows the tree top-down, at each node selecting the attribute that best 
classifies the local training examples. This process continues until the tree perfectly classifies the training examples
or until all attributes have been used.
The pseudocode assumes that the attributes are discrete and that the classification is binary. Examples are the
training example. Target_attribute is the attribute whose value is to be predicted by the tree. Attributes are a list 
of other attributes that may be tested by the learned decision tree. Finally, it returns a decision tree that correctly 
classifies the given Examples.
</p>                 
                  
<h2>Advantages and Disadvantages of Decision Tree Algorithm</h2>  
 <strong>Advantages:</strong>
    <p>
1.	Decision Trees are easy to explain. It results in a set of rules.<br>
2.	It follows the same approach humans generally follow while making decisions.<br>
3.	Interpretation of a complex Decision Tree model can be simplified by its visualizations. <br>
4.	Decision trees can be used to predict both continuous and discrete values i.e. they work well for both regression and classification tasks.<br>
5.	They require relatively less effort for training the algorithm.<br>
6.	They can be used to classify non-linearly separable data.<br>
7.	Resistant to outliers, hence require little data preprocessing<br>
8.	They're very fast and efficient compared to <a href="https://stackabuse.com/k-nearest-neighbors-algorithm-in-python-and-scikit-learn/" target="_blank">KNN</a> and other classification algorithms.<br>
        </p>



<strong>Disadvantages:</strong>
<p>
1.  There is a high probability of overfitting in the Decision Tree.<br>
2.  Generally, it gives low prediction accuracy for a dataset as compared to other machine learning algorithms.<br>
3.  Information gain in a decision tree with categorical variables gives a biased response for attributes with greater no. of categories.<br>
4.  Calculations can become complex when there are many class labels.<br>
</p>


   
<h2>Splitting</h2>
<p>The process of partitioning the data set into subsets. Splits are formed on a particular variable</p>
<img src="assets/images/Decision-tree-16.jpg">   <br><br>                
                  
  <h2>How to Specify Test Condition?</h2><br>
<ul class="list-unstyled list-icons"> <strong>Depends on attribute types</strong>
    <li><i class="fa fa-angle-double-right"></i>Nominal: variables with no inherent order or ranking sequence. e.g. gender, race etc</li>
    <li><i class="fa fa-angle-double-right"></i>Ordinal: variables with an ordered series e.g. blood group, performance etc</li>
    <li><i class="fa fa-angle-double-right"></i>Continuous: continuous data is information that can be measured on a continuum or scale. e.g. length, size, width</li></ul>
                
                  
 <ul class="list-unstyled list-icons"> <strong>Depends on the number of ways to split</strong>
<li><i class="fa fa-angle-double-right"></i>Binary split</li>
<li><i class="fa fa-angle-double-right"></i>Multi-way split    </li>
                  </ul>
             
 <h2>Splitting Based on Nominal Attributes </h2><br>
<ul class="list-unstyled list-icons"> 
<li><i class="fa fa-angle-double-right"></i>Multi-way split: Use as many partitions as values</li>
  <img src="assets/images/Decision-tree-17.jpg">   <br><br>  
<li><i class="fa fa-angle-double-right"></i>Binary split:  Divide values into two subsets</li>
<img src="assets/images/Decision-tree-18.jpg">   <br>
    <caption>Need to find optimal partitioning!</caption>
    <br>   
                  </ul>
                  
 <h2>Splitting Based on Continuous Attributes</h2>                 
      <strong>Different ways of handling  </strong>
<ul class="list-unstyled list-icons"> 
    <li><i class="fa fa-angle-double-right"></i>Multi-way split: form ordinal categorical attribute</li>
◆ Static – discretize once at the beginning
◆ Dynamic – repeat on each new partition
<li><i class="fa fa-angle-double-right"></i>Binary split: (A < v) or (A ≥ v)</li>
◆ How to choose v?<br>
    Need to find optimal partitioning!<br>
    <img src="assets/images/arrow.png"><br>
              Can use GAIN or GINI !<br>
</ul>            
                  
<h2>Pruning</h2>
<p>The shortening of branches of the tree. Pruning is the process of reducing the size of the tree by turning some branch 
nodes into leaf nodes(opposite of Splitting), and removing the leaf nodes under the original branch. Pruning is
useful because classification trees may fit the training data well, but may do a poor job of classifying new values. 
A simpler tree often avoids overfitting.</p>
<img src="assets/images/Decision-tree-19-1.jpg">
<br><br> 
                  
 <h2>Overfitting</h2> 
<p>Overfitting is a practical problem while building a decision tree model. The model has an issue of 
overfitting when the algorithm continues to go deeper and deeper in to reduce the training set 
error, but results with an increased test set error i.e, reduces the accuracy of the prediction for our model. It generally
happens when it builds many branches due to outliers and irregularities in data.
Two approaches which we can use to avoid overfitting are:</p>
<ul class="list-unstyled list-icons"> 
<li><i class="fa fa-angle-double-right"></i>Pre-Pruning<li>
<li><i class="fa fa-angle-double-right"></i>Post-Pruning<li>

</ul>                 
                  
  <h2>Pre-Pruning</h2> 
<p>In pre-pruning, it stops the tree construction early. It is preferred not to split a node if its goodness measure is below 
a threshold value. But it’s difficult to choose an appropriate stopping point.</p>
<h2>Post-Pruning</h2> 
<p>In post-pruning, first it goes deeper and deeper in the tree to build a complete tree. If the tree shows the overfitting 
problem then pruning is done as a post-pruning step. We use cross-validation data to check the effect of our pruning. 
Using cross-validation data, it tests whether expanding a node will make an improvement or not.
If it shows improvement, then we can continue by expanding that node. But if it shows a reduction in accuracy then 
it should not be expanded i.e, the node should be converted to a leaf node.</p>
  
                  
<h2>CART (Classification And Regression Tree) Algorithm</h2>

<p>Classification and Regression Trees or CART for short is a term introduced by Leo Breiman to refer to Decision 
Tree algorithms that can be used for classification and regression predictive modelling problems for numeric 
attributes (regression) or categorical attributes (classification). Decision tree models where the target variable can 
take a discrete set of values are called Classification Trees and decision trees where the target variable 
can take continuous values are known as Regression Trees. The representation for the CART model is a binary 
tree. In CART we use Gini index as a metric.</p>
                  
 <img src="assets/images/Decision-tree-21.jpg"> <br><br>                
                  
 <h2>Gini Index</h2>
    <ul class="list-unstyled list-icons"> 
    <li><i class="fa fa-angle-double-right"></i>Gini Index is a metric to measure how often a randomly chosen element would be incorrectly identified.<li>
    <li><i class="fa fa-angle-double-right"></i>It means an attribute with a lower Gini index should be preferred.<li>
    <li><i class="fa fa-angle-double-right"></i>It works with categorical target variable “Success” or “Failure”.<li>
    <li><i class="fa fa-angle-double-right"></i>It performs only Binary splits.<li>
    </ul>
                 
  <h2>Steps to Calculate Gini for a split</h2>
<p>1.Calculate Gini for sub-nodes, using formula sum of square of probability for success and failure (p^2+q^2).<br>
<img src="assets/images/Decision-tree-22.jpg"> <br><br> 
</p>
<p>Calculate Gini for split using weighted Gini score of each node of that split.<br>
<img src="assets/images/Decision-tree-23.jpg"> <br><br> 
</p>
                  
  <h2>CART steps</h2>                
                  
1.	<strong>Start with the root node (all data in dataset)</strong><br>
2.	<strong>Split the node with minimum Gini Index</strong> 
                  Recursive process<br>
3.	<strong>Assign nodes with predicted classes</strong><br>
4.	<strong>Missing data: </strong>program uses best available info to replace missing data (based on a variable that is relative to the outcome variable)<br>
5.	<strong>Stop tree building:</strong> when every aspect of the dataset is visible in decision tree<br>
6.	<strong>Tree Pruning:</strong> based on miscalculation rate<br>
7.	<strong>Optimal Selection:</strong> best tree that fit dataset with a low percentage of error<br>
                 
                  
 <p>To get a clear understanding of calculating <strong>Gini index</strong>, we will try to implement it on the previous data set used in above ID3 algorithm.</p>
                
   <h2>Split on Age: </h2>              
      <img src="assets/images/Decision-tree-24.jpg"> <br><br>               
                  
                  
<p>Similarly,</p>               
<img src="assets/images/Decision-tree-25.jpg"> <br><br>                 
                  
<p>Choose attribute with the minimum Gini Index, Gini(S) as the decision node, divide the dataset by its branches and 
repeat the same process on every branch.
Age has the minimum Gini Index among the attribute, so Age is selected as the splitting attribute.</p>

<p>Repeat until we run out of all attributes, or the decision tree has all leaf nodes.</p>
                  
<strong>NOTE: This does not mean that ID3 and CART algorithms produce the same trees always.</strong>
                 
<strong>References:</strong><br/>
1.	Information Gain: <a href="https://en.wikipedia.org/wiki/Information_gain_in_decision_trees" target="_blank">https://en.wikipedia.org/wiki/Information_gain_in_decision_trees</a><br>
2.	Entropy: <a href="https://en.wikipedia.org/wiki/Entropy_(information_theory)" target="_blank">https://en.wikipedia.org/wiki/Entropy_(information_theory)</a><br>
3.	ID3: <a href="https://en.wikipedia.org/wiki/ID3_algorithm" target="_blank">https://en.wikipedia.org/wiki/ID3_algorithm</a><br>
4.	ID3 Example: <a href="https://www.cise.ufl.edu/~ddd/cap6635/Fall-97/Short-papers/2.htm" target="_blank">https://www.cise.ufl.edu/~ddd/cap6635/Fall-97/Short-papers/2.htm</a><br>
5.	Gini Index: <a href="https://en.wikipedia.org/wiki/Gini_coefficient" target="_blank">https://en.wikipedia.org/wiki/Gini_coefficient</a><br>
6.	ID3 and CART: <a href="https://medium.com/deep-math-machine-learning-ai/chapter-4-decision-trees-algorithms-b93975f7a1f1" target="_blank">https://medium.com/deep-math-machine-learning-ai/chapter-4-decision-trees-algorithms-b93975f7a1f1</a><br>
7.	CART Example: <a href="https://sefiks.com/2018/08/27/a-step-by-step-cart-decision-tree-example/" target="_blank">https://sefiks.com/2018/08/27/a-step-by-step-cart-decision-tree-example/</a><br>

                  
                  
                  
                  
                  
                  
                  

                  
                  

              </div>

              <!-- /article content -->

            </div>
            <div class="row tab-post padding-top-20">
              <!-- post -->
              <div class="col-md-2 col-sm-2 col-xs-4">
                  <img src="/assets/images/chamalka-auxenta.jpg" width="90">

              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h2 class="padding-top-20 size-20">Chamalka Gamaralalage

                </h2>
                <small> Associate Software Engineer
                </small>
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