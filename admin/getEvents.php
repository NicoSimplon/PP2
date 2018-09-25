<?php
    include '../connexion/connexion_bdd.php';

    $req = pg_query(
        "SELECT event FROM evenement WHERE date_event >= now()"
    );

    $result = pg_fetch_all($req);

    $json = json_encode($result);

    echo $json;