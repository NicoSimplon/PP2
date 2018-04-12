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

	<img class="bandeau" src="dist/img" width="100%" height="auto">



	<nav>
		<navmenu></navmenu>
	</nav>

	<!-- Partie contenant la slide des évènements -->

	<section>

		<div class="carousel carousel-slider  size">
			<div class="carousel-item red white-text" href="#one!">
				<div class="styletext">
					<h2 class="infoActua">First Panel</h2>
					<p class="white-text infoActua">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sit fugiat eos ipsam veniam, aliquam perspiciatis
						voluptatem consectetur expedita, cupiditate dignissimos beatae architecto fuga id molestiae nulla at? Accusamus, sed!</p>
				</div>
				<img src="concert.png " class="testImg">
			</div>
			<div class="carousel-item amber white-text" href="#two!">
				<div class="styletext">
					<h2 class="infoActua">Second Panel</h2>
					<p class="white-text infoActua">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eum necessitatibus eius, accusamus ratione beatae ipsam
						corrupti quia tempore nemo minima inventore omnis quaerat iure, harum neque nam amet iusto.</p>
				</div>
			</div>
			<div class="carousel-item green white-text" href="#three!">
				<div class="styletext">
					<h2 class="infoActua">Third Panel</h2>
					<p class="white-text infoActua">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, voluptas sed ea culpa quisquam cupiditate. Possimus
						aperiam non voluptatibus! Corporis error nesciunt autem dolore accusantium aliquid deleniti quibusdam libero.</p>
				</div>
			</div>
			<div class="carousel-item blue white-text" href="#four!">
				<div class="styletext">
					<h2 class="infoActua">Fourth Panel</h2>
					<p class="white-text infoActua">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iure error asperiores expedita odit aut consequatur
						excepturi dignissimos, tempora itaque nam culpa quasi possimus odio vitae voluptatibus sunt iusto maiores!</p>
				</div>
			</div>
		</div>


		<!-- Partie contenant la barre d'alerte -->

		<div class="barre_alert">
			<div class="event_alert">
				<img src="concert.png" class="testImg">
			</div>
			<div class="event_alert">
				<img src="concert.png" class="testImg">
			</div>
			<div class="event_alert">
				<img src="concert.png" class="testImg">
			</div>

		</div>

	</section>

	<section>

		<div class="gridContainer">
			<div class="cell">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam vel atque debitis quia provident ab obcaecati mollitia
					nulla sequi explicabo!</p>
			</div>
			<div class="cell">
				<img src="piscine.jpg" class="testImg">
			</div>
			<div class="cell">

				<img src="piscine.jpg" class="testImg">
			</div>
			<div class="cell">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam vel atque debitis quia provident ab obcaecati mollitia
					nulla sequi explicabo!</p>
			</div>
		</div>

		<div class="rightContainer">
			<div class="fb">
			</div>
			<div class="news">
				<h5>Newsletters</h5>
				<div class="input-field size">
					<input id="email" type="email" name="newsletter" required class="validate">
					<label class="size" for="email">E-mail</label>
				</div>
				<div class="boutonNew">
					<div>
						<a id="sabonner" data-news="abonner" class=" ajaxBtn waves-effect waves-light btn  boutonColor">S'abonner</a>
					</div>
					<div>
						<a id="sedesabonner" data-news="desabonner" class="ajaxBtn waves-effect waves-light btn  boutonColor">désabonner</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Abonnement newsletter -->
	</section>



	<?php
include 'footer.php';
?>





		<!-- Modal -->
		<!-- href="#modal_abo"
		modal-trigger -->
		<!-- <div id="modal_abo" class="modal modal-fixed-footer">
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

		</div> -->

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