<?php
$comment= $_POST['comment'];
$mail = $_POST['mail'];
// var_dump($mail);
$pseudo = $_POST['pseudo'];

include 'connexion/connexion_bdd.php';

//requête d'identification de mail 
$req =pg_query("SELECT * FROM personne WHERE courriel = '$mail' ");

$resultat =pg_fetch_array($req);




// echo $mail;

//condition --> vérifie l'existence du mail dans la bdd 
//Insérer des commentaires dans la bdd
$date_com = date ('Y/m/d');
if ($resultat["courriel"] == $mail){
    $id_pers = $resultat["id_pers"];
    pg_query("INSERT INTO commentaire (commentaire, date_com, id_pers, pseudo) VALUES ('$comment','$date_com','$id_pers','$pseudo')");
}
else{
    echo 'erreur';
}



//Requête de récup les commentaire, les pseudo et la date 
// SELECT commentaire, pseudo, date_com FROM commentaire 
$reqq=pg_query("SELECT commentaire, pseudo, date_com FROM commentaire ");
$resultat1 =pg_fetch_array($reqq);
echo $resultat1 [3];
//Requête de récup les 4 dernier commentaire avec la date 
//SELECT commentaire, date_com FROM commentaire LIMIT 5 OFFSET 3;
 
// requête valider en fonctiion de la condition 


?>