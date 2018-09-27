<?php
session_start();
if(empty($_SESSION['co'])){
    header('Location: ../login.php');     
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <?php
        include "../connexion/connexion_bdd.php";
        $mail = $_SESSION['user'];
        $requeteNom = pg_fetch_array(pg_query("SELECT nom_admin FROM tab_admin WHERE mail_admin = '".$mail."';"));
    ?>
</head>
<body>   
<div id="container">
    <div id="menu">
        <ul id="slide-out" class="side-nav fixed show-on-large-only">
            <br>
            <li>
                <div class="myName"><img id="myImg" src="../img/logocolo.jpg" alt="colo&co">
                </div>
            </li>
            <li>
                <div class="myName">
                    <a class="myName" href="../deconnexion.php">
                        <button class="btn waves-effect waves-light" type="button" name="deconnexion" id="bouton_deconnexion"
                        value="Déconnexion"> DECONNEXION
                        </button>
                    </a>
                </div>
            </li>
            <li><a href="#!">
                    <div class="myName">
                        <h6>Bonjour,
                            <?php echo "$requeteNom[0]";?>
                        </h6>
                    </div>
                </a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">
                            <div class="MyName">
                                <i class="material-icons">calendar_today</i>
                                <i class="material-icons">access_time</i>
                            </div>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">
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
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="content">
        <div class="myName"><a data-activates="slide-out" class="button-collapse hide-on-large-only" class="myName"
                href="../deconnexion.php">
                <button class="btn waves-effect waves-light" type="button" name="deconnexion" id="bouton_deconnexion"
                    value="Déconnexion"> DECONNEXION
                </button>
            </a>
        </div>
        <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s2"><a class="active" href="#swipe-1">Evènements</a></li>
            <li class="tab col s2"><a href="#swipe-2">Commentaires</a></li>
            <li class="tab col s2"><a href="#swipe-3">Clients</a></li>
            <li class="tab col s2"><a href="#swipe-4">Images</a></li>
            <li class="tab col s2"><a href="#swipe-5">Carousel</a></li>
            <li class="tab col s2"><a href="#swipe-6">Gestion Utilisateur</a></li>
        </ul>
        <div id="swipe-1" class="col s12">
            <div class="containerTools">
                <ul class="collection">
                    <li class="collection-item">
                        <label>Séléctionner un Evenement</label>
                        <div class="input-field col s12">
                            <select id="eventList" class="requete browser-default">
                            </select>
                        </div>
                        <p class="inline txt" id="date_evenement">
                        </p>
                        <div class="responsive_table" id="total">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contentInfo">
                <table class="responsive-table">
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
                    <tbody class ="responsive_table" id="tableau_reservation">
                    </tbody>
                </table>
                <input type="hidden" name="id_perso" id="id_perso">
                <input type="hidden" name="id_event" id="id_event">
            </div>
        </div>
        <div id="swipe-2" class="col s12 red">Second tab content</div>
        <div id="swipe-3" class="col s12 green">Third tab content</div>
        <div id="swipe-4" class="col s12 yellow">fourth tab content</div>
        <div id="swipe-5" class="col s12 white">five tab content</div>
        <div id="swipe-6" class="col s12 grey">
            <ul id="listeAdmin" class="collection">
            </ul>
            <a class="btn-small modal-trigger waves-effect waves-light right" href="#modalAjoutUtil" name="action">Ajouter
                un utilisateur
                <i class="material-icons right">person_add</i>
            </a>
        </div>
    </div>
    <div id="modalAjoutUtil" class="modal">
        <form class="modal-content">
            <h4>AJOUTER UN UTILISATEUR</h4>
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
                </div>  
                <div action="#" id="role">
                        <span>
                            <label>
                                <input name="role" value="1" type="radio" checked />
                                <span>Administrateur</span>
                            </label>
                        </span>
                        <span>
                            <label>
                                <input name="role" value="2" type="radio" />
                                <span>Modérateur</span>
                            </label>
                        </span>
                    </div>
                </div>
        </form>
        <div class="modal-footer">
            <a id="valideNewUser" type="submit" class="btn-small modal-close waves-effect waves-light">Valider</a>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="../js/librairies/jquery.js"></script>
<script src="../js/librairies/materialize.js"></script>
<script src="../js/librairies/swipe.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="../js/librairies/heure.js"></script>
<script src="admin.js"></script>
</body>
</html>