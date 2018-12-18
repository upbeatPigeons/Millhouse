<?php 

session_start();

include "../includes/head.php";
include "../includes/actions_posts.php";
include "../includes/force_login.php";

?>

<body id="edit_post_page">
	<header>
		<?php 
		include "../includes/nav-bar.php"; 
		?>
	</header>
	
	<main class="main_content">
		<section class="container form_container">
			<div class="form_wrapper">
				<?php 
				include "../includes/edit_post_form.php"; 
				?>
			</div>
		</section>
	</main>
	
	<?php 
	include "../includes/footer.php"; 
	?>
</body>
</html>