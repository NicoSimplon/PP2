<?php

    include '../../connexion/connexion_bdd.php';

    $req = pg_query(
        "SELECT lib_genre FROM genre"
    );

    $result = pg_fetch_all($req);

    $json = json_encode($result);

    echo $json;