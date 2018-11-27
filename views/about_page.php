<?php
    session_start();
    include "../includes/head.php";  
?>


<body id="about_page">

	<header>
		<?php
    	include "../includes/nav-bar.php";
			include "../includes/carousel.php";
		?>
	</header>
	
	<main>
		<section class="container about_container">
			<div>
				<h1>Our Story</h1>
				<hr>
			</div>
			
			<div class="row">
				<div class="col-12 col-md-6">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				
				<div class="col-12 col-md-6">
					<img class="login_side_image w-100" src="../images/details.jpg" alt="Scented candle">
				<!-- Col -->
				</div>
				
			<!-- Row -->
			</div>
		</section>
	</main>
	
	<aside><!-- Instagram feed--></aside>
	
	 <?php
    require "../includes/footer.php"
    ?>
</body>

</html>