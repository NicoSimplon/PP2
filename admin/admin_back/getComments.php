<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../../connexion/connexion_bdd.php";

    $reqComments = pg_query(
        "SELECT commentaire, date_com, pseudo, id_com 
        FROM commentaire
        ORDER BY date_com DESC"
    );

    $resComments = pg_fetch_all($reqComments);

    $json = json_encode($resComments);

    echo $json;