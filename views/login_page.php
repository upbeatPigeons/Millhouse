<?php
session_start();


require "../includes/head.php"; 
?>

<body id="login_page">
	<header>
		<nav class="navbar-logo">
       <div class="row justify-content-center">

            <a class="navbar-brand" href="../index.php">

                <img class="img-fluid" src="../images/blue_logo%20_small.png" alt="Logo">
            </a>
       </div>
   </nav>
	
		<?php 
        include "../includes/carousel.php";
      ?>
	</header>

	<main>
		<section class="container login_container">
			<h1>Sign In</h1>
			<hr>

			<div class="row signin_wrapper justify-content-between">
				<div class="col-12 col-md-4">
				
					<h2>Sign In</h2>
					<!-- Should Sign In form be an include? -->
					<form class="login" action="../includes/login_controller.php" method="POST">
							<p>Hej <?=$_SESSION["username"]?>!</p>
          		<input type="text" name="username" id="username" placeholder="username" required>
							<label for="password" style="color:red">
							<!-- Gets error and formats it -->
								<?php if(isset($_GET["error"])){ echo str_replace("_", " ", $_GET["error"]); }?>						
							</label>
							<br>
          		<input type="password" name="password" id="password" placeholder="password" required>
          		<input type="submit" name="login" value="Log in">
          </form>
				  <?php /* include "../includes/register_form.php"; */ ?>
					  

					<h2>Register</h2>
					<!-- Here we need to include right form -->
					<form class="reg" action="../includes/register_controller.php" method="POST">
          		<input type="text" name="username" id="username" placeholder="username" required>
          		<input type="password" name="password" id="password" placeholder="password" required>
          		<input type="submit" name="register" value="Register">
          </form>

					<!-- Error messages for register -->
					<div>
					</div>
					
					<!-- Col -->
				</div>

				<div class="d-none d-md-block col-md-6">
					<img class="login_side_image w-100" src="../images/details.jpg" alt="Scented candle">
					<!-- Col -->
				</div>

			<!-- Row -->
			</div>

		</section>

	</main>

	<?php
    require "../includes/footer.php"
    ?>
</body>

</html>