<div class="entire_navbar">

  <?php if(strpos($path, "login_page") === false) { ?>
    
    <nav class="navbar navbar-expand-lg navbar-light row">
      <div class="navbar_logo d-block d-lg-none col-12">
      <?php if (isset($_SESSION["username"])) { ?>
        <a class="navbar-brand" href="../views/home_page.php">
      <?php } else { ?>
        <a class="navbar-brand" href="../views/login_page.php">
      <?php } ?>
          <div class="collapsed_logo img-fluid d-block d-lg-none">
            <img src="../images/Logo%20Shape.svg" alt="Logo">
          </div>
        </a>
      </div>

      <button class="navbar-toggler row" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="logged_in_text">
          <ul class="navbar-nav navbar-center">
            <li class="nav-item">
              <p class="nav-link content font-italic"> 
                <?php if (isset($_SESSION["username"])) { ?>

                  <i class='fas fa-user'></i>
                  <?php echo $_SESSION["username"];

                } ?>
              </p>
            </li>

            <li class="nav-item">

              <!-- Check if the user is an admin -->
              <?php if ($_SESSION["admin"] == 1){ ?>
                  <a class="nav-link content" href="../views/create_post_page.php">
                    <i class="fas fa-edit"></i>
                    <p class="d-inline d-lg-none">CREATE POST</p>
                  </a>
              <?php } ?>

            </li>
          </ul>
        </div>

        <div class="navbar_logo d-none d-lg-block">
        <?php if (isset($_SESSION["username"])) { ?>
          <a class="navbar-brand" href="../views/home_page.php">
        <?php } else { ?>
          <a class="navbar-brand" href="../views/login_page.php">
        <?php } ?>

            <img class="img-fluid" src="../images/logo_dark.png" alt="Logo">

            <div class="collapsed_logo img-fluid d-block d-lg-none">
              <img src="../images/Logo%20Shape.svg" alt="Logo">
            </div>
          </a>
        </div>

        <div class="navbar_list">

          <ul class="navbar-nav navbar-center">
    
            <?php if (isset($_SESSION["username"])) { ?>
      
              <li class="nav-item">
                <a class="nav-link content" href="../views/home_page.php"><i class="fas fa-home d-inline d-lg-none"></i>BLOG</a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link content" href="../views/about_page.php"><i class="fas fa-question-circle d-inline d-lg-none"></i>ABOUT</a>
              </li>

              <li class="nav-item">
                <a class="nav-link content" href="../includes/logout.php"><i class="fas fa-door-open d-inline d-lg-none"></i>LOG OUT</a>
              </li>

            <?php } else { ?>
      
              <li class="nav-item">
                <a class="nav-link content" href="../views/login_page.php?action=login">SIGN IN</a>
              </li>
      
            <?php } ?>
      
          </ul>

        </div>
        
      </div>

    </nav>

  <?php } else { ?>

    <div class="spacing"></div>
    
  <?php } ?>
</div>