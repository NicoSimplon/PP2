<?php 
    include "../connexion/connexion_bdd.php";

    $evenement = $_POST['eve'];

    if(isset($evenement)){
        $date_event = pg_query("SELECT date_event 
        FROM evenement WHERE event = '".$evenement."';");

        $recup_date_event = pg_fetch_array($date_event);

        echo $recup_date_event[0];
    }
?>