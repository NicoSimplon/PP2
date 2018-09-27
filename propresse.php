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

	<div class="container valign-wrapper" id="propresse_container">
		<div class="row fullwidth">
			<div class="col s12 m6 center-align">
				<div class="card">
        			<div class="card-image">
						<img class="responsive-img" id="pro" src="img/pro/pro.jpg">
        			</div>
				</div>
				<div class="card-content">
					<span class="card-title black-text">Vous souhaitez plus d'informations ?</span>
				</div>
			</div>
			<div class="col s12 m6 center-align">
				<div class="card">
        			<div class="card-image">
						<img class="responsive-img"  id="presse" src="img/presse/presse.jpg">
        			</div>
				</div>
				<div class="card-content">
					<span class="card-title">Ils ont parlé de nous</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container" id="pro_container">
		<div class="row">
			<div class="col s12 m5">
				<img class="responsive-img propresse-img materialboxed" src="img/pro/terrain.jpg">
    			<img class="responsive-img propresse-img materialboxed" src="img/pro/salle.jpg">
    			<img class="responsive-img propresse-img materialboxed" src="img/pro/bar.jpg">
			</div>
			<div class="col s12 m7">
			<div class="section">
					<h5>Les ESPACES</h5>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Terrain 5 ha</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Salle de réception</p>
					<p class="white-text">parquet bois 140m²</p>
					<p class="white-text">Capacité 100 personnes</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Bar license IV</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Cuisine professionnelle 70m²</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Terrasse 100m²</p>
					<p class="white-text">& Piscine 70m²</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Espaces Verts</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Parking</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m5">
				<img class="responsive-img propresse-img materialboxed" src="img/pro/piscine.jpg">
				<img class="responsive-img propresse-img materialboxed" src="img/pro/espace_vert.jpg">
				<img class="responsive-img propresse-img materialboxed" src="img/pro/scènedj.jpg">
			</div>
			<div class="col s12 m7">
				<div class="section">
					<h5>Les INSTALLATIONS</h5>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Scène 15m²</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Sonorisation</p>
					<p class="white-text">et Table de Mixage</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Rampe d'éclairages</p>
					<p class="white-text">monitorés par ordinateur</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Éclairages lasers</p>
					<p class="white-text">et machines à fumée</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Vidéoprojecteur</p>
				</div>
				<div class="divider"></div>
				<div class="section">
					<p class="white-text">Capacité électrique</p>
					<p class="white-text">150 kW</p>
				</div>
			</div>
		</div>
	</div>

	


	<!-- CONTENU DE LA SECTION PRESSE A DEFINIR A SAVOIR SI ON GARDE LES FLYERS DE PROGRA AU RISQUE D ETRE REDONDANT OU SI ON GARDE JUSTE L ARTICLE NEWSBOX AU RISQUE DE FAIRE PARAITRE LA PAGE VIDE -->
	<!-- POUR L INSTANT JE SUIS PARTI SUR JUSTE LARTICLE -->
	<div class="container" id="presse_container">
		<div class="section">
			<div class="row center">
				<div class="col s12 m3 no_margin_left">
					<img class="responsive-img materialboxed" src="img/presse/newbox1.jpg">
				</div>
				<div class="col s12 m3 no_margin_left">
					<img class="responsive-img materialboxed" src="img/presse/newbox2.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class="section center-align" id="changement_section">
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