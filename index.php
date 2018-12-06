<?php
    require "includes/head.php"
?>

<!--Background Image-->

<body id="index_page">

  <header class="row d-block d-md-none index_header">
    <div class="hero_image" style="background-image: url('images/millhouse_shop.png');">
    </div>

    <!--Navbar Logo-->
    <nav class="navbar fixed-top scrolling-navbar">
      <div class="container logo_container">
        <img class="logo-image" src="images/logo_dark.png" alt="Logo">
      </div>
    </nav>
  </header>
      
      
  <main class="index_container">
  <!--Desktop Version -->
    <section class="container index_desktop">

      <div class="row justify-content-around">
        <div class="d-none d-md-block col-md-5 index_image">
          <img class="w-100" src="images/Eske_01.jpg" alt="Millhouse Store">
        </div>
      </div>

      <div class="d-none d-md-block col-md-5 index_content">
        <div class="index_logo">
          <img class="w-100" src="images/logo_dark.png" alt="Millhouse Logo">
        </div>
      </div>

      <div class="row index_button_container">
        <div class="col-4">
          <button type="button" onclick="location.href='views/login_page.php';" class="btn    btn-outline-primary">
            Log in
          </button>
        </div>
      </div>

      <div class="col-4">
        <button type="button" onclick="location.href='views/login_page.php';" class="btn btn-outline-primary">
          Register
        </button>
      </div>
    
    </section>

  </main>

  <?php
  require "includes/footer.php"
  ?>

</body>


</html>

