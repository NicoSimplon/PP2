<?php

    include '../connexion/connexion_bdd.php';

    if(isset($_POST['case'])){

        $NameEvent = pg_query("SELECT event FROM public.evenement");
        
        $recupNameEvent = pg_fetch_all($NameEvent);

        $json = json_encode($recupNameEvent);
        
        echo $json;

    }



