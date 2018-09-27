<?php

    include "../connexion/connexion_bdd.php";

    $evenement = $_POST['nom_eve'];

    if(isset($evenement)){

        $reqTotal = pg_query(
            "SELECT SUM(nb_personne) FROM pers_even as myTableau
            INNER JOIN evenement ON evenement.id_event = myTableau.id_event
            WHERE event = '".$evenement."'");
        
        $resReqTotal = pg_fetch_array($reqTotal);

        echo "<p> Nombre total de réservations: <span><strong>".$resReqTotal['sum']."<strong></span></p>";
    }

