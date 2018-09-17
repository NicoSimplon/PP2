<?php

    include "../connexion/connexion_bdd.php";

    $evenement = $_POST['nom_eve'];
    
    if(isset($evenement)){

        // On récupère les infos concernant les réservations dans la bdd
        $req_event = pg_query("SELECT nom, prenom, nb_personne, courriel, num_tel 
        FROM pers_even
        INNER JOIN evenement ON evenement.id_event=pers_even.id_event
        INNER JOIN personne ON personne.id_pers=pers_even.id_pers
        WHERE event = '".$evenement."'
        GROUP BY personne.nom, personne.prenom, pers_even.nb_personne, personne.courriel, personne.num_tel ");

        $reqTotal = pg_query("SELECT SUM(nb_personne) FROM pers_even as myTableau
                            INNER JOIN evenement ON evenement.id_event = myTableau.id_event
                            WHERE event = '".$evenement."'");
        $resReqTotal = pg_fetch_array($reqTotal);
        
        //var_dump($resReqTotal);
        // On écrit le résultat sous forme de tableau
        $affichage="";

        while($reservation = pg_fetch_assoc($req_event)){
            
            $affichage="<tr>
                    <td>".$reservation['nom']."</td>
                    <td>".$reservation['prenom']."</td>
                    <td>".$reservation['nb_personne']."</td>
                    <td>".$reservation['courriel']."</td>
                    <td>".$reservation['num_tel']."</td>
                    <td> - </td>
                </tr>";
            
            echo $affichage;
        }
        echo "<tr> - <td> - </td><td> - </td><td> - </td><td> - </td><td> - </td><td><strong>".$resReqTotal['sum']."<strong></td></tr>";
    };

?>