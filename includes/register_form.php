<h2 class="register-heading">Register</h2>
<form class="register" action="../includes/register_controller.php" method="POST">

  <div class="form-group">
    <label for="username">Choose a username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
    <?php show_error_messages($_GET["username_error"]); ?>
  </div>

  <div class="form-group">
   <label for="password">Choose a password</label>
   <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
   <?php show_error_messages($_GET["password_error"]); ?>  
 </div>

 <div class="form-group">
  <label for="confirm_password">Confirm password</label>
  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
  <?php show_error_messages($_GET["confirm_password_error"]); ?>  
</div>
<button type="submit" name="register" class="primory_btn btn-m btn-block" value="Register">Register</button>
</form>
<?php show_error_messages($_GET["user_registered"]); ?> 
