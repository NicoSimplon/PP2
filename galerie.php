<!DOCTYPE html>

<html>

<head>
	<title>Galerie</title>
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

    <div class="container">

		<div class="section">
			<div class="row center"  id="galerie_lieu">
			
			</div>
        	<div class="row" id="galeries">

			</div>
        </div>

		<div class="section">
			<div class="row center" id="selection_galeries">
				<div class="col s12 m6 no_margin_left">
					<a class="btn" id="btn_selection_galeries">Choix des galeries</a>
				</div>
			</div>
		</div>

		<div class="section">
        	<div class="row" id="rangée_galerie">
    
			</div>
		</div>
    </div>

    <?php include 'nav_footer/footer.php'; ?>

	<script src="js/librairies/jquery.js"></script>
	<script src="js/librairies/materialize.js"></script>
	<script src="js/navfoot.js"></script>
    <script src="js/galerie.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>

</html>