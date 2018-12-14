<?php
 
 session_start();
 include "../includes/head.php";
 include "../includes/mail.php";
?>

<body id="about_page">

	<?php 
	include "../includes/alerts.php";
	?>

	<header>
		<?php
    include "../includes/nav-bar.php";
		include "../includes/carousel.php";
		?>
	</header>

	<main>
		<section class="container-fluid about_container">
			<div class="about_page_wrapper">

				<div class="row justify-content-center">
			    <div class="col-11 col-md-10 text_header">	
						<h2 class="page_title">About Us</h2>
						<div class="underline"></div>
					</div>	
				<!-- Row-->	
				</div>
				
				<div class="row justify-content-center latest_post_content">
					<div class="col-11 col-md-6 order-md-12">
				  	<img class="img-fluid latest_post_image" src="../images/pink_flamingo.jpg" alt="pink flamingo">	
					</div>

					<div class="col-11 col-md-4 order-md-1 latest_post_text text-center">
						<!--latest post title from Post.php-->
						<h1 class="main_title latest_blogpost_title">Our Story</h1>
						<!--latest post summary or text from Post.php-->
						<p class="latest_post_content">Vi på Eske hjelper gjerne med større og 
						mindre innrednings-prosjekter. Synes du det er vanskelig å 
						finne den røde tråden? Ønsker du nye farger eller puter i sofaen? 
						Kanskje du har lyst på nye lamper eller ny tapet? Det blir fort mange valg å t
						a når man går i gang med endringer hjemme – noen ganger er det nok å ommøblere, 
						legge til litt mer be­lysning eller blande arvegodset med et par nye møbler. Andre 
						ganger trenger man hjelp til å skape helhet i en større forandring eller ombygning.
						Eskes prosjektavdeling tilbyr flere typer pakkeløsninger for de som ønsker hjelp med 
						innredningen, og vi kan også skreddersy tilbud helt etter ditt behov.	
						</p>	
					<!--Col-->	
					</div>
				<!-- Row -->
				</div>

				<div class="row justify-content-center">
					<div class="col-11 col-md-4">
					  <h1 class="main_title latest_blogpost_title">Get in Touch</h1>
						<p class="content">Vi på Eske hjelper gjerne med større og 
						mindre innrednings-prosjekter. Synes du det er vanskelig å 
						finne den røde tråden? Ønsker du nye farger eller puter i sofaen? 
						Kanskje du har lyst på nye lamper eller ny tapet? Det blir fort mange valg å t
						a når man går i gang med endringer hjemme – noen ganger er det nok å ommøblere, 
						legge til litt mer be­lysning eller blande arvegodset med et par nye møbler. Andre 
						ganger trenger man hjelp til å skape helhet i en større forandring eller ombygning.
						Eskes prosjektavdeling tilbyr flere typer pakkeløsninger for de som ønsker hjelp med 
						innredningen, og vi kan også skreddersy tilbud helt etter ditt behov.	
						</p>	
					</div>

					<div class="col-11 col-md-6">
						<?php 
							include_once "../includes/contact_form.php"
						?>
					</div>
				</div>

    <!--Wrapper-->	
		</div>
	</section>
	
	<aside class="container-fluid divider_bar">
		<div class="divider"></div>
	</aside>

	
</main>

	 <?php
    require "../includes/footer.php";
		?>
		
</body>

</html>