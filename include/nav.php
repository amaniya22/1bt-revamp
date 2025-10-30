<?php
?>

      <header id="topNav">
        <div class="container">

          <!-- Mobile Menu Button -->
          <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Logo -->
          <a class="logo pull-left" href="index.php">
            <img src="assets\images\logo.png" height="62%" alt="" />
          </a>

          <!--
         							Top Nav

         							AVAILABLE CLASSES:
         							submenu-dark = dark sub menu
         						-->
          <div class="navbar-collapse pull-right nav-main-collapse collapse">
            <nav class="nav-main">
        
              <!--
                     NOTE

                     For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                     Direct Link Example:

                     <li>
                       <a href="#">HOME</a>
                     </li>
                   -->
              <ul id="topMain" class="nav nav-pills nav-main">
                <li><a href="case_studies.php">CLIENTS</a></li>
                <li><a href="services.php">SERVICES</a></li>
                               <li class="dropdown">
                  <a class="dropdown-toggle" href="#">THOUGHT LEADERSHIP</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="blog.php">BLOG</a>
                    </li>
                    <li>
                      <a href="Tech_talks.php">TECH TALKS</a>
                    </li>
                    <li>
                      <a href="highlights.php"> HIGHLIGHTS</a>
                    </li>
                                     </ul>
                </li>
              
                <!-- <li>
                  <a class="dropdown-toggle" href="engineering_services.php#Engineering-IP">INNOVATIONS</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="engineering_services.php#Engineering-IP">Distributed Computing Framework</a>
                    </li>
                   
                    <li>
                      <a href="QA_services.php#QA-IP">API Testing Automation Tool</a>
                    </li>
                    <li>
                      <a href="QA_services.php#QA-IP">UI Test Automation Framework</a>
                    </li>
                  </ul>
                </li>-->
          
                      
                <li>
                  <a href="careers.php">CAREERS</a>
                </li>
                <li>
                  <a href="index.php#contact">CONTACT</a>
                </li>
              </ul>

            </nav>
          </div>


        </div>
      </header>