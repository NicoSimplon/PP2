<?php
    //Changer lien lors du déplacement dans un dossier
    include './connexion/connexion_bdd.php';
    
    if(isset($_POST['galerie'])){
        $lieu = pg_query("SELECT photo FROM tab_photo WHERE lieu = TRUE");
        $array_lieu = pg_fetch_all($lieu);
        $json_lieu = json_encode($array_lieu);
        echo $json_lieu;
    }

