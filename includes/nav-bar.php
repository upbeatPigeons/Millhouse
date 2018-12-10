<div class="entire_navbar">

  <nav class="navbar-logo">
    <div class="row justify-content-center">
      <a class="navbar-brand" href="../views/home_page.php">
        <img class="img-fluid d-none d-lg-block" src="../images/blue_logo%20_small.png" alt="Logo">
        <img class="img-fluid d-block d-lg-none" src="../images/blue_logo%20_notext.png" alt="Logo">
      </a>
    </div>
  </nav>
  
  <nav class="navbar navbar-expand-lg navbar-light">
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
          
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
      <ul class="navbar-nav navbar-center">
  
        <li class="nav-item">
          <a class="nav-link" href="../views/home_page.php">Blog</a>
        </li>
  
        <?php if (isset($_SESSION["username"])) { ?>
          
          <li class="nav-item">
            <a class="nav-link" href="../includes/logout.php">Log out</a>
          </li>
  
        <?php } else {?>
  
          <li class="nav-item">
            <a class="nav-link" href="../views/login_page.php">Sign in</a>
          </li>
  
        <?php }?>
  
  
        <!-- Check if the user is an admin-->
        <?php if ($_SESSION["admin"] == 1){?> 
  
          <li class="nav-item">
            <a class="nav-link" href="../views/create_post_page.php">Create Post</a>
          </li>
  
        <?php }?>
  
        <li class="nav-item">
          <a class="nav-link" href="../views/about_page.php">About</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="../views/contact_page.php">Contact</a>
        </li>
  
      </ul>
      
    </div>
  </nav>
          
</div>