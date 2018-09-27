<?php

    include './connexion/connexion_bdd.php';

    if(isset($_POST['event'])){
        $requête_photo_event = pg_query("SELECT photo FROM tab_photo WHERE id_event =".$evenement_selectionne." ORDER BY photo DESC LIMIT 1");

    }