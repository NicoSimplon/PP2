<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include '../connexion/connexion_bdd.php';

    $donnees = $_POST['tabData'];

    if($donnees[0]!='' and $donnees[1]!='' and $donnees[3]!='' and $donnees[4]!=''){

        $img = $donnees[4];
        $temporary = explode("\\", $img);
        $temporary = explode("/", end($temporary));
        $file_name = end($temporary);

        $nom_event = str_replace("'", "&#39", $donnees[0]);
        $desc = str_replace("'", "&#39", $donnees[3]);
        $nom_event = str_replace('"', "&quot", $nom_event);
        $desc = str_replace('"', "&quot", $desc);

        if($donnees[2]==''){

            $reqUpdateEvent = pg_query(
                "UPDATE evenement
                SET (event, descriptif, date_event, url_img)
                = ('".$nom_event."', '".$desc."', '".$donnees[1]."', '".$file_name."')WHERE event = '".$nom_event."'"
            );
        
        }
        else{

            $reqUpdateEvent = pg_query(
                "UPDATE evenement
                SET (event, descriptif, date_event, date_fin, url_img)
                = ('".$nom_event."', '".$desc."', '".$donnees[1]."', '".$donnees[2]."', '".$file_name."')
                WHERE event = '".$nom_event."'"
            );

        }

        echo "Modification réalisée avec succès";


    }
    else{
        echo "Veuillez remplir tous les champs";
    }