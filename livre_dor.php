<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
			crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
				crossorigin="anonymous">
	<link type="text/css" href="css/commentaire.css">
	<link rel="stylesheet" type="text/css" href="css/commentaire.css">
	<link rel="stylesheet" type="text/css" href="css/navfoot.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
	<div class="nav">
			<?php 
				include 'nav_footer/nav.php';
			?>
			</div>
	<div class="formulaire">
			<h4>Laissez-nous un commentaire !</h4>

	<form id="form"  method="post">
				<!-- 1er champ pseudo -->
				<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_box</i>
						<input  id="pseudo" type="text" name="pseudo" value="Anonyme">
						<label for="pseudo">Choisissez un pseudo (100 caractères max)</label>
					</div>
				</div>
			</div>
		</div>

	<!-- deuxième champ mail -->
		<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">mail</i>
							<input id="mail" type="email" name="mail">
							<label for="mail">Adresse mail</label>
					</div>
				</div>
			</div>
		</div>

	<!-- troisième champ commentaire -->
		<div class="row">
			<div class="col s12">
				<div class="row">
						<div class="input-field col s12">
							<label for="com">Votre commentaire</label>
							<textarea id="com" class="materialize-textarea" name="comment"></textarea>
						</div>
				</div>
			</div>
		</div>
		<div class="container center-align">
			<button id="btn_envoi" class="btn waves-effect waves-light" type="button" name="envoi">Envoyer</button>
		</div>
	</form>
	</div>

	<h5>Commentaires :</h5>
	<div class="container">
		<div id="divComment" class="row">
	
				
		</div>
	</div>

	<?php
		include 'nav_footer/footer.php';
	?>




<script src="js/librairies/jquery.js"></script>
<script src="js/commentaire.js"></script>
	<script src="js/librairies/materialize.js"></script>
	<script src="js/navfoot.js"></script>
	<script src="js/main.js"></script>
	<script src="js/librairies/swipe.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>

