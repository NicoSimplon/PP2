<?php

session_start();

if(empty($_SESSION['co'])){

    header('Location: ../login.php');     
}
else {
    include "../connexion/connexion_bdd.php";

        $mail = $_SESSION['user'];

        $requeteNom = pg_fetch_array(pg_query("SELECT nom_admin FROM tab_admin WHERE mail_admin = '".$mail."';"));
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <section>
        <div class="sousMenuContainer">
            <div class="enTête">
                <div class="image">
                    <img id="myImg" src="../img/logocolo.jpg" alt="Logo de Colo&Co">
                </div>
                <div class="myName">
                    <h6>Bonjour, <?php echo "$requeteNom[0]";?></h6>
                </div>
            <div class="myName">
                <a class="myName" href="../deconnexion.php" >
                <button class="btn waves-effect waves-light"  type="button" name="deconnexion" id="bouton_deconnexion" value="Déconnexion"> DECONNEXION
                </button> 
                </a>
            </div>
            </div>
            <div class="heureDate">
                <div class="date">
                    <h5>
                        <?php
                            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                            echo (strftime("%A %d %B"));
                        ?>
                    </h5>
                </div>
                <div class="heure">
                    <h6 id="insertDate">
                    </h6>
                </div>
            </div>
        </div>

        <div id="containerMenu">
            <ul id="tabs-swipe" class="tabs">
                <li class="tab col">
                    <a class="active" href="#renseigner">Evenements</a>
                </li>
                <li class="tab col">
                    <a href="#modifier">Comentaires</a>
                </li>
                <li class="tab col">
                    <a href="#renseignement">Clients</a>
                </li>
                <li class="tab col">
                    <a href="#imageMod">Images</a>
                </li>
                <li class="tab col">
                    <a href="#gestionUser">Gestion utilisateur</a>
                </li>
            </ul>
            <div id="renseigner" class=" mySwipe active">
                <div class="containerTools">
                    <ul class="collection">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col">
                                    <label>Séléctionner un Evenement</label>
                                    <div class="input-field col s12">
                                        <select id="eventList" class="requete browser-default">
                                            
                                        </select>
                                    </div>
                                    <p class="inline txt" id="date_evenement">
                                        
                                    </p>
                                    <div id="modif_event">
                                        <p>
                                            <button id="modalModifEvent" class="btn waves-effect waves-light modal-trigger" href="#formModifEvent">Modifier l'événement</button>
                                            <a class="waves-effect waves-light btn secondary-content dropdown-trigger" data-target="btnDeleteEvent">
                                                <i class="material-icons right" href="#">highlight_off</i>
                                                Supprimer l'événement
                                            </a>
                                            <ul id="btnDeleteEvent" class="dropdown-content row">
                                                <a class="btn red col s6" href="#!" id="btnDelete">Supprimer</a>
                                                <a class="btn col s6" href="#!">Annuler</a>
                                            </ul> 
                                        </p>
                                    </div>
                                </div>
                                <div class="col offset-m2"></div>
                                <div class="col">
                                    <label>Pour ajouter un nouvel événement</label>
                                    <div>
                                        <button class="btn-large modal-trigger waves-effect waves-light centrerBouton" href="#modalAjoutEvent">
                                            <i class="material-icons right">control_point</i>
                                        Ajouter un événement</button>
                                    </div>
                                </div>
                                <div class="col offset-m1"></div>
                            </div>
                        </li>    
                    </ul>
                </div>
                <div class="contentInfo">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Réservations</th>
                                <th>E-mail</th>
                                <th>Téléphone</th>
                                <th>Modifier/Supprimer</th>
                            </tr>
                        </thead>
                        <tbody id="tableau_reservation">
                        </tbody>
                    </table>
                    <hr>
                    <div id="total">
                        
                    </div>
                    <input type="hidden" name="id_perso" id="id_perso">
                    <input type="hidden" name="id_event" id="id_event">
                </div>
            </div>
            <div id="modifier" class=" mySwipe">Test 3</div>
            <div id="renseignement" class=" mySwipe ">Test 3</div>
            <div id="imageMod" class=" mySwipe">Test 2</div>
            <div id="gestionUser" class=" mySwipe">
                <ul id="listeAdmin" class="collection">
 
                 </ul>
                <a class="btn-large modal-trigger waves-effect waves-light right" href="#modalAjoutUtil" name="action">Ajouter un utilisateur
                    <i class="material-icons right">person_add</i>
                </a>
            </div>

        </div>

        <!-- Modale d'ajout d'un utilisateur -->
        <div id="modalAjoutUtil" class="modal">
            <form class="modal-content">
                <h4>Ajouter un utilisateur</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nom" name="nom" type="text" class="validate">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="mail" name="mail" type="email" class="validate">
                        <label for="mail">Mail</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
                        <div action="#" id="role">
                            <span>
                                <label>
                                    <input name="role" value="1" type="radio" checked/>
                                    <span>Administrateur</span>
                                </label>
                            </span>
                            <span>
                                <label>
                                    <input name="role" value="2" type="radio"/>
                                    <span>Modérateur</span>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal-footer">
                <a id="valideNewUser" type="submit" class="btn modal-close waves-effect waves-light">Valider</a>
            </div>
        </div>
    </section>

    <!-- Modales Modi Resa -->
    <div id="modalModifResa" class="modal hPlus">
        <div class="modal-content">
            <h4>Modifier le nombre de réservations</h4>
            <form method="post">
                <p class="range-field">
                    <label for="nbPerso">Sélectionnez la nouvelle valeur :</label>
                    <input type="number" id="nbPerso" min="1"/>
                </p>
            </form>
        </div>
        <div class="modal-footer">
            <p>
                <a id="validerModif" href="#!" class="modal-close btn waves-effect waves-light" onclick="setModif()">Valider</a>
                <a href="#!" class="modal-close btn waves-effect waves-light red">Annuler</a>
            </p>
        </div>
    </div>

    <!-- Modales Ajout Event -->
    <div id="modalAjoutEvent" class="modal modalAdmin">
        <div class="modal-content">
            <h4>Ajouter un nouvel événement</h4>
            <form method="post">
            <div class="row">
                <div class="col s12 m6">
                    <div class="row">
                    <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Nom de l'artiste (obligatoire)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" required id="autocomplete-input2" class="autocomplete">
                                    <label for="autocomplete-input2">Genre musical (obligatoire)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" required id="autocomplete-input3" class="autocomplete">
                                    <label for="autocomplete-input3">Nom de l'événement (obligatoire)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="date_event">Date de début de l'événement (obligatoire)</label>
                                    <input id="date_event" class="datepicker" required type="text" >
                                </div>
                                <div class="input-field col s12">
                                    <label for="date_fin">Date de fin de l'événement (facultatif)</label>
                                    <input id="date_fin" class="datepicker" type="text" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div>
                        <input class="cache" type="file" name="imgAgenda" id="imgAgenda">
                        <img id="miniature" src="https://www.fing.edu.uy/inco/grupos/gsi/img/placeholder.png" alt="" width="100%">
                        <label for="imgAgenda" class="btn-floating waves-effect waves-light red right">
                            <i class="material-icons">photo_library</i>
                        </label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">textsms</i>
                            <textarea id="textarea1" class="materialize-textarea" required></textarea>
                            <label for="textarea1">Descriptif (obligatoire)</label>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <p>
                <a id="validerAjout" href="#!" class="modal-close btn waves-effect waves-light">Ajouter</a>
                <a href="#!" class="modal-close btn waves-effect waves-light red">Annuler</a>
            </p>
        </div>
    </div>

    <!-- Modale Modif Event -->
    <div id="formModifEvent" class="modal modalAdmin">
        <div class="modal-content">
            <h4>Modifier un événement</h4>
            <form method="post" id="formM">
            <div class="row">
                <div class="col s12 m6">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" id="nom_evenement" value=" ">
                                    <label for="nom_evenement">Nom de l'événement (obligatoire)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="modif_date_event">Date de début de l'événement (obligatoire)</label>
                                    <input id="modif_date_event" class="datepicker" type="text" value=" ">
                                </div>
                                <div class="input-field col s12">
                                    <label for="modif_date_fin">Date de fin de l'événement (facultatif)</label>
                                    <input id="modif_date_fin" class="datepicker" type="text" value=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div>
                        <input class="cache" type="file" name="modif_imgAgenda" id="modif_imgAgenda">
                        <img id="modif_miniature" src="../img_event/photo.png" alt="" width="100%" data-url="../img_event/photo.png">
                        <label for="modif_imgAgenda" class="btn-floating waves-effect waves-light red right">
                            <i class="material-icons">photo_library</i>
                        </label>
                        <input type="hidden" name="url_image" id="url_img">
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">textsms</i>
                            <textarea id="modif_descriptif" class="materialize-textarea">Descriptif</textarea>
                            <label for="modif_descriptif">Descriptif (obligatoire)</label>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <p>
                <a id="validerModifForm" href="#!" class="modal-close btn waves-effect waves-light">Modifier</a>
                <a href="#!" class="modal-close btn waves-effect waves-light red">Annuler</a>
            </p>
        </div>
    </div>

    <script src="../js/librairies/jquery.js"></script>
    <script src="../js/librairies/materialize.js"></script>
    <script src="../js/librairies/swipe.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="../js/librairies/heure.js"></script>
    <script src="admin.js"></script>
</body>

</html>