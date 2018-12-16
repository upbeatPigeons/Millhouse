<?php
session_start();

require "../includes/head.php"; 
require "../includes/validation_functions.php";

?>

<body id="login_page">
	<header>
		<?php 
			include "../includes/nav-bar.php";
      include "../includes/carousel.php";
    ?>
	</header>

	<main class="main_content">
		<section class="container login-container">

			<div class="row signin-wrapper justify-content-between">
				<div class="col-sm-12 col-md-6 login_form_wrapper">

					<?php if ($_GET['action'] == "login"){
            /* Include the login form */
          	include "../includes/login_form.php"; 
          }elseif ($_GET['action'] == "register"){
            /* Include the register form */
    				include "../includes/register_form.php";
          } else { 
						/* Show both if no */
						include "../includes/login_form.php"; 
    				include "../includes/register_form.php";
					}?>
				</div> <!-- End of col -->

				<div class="d-none d-md-block col-md-6">
					<img class="login_side_image w-100" src="../images/teaset.png" alt="Scented candle">
				</div> <!-- end of col -->
			</div> <!-- End of row -->

		</section>

	</main>

	<?php
require "../includes/footer.php"
?>
</body>

</html>
