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

              <h1 class="blog-post-title">Implementing an Open Data Platform using DKan on AWS

              </h1>



              <!-- article content -->

              <div class="margin-bottom-80">



                <p class="dropcap">

                  <h2>Common Open Data Platforms</h2>

                  <p style="padding-top:10px">In the Open Data concept, certain organizational data are freely available for anyone to use and

                    republish as they wish, without any restrictions (copyrights, patents, etc.). This is similar to

                    concepts such as Open Source, Open Hardware, Open Government, and Open Knowledge. It became more

                    popular with the launch of Open Government Data (&ldquo;Open Data&rdquo;) initiatives adopted by

                    world super powers (USA – data.gov, UK – data.gov.uk, India – data.gov.in). Most of these Open Data

                    implementations were based on popular Open Data platforms/ frameworks already available in the

                    market.</p>



                  <p>Some such Open Data Platforms are Ckan [1], Dkan [2], Socrata [3] and Junar [4]. Out of these,

                    Ckan

                    and Dkan are known as Open Source Open Data Frameworks, which are extremely popular in the Open

                    Data

                    market. Both Ckan and Dkan follow the &ldquo;All-in-One&rdquo; (centralized) and federated data

                    management approaches, which were written in Python and Drupal/PHP languages respectively. Of these

                    frameworks, Ckan and Dkan are equally popular. </p>

                  <h2>About Dkan</h2>

                 <p style="padding-top:10px">Dkan is a Drupal-based community-driven Open Source Open Data platform offering a full suite of

                    cataloging, publishing and visualization features. It allows organizations and individuals to have

                    ultimate freedom to publish and open data to the public. </p>

                  <h2>Why this blog?</h2>

                  <p style="padding-top:10px">Having its roots in Drupal, the official Dkan installation guide basically follows Drush [5] as

                    the

                    base installation. Hence, due to the unavailability of the relevant literature related to cloud

                    deployment, having a complete and concise guide, in the form of this blog, would be beneficial to

                    many Dkan cloud developers, I hope. </p>

                  <p>In the next few sections, I will walk you through the steps relatto setting up Dkan without

                    downloading Drupal or its supporting modules.</p>

                  <h2>Prerequisites</h2>

                  <ul class="list-unstyled list-icons p-b-10">

                    <li><i class="fa fa-angle-double-right"></i>Pre-configured EC2 Ubuntu Instance (18.04) – (t2.small

                      would suffice)</li>

                    <li><i class="fa fa-angle-double-right"></i>Basic knowledge about Ubuntu terminal</li>

                  </ul>

                  <h2>Steps</h2>

                  <p style="padding-top:10px"> SSH to your EC2 instance and update the instance.</p>

                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i>sudo apt-get update</li>

                  </ul>



                  <p>After the update, install the following software to get it going.</p>



                  <span style="font-size:18px; font-weight:600; p-b-10">01) Install Apache Server</span>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Run the following command to Install Apache server  

                    <li> - sudo apt-get install apache2</li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Verify the Apache server installation

                    <li> - sudo systemctl status apache2

                    </li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> To stop, start and restart Apache server you can use

                      following commands.

                    <li> - sudo systemctl stop apache2</li>

                    <li> - sudo systemctl start apache2</li>

                    <li> - sudo systemctl restart apache2</li>

                    </li>

                  </ul>



                  <h2>02) Install Mysql Server</h2><br/>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Run the following command to install Mysql server

                    <li>- sudo service mysql stop</li>

                    </li>

                  </ul>

                  <p>Once the installation is done, you can login to Mysql and create a database. To create a password

                    for Mysql, we need to reset the root password and set a new one for the “root” user.</p>

                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Let's start by stopping the running MySQL database:

                    <li>- sudo service mysql stop</li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Next, create a /var/run/mysqld directory to be used by

                      MySQL process to store and access the socket file:

                    <li>- sudo mkdir -p /var/run/mysqld</li>

                    <li>- sudo chown mysql:mysql /var/run/mysqld</li>

                    </li>

                  </ul>

                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Once it is ready, manually start MySQL with the

                      following command and options:

                    <li>- sudo /usr/sbin/mysqld --skip-grant-tables --skip-networking &</li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> To confirm that the process is running as expected,

                      run the below command:

                    <li>- Jobs</li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> At this stage, it will allow us to access the MySQL

                      database without a password:

                    <li>- mysql -u root</li>



                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Now flush privileges:

                    <li>- FLUSH PRIVILEGES;</li>



                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i>Next, we will reset root password as ”dkanpassword”:

                    <li>- USE mysql; </li>

                    <li>- UPDATE user SET authentication_string=PASSWORD("dkanpassword") WHERE User='root'; </li>

                    <li>- UPDATE user SET plugin="mysql_native_password" WHERE User='root';</li>



                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Quit MySQL session:

                    <li>- quit</li>



                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Then terminate the current mysqld process:

                    <li>- sudo pkill mysqld </li>



                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Finally, start the MYSQL database:

                    <li>- sudo service mysql start</li>



                    </li>

                  </ul>





                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> If all went well, you should now be able to login to

                      your MySQL database with the “root” password:

                    <li>- mysql -u root --password -p</li>



                    </li>

                  </ul>





                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> When it asks for the password provide it as

                      “dkanpassword” and you will be able to login successfully.

                      Then create a database with password. In this example I’m using “dkandb” as our database name.



                    <li>- create database dkandb;</li>



                    </li>

                  </ul>





                  <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i> Then run the following command to verify that the

                      database was created successfully.

                    <li>- show databases;</li>



                    </li>

                  </ul>









                  <h2>03) PHP Installation with Required Modules</h2>



                  <ul class="list-unstyled list-icons p-t-10">

                    <li><i class="fa fa-angle-double-right"></i> We’ve planned to install the PHP 7.0 version since it is deemed the most suitable PHP version for the Dkan integration.

                    <li>- sudo apt install php7.0</li>

                    </li>

                  </ul>





                  <ul class="list-unstyled list-icons">

                      <li><i class="fa fa-angle-double-right"></i> In Dkan, there are some functions like image streams which are directed to a browser. You will need to compile PHP with the GD library for this to work.

                      <li>- sudo apt install php7.0-gd</li>

                      </li>

                    </ul>







                    <ul class="list-unstyled list-icons">

                        <li><i class="fa fa-angle-double-right"></i>The DOM extension allows you to operate on XML documents through the DOM API with PHP.

                        <li>- sudo apt-get install php7.0-dom</li>

                        </li>

                      </ul>



                      <ul class="list-unstyled list-icons">

                          <li><i class="fa fa-angle-double-right"></i> Php-mysql provides the mysql module for php.

                          <li>- sudo apt-get install php7.0-mysql</li>

                          </li>

                        </ul>



                        <ul class="list-unstyled list-icons">

                            <li><i class="fa fa-angle-double-right"></i> In Drupal, we need to have the unicode support with a php mbstring extension for it.

                            <li>- sudo apt-get install php7.0-mbstring</li>

                            </li>

                          </ul>



                          <ul class="list-unstyled list-icons">

                              <li><i class="fa fa-angle-double-right"></i> Create a simple PHP Info page to test your PHP installation., The following commands will create a new phpinfo.php file.

                              <li><pre>- sudo bash -c "echo -e '<?php\nphpinfo();\n?>' > /var/www/html/phpinfo.php</pre></li>

                              </li>

                            </ul>





                  <p>Now type the URL “YOUR_PUBLIC_DNS/phpinfo.php” in your browser and you will see a page like this

                    (See Figure 1).</p>

                  <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig1.jpg"></p>

                </p>







                <h2>04) Git Installation</h2><br/>



                <ul class="list-unstyled list-icons">

                  <li><i class="fa fa-angle-double-right"></i>Install Git using the following command.

                  <li>- sudo apt-get install git</li>

                  </li>

                </ul>

                <p>If the entire pre- installation is completed successfully, we are in a position to clone the Dkan source to the EC2 instance and proceed with the Dkan installation.</p>





                <h2>05) Dkan Installation</h2><br/>



                <ul class="list-unstyled list-icons">

                  <li><i class="fa fa-angle-double-right"></i>Before cloning the project, navigate to your webroot var/www/ html.

                  <li>- cd  /var/www/html/</li>

                  </li>

                </ul>



                <ul class="list-unstyled list-icons">

                    <li><i class="fa fa-angle-double-right"></i>Then clone the Dkan project source from Github.

                    <li>- sudo git clone https://github.com/GetDKAN/dkan-drops-7.git</li>

                    </li>

                  </ul>



                  <ul class="list-unstyled list-icons">

                      <li><i class="fa fa-angle-double-right"></i>Next, we need to create and change certain file permissions in the Drupal codebase. 

                      <li>- sudo chmod go-w sites/default </li>

                          <li> - sudo mkdir sites/default/files </li>

                              <li> - sudo chmod a+w sites/default/files </li>

                                  <li> - sudo cp sites/default/default.settings.php sites/default/settings.php </li>

                                      <li>  - sudo chmod 777 sites/default/settings.php </li>

                          </li>

                      </li>

                    </ul>



