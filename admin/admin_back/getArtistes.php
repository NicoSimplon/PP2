<?php

    include '../../connexion/connexion_bdd.php';

    $req = pg_query(
        "SELECT nom_artiste FROM artiste"
    );

    $result = pg_fetch_all($req);

    $json = json_encode($result);

    echo $json;