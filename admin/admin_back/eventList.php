<?php

    include '../../connexion/connexion_bdd.php';

    if(isset($_POST['case'])){

        $NameEvent = pg_query(
            "SELECT event FROM evenement 
            WHERE date_event >= now()"
        );
        
        $recupNameEvent = pg_fetch_all($NameEvent);

        $json = json_encode($recupNameEvent);
        
        echo $json;

    }



