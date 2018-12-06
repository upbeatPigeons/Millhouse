<?php
    require "includes/head.php"
?>

<body id="index_page">

  <header class="row d-block d-md-none index_header">
    <div class="header_container"></div>
  </header>
  

  <main class="index_container">
    
    <!-- Background-image for smaller screens -->
    <div class="d-block d-md-none background_image">
      <div class="container logo_container">
        <!--Smallscreens Logo-->
        <img class="logo-image" src="images/logo_dark.png" alt="Logo">
      </div>

      <!-- Container for elements we want to flex-end -->
      <div class="flex_bottom_container">
        <!-- Container for buttons on small screen  -->
        <div class="index_button_container justify-content-center">
         
            <button type="button" onclick="location.href='views/login_page.php';" class="btn    btn-outline-primary ">
              Log in
            </button>
          
            <button type="button" onclick="location.href='views/login_page.php';" class="btn btn-outline-primary">
              Register
            </button>
        
        </div> <!-- Container for buttons on small screen  -->

        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni necessitatibus at optio, quod adipisci modi veritatis impedit vero. Reprehenderit?
        </div>
      </div> <!-- Container for elements we want to flex-end -->

    </div> <!-- Background-image for smaller screens -->



    <div class="row justify-content-around">
      <!--Image with interior for bigger screens-->
      <div class="d-none d-md-block col-md-5 index_image">
        <img class="w-100" src="images/Eske_01.jpg" alt="Millhouse Store">
      </div>

    </div>


    <section class="container">

      <div class="d-none d-md-block col-md-5 index_content">
        <!--Logo for bigger screens-->
        <div class="index_logo">
          <img class="w-100" src="images/logo_dark.png" alt="Millhouse Logo">
        </div>
      </div>


    
    </section>

  </main>

  <?php
  require "includes/footer.php"
  ?>

</body>

</html>

