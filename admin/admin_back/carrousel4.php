<?php
include "../../connexion/connexion_bdd.php";
    if(isset($_FILES["file4"]["type"]))
        {
        $validextensions = array("png");
        $temporary = explode(".", $_FILES["file4"]["name"]);
        $textarea4 = str_replace("'", "&#39",$_POST["textarea4"]);
        $textarea4 = str_replace('"', "&quot",$textarea4);
        
        $titlearea4 = str_replace("'", "&#39",$_POST["titleArea4"]);
        $titlearea4 = str_replace('"', "&quot",$titlearea4);
        $file_extension = end($temporary);
        if ((($_FILES["file4"]["type"] == "image/png")) && ($_FILES["file4"]["size"] < 10000000) && in_array($file_extension, $validextensions)) {
            
            if ($_FILES["file4"]["error"] > 0){
                echo "Return Code: " . $_FILES["file4"]["error"] . "<br/><br/>";
            }
            else
            {
                $sourcePath = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "/img/carrou4.png"; // Target path where file is to be stored
                move_uploaded_file($sourcePath,"img/carrou4.png") ; // Moving Uploaded file

                $result = pg_query(
                    "UPDATE carrousel
                    SET (text_carrou, title_carrou)
                    = ('".$textarea4."', '".$titlearea4."')
                    WHERE id_carrou = 4"
                );
            }
        }
        else
        {
            echo "<span id='invalid'>***Taille ou format du fichier incompatible.***<span>";
        }
        echo "Carrousel 4 modifié avec succès !";
    }
 