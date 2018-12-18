<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Millhouse</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans:400,400i,700" rel="stylesheet">

	<!--checks if file location is within 
	views folder using getcwd which returns path.
	this is to get all "local" paths right-->
	<?php $path = getcwd();
	if(strpos($path, "views") === false): ?>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">

	<?php else: ?>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
		<!--CSS-->        
		<link rel="stylesheet" href="../css/style.css">    
		
	<?php endif; ?>
</head>

