<?php 
session_start();
include "../includes/head.php";
?>

	<body id="edit_post_page">
		<header>
			<?php include "../includes/nav-bar.php"; ?>
		</header>
    
		<main>
			<?php 
				include "../includes/actions_posts.php";
        include "../includes/edit_post_form.php"; 
			?>
		</main>
		
		<?php include "../includes/footer.php"; ?>
	</body>
</html>