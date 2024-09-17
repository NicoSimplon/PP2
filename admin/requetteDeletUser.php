<?php
include "../connexion/connexion_bdd.php";

$nom_admin = $_POST['nom'];

    $result = pg_query(
        "DELETE FROM tab_admin
        WHERE nom_admin ='".$nom_admin."'"
    );

    if($result){
        echo "Voilà, ".$nom_admin." a été supprimé" ;
    }

?>