<p>Thereafter, you can go to your browser and start the Dkan installation.

    Follow the below screenshot (See Figure 2) and continue the Dkan installation.

    </p>







                <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig2.jpg"></p>



                <p>During the process, we are required to provide the database configuration as follows (See Figure 3).

                  

                  Please note, you have to provide your EC2 instance hostname as the database hostname.<br>



                  <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig3.jpg"></p>



                  <p>The database installation will continue.</p>

                  <p>While the installation continues, it will display a progress bar on the screen (See Figure 4).

                    Depending on your server resources, the complete process may take a few minutes.<br>

                  </p>



                  <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig4.jpg"></p>

                

                <p>       

                  When the installation is complete, the site configuration screen will be displayed. Follow the

                  prompts to set up your administrative username, email address, site name, time zone, and other

                  default settings. If the final configuration is completed without any errors, you&rsquo;ll see a

                  short congratulatory message and you&rsquo;ll be prompted to access your new site (See Figure 5).<br>

                </p>





                <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig5.jpg"></p>



                <p>On your web browser, you will see the Dkan admin panel as below (See Figure 6).</p>



                <p> <img class="img-responsive" src="assets/images/blog-Dkan-fig6.jpg"></p>

                <p>Congratulations! You have now successfully deployed Dkan on an AWS EC2 instance. </p>

               <h2>References</h2>

                <p style="padding-bottom:10px">1. Ckan Web Site - <a href="https://ckan.org/">https://ckan.org/</a> <br>

                  2. Dkan Web Site - <a href="https://getdkan.org/">https://getdkan.org/</a> <br>

                  3. Socrata - <a href="https://socrata.com/">https://socrata.com/</a> <br>

                  4. Junar - <a href="http://www.junar.com/">http://www.junar.com/</a> <br>

                  5. Drush - A command line shell for Drupal - <a href="https://www.drush.org/">https://www.drush.org/</a> 

                </p>



              </div>



              <!-- /article content -->



            </div>

            <div class="row tab-post padding-top-20">

              <!-- post -->

              <div class="col-md-2 col-sm-2 col-xs-4">

                <img src="https://1billiontech.com/assets/images/supun-bandara.jpg" width="90">



              </div>

              <div class="col-md-10 col-sm-10 col-xs-8">

                <h2 class="padding-top-20 size-20">Supun Bandara



                </h2>

                <small>Associate Tech Lead

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