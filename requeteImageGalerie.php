<?php
    //Changer lien lors du déplacement dans un dossier
    include './connexion/connexion_bdd.php';
    
    if(isset($_POST['case'])){
        $type_evenement = pg_query("SELECT * FROM tab_photo WHERE id_tab_photo IN (SELECT MIN(id_tab_photo) FROM tab_photo GROUP BY id_event) ORDER BY photo DESC");
        $array_type_evenement = pg_fetch_all($type_evenement);
        $json_type_evenement = json_encode($array_type_evenement);
        echo $json_type_evenement;
    }