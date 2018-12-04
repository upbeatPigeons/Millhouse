<?php
    session_start();
    include "../includes/head.php";  
    require_once "../includes/database_connection.php";
    require_once "../classes/Posts_access.php";
    require_once "../classes/CommentMethod.php";
?>


<body id="home_page">

	<header>
		<?php
    	include "../includes/nav-bar.php";
			include "../includes/carousel.php";
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
					<p>Created by: <?= $post->get_created_by();?></p>
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

			<!-- add admin cta area-->
			<?php if ($_SESSION["admin"] == 1) {?>
				<div class="admin-cta-area">
					<a href="../includes/edit_post.php" class="btn btn-outline-primary">Edit post</a>
					<a href="../includes/delete_post.php" class="btn btn-outline-primary">Delete post</a>
				</div>
			<?php }?>
      
			<?php include "../includes/comment_form.php"?>
			
			<!--list comments-->
		</section>
		
			<?php		
				/*New instance og class CommentMethods 
 				 *Access function list_all_comments in CommentMethod
 				 */
				$comment_method = new CommentMethod($pdo);			
				$all_comments = $comment_method->list_all_comments($_GET["id"]);
			
				?>		
					
					<?php foreach ($all_comments as $comment):?>
						<div class="col-12 col-5 comment">
						<div><p><?= $comment->get_content(); ?></p></div>
						<div><p><?= $comment->get_created_by();?></p></div>
						<div><p><?= $comment->get_date(); ?></p></div>
				 
					  <hr>
					
  			 	 </div>
  			  <?php 
						endforeach; ?>
	

			
	</main>
	
	
  <?php
    require "../includes/footer.php"
    ?>
</body>

</html>