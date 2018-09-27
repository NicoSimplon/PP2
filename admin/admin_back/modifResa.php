<?php

    include "../../connexion/connexion_bdd.php";


    if($_POST['nb_resa']){

        $id_perso = intval($_POST['perso']);
        $id_event = intval($_POST['event']);
        $nb_resa = intval($_POST['nb_resa']);

        $req = pg_query("UPDATE pers_even SET nb_personne = ".$nb_resa." WHERE id_pers = ".$id_perso." AND id_event =".$id_event);

        if($req){
            echo "La modification a bien été prise en compte";
        }

    }

    