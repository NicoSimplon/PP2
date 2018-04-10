<?php
	include 'dist/connexion_bdd.php';
?>

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
	<header>
		<p>Photo</p>
	</header>
	<!-- Partie contenant la navbar -->
		
	<nav>
        <navmenu></navmenu>
    </nav>

	<!-- Partie contenant la slide des évènements -->

	<div id="slide_event">
		
		<div class="owl-carousel owl-theme">
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
		    <div class="item size"><img src="piscine.jpg"></div>
			<div class="item size"><img src="piscine.jpg"></div>
		</div>
		
	</div>
	
	<!-- Partie contenant la barre d'alerte -->

	<div id="alert_bar" class="row">
		
		<div class="col s12 m4 h100">
			<p>zerg</p>
			<img src="piscine.jpg" >
		</div>
		
		<div class="col s12 m4 h100">
			<p>zerg</p>
			<img src="piscine.jpg" >
		</div>
			
		<div class="col s12 m4 h100">
			<p>zerg</p>
			<img src="piscine.jpg" >
		</div>
		
	</div>

	<!-- Partie du milieu de la page -->

	<div id="descriptifFacebookNewsletter" class="row">

		<div class="col s12 m9">
			<div class="row">
				<div class="col s12 m6">
					<img src="piscine.jpg" width="100%">
				</div>
				<div class="col s12 m6">
					Labore aute irure elit fugiat dolor aute aute esse ullamco excepteur incididunt officia duis magna adipisicing magna ut magna amet ut ut proident nostrud veniam amet eu id id incididunt laboris id tempor proident deserunt labore voluptate ea dolor in magna magna dolor adipisicing nisi cillum eu mollit reprehenderit aliqua pariatur ut consequat sit pariatur tempor tempor anim laboris ullamco non officia proident sit proident sint qui labore ut a ut.
				</div>
				<div class="col s12 m6">
					Labore aute irure elit fugiat dolor aute aute esse ullamco excepteur incididunt officia duis magna adipisicing magna ut magna amet ut ut proident nostrud veniam amet eu id id incididunt laboris id tempor proident deserunt labore voluptate ea dolor in magna magna dolor adipisicing nisi cillum eu mollit reprehenderit aliqua pariatur ut consequat sit pariatur tempor tempor anim laboris ullamco non officia proident sit proident sint qui labore ut 
				</div>
				<div class="col s12 m6">
					<img src="piscine.jpg" width="100%">
				</div>
			</div>
		</div>

		<div class="col s12 m3">
		<!-- Commentaires Facebook -->
			<div>
				<i class="fab fa-facebook"></i>
				
				
			</div>
			
			<br>

		<!-- Abonnement newsletter -->
			<div>
				
				<h2>S'abonner à la newsletter</h2>

				<form method="post">
				  	<div class="input-field">
			          	<input id="email" type="email" name="newsletter" required class="validate">
			          	<label for="email">E-mail</label>
			        </div>
				  	<button class="btn waves-effect waves-light" type="submit">S'abonner</button>
				</form>
				
				<div>
				<?php

					$mail_news = $_POST['newsletter'];

					if(isset($mail_news)){
						if(filter_var($mail_news, FILTER_VALIDATE_EMAIL)){
							$verif_mail = pg_query("SELECT mail_news FROM news WHERE mail_news = '".$mail_news."';")  or die ('Erreur : '.pg_last_error());
							
							$result = pg_fetch_array($verif_mail);

							if($result[0] == $mail_news){
								echo "<p>Cet email est déjà abonné.</p>";
							}
							
							else{
								$inscription = pg_query("INSERT INTO news (mail_news) VALUES('".$mail_news."');")  or die ('Erreur : '.pg_last_error());
								echo "<p>Votre abonnement a bien été pris en compte.</p>";
							}
						}
						else{
							echo "<p>Veuillez vérifier que l'adresse renseignée est bien un email.</p>";
						}
					}
				?>

				 <!-- Modal -->
				<div id="modal_desabo" class="modal modal-fixed-footer">
			        <div class="modal-content">
			            <h4>Se désabonner</h4>
			            <form method="post">
							<div class="input-field">
					          	<input id="email" type="email" name="newsletter2" required class="validate">
					          	<label for="email">E-mail</label>
					        </div>
							<button class="btn waves-effect waves-light" name="desabonnement" type="submit">Se désabonner</button>
						</form>
			        </div>
			        <div class="modal-footer">
			            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Annuler</a>
			        </div>
			        
				</div>
				<?php
					$mail_news2 = $_POST['newsletter2'];

					if(isset($_POST['newsletter2'])){
						if(filter_var($mail_news2, FILTER_VALIDATE_EMAIL)){
							$deco = pg_query("DELETE FROM news WHERE mail_news = '".$mail_news2."';") or die ('Erreur : '.pg_last_error());
							echo "<p>Vous avez été correctment désabonné.</p>";
						}
						 else{
						 	echo "<p>Une erreur est survenue, veuillez réessayer plus tard.</p>";
						 };
					}
					
				?>
			    </div>

				<br>
				<a class="waves-effect waves-light btn modal-trigger" href="#modal_desabo">Se désabonner</a>
			</div>

		</div>
		
	</div>

	<!-- Partie contenant les derniers commentaires du site -->

	<div id="commentaires" class="row">
		
		<div class="col m3 hide-on-small-and-down">
			<img src="piscine.jpg" width="100%">
		</div>
		
		<div class="col s12 m6">
			<div class="ui feed">
			  <div class="event">
			    <div class="label">
			      <img src="/images/avatar/small/elliot.jpg">
			    </div>
			    <div class="content">
			      <div class="summary">
			        <a class="user">
			          Elliot Fu
			        </a> added you as a friend
			        <div class="date">
			          1 Hour Ago
			        </div>
			      </div>
			      <div class="meta">
			        <a class="like">
			          <i class="like icon"></i> 4 Likes
			        </a>
			      </div>
			    </div>
			  </div>
			  <div class="event">
			    <div class="label">
			      <img src="/images/avatar/small/helen.jpg">
			    </div>
			    <div class="content">
			      <div class="summary">
			        <a>Helen Troy</a> added <a>2 new illustrations</a>
			        <div class="date">
			          4 days ago
			        </div>
			      </div>
			      <div class="extra images">
			        <a><img src="/images/wireframe/image.png"></a>
			        <a><img src="/images/wireframe/image.png"></a>
			      </div>
			      <div class="meta">
			        <a class="like">
			          <i class="like icon"></i> 1 Like
			        </a>
			      </div>
			    </div>
			  </div>
			  <div class="event">
			    <div class="label">
			      <img src="/images/avatar/small/jenny.jpg">
			    </div>
			    <div class="content">
			      <div class="summary">
			        <a class="user">
			          Jenny Hess
			        </a> added you as a friend
			        <div class="date">
			          2 Days Ago
			        </div>
			      </div>
			      <div class="meta">
			        <a class="like">
			          <i class="like icon"></i> 8 Likes
			        </a>
			      </div>
			    </div>
			  </div>
			  <div class="event">
			    <div class="label">
			      <img src="/images/avatar/small/joe.jpg">
			    </div>
			    <div class="content">
			      <div class="summary">
			        <a>Joe Henderson</a> posted on his page
			        <div class="date">
			          3 days ago
			        </div>
			      </div>
			      <div class="extra text">
			        Ours is a life of constant reruns. We're always circling back to where we'd we started, then starting all over again. Even if we don't run extra laps that day, we surely will come back for more of the same another day soon.
			      </div>
			      <div class="meta">
			        <a class="like">
			          <i class="like icon"></i> 5 Likes
			        </a>
			      </div>
			    </div>
			  </div>
			  <div class="event">
			    <div class="label">
			      <img src="/images/avatar/small/justen.jpg">
			    </div>
			    <div class="content">
			      <div class="summary">
			        <a>Justen Kitsune</a> added <a>2 new photos</a> of you
			        <div class="date">
			          4 days ago
			        </div>
			      </div>
			      <div class="extra images">
			        <a><img src="/images/wireframe/image.png"></a>
			        <a><img src="/images/wireframe/image.png"></a>
			      </div>
			      <div class="meta">
			        <a class="like">
			          <i class="like icon"></i> 41 Likes
			        </a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		
		<div class="col m3 hide-on-small-and-down">
			<img src="piscine.jpg" width="100%">
		</div>
		
	</div>

	<!-- Partie contenant le footer -->

	<?php
		include 'footer.php';
	?>

	<script src="dist/js/vue.js"></script>
	<script src="dist/js/jquery.js"></script>
	<script src="dist/js/materialize.js"></script>
	<script src="dist/owlcarousel/owl.carousel.js"></script>
	<script src="dist/js/navfoot.js"></script>
	<script src="dist/js/swipe.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script src="dist/js/main.js"></script>
</body>
</html>
