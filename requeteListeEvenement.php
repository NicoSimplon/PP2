<?php

    include './connexion/connexion_bdd.php';
    if(isset($_POST['case'])){
        $NameEvent = pg_query("SELECT event FROM public.evenement ORDER BY event ASC");
        $recupNameEvent = pg_fetch_all($NameEvent);
        $json = json_encode($recupNameEvent);
        echo $json;
    }