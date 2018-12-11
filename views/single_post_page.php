<?php
    session_start();
    include "../includes/head.php";  
    require_once "../includes/database_connection.php";
    require_once "../classes/PostMethods.php";
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
		<section class="container single_post">
			<div class="row">
			  <!-- Here we need to fetch title of the post -->
			 <?php 
			 $post_methods = new PostMethods($pdo);
			 $post = $post_methods->list_single_post($_GET["id"]);
			 ?>
				<div class="col-12">	
					<h1 class="page_title "><?= $post->get_title(); ?></h1>
					<div class="title_underline"></div>
				</div>
			</div>


			
			
			<div class="row justify-content-around">
				<div class="col-12 md-col-6 single_post_image">
					<img class="img-fluid" src="<?= $post->get_image();?>">
				</div>
				<div class="col-12 md-col-6 single_post_image">
					<div> <!-- Here we need to fetch image1 of the post --></div>
				</div>
			<!-- Row-->	
			</div>	
			
			<div class="row">
				<div class="col-12">
					<p class="date"><?= $post->get_date();?></h3>
					<p class="author">Created by: <?= $post->get_created_by();?></p>
					<p>Created by: <?= $post->get_description();?></p>
				</div>	
			</div>
		</section>
		
		<aside class="container-fluid">
			<div class="divider"></div>
		</aside>
		
		<section class="container product_suggestions">
			<!--Here insert products from Mysql with relevan categories-->
		</section>
		
			<!--include comment field-->
		<section class="container edit_post_buttons">
			<!-- add admin cta area-->
			<?php if ($_SESSION["admin"] == 1) {?>
				<div class="row admin-cta-area">
					<div class="col=4 edit_button">
						<form action="../views/edit_post_page.php?action=edit&id=<?=$post->get_id();?>" method="POST">
							<button type="submit" name="edit_post" class="btn"><i class="fas fa-edit"></i></button>
			            </form>
					</div>
			 		<div class="col=4 delete_post_button">
						<form action="../includes/actions_posts.php?id=<?= $post->get_id();?>" method="POST">
							<button type="submit" name="remove_post" value="Delete Post" class="btn"><i class="fas fa-trash-alt"></i></button>
						</form>
					</div>
				</div>
			<?php }?>
	
		</section>
		
		<aside>
			<div class="text_divider"></div>
		</aside>

		<section class="comment_form container">
        <div class= "col-12">
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
						<div class="row">
							<div class="col-12 col-5 comment">
						
								<div><p><?= $comment->get_content(); ?></p></div>
								<div><p class="author"><?= $comment->get_created_by();?></p></div>
								<div><p class="date"><?= $comment->get_date(); ?></p></div>
	      	  
		      	  				<!-- If is user is an admin you see a remove comment button. If the button is pressed the, then $_POST["delete_comment"] is used to set of the if statement.  
		      	  				Post Id is sent in the url to know which single post one has to be redirected back to. 
		      	  				We use getter for comment id to know which commment to delete -->
		      	  
			      				<?php if ($_SESSION["admin"] == 1) :?>
			      	
									<form action="../includes/comment_controller.php?id=<?= $post->get_id();?>"method="post">
              							<input type="hidden" value="<?= $comment->get_id();?>" name="delete_comment">
		              					<button type="submit" name="remove" value="remove"><i class="fas fa-trash-alt"></i></button>
							  		</form>
				    		
				    			<?php endif;?>
					  	    	<hr>
					
							</div><!--Col Comment-->
						</div><!--row-->
  			 	 
  			  <?php 
						endforeach; ?>
			</section>
	

			
	</main>
	
	
  <?php
    require "../includes/footer.php"
  ?>
</body>

</html>