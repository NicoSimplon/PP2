<?php
include "../../connexion/connexion_bdd.php";

$UserCard = pg_query("SELECT nom_admin, droit_admin FROM tab_admin");

while ($recupUserCard = pg_fetch_array($UserCard)) {
    switch ($recupUserCard['droit_admin']) {
        case 1:
            $role = "Administrateur";
            $roleColor = "blue";
            break;
        case 2:
            $role = "Modérateur";
            $roleColor = "orange";
            break;
        }
echo'
    <li class="collection-item avatar">
        <i class="large material-icons circle '.$roleColor.'">person</i>
        <p class="title"><b>'.$recupUserCard['nom_admin'].'</b></p>
        <p>'.$role.'</p>
        <a class="waves-effect waves-light btn secondary-content dropdown-trigger" data-target="'.$recupUserCard['nom_admin'].'">
            <i class="material-icons right " href="#">highlight_off</i>
            Supprimer utilisateur
        </a>
        <ul id="'.$recupUserCard['nom_admin'].'" class="dropdown-content row">
            <a class="deleteUser btn red col s6" href="#!" value="'.$recupUserCard['nom_admin'].'">Supprimer</a>
            <a class="btn green col s6" href="#!">Annuler</a>
        </ul>   
    </li>
    
';
}
?>
<script src="js_admin/affichageAdmin.js"></script>
