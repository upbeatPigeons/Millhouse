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
                    <a class="navbar-brand" href="http://localhost:8888/millhouse/Millhouse/">
                        <img class="logo-image" src="images/logo_dark.png" alt="Logo">
                    </a>
                </div>
            </nav>

            <!--Log in & Register Buttons Mobile-->
            <div class="row index_button_container justify-content-center">
                <div class="col-4">
                    <button type="button" class="btn btn-outline-primary">
                        <a href="views/login_page.php">Log in</a>
                    </button>

                    <button type="button" class="btn btn-outline-primary">
                        <a href="views/login_page.php">Register</a>
                    </button>
                </div>
            </div>
      </header>

      <main class="index_container">
        <!--Desktop Version -->
        <section class="container index_desktop">
            <div class="row justify-content-around">
                <div class="d-none d-md-block col-md-5 index_image">
                    <img class="w-100" src="images/Eske_01.jpg" alt="Millhouse Store">
                </div>

                <div class="d-none d-md-block col-md-5 index_content">
                    <div class="index_logo">
                        <img class="w-100" src="images/logo_dark.png" alt="Millhouse Logo">
                    </div>

                    <div class="row index_button_container">
                        <div class="col-4">
                            <button type="button" class="btn btn-outline-primary">
                                <a href="views/login_page.php">Log in</a>
                            </button>
                        </div>

                        <div class="col-4">
                            <button type="button" class="btn btn-outline-primary">
                                <a href="views/login_page.php">Register</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
    require "includes/footer.php"
    ?>
</body>

</html>
