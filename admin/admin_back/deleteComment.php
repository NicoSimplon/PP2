<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    include "../../connexion/connexion_bdd.php";

    $id_comment = intval($_POST['comment']);

    $req = pg_query(
        "DELETE FROM commentaire
        WHERE id_com = ".$id_comment
    );

    if($req){
        echo "Le commentaire a été supprimé avec succès";
    }
    else{
        echo "Une erreur est survenue, réessayez plus tard";
    }