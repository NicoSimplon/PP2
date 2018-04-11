<?php

	include 'connexion_bdd.php';

	// php permettant de gérer l'abonnement et le désabonnement à la newsletter	
	$mail_news = $_POST['mailRecup'];
	
		function abonnement(){

		$mail_news = $_POST['mailRecup'];
	
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
						
						
	function desabonnement(){
		$mail_news = $_POST['mailRecup'];
		if(filter_var($mail_news, FILTER_VALIDATE_EMAIL)){
			$verif_mail = pg_query("SELECT mail_news FROM news WHERE mail_news = '".$mail_news."';")  or die ('Erreur : '.pg_last_error());
							
			$result = pg_fetch_array($verif_mail);

			if($result[0] == $mail_news){
				$deco = pg_query("DELETE FROM news WHERE mail_news = '".$mail_news."';") or die ('Erreur : '.pg_last_error());
				echo "<p>Vous avez été correctment désabonné.</p>";
			}
			else{
				echo "<p>Cette adresse mail n'est pas abonnée.</p>";
			}
			
		}
		else{
			echo "<p>Une erreur est survenue, veuillez réessayer plus tard.</p>";
		};
	}				
	
	if(isset($_POST['clickRecup'])){
		$dataClick = $_POST['clickRecup'];

		switch($dataClick){
			case 'abonner':
				abonnement();
				break;
			case 'desabonner':
				desabonnement();
				break;
		}
	}							
?>