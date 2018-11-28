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
						<h2></h2> 
					</div>

					<div>
						<!--here we should fetch latest post date-->
						<h3></h3>
					</div>

					<div>
						<!--here we should fetch latest post summary or text-->
						<p></p>

						<div>
							<button type="button" class="btn btn-outline-primary">Read More</button>
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
			<?php $access_posts = new Access_posts($pdo);
			$posts = $access_posts->list_all_posts();
			?>
			<?php foreach ($posts as $post) {?>
			<div class="col-12 col-5 single_post">
				<div><img src="<?= $post->get_image();?>"></div>
				<div><?= $post->get_title();?></div>
				<div>
					<button type="button" class="btn btn-outline-primary">Read More</button>
				</div>
				<!-- Col -->	
			</div><?php }?>
		</section>			

	</main>


	<?php
    require "../includes/footer.php"
    ?>
</body>

</html>
