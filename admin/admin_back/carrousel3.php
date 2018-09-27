<?php
include "../../connexion/connexion_bdd.php";
    if(isset($_FILES["file3"]["type"]))
        {
        $validextensions = array("png");
        $temporary = explode(".", $_FILES["file3"]["name"]);
        $textarea3 = str_replace("'", "&#39",$_POST["textarea3"]);
        $textarea3 = str_replace('"', "&quot",$textarea3);
        
        $titlearea3 = str_replace("'", "&#39",$_POST["titleArea3"]);
        $titlearea3 = str_replace('"', "&quot",$titlearea3);
        $file_extension = end($temporary);
        if ((($_FILES["file3"]["type"] == "image/png")) && ($_FILES["file3"]["size"] < 10000000) && in_array($file_extension, $validextensions)) {
            
            if ($_FILES["file3"]["error"] > 0){
                echo "Return Code: " . $_FILES["file3"]["error"] . "<br/><br/>";
            }
            else
            {
                $sourcePath = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "/img/carrou3.png"; // Target path where file is to be stored
                move_uploaded_file($sourcePath,"img/carrou3.png") ; // Moving Uploaded file

                $result = pg_query(
                    "UPDATE carrousel
                    SET (text_carrou, title_carrou)
                    = ('".$textarea3."', '".$titlearea3."')
                    WHERE id_carrou = 3"
                );
            }
        }
        else
        {
            echo "<span id='invalid'>***Taille ou format du fichier incompatible.***<span>";
        }
        echo "Carrousel 3 modifié avec succès !";
    }
 