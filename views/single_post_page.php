<?php
    session_start();
    include "../includes/head.php";  
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
				<h1></h1>
				<hr>
			</div>
			
			<div class="row">
				<div class="col-12 md-col-6">
					<div> <!-- Here we need to fetch image1 of the post --></div>
				</div>
				<div class="col-12 md-col-5">
					<div> <!-- Here we need to fetch image1 of the post --></div>
				</div>
			<!-- Row-->	
			</div>	
			
			<div class="row">
				<div class="col-12">
					<h3><!--Here we need to fetch date of the post--></h3>
					<p><!--Here we need to fetch date of the post--></p>
					
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
			<!--if admin include editing buttons-->
			<!--list comments-->
		</section>

	</main>
	
	
  <?php
    require "../includes/footer.php"
    ?>
</body>

</html>