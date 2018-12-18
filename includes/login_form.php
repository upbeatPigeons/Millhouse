
<form class="login" action="includes/login_controller.php" method="POST">
   <div class="form-group">
      <label for="username" class="sr-only">Enter your username</label>
      <input type="text" class="form-control borders" name="username" id="username" placeholder="Username" required>
   </div>         

   <div class="form-group">
      <label for="password" class="sr-only">Enter your password</label>
      <input type="password" class="form-control borders" name="password" id="password" placeholder="Password" required>
      <!-- Gets error and formats it -->
      <?php show_error_messages($_GET["error"]); ?> 
   </div>
   <button type="submit" name="login" value="Log in" class="primory_btn_inverse btn btn-m btn-block">SIGN IN</button> 
   <?php show_error_messages($_GET["user_registered"]); ?> 
</form>

 <div class="login_text_box content">   
    <p class="body1">Don't have an account?<a class="body2_link" href="views/login_page.php?action=register"> Sign up here</p></a>
</div>   