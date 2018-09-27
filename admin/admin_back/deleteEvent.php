<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    include "../../connexion/connexion_bdd.php";

    $event = $_POST['event'];

    $reqEvent = pg_query(
        "SELECT id_event FROM evenement WHERE event = '".$event."'"
    );

    $resEvent = pg_fetch_all($reqEvent);

    $reqDeleteEveArt = pg_query(
        "DELETE FROM eve_art
        WHERE id_event = ".$resEvent[0]['id_event'].""
    );

    $reqDeletePersEven = pg_query(
        "DELETE FROM pers_even
        WHERE id_event = ".$resEvent[0]['id_event'].""
    );

    $reqDeleteEvent = pg_query(
        "DELETE FROM evenement
        WHERE id_event = ".$resEvent[0]['id_event'].""
    );

    if($reqDeleteEvent){
        echo "L'événement ".$event." a bien été supprimé";
    }
    else{
        echo "Une erreur est survenue";
    }