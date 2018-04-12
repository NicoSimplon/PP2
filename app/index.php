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
	<!-- <link rel="stylesheet" type="text/css" href="dist/css/swiper.css"></link> -->
	<link rel="stylesheet" type="text/css" href="dist/css/navfoot.css"></link>
	<link rel="stylesheet" type="text/css" href="dist/css/materialize.css">
	<link rel="stylesheet" href="dist/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="dist/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/main.css">
</head>

<body>
	<!-- Partie contenant le bandeau -->

	<!-- <img class="bandeau" src="dist/img/bandeau.jpg" width="100%" height="auto"> -->

	<!-- Partie contenant la navbar -->

	<nav>
		<navmenu></navmenu>
	</nav>

	<!-- Partie contenant la slide des évènements -->

	<section>

			<div class="carousel carousel-slider center">
					<div class="carousel-fixed-item center">
						<a class="btn waves-effect white grey-text darken-text-2">button</a>
					</div>
					<div class="carousel-item red white-text" href="#one!">
						<h2>First Panel</h2>
						<p class="white-text">This is your first panel</p>
					</div>
					<div class="carousel-item amber white-text" href="#two!">
						<h2>Second Panel</h2>
						<p class="white-text">This is your second panel</p>
					</div>
					<div class="carousel-item green white-text" href="#three!">
						<h2>Third Panel</h2>
						<p class="white-text">This is your third panel</p>
					</div>
					<div class="carousel-item blue white-text" href="#four!">
						<h2>Fourth Panel</h2>
						<p class="white-text">This is your fourth panel</p>
					</div>
				</div>



		<!-- Partie contenant la barre d'alerte -->

		<div class="barre_alert">
			<div class="event_alert">

			</div>
			<div class="event_alert">

			</div>
			<div class="event_alert">

			</div>


		</div>

	</section>

	<section>

		<!-- Partie du milieu de la page -->


		<div class="col s12 m3">
			<!-- Commentaires Facebook -->
			<div>
				<i class="fab fa-facebook"></i>


				<br>

			</div>

			<!-- Abonnement newsletter -->
			<div>

				<h2>S'abonner à la newsletter</h2>

				<div>
					<br>
					<a id="sabonner" class="waves-effect waves-light btn modal-trigger boutonColor" href="#modal_abo">S'abonner</a>
				</div>
				<div>
					<br>
					<a id="sedesabonner" class="waves-effect waves-light btn modal-trigger boutonColor" href="#modal_abo">Se désabonner</a>
				</div>


			</div>


		</div>

		</div>
	</section>



	<?php
		include 'footer.php';
	?>





		<!-- Modal -->
		<div id="modal_abo" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>
					<strong>
						<span id=modal_titre></span>
					</strong>
				</h4>
				<form method="post">
					<div class="input-field">
						<input id="email" type="email" name="newsletter" required class="validate">
						<label for="email">E-mail</label>
					</div>
					<div>
						<br>
						<button id="desabo" class="btn waves-effect waves-light boutonColor ajaxBtn modal-action modal-close" name="desabonnement"
						  type="button" data-news="desabonner">Se désabonner</button>
					</div>
					<div>
						<button id="abo" class="btn waves-effect waves-light boutonColor ajaxBtn modal-action modal-close" type="button" name="abonnement"
						  data-news="abonner">S'abonner</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Annuler</a>
			</div>

		</div>

		<script src="dist/js/vue.js"></script>
		<script src="dist/js/jquery.js"></script>
		<script src="dist/js/materialize.js"></script>
		<script src="dist/owlcarousel/owl.carousel.js"></script>
		<script src="dist/js/navfoot.js"></script>
		<script src="dist/js/swipe.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
		  crossorigin="anonymous"></script>
		<script src="dist/js/main.js"></script>
</body>

</html>