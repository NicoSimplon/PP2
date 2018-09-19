<?php

    include "../connexion/connexion_bdd.php";

    if($_POST['perso']){

        $id_perso = intval($_POST['perso']);
        $id_event = intval($_POST['event']);

        $req = pg_query("DELETE FROM pers_even WHERE id_pers = ".$id_perso." AND id_event =".$id_event);

        if($req){
            echo "La réservation a bien été supprimée";
        }

    }
    else {
        echo "Un problème est survenu, veuillez contacter un administrateur";
    }