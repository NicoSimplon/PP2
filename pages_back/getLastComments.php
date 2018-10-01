<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../connexion/connexion_bdd.php";

    $req = pg_query(
        "SELECT commentaire, date_com, pseudo
        FROM commentaire
        ORDER BY date_com DESC
        LIMIT 3"
    );

    $res = pg_fetch_all($req);

    $json = json_encode($res);

    echo $json;