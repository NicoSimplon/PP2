<?php
include "../../connexion/connexion_bdd.php";
    if(isset($_FILES["file"]["type"]))
        {
        $validextensions = array("png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $textarea1 = str_replace("'", "&#39",$_POST["textarea1"]);
        $textarea1 = str_replace('"', "&quot",$textarea1);
        
        $titlearea1 = str_replace("'", "&#39",$_POST["titleArea1"]);
        $titlearea1 = str_replace('"', "&quot",$titlearea1);
        $file_extension = end($temporary);
        if ((($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 10000000) && in_array($file_extension, $validextensions)) {
            
            if ($_FILES["file"]["error"] > 0){
                echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
            }
            else
            {
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "/img/carrou1.png"; // Target path where file is to be stored
                move_uploaded_file($sourcePath,"img/carrou1.png") ; // Moving Uploaded file

                $result = pg_query(
                    "UPDATE carrousel
                    SET (text_carrou, title_carrou)
                    = ('".$textarea1."', '".$titlearea1."')
                    WHERE id_carrou = 1"
                );
            }
        }
        else
        {
            echo "<span id='invalid'>***Taille ou format du fichier incompatible***<span>";
        }
        echo "Carrousel 1 modifié avec succès !";
    }
 