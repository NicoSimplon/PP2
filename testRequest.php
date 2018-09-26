<?php

    include './connexion/connexion_bdd.php';

    if(isset($_POST['event'])){
        $requête_photo_event = pg_query("SELECT * FROM tab_photo ORDER BY id_tab_photo DESC");        
        $photo_event = pg_fetch_all($requête_photo_event);
        $json = json_encode($photo_event);
        echo $json;
    }