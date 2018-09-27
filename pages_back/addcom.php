<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include '../connexion/connexion_bdd.php';

$tab = $_POST['tabData'];

$mail = str_replace("'", "&#39", $tab[0]);
$pseudo = str_replace("'", "&#39", $tab[1]);
$commentaire = str_replace("'", "&#39", $tab[2]);

$mail = str_replace('"', "&quot", $mail);
$pseudo = str_replace('"', "&quot", $pseudo);
$commentaire = str_replace('"', "&quot", $commentaire);

// on génère une date pour le commentaire
$date_com = date ('Y/m/d');

//requête d'identification de mail 
$req = pg_query("SELECT id_pers FROM personne WHERE courriel = '".$tab[0]."' ");
$resultat = pg_fetch_all($req);

if($resultat){

    pg_query("INSERT INTO commentaire (commentaire, date_com, id_pers, pseudo) VALUES ('".$commentaire."','".$date_com."','".$resultat[0]['id_pers']."','".$pseudo."')");

    echo "Votre commentaire a été posté avec succès";

}
else{
    echo 'Vous ne pouvez pas poster de commentaires car vous n\'avez jamais effectué de réservations';
}
