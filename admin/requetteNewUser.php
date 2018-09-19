<?php
include "../connexion/connexion_bdd.php";

if (isset($_POST['nom'])){
    if($_POST['nom'] != "" and $_POST['mail'] != "" and $_POST['password'] != ""){
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $nom_admin = $_POST['nom'];
            $mail_admin = $_POST['mail'];
            $password_admin = $_POST['password'];
            $pass_hache = password_hash($password_admin,PASSWORD_DEFAULT);
            $droit_admin = $_POST['droit'];

            $result = pg_query(
                "INSERT INTO tab_admin
                (nom_admin, mail_admin, password_admin, droit_admin)
                VALUES
                ('".$nom_admin."', '".$mail_admin."', '".$pass_hache."', ".$droit_admin.")"
            );

            if($result){
                echo "nouvel utilisisateur : ".$nom_admin." créé" ;
            }
        }
        else{
            echo "Veuillez entrer un email valide.";
        }
    }
    else{
        echo "Veuillez remplir tous les champs.";
    }
}

?>