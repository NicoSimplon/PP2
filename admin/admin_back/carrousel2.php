<?php
include "../../connexion/connexion_bdd.php";
    if(isset($_FILES["file2"]["type"]))
        {
        $validextensions = array("png");
        $temporary = explode(".", $_FILES["file2"]["name"]);
        $textarea2 = str_replace("'", "&#39",$_POST["textarea2"]);
        $textarea2 = str_replace('"', "&quot",$textarea2);        
        $titlearea2 = str_replace("'", "&#39",$_POST["titleArea2"]);
        $titlearea2 = str_replace('"', "&quot",$titlearea2);
        $file_extension = end($temporary);
        
        if ((($_FILES["file2"]["type"] == "image/png")) && ($_FILES["file2"]["size"] < 10000000) && in_array($file_extension, $validextensions)) {
            
            if ($_FILES["file2"]["error"] > 0){
                echo "Return Code: " . $_FILES["file2"]["error"] . "<br/><br/>";
            }
            else
            {
                $sourcePath = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "/img/carrou2.png"; // Target path where file is to be stored
                move_uploaded_file($sourcePath,"/img/carrou2.png") ; // Moving Uploaded file

                $result = pg_query(
                    "UPDATE carrousel
                    SET (text_carrou, title_carrou)
                    = ('".$textarea2."', '".$titlearea2."')
                    WHERE id_carrou = 2"
                );
            }
        }
        else
        {
            echo "<span id='invalid'>***Taille ou format du fichier incompatible.***<span>";
        }
        echo "Carrousel 2 modifié avec succès !";
    }
 