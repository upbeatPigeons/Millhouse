<?php
    session_start();
    include "../includes/head.php";  
    require_once "../includes/database_connection.php";
    require_once "../classes/Posts_access.php";
?>


<body id="home_page">

	<header>
		<?php
    	include "../includes/nav-bar.php";
			include "../includes/carousel.php";
			//require_once ("../includes/comment_controller.php");
		?>
	</header>
	
	<main>
		<section class="container single_post_container">
			<div>
			  <!-- Here we need to fetch title of the post -->
			 <?php 
			 $access_posts = new Access_posts($pdo);
			 $post = $access_posts->list_single_post($_GET["id"]);
			 ?>
				<h1><?= $post->get_title(); ?></h1>
				<hr>
			</div>
			
			<div class="row">
				<div class="col-12 md-col-6">
					<div><img src="<?= $post->get_image();?>"></div>
				</div>
				<div class="col-12 md-col-5">
					<div> <!-- Here we need to fetch image1 of the post --></div>
				</div>
			<!-- Row-->	
			</div>	
			
			<div class="row">
				<div class="col-12">
					<h3><?= $post->get_date();?></h3>
					<p><?= $post->get_date();?></p>
				</div>	
			</div>
		</section>
		
		<aside>
			<div class="divider"></div>
		</aside>
		
		<section class="product_suggestions">
			<!--Here insert products from Mysql with relevan categories-->
		</section>
		
		<section class="comments">
			<!--include comment field-->
			<form name="comment_form" action="../includes/comment_controller.php" method="POST">
				<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
				<input type="submit" name="add_comment" value="Comment Now!">
			</form>
			<!--if admin include editing buttons-->
			<!--list comments-->
		</section>

	</main>
	
	
  <?php
    require "../includes/footer.php"
    ?>
</body>

</html>