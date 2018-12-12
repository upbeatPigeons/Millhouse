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
		<section class="container-fluid latest_post">
			<div class="latest_post_wrapper">

			  <div class="row justify-content-center">
			  	<div class="col-12 col-md-10">	
						<h1 class="page_title">Latest Posts</h1>
					<div class="title_underline"></div>
				</div>	
				<!-- Row-->	
			  </div>

			<div class="row single_post_content justify-content-center">

			<div class="col-12 col-md-5 order-md-12">
				  <img class="img-fluid latest_post_image" src="<?= $latest_post->get_image();?>">	
				</div>

				<div class="col-12 col-md-5 order-md-1 my-auto post_content">
					<!--here we should fetch latest post title from Post.php-->
					<h2 class="smaller_title"><?= $latest_post->get_title();?></h2>
					<!--here we should fetch latest post date from Post.php-->
					<p class=date><?= $latest_post->get_date();?></p>
					<!--here we should fetch latest post summary or text from Post.php-->
					<p class="content"><?= $latest_post->get_description();?></p>
					<!-- If "read more" btn is clicked we send a $_GET variable with the id so we know which post to show on next page  -->
					<a href="single_post_page.php?id=<?= $latest_post->get_id();?>" class="btn primory_btn">Read more</a>

				<!--Col-->	
				</div>	

			<!-- Single Post Content End -->
			</div>

			<!--Latest Post Wrapper-->	
			</div>
		<!--Latest Post-->	
		</section>
   
		<aside class="container-fluid divider_bar">
			<div class="divider"></div>
		</aside>
		
		<section class="container-fluid all_posts">
			
				<!-- Here we loop through and show every individual post in database. And use the getter info from the class Post.php so we can loop out the correct data where we want it -->
				<div class="row justify-content-center text-center">
				<?php foreach ($all_posts as $post): ?>
			
					<div class="col-12 col-md-5 blog_post">
          	<div class="container">
						
							<img class="img-fluid post_image" src="<?= $post->get_image();?>">
							<div class="overlay">
								<h2 class="smaller_title text"><?= $post->get_title();?></h2>	
								<a class="text_link" href="single_post_page.php?id=<?= $post->get_id();?>" class="btn primory_btn">Read more</a>
							</div>
							
						<!--Container-->
						</div>

          <!--Col-->
					</div>	

				<?php endforeach; ?>
				</div>	

				
		</section>			

	</main>

<?php endif; ?> <!-- (!$latest_post) -->

<?php
require "../includes/footer.php"
?>

</body>

</html>
