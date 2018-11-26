<?php
		session_start();
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
					  <form class="reg" action="includes/register.php" method="POST">
          	<input class="reg--margin" type="text" name="username" id="username" placeholder="username" required>
          	<input class="reg--margin" type="text" name="password" id="password" placeholder="password" required>
          	<input type="submit" name="register" value="Register">
          </form>

					<h2>Register</h2>
					<!-- Here we need to include right form -->
					<?php include "../includes/register_form.php"; ?>
					


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
