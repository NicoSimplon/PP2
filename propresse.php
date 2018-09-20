<!DOCTYPE html>
<html>

<head>
    <title>Pro-presse</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
	    crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
	    crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/navfoot.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="nav">
		<?php include 'nav_footer/nav.php'; ?>
	</div>

	<!-- Changer les liens une fois que les pages seront définies, peut être mettre une séparation entre les deux parties de la page -->
	<div class="container valign-wrapper" id="propresse_container">
		<div class="row fullwidth">
			<div class="col s6 center-align">
				<img class="responsive-img" id="pro" src="img/pro.jpg">
			</div>
			<div class="col s6 center-align">
				<img class="responsive-img"  id="presse" src="img/spookyPumpkin.jpeg">
			</div>
		</div>
	</div>

	<div class="container" id="pro_container">
		<div>
			<p>Bienvenue chez les pros</p>
		</div>
	</div>

	<div class="container" id="presse_container">
		<div>
			<p>Bienvenue chez la pressse</p>
		</div>
	</div>

	<div class="section" id="changement_section">
		<a id="btn_changement_section" class="white-text waves-effect waves-light btn">Changer de section</a>
	</div>

    <?php include 'nav_footer/footer.php'; ?>

    <script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/navfoot.js"></script>
	<script src="js/main.js"></script>
	<script src="js/propresse.js"></script>
    <script src="js/librairies/swipe.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>