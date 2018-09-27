<?php

    include "../../connexion/connexion_bdd.php";

    $evenement = $_POST['nom_eve'];
    
    if(isset($evenement)){

        // On récupère les infos concernant les réservations dans la bdd
        $req_event = pg_query("SELECT nom, prenom, nb_personne, courriel, num_tel, pers_even.id_pers AS perso, pers_even.id_event AS soiree 
        FROM pers_even
        INNER JOIN evenement ON evenement.id_event=pers_even.id_event
        INNER JOIN personne ON personne.id_pers=pers_even.id_pers
        WHERE event = '".$evenement."'
        GROUP BY personne.nom, personne.prenom, pers_even.nb_personne, personne.courriel, personne.num_tel, perso, soiree");
        
        // On écrit le résultat sous forme de tableau
        $affichage="";

        while($reservation = pg_fetch_assoc($req_event)){
            
            $affichage = "<tr>
                    <td>".$reservation['nom']."</td>
                    <td>".$reservation['prenom']."</td>
                    <td>".$reservation['nb_personne']."</td>
                    <td>".$reservation['courriel']."</td>
                    <td>".$reservation['num_tel']."</td>
                    <td><div class='inline'>
                    <a class='waves-effect waves-light btn modif modal-trigger' href='#modalModifResa' onclick='modifResa(".$reservation['perso'].", ".$reservation['soiree'].")'>Modifier</a>
                    <a onclick='deleteResa(".$reservation['perso'].", ".$reservation['soiree'].")' class='waves-effect waves-light btn red'>Supprimer</a>
                    </div></td>
                </tr>";
            
            echo $affichage;
        }
        
    };

?>