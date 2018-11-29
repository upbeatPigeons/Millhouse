<?php
		session_start();

		if(isset($_GET["error"])){
			$error = $_GET["error"];
		}

			require "../includes/head.php"; 
?>

<body id="login_page">
	<header>
		<nav class="navbar-logo">
       <div class="row justify-content-center">
            <a class="navbar-brand" href="http://localhost:8888/millhouse/Millhouse/">
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
					<form class="login" action="../includes/login.php" method="POST">
          		<input type="text" name="username" id="username" placeholder="username" required>
          		<input type="text" name="password" id="password" placeholder="password" required>
							<?=$error?>
          		<input type="submit" name="login" value="Log in">
          </form>
				  <?php /* include "../includes/register_form.php"; */ ?>
					  

					<h2>Register</h2>
					<!-- Here we need to include right form -->
					<form class="reg" action="../includes/register_controller.php" method="POST">
          		<input type="text" name="username" id="username" placeholder="username" required>
          		<input type="text" name="password" id="password" placeholder="password" required>
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
