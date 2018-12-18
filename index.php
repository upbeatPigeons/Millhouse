<?php
require "includes/head.php";
require "includes/validation_functions.php";
?>

<body id="index_page">
  
  <!-- Background & main-container for smaller screens -->
  <div class="d-block d-md-none small_screen_background_image">

    <!--Logo-->
    <div class="container logo_container">
      <img class="small_screen_logo_image" src="images/logo_dark.png" alt="Logo">
    </div>

    <!-- Container for elements we want to flex-end -->
    <div class="flex_bottom_container">
      <!-- Container for buttons  -->

      <div class="small_screen_button_container justify-content-between">
        <?php include "includes/login_form.php"; ?>

      </div> <!-- Container for buttons  -->

    </div> <!-- Container for elements we want to flex-end -->

  </div> <!-- Background-image for smaller screens -->

  <div class="hero_container d-md-none">

  <?php
  require "includes/footer.php"
  ?>
  
  </div>

  <div class="desktop_background_gradient">
    <section class="container desktop_container d-none d-md-flex">
      
        <div class="row justify-content-around">

          <!-- Container for image on bigger screens -->
          <div class="d-none d-md-flex col-md-5 order-md-12 col-lg-5 justify-content-center big_screen_image">
            <img class="img-fluid" src="images/index_tablet.png" alt="Millhouse Store Responsive image">
          </div>

          <!-- Wrapper for logo and buttons on bigger screens -->
          <div class="d-none d-md-flex col-md-5 order-md-1 col-lg-5 big_screen_logo_btn_container">

            <div text_field_container> 
              <!--Logo for bigger screens-->
              <div class="big_screen_logo">
                <img class="img-fluid" src="images/logo_dark.png" alt="Millhouse Logo">
              </div> <!--Logo for bigger screens-->

              <!-- Container for buttons  -->
              <div class="big_screen_button_container">

                <div class="button_container">   
                  <?php include "includes/login_form.php"; ?> 
                </div> <!-- Container for buttons  -->
            </div> 

          </div> <!-- Wrapper for logo and buttons on bigger screens -->
        </div>
      
    </section>
  </div>

</body>

</html>

