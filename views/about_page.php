<?php
 
 session_start();

 include "../includes/head.php";
 include "../includes/mail.php";
 include "../includes/force_login.php";
 
?>

<body id="about_page">

	<?php 
	include "../includes/email_alerts.php";
	?>

	<header>
		<?php
    include "../includes/nav-bar.php";
		include "../includes/carousel.php";
		?>
	</header>

	<main>
		<section class="container-fluid about_container">
			<div class="text_wrapper">

				<div class="row justify-content-center">
			    <div class="col-11 col-md-10 text_header">	
						<h2 class="subheading">About Us</h2>
						<div class="underline"></div>
					</div>	
				<!-- Row-->	
				</div>
				
				<div class="row justify-content-center">
					
					<div class="col-11 col-md-5 about_content">
						<!--latest post title from Post.php-->
						<h1 class="title_inverse about_title">Velkommen til Millhouse</h1>
						<!--latest post summary or text from Post.php-->
						<p class="body1_inverse about_text">Vi på Millhouse hjelper gjerne med større og 
						mindre innrednings-prosjekter. Synes du det er vanskelig å 
						finne den røde tråden? Ønsker du nye farger eller puter i sofaen? 
						Kanskje du har lyst på nye lamper eller ny tapet? 
						Millhouse sin prosjektavdeling tilbyr flere typer pakkeløsninger for de som ønsker hjelp med 
						innredningen, og vi kan også skreddersy tilbud helt etter ditt behov.	
						</p>	
					<!--Col-->	
					</div>

					<div class="col-11 col-md-5">
				  	<img class="img-fluid latest_post_image" src="../images/staff.jpg" alt="Staff at Millhouse">	
					</div>

				<!-- Row -->
				</div>

				<div class="underline divider"></div>
				
				<div class="row justify-content-center contact_container">
					<div class="col-11 col-md-5 contact_content align-middle">
					  <h1 class="title contact_title">Get in Touch</h1>
						<p class="body1 contact_details">
						Har du spørsmål eller ønsker du å kontakte oss vedrørende andre henvendelser?
						Ring eller send oss en melding, så svarer vi ved første anledning. 
						Vi setter stor pris på alle våre
						Millhouse-venner, og gleder oss til å høre fra deg!
						</p>	
						<br>
						<p class="body1">ÅPNINGSTIDER:</p>
						<p class="body1">Mandag – Fredag: 10 – 20</p>
						<p class="body1">Lørdag: 10 – 18</p>
						<br>
						<p class="body1">ADRESSE:</p>
						<p class="body1">Regjeringsgata 38</p>
						<p class="body1">	113 40 Stockholm</p>
						<br>
						<p class="body1">KONTAKT OSS:</p>	
						<p class="body1">
							+46 (0) 735644999</p>
						<br>
					</div>

					<div class="col-11 col-md-5">
						<h1 class="title contact_title">Write to us</h1>
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