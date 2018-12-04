<?php
session_start();
include "../includes/head.php";
require_once "../includes/database_connection.php";
require_once "../classes/Posts_access.php";
?>

<?php 
$access_posts = new Access_posts($pdo);
$all_posts = $access_posts->list_all_posts();
$latest_post = $access_posts->list_latest_post();
?>


<body id="home_page">

	<header>
		<?php
    include "../includes/nav-bar.php";
		include "../includes/carousel.php";
		?>
	</header>

	<main>
		<section class="container post_container">
			<div>
				<h1>Latest Posts</h1>
				<hr>
			</div>
			<div class="row latest_post_wrapper justify-content-between">
				<div class="col-12 col-md-4">
					<div>
						<!--here we should fetch latest post title-->
						<h2><?= $latest_post->get_title();?></h2> 
					</div>

					<div>
						<!--here we should fetch latest post date-->
						<h3><?= $latest_post->get_date();?></h3>
					</div>

					<div>
						<!--here we should fetch latest post summary or text-->
						<p><?= $latest_post->get_description();?></p>

						<div>
							<a href="single_post_page.php?id=<?= $latest_post->get_id();?>" class="btn btn-outline-primary">Read more</a>
						</div>
					</div>
				<!-- Col -->
				</div>

				<div class="col-12 col-md-6">
					<div class="container latest_post_image">
						<!--here we should fetch latest post image-->
						<p></p>
					</div>
				<!-- Col -->	
				</div>	

				<!-- Row -->
				</div>

		</section>
   
		<aside>
			<div class="divider"></div>
		</aside>
		
		<section class="row all_posts">
			
			<!-- Here we will include post array, and return image and title -->
			<?php foreach ($all_posts as $post): ?>
			<div class="col-12 col-5 single_post">
				<div><img src="<?= $post->get_image();?>"></div>
				<div><?= $post->get_title();?></div>
				<div>
					<a href="single_post_page.php?id=<?= $post->get_id();?>" class="btn btn-outline-primary">Read more</a>
				</div>
				
				<form action="../includes/actions_posts.php?id=<?= $post->get_id();?>" method="POST">
				<input type="submit" name="remove_post" value="Delete Post" class="btn btn-outline-primary" />
				</form>
				<!-- Col -->	
			</div>
			<?php endforeach; ?>
		</section>			

	</main>


	<?php
  require "../includes/footer.php"
  ?>
</body>

</html>
