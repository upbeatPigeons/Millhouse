<?php
    session_start();
    include "../includes/head.php";  
    require_once "../includes/database_connection.php";
    require_once "../classes/PostMethods.php";
		require_once "../classes/CommentMethod.php";
		require_once "../classes/ProductMethod.php";
		include "../includes/force_login.php";
?>


<body id="single_post_page">

	<header>
		<?php
    	include "../includes/nav-bar.php";
			include "../includes/carousel.php";
		?>
	</header>
	
	<main>
		<section class="container-fluid single_post">
			<div class="single_post_wrapper">
				
			  	<!-- Here we need to fetch title of the post -->
			 		<?php 
			 			$post_methods = new PostMethods($pdo);
						 $post = $post_methods->list_single_post($_GET["id"]);
						 // storing category as a $_SESSION to use it as FK in list_relevant_products function
						 $_POST['category'] = $post->get_category();
						 $category = $_POST['category'];
						
			 		?>
			
				<div class="row justify-content-center">
					<div class="col-12 col-md-9 single_post_image text-center">
						<img class="img-fluid" src="<?= $post->get_image();?>">
					</div>
				<!-- Row-->	
				</div>	
			
				<div class="row single_post_content justify-content-center">
					<div class="col-12 col-md-9">
						<h1 class="main_title_single_post"><?= $post->get_title(); ?></h1>
						<p class="content"><?= $post->get_description();?></p>
						<p class="author">Created by: <?= $post->get_created_by();?></p>
						<p class="date"><?= $post->get_date();?></p>
					</div>		
				</div>

				<?php if ($_SESSION["admin"] == 1) :?>
					<div class="row admin-cta-area justify-content-center">
						<div class="col=4">
							<form action="../views/edit_post_page.php?id=<?=$post->get_id();?>" method="POST">
								<button type="submit" name="edit_post" class="secondary_btn delete_button"><i class="fas fa-edit"></i></button>
			            </form>
								</div>
			 			<div class="col=4">
							<form action="../includes/actions_posts.php?id=<?= $post->get_id();?>" method="POST">
								<button type="submit" name="remove_post" value="Delete Post" class="secondary_btn edit_button"><i class="fas fa-trash-alt"></i></button>
							</form>
						</div>
					</div>
				<?php endif;?>
				
      </div><!-- Single Post Wrapper-->	
		 </section>
		
		<aside class="container-fluid divider_bar">
			<div class="divider"></div>
		</aside>
		
		<section class="container-fluid product_suggestions">
			<?php
			  //Acces function ist_relevant_products to lsit the products 
				$list_products_method = new ProductMethod($pdo);
				$relevant_products = $list_products_method->list_relevant_products($category);
			?>
      <div class="row justify-content-around product_gallery">
				<?php foreach ($relevant_products as $product):?>
					<div class="col-5 col-md-2 product">
						<img class='product img-fluid' src='../images/<?= $product->get_image(); ?>'>
						<p class="product_title"><?= $product->get_title();?></p>
						<p class="product_price"><?= $product->get_price(); ?>;-</p>
							
					</div><!-- Col Comment-->
  			<?php 
					endforeach; ?>
      </div><!-- Row -->
		</section>

		<aside class="container-fluid divider_bar">
			<div class="divider"></div>
		</aside>

		<section class="comment_container container-fluid">
			
			<?php include "../includes/comment_form.php"?>
			
				<!--list comments-->
				<?php		
					/*New instance og class CommentMethods 
 				 	*Access function list_all_comments in CommentMethod
 					*/
					$comment_method = new CommentMethod($pdo);			
					$all_comments = $comment_method->list_all_comments($_GET["id"]);
				?>
						
				<!--Here we loop through and show all individual comments. Use getters infor from class Comment.php  -->
				<?php foreach ($all_comments as $comment):?>

					<div class="row justify-content-center">

						<div class="col-12 col-md-9 comment">
								<p class="author"><?= $comment->get_created_by();?></p>
								<p class="date"><?= $comment->get_date(); ?></p>
								<p class="content"><?= $comment->get_content(); ?></p>
						
	      	  
		      	  	<!-- If is user is an admin you see a remove comment button. If the button is pressed the, then $_POST["delete_comment"] is used to set of the if statement.  
		      	  	Post Id is sent in the url to know which single post one has to be redirected back to. 
		      	  	We use getter for comment id to know which commment to delete -->
		      	  
			      		<?php if ($_SESSION["admin"] == 1) :?>
								
									<form action="../includes/comment_controller.php?id=<?= $post->get_id();?>"method="post">
              			<input type="hidden" value="<?= $comment->get_id();?>" name="delete_comment">
		              	<button type="submit" name="remove" value="remove" class="secondary_btn"><i class="fas fa-trash-alt"></i></button>
									</form>
				    		
				    		<?php endif;?>
					  	  <hr>
					
							</div><!-- Col Comment-->
						</div><!-- Row -->
  			 	 
  			  <?php 
						endforeach; ?>
			</section>
	

			
	</main>
	
	
  <?php
    require "../includes/footer.php"
  ?>
</body>

</html>