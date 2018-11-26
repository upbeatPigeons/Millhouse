<?php
    require "includes/head.php"
?>

	<main>
       
        <header>
         
          <!--Navbar Logo-->
          <nav class="navbar fixed-top scrolling-navbar justify-content-center">
            <div class="container">
              <a class="navbar-brand" href="http://localhost:8888/millhouse/Millhouse/">
                  <img class="logo-image w-50" src="images/logo_dark.png" alt="Logo">
              </a>
            </div>
          </nav>
          
          <!-- Full Page Intro -->
          
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
           
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5">Make purchases with our app </h1>
                    <hr class="hr-light">
                    
                    <a class="btn btn-white">Download</a>
                    <a class="btn btn-outline-white">Learn more</a>
                  </div>
                  
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        
    
        
        <section>
             <div class="row">
                 <div class="col-12 col-md-6 index_image">
                      <img class="w-100" src="images/Eske_01.jpg" alt="Millhouse Store">
                  </div> 
        
                 <div class="d-none d-md-block col-md-6 index_content">
                    <div class="index_logo">
                      <img class="w-100" src="images/logo_dark.png" alt="Millhouse Logo">  
                   </div>   
                       
                       <div class="row index_button_container">
                           <div class="col-4">
                               <button type="submit" class="btn index_login"><a href="views/login_page.php">Log in</a></button>
                           </div>
                   
                           <div class="col-4">       
                               <button class="btn index_register"><a href="views/login_page.php">Register</a></button>
                           </div>
                       </div>
                   </div>
              </div> 
           
             
           
             
           
        </section>
	</main>