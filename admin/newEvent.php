<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    include '../connexion/connexion_bdd.php';

    $donnees = $_POST['array'];

    if($donnees[0]!='' and $donnees[1]!='' and $donnees[2]!='' and $donnees[3]!='' and $donnees[4]!=''){

        $artiste = str_replace("'", "&#39", $donnees[0]);
        $genre = str_replace("'", "&#39", $donnees[1]);
        $nom_event = str_replace("'", "&#39", $donnees[2]);
        $desc = str_replace("'", "&#39", $donnees[3]);
        $artiste = str_replace('"', "&quot", $artiste);
        $genre = str_replace('"', "&quot", $genre);
        $nom_event = str_replace('"', "&quot", $nom_event);
        $desc = str_replace('"', "&quot", $desc);

        $img = $donnees[6];
        $temporary = explode("\\", $img);
        $file_name = end($temporary);
        
        // Enregistrement Artiste et Genre musical
        $verifArtiste = pg_query("SELECT nom_artiste FROM artiste WHERE nom_artiste = '".$artiste."'");

        $resVerifArtiste = pg_fetch_all($verifArtiste);

        if($resVerifArtiste == false){
            
            $insertArtiste = pg_query("INSERT INTO artiste (nom_artiste) VALUES('".$artiste."')");

        }

        $verifGenre = pg_query("SELECT lib_genre FROM genre WHERE lib_genre = '".$genre."'");

        $resVerifGenre = pg_fetch_all($verifGenre);

        if($resVerifGenre == false){
            
            $insertGenre = pg_query("INSERT INTO genre (lib_genre) VALUES('".$genre."')");

        }
        
        $insertLinkArtisteGenre = pg_query(
            "INSERT INTO art_genre 
            VALUES((SELECT id_genre FROM genre WHERE lib_genre = '".$genre."'), (SELECT id_artiste FROM artiste WHERE nom_artiste = '".$artiste."'))"
        );

        // Enregistrement événement
        $verifEvent = pg_query("SELECT event FROM evenement WHERE event = '".$nom_event."'");

        $resVerifEvent = pg_fetch_all($verifEvent);

        if($resVerifEvent == false){

            $date_fin = $donnees[5];

            if($date_fin == ''){
                $newEvent = pg_query(
                    "INSERT INTO evenement (event, descriptif, date_event, url_img)
                    VALUES('".$nom_event."', '".$desc."', '".$donnees[4]."', '".$file_name."')"
                );
            }
            else{
                $newEvent = pg_query(
                    "INSERT INTO evenement (event, descriptif, date_event, date_fin, url_img)
                    VALUES('".$nom_event."', '".$desc."', '".$donnees[4]."', '". $date_fin ."', '".$file_name."')"
                );
            }

            

        }

        $artisteEvent = pg_query(
            "INSERT INTO eve_art 
            VALUES((SELECT id_artiste FROM artiste WHERE nom_artiste = '".$artiste."'), (SELECT id_event FROM evenement WHERE event = '".$nom_event."'))"
        );
        
        
        echo "L'événement ".$artiste." a bien été créé.";

    }
    else{
        echo "Veuillez remplir tous les champs.";
    }