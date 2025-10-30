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

              <h1 class="blog-post-title">Setting up a testing cluster using ClusterRunner</h1>

              <br>

              <!-- article content -->

              <div class="margin-bottom-80">



                <p class="dropcap">So you have written some tests for your project and now you are waiting for the test run to be completed

                  to see if anything breaks due to the changes you have made by your last commit. Finally you can merge your

                  changes to develop when everything seems green on your CI. But when the number of tests increases, their

                  execution time will also increase. Our problem was exactly that. It took more than ten hours to execute

                  one of our testing suites. Since this was notable time duration, we needed a way to distribute tests across

                  multiple VMs as our tests cannot be run in parallel in the same VM. Our CI system Bamboo has built in support

                  for doing such a task by using Bamboo Remote Agents. But these remote agents do not come for free and whenever

                  our tests get increased, we will have to purchase more and more agents. So we wanted to see if there are

                  any existing solutions for this job and my client came up with this excellent open source tool called ClusterRunner.

                  ClusterRunner is an open source parallel test execution tool does just that. Execute tests in parallel

                  on multiple nodes on your testing cluster. Its master-slave architecture allows easy horizontal dynamic

                  scaling. In other words, it’s a matter of adding more slaves to the cluster to speed up test execution.

                  Furthermore, its intelligent job distribution engine leverages past job execution metrics to make future

                  runs even faster. In this post I will discuss how you are going to break down your testing suite and configure

                  ClusterRunner. But before we go into installation and setup, let’s look at how ClusterRunner works.</p>



                <h2>HOW CLUSTERRUNNER WORKS</h2>

                <p>ClusterRunner can be started using two modes: master and slave mode. Master will act as a server and slaves

                  will be connected to the cluster master. When master is up, you can submit a build job to it. This build

                  job will contain information about where your project’s repository is located and in what branch the test

                  suite should be executed. Cluster master will pull your project and will read the clusterrunner configuration

                  file in it. This ClusterRunner config file dictates as to how your tests should be divided (atomized in

                  ClusterRunner terms) among the online slaves and what commands should be invoked to run a test. Once the

                  atomization (creation of atoms) phase is done, slaves will fetch your project and run any configured scripts

                  defined in the clusterrunner config file, before running any tests. Once these prep scripts done executing,

                  master will distribute atoms among the slave nodes one by one. An Atom can be a name of a test class or

                  group of related tests. When a slave receives an atom, it will execute the configured commands on that

                  particular atom and send any generated files by the test (test artifacts) back to the master. This process

                  repeats until all of the atoms done processing and finally the build artifacts will be published so your

                  CI can parse the test results and present nicely! This whole process can be summed up with the following

                  diagram.</p>



                <h2>CLUSTERRUNNER</h2>

                <p>Now that you have some idea about what’s happening under the hood, we will see how to setup ClusterRunner

                  under linux environment. You can follow along this tutorial even if you have a single VM, although you

                  will need more than one VM to see parallel execution of tests.</p>



                <pre>mkdir -p ~/.clusterrunner/dist &amp;&amp; cd ~/.clusterrunner &amp;&amp; curl -L https://cloud.box.com/shared/static/2pl4pi6ykvrbb9d06t4m.tgz &gt; clusterrunner.tgz &amp;&amp; tar -zxvf clusterrunner.tgz -C ./dist &amp;&amp; cp ./dist/conf/default_clusterrunner.conf clusterrunner.conf &amp;&amp; chmod 600 clusterrunner.conf</pre>

                <p>This will put ClusterRunner binaries inside .clusterrunner/dist directory on your home directory. *Each slave

                  VM must have the same username of the master VM. (ClusterRunner does not support running multiple slave

                  instances in the same VM) Master and slaves needs the ability to passwordless ssh communication. To enable

                  passwordless authentication on master, include master’s public key in each slave’s authorized_keys file

                  under the .ssh directory (www.linuxproblem.org/art_9.html). Repeat this step for all other slaves. You

                  also have to set SSH keys of master and slaves on the Git server. Proper hostname mappings between master

                  and slaves must exist as the ClusterRunner uses hostname to perform ssh commands. *Master and slave machines

                  must use the same operating system.</p>

                <p>These binaries have to be copied to all salves in the cluster. Since this is tedious process when number

                  of slaves are high, ClusterRunner has provided the deploy command to automate this process. To deploy binaries

                  to all the slaves issue the following command:</p>

                <pre>clusterrunner deploy --slaves hostname1 hostname2 hostname3</pre>

                <p> If this command executed successfully you can see that each salve’s home directory has the ClusterRunner

                  binaries copied inside the ~/.clusterrunner/dist .</p>



                <h2>SETTING UP YOUR TEST PROJECT</h2>

                <p>Now that the ClusterRunner is deployed into the master and the slave machines it’s time to write some tests.

                  We are going to create a simple maven java project and write some test classes. Create a simple maven project

                  by following command:</p>



                <pre>mvn archetype:generate -DgroupId=com.thilanka -DartifactId=testapp -DarchetypeArtifactId=maven-archetype-quickstart -DinteractiveMode=false</pre>

                <p> Let’s add some test classes to simulate long running tests (I’m using TestNG but you can use junit or any

                  other testing framework):</p>

                <h3>TestDemoA.java</h3>

                <div>

                  <pre>package clusterrunner;



    import org.testng.Assert;



    import org.testng.annotations.Test;



    /**



    &nbsp;* Created by Thilanka Nuwan Liyanaarachchi



    */



    @Test(singleThreaded = true)



    public class TestDemoA {



    &nbsp;&nbsp;&nbsp; @Test



    &nbsp;&nbsp;&nbsp; public void testFeature1() throws Exception {



    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thread.sleep(12000);



    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Assert.assertEquals(4, 4, "Error in TestDemoA.testFeature1");



    &nbsp;&nbsp;&nbsp; }</pre>

                </div>

                <div>

                  <pre>@Test



    public void testFeature2() throws Exception {



    Thread.sleep(3000);



    Assert.assertEquals("x", "x", "Error in TestDemoA.testFeature2");



    }



    }



    <strong>TestDemoB.java</strong>



    package clusterrunner;



    import org.testng.Assert;



    import org.testng.annotations.Test;



    /**



    * Created by Thilanka Nuwan Liyanaarachchi



    */



    @Test(singleThreaded = true)



    public class TestDemoB {



    @Test



    public void testFeature1() throws Exception {



    Thread.sleep(3000);



    Assert.assertEquals(4, 4, "Error in TestDemoB.testFeature1");



    }



    @Test



    public void testFeature2() throws Exception {



    Thread.sleep(22000);



    Assert.assertEquals("x", "x", "Error in TestDemoB.testFeature2");



    }



                    }</pre>

                </div>

                <p>Add following dependencies in your&nbsp;

                  <strong>pom.xml&nbsp;</strong>:</p>

                <div>

                  <pre>&lt;dependency&gt;



    &nbsp;&nbsp;&nbsp; &lt;groupId&gt;org.testng&lt;/groupId&gt;



    &nbsp;&nbsp;&nbsp; &lt;artifactId&gt;testng&lt;/artifactId&gt;



    &nbsp;&nbsp;&nbsp; &lt;version&gt;6.11&lt;/version&gt;



                   &lt;/dependency&gt;</pre>

                </div>





                <h2>JOB CONFIGURATION</h2>

                <p>In the root of your project add the&nbsp;

                  <strong>clusterrunner.yaml&nbsp;</strong>file. Put the following content in that file:</p>

                <div>

                  <pre>Simple:



    setup_build:

    &nbsp;- export JAVA_HOME=/usr/java/jdk1.8.0_111



    &nbsp;- export MAVEN_OPTS="-Xmx8192m -Xms128m"



    &nbsp;- cd $PROJECT_DIR



    &nbsp;- mvn clean install -DskipTests



    teardown_build:

    &nbsp;- echo "Performing teardown"

    commands:



    &nbsp;- mvn test -Dtest=$TOKEN; mkdir -p $ARTIFACT_DIR/surefire-reports; rm -rf $ARTIFACT_DIR/surefire-reports/*; cp -r target/surefire-reports/* $ARTIFACT_DIR/surefire-reports



    atomizers:

    &nbsp;- TOKEN: java -cp ~/atomizer.jar com.thilanka.testapp.Atomizera</pre>

                </div>

                <p>Let’s break this file down and see what each line does. Firstly this is a yaml file. Much like xml but more

                  fun to work with The root element is specified as Simple. This name can be anything but let’s just keep

                  it Simple&nbsp;&nbsp;The&nbsp;

                  <strong>&nbsp;setup_build&nbsp;</strong>&nbsp;section list downs commands that need to be executed. So there we

                  are setting java home and some maven options. Finally we cd into the project directory by using the ClusterRunner

                  variable and build our java project.&nbsp;

                  <strong>tear_down&nbsp;</strong>section is much like the setup_build section but the only difference is the commands

                  specified in tear_down will only be executed when all of the tests are done executing. Now everything seems

                  to be ready for running our tests. But before running any test, there should be a way to let ClusterRunner

                  know as to how our tests should run in parallel. This criterion is defined in the&nbsp;

                  <strong>atomizers</strong>&nbsp;section. Don’t worry. I’m not skipping the&nbsp;

                  <strong>commands</strong>&nbsp;section but it makes more sense to explain the atomizers first. Atomization is just

                  breaking down your suite of tests into smaller parts called atoms so that each atom can run in parallel

                  on different slave machines. Here I have just written a simple java program that just prints the names

                  of our two test classes to the standard output stream. The atomizer is a program that is executed by the

                  ClusterRunner once in the beginning of a build which prints some variables to the standard out, line by

                  line. Each line output of this program is fed into the TOKEN variable. The name of this variable can be

                  anything. So now we have two atoms denoting the fully qualified names of the two classes (package+class

                  name). Finally for each atom we can run set of commands on it. These commands are specified in the&nbsp;

                  <strong>commands</strong>&nbsp;section. As you can see we are running a single test class by the maven command:

                  mvn test -Dtest=

                  <strong>$TOKEN&nbsp;</strong>Here the token variable refers to the class name that we’ve atomized before. Oh and

                  in case if you are wondering how the atomizer.jar code look like:</p>

                <div>

                  <pre>System.out.println(“clusterrunner.TestDemoA”);



                    System.out.println(“clusterrunner.TestDemoB”);</pre>

                </div>

                <p>But in a real project your tests may be defined in a TestNG suite.xml file. If that’s the case your atomizer

                  program should read the xml and extract each test class from that file. Well with this minimal configuration

                  we are ready to run the two test classes in two different slave machines hopefully.</p>





                <h2>STARTING UP THE CLUSTER</h2>

                <p>We are going to fire up a master instance and two slave instances to run our first build. Let’s start the

                  instances by issuing following commands:</p>

                <div>

                  <pre>Start master : ~/.clusterrunner/dist/clusterrunner master



    Start slave 1 : ssh cluster@myhost1 "~/.clusterrunner/dist/clusterrunner slave"



    Start slave 2 : ssh cluster@myhost2 "~/.clusterrunner/dist/clusterrunner slave"</pre>

                </div>

                <p>*These commands are executed on the master host by ssh</p>

                <p>Now the master and all slaves are ready to take any job. Let’s create a new job and run it.</p>





                <h2>RUNNING A JOB</h2>

                <p>The following build command (executed on the master machine) will run your tests:</p>

                <div>

                  <pre>~/.clusterrunner/dist/clusterrunner build git --url ssh://git@gitlab.thilanka.com:40456/tnl/testapp.git --branch "develop" --job-name Simple</pre>

                  <p>Here it specifies the git repo url, the branch on which tests should run and the job name that we’ve specified

                    in our clusterrunner.yaml file.</p>

                  <p>When the job is finished, any artifacts generated from tests are stored in each atom’s directory. These

                    can be found under where the build command is executed.</p>

                  </div>



              </div>



              <!-- /article content -->



            </div>

            <div class="row tab-post padding-top-20"><!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

               <img src="assets/images/thilanka-blog.jpg" width="90">

            

              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Thilanka Liyanarachchi</h2>

                <small>Senior Software Engineer</small>

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