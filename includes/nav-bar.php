<div class="entire_navbar">

  <nav class="navbar-logo">
    <div class="row justify-content-center">
      <a class="navbar-brand" href="../views/home_page.php">
      
        <img class="img-fluid d-none d-lg-block" src="../images/blue_logo%20_small.png" alt="Logo">

        <div class="collapsed_logo img-fluid d-block d-lg-none">
          <img src="../images/Logo%20Shape.svg" alt="Logo">
        </div>

      </a>
    </div>
  </nav>

  <?php if(strpos($path, "login_page") !== false) { ?>
    
    <nav class="navbar navbar-expand-lg navbar-light">
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="logged_in_text">
          <p class="nav-link font-italic"> 
            <i class="fas fa-user"></i>
            <?php if (isset($_SESSION["username"])) { echo "Logged in as: ".$_SESSION["username"]; } ?> 
          </p>
        </div>

        <div class="navbar_list">

          <ul class="navbar-nav navbar-center">
      
            <li class="nav-item">
              <a class="nav-link" href="../views/home_page.php"><i class="fas fa-home"></i>Blog</a>
            </li>
      
            <!-- Check if the user is an admin-->
            <?php if ($_SESSION["admin"] == 1){?> 
      
              <li class="nav-item">
                <a class="nav-link" href="../views/create_post_page.php"><i class="fas fa-edit"></i>Create post</a>
              </li>
      
            <?php }?>
      
            <li class="nav-item">
              <a class="nav-link" href="../views/about_page.php"><i class="fas fa-question-circle"></i>About</a>
            </li>
    
            <?php if (isset($_SESSION["username"])) { ?>
              
              <li class="nav-item">
                <a class="nav-link" href="../includes/logout.php"><i class="fas fa-door-open"></i>Log out</a>
              </li>
      
            <?php } else {?>
      
              <li class="nav-item">
                <a class="nav-link" href="../views/login_page.php">Sign in</a>
              </li>
      
            <?php }?>
      
          </ul>

        </div>
        
      </div>

    </nav>

  <?php } else { ?>

    <div class="spacing"></div>
    
  <?php } ?>
</div>