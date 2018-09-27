<!DOCTYPE html>

<html>

<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navfoot.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	
</head>

<body>

	<!-- Partie contenant le bandeau -->

	
	<br>
	<div class="image">
		<img id="myImg2" src="img/logocolo.jpg">
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h4 class="text-center"> CONNEXION</h4>
		</div>
	</div>
	<form id="logform" method="post" action="connexion.php">
		<div class="row">
			<div class="input-field col s12">
				<input id="mail" name="mail" type="email" class="validate">
				<label class="active" for="mail">Email</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="motdepasse" name="motdepasse" type="password" class="validate">
				<label class="active" for="mot de passe">Mot de passe</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<button id="btn_submit" class="waves-effect waves-light btn" type="submit">Se connecter
				</button>
			</div>
		</div>
	</form>
		<div class="row" >
			<a class="row" href="index.php">
			<div class="input-field col s12">
				<button class="waves-effect waves-light btn"><i class="material-icons center">reply</i></button>
				</a>
			</div>
	</div>

</body>

</html>