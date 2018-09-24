<!DOCTYPE html>
<html>
<head>
    <title>Qui sommes nous ?</title>
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
    
	<?php include 'connexion/connexion_bdd.php'; ?>
</head>
<body>
    <div class="nav">
		<?php include 'nav_footer/nav.php'; ?>
    </div>

    
    <div class="container">
		<div class="row">
			<div class="col s12 m6 center-align">
				<h4 class="white-text">CABARET SYLVESTRE</h4>
				<p class="white-text no_margin">Concerts (acoustiques/électro/DJ)</p>
				<p class="white-text no_margin">& Performances sceniques</p>
				<p class="white-text no_margin">Restaurant - Tapas - Bar à vins & cocktails</p>
				<p class="white-text no_margin">Apéro-concerts, Pool party, Activités champêtres</p>
            </div>
            <!-- Les liens vers les images sont dans le CSS -->
			<div class="col s12 m6 accueil_img_container" id="accueil_img1">
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 accueil_img_container" id="accueil_img2">
			</div>
			<div class="col s12 m6 center-align">
				<h4 class="white-text">ÉVÉNEMENTS PRIVÉS/PUBLICS</h4>
				<p class="white-text no_margin">Réceptions (mariages, anniversaires, baptêmes, EVF/EVG</p>
				<p class="white-text no_margin">Réunions & repas d'affaire, sorties CE, conférences</p>
				<p class="white-text no_margin">Journées à thème & Animations</p>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 center-align">
				<h4 class="white-text">STAGES & RÉSIDENCES</h4>
				<p class="white-text no_margin">Installations disponibles pour :</p>
				<p class="white-text no_margin">Résidence d'artistes</p>
				<p class="white-text no_margin">Stages & cours (dance, théâtre, peinture, etc.</p>
				<p class="white-text no_margin">Ateliers culinaires & location cuisine professionnelle</p>
			</div>
			<div class="col s12 m6 accueil_img_container" id="accueil_img3">
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 accueil_img_container" id="accueil_img4">
			</div>
			<div class="col s12 m6 center-align">
				<h4 class="white-text">FESTIVALS</h4>
				<p class="white-text no_margin">Accueil de festivals en scène extérieures & intérieures</p>
				<p class="white-text no_margin">Aires de camping pour tentes & fourgons/caravanes</p>
				<p class="white-text no_margin">Prestations traiteur & bar licence IV</p>
			</div>
		</div>
    </div>
        
    <?php include 'nav_footer/footer.php'; ?>

    <script src="js/librairies/jquery.js"></script>
	<script src="js/librairies/materialize.js"></script>
	<script src="js/navfoot.js"></script>
	<script src="js/main.js"></script>
	<script src="js/librairies/swipe.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>