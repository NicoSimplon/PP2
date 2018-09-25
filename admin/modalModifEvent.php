<?php 

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    include '../connexion/connexion_bdd.php';

    $nomEvent = $_POST['nomEvent'];

    $reqEvent = pg_query(
        "SELECT event, descriptif, to_char(date_event, 'dd/mm/YYYY') as date_event, to_char(date_fin, 'dd/mm/YYYY') as date_fin, url_img
        FROM evenement
        WHERE event ='".$nomEvent."'"
    );

    $resEvent = pg_fetch_all($reqEvent);

    $json = json_encode($resEvent);

    echo $json;