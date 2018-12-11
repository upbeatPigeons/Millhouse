<?php
 
 session_start();
 include "../includes/head.php";
 require_once "../includes/database_connection.php";
 require_once "../classes/PostMethods.php";
?>

<?php 
// First have to create a new instance post to access functions in Class
$post_methods = new PostMethods($pdo);
// Using $post_methods to actually set of the functions we want and storing them
// in variables
$all_posts = $post_methods->list_all_posts();
$latest_post = $post_methods->list_latest_post();
?>

<body id="home_page">

	<header>
		<?php
    include "../includes/nav-bar.php";
		include "../includes/carousel.php";
		?>
	</header>

<?php
// If there are no posts in the table, show a error message
if (!$latest_post) : ?>
<h2>Hm, it seems like there are no blog posts to show..</h2>
<?php else: ?>

	<main>
		<section class="container post_container">
			<div>
				<h1>Latest Posts</h1>
				<hr>
			</div>
			<div class="row latest_post_wrapper justify-content-between">
				<div class="col-12 col-md-4">
					<div>
						<!--here we should fetch latest post title from Post.php-->
						<h2><?= $latest_post->get_title();?></h2> 
					</div>

					<div>
						<!--here we should fetch latest post date from Post.php-->
						<h3><?= $latest_post->get_date();?></h3>
					</div>

					<div>
						<!--here we should fetch latest post summary or text from Post.php-->
						<p><?= $latest_post->get_description();?></p>

						<div>
							<!-- If "read more" btn is clicked we send a $_GET variable with the id so we know which post to show on next page  -->
							<a href="single_post_page.php?id=<?= $latest_post->get_id();?>" class="btn primory_btn">Read more</a>
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
			
			<!-- Here we loop through and show every individual post in database. And use the getter info from the class Post.php so we can loop out the correct data where we want it -->
			<?php foreach ($all_posts as $post): ?>
			<div class="col-12 col-5 single_post">
				<div><img src="<?= $post->get_image();?>"></div>
				<div><?= $post->get_title();?></div>
				<div>
					<!-- The exact same "read more" btn as above on line 56 -->
					<a href="single_post_page.php?id=<?= $post->get_id();?>" class="btn primory_btn">Read more</a>
				</div>

				<!-- If remove btn is pressed, then $_POST is used to set of the if-statement which executes the remove function. Also the id is sent through the url so it can be added to the parameter as argument to the remove function-->
				<form action="../includes/actions_posts.php?id=<?= $post->get_id();?>" method="POST">
				<input type="submit" name="remove_post" value="Delete Post" class="btn primory_btn" />
				</form>

				<!-- Col -->	
			</div>
			<?php endforeach; ?>
		</section>			

	</main>

<?php endif; ?> <!-- (!$latest_post) -->

<?php
require "../includes/footer.php"
?>

</body>

</html>
