<?php
?>

      <header id="topNav" class="black-header">
        <div class="container-fluid custom-container">
          <div class="flex-wrap">
           <!-- Logo -->
          <a class="logo pull-left" href="index.php">
            <img src="assets\images\white-logo.png" height="62%" alt="" />
          </a> 
          <!-- Mobile Menu Button -->
          <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
          </button>

          

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
                <li><a href="services.php">Services</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" href="#">Insight</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="blog.php">BLOG</a>
                    </li>
                    <li>
                      <a href="Tech_talks.php">TECH TALKS</a>
                    </li>
                    <li>
                      <a href="highlights.php">HIGHLIGHTS</a>
                    </li>
                    <li>
                      <a href="podcasts.php">PODCAST</a>
                    </li>
                    <!-- <li>
                      <a href="#">WHITE PAPERS</a>
                    </li> -->
                  </ul>
                </li>
                <li><a href="case_studies.php">Clients</a></li>
                <li>
                  <a href="aboutus.php">About</a>
                </li>
                <li>
                  <a href="index.php#contact" class="contact-link">Contact</a>
                </li>
              </ul>

            </nav>
          </div>
</div>
        </div>
      </header>