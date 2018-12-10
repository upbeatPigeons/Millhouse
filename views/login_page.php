<?php
session_start();


require "../includes/head.php"; 
require "../includes/validation_functions.php";

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
		<section class="container login-container">
			<h1>Log in</h1>
			<hr>

			<div class="row signin-wrapper justify-content-between">
				<div class="col-sm-12 col-md-6">

					<?php if ($_GET['action'] == "login"){
          /* Include the login form */
          	include "../includes/login_form.php"; 
     
            }else{
          /* Include the register form */
    					include "../includes/register_form.php";
            }?>
				</div> <!-- End of col -->

				<div class="d-none d-md-block col-md-6">
					<img class="login_side_image w-100" src="../images/details.jpg" alt="Scented candle">
				</div> <!-- end of col -->
			</div> <!-- End of row -->

		</section>

	</main>

	<?php
require "../includes/footer.php"
?>
</body>

</html>
