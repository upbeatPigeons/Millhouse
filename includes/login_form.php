<h2 class="login-heading">Sign in</h2>

<form class="login" action="../includes/login_controller.php" method="POST">
  <div class="form-group">
     <label for="username">Enter your username</label>
     <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
  </div>         

  <div class="form-group">
     <label for="password">Enter your password</label>
     <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
     <!-- Gets error and formats it -->
     <?php show_error_messages($_GET["error"]); ?> 
  </div>
  <button type="submit" name="login" value="Log in" class="primory_btn btn btn-m btn-block">Sign in</button>
</form>