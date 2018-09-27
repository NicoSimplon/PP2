<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include '../connexion/connexion_bdd.php';

$tab = $_POST['tabData'];

// on génère une date pour le commentaire
$date_com = date ('Y/m/d');

//requête d'identification de mail 
$req = pg_query("SELECT id_pers FROM personne WHERE courriel = '".$tab[0]."' ");
$resultat = pg_fetch_all($req);

if($resultat){

    pg_query("INSERT INTO commentaire (commentaire, date_com, id_pers, pseudo) VALUES ('".$tab[2]."','".$date_com."','".$resultat[0]['id_pers']."','".$tab[1]."')");

    echo "Votre commentaire a été posté avec succès";

}
else{
    echo 'Vous ne pouvez pas poster de commentaires car vous n\'avez jamais effectué de réservations';
}
