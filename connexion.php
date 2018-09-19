<?php

session_start();

include 'connexion/connexion_bdd.php';

    
    if(isset($_POST['mail'])){

        $mail = $_POST['mail'];
        $motdepasse = $_POST ['motdepasse'];
        
    
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){ 
            
            $verif_mdp = pg_fetch_all(pg_query("SELECT password_admin FROM tab_admin WHERE mail_admin = '".$mail."';"));
            $hashe = $verif_mdp[0]['password_admin'];
            
                if (password_verify($motdepasse, $hashe)){  

                    $_SESSION['co'] = true;
                    $_SESSION['user'] = $mail;
                        
                    header('Location: admin/admin.php');  
                }  
                else{
                    echo "le mot de passe n'est pas valide";
                }
        }
        else{
            echo "l'adresse mail n'est pas valide";
        }


    }
?>