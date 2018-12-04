<?php 
session_start();
include "../includes/head.php";
?>

	<body id="create_post_page">
		<header>
			<?php include "../includes/nav-bar.php"; ?>
		</header>
    
		<main>
			<?php 
				include "../includes/actions_posts.php";
        include "../includes/create_post_form.php"; 
			?>
		</main>
		
		<?php include "../includes/footer.php"; ?>
	</body>
</html>


