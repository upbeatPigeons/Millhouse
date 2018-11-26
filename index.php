<?php
    session_start();
    require "includes/head.php"
?>

	<main class="index_wrapper">
        
        <section class="index_container">
           <div class="index_image">
               <img>
           </div> 
           
           <div class="index_content">
              <div class="index_logo">
                  <img>
               </div>
               
               <hr>
               
               <div class="index_button_container">
                   <button class="index_login"></button>
                   <button class="index_register"></button>
               </div>
           </div>       
           
        </section>

	</main>



<form class="reg" action="includes/register.php" method="POST">
  <input class="reg--margin" type="text" name="username" id="username" placeholder="username" required>
  <input class="reg--margin" type="password" name="password" id="password" placeholder="password" required>
  <input type="submit" name="register" value="Register">
</form>
<br>
<form class="reg" action="includes/login.php" method="POST">
  <input class="reg--margin" type="text" name="username" id="username" placeholder="username" required>
  <input class="reg--margin" type="password" name="password" id="password" placeholder="password" required>
  <input type="submit" name="register" value="Log in">
	<?php
	if(isset($_GET["error"])){
		echo str_ireplace("_", " ", $_GET["error"]);
	}?>
</form>
<p>
		<?php
		var_dump($_SESSION["username"]);
		if(isset($_SESSION["username"])){
			echo "Hello ".$_SESSION["username"]."!";
		}?>
</p>