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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php

        include "../connexion/connexion_bdd.php";

        $mail = $_SESSION['user'];

        $requeteNom = pg_fetch_array(pg_query("SELECT nom_admin FROM tab_admin WHERE mail_admin = '".$mail."';"));
        $carrou1 = pg_fetch_array(pg_query("SELECT text_carrou, title_carrou FROM carrousel WHERE id_carrou = '1';"));
        $carrou2 = pg_fetch_array(pg_query("SELECT text_carrou, title_carrou FROM carrousel WHERE id_carrou = '2';"));
        $carrou3 = pg_fetch_array(pg_query("SELECT text_carrou, title_carrou FROM carrousel WHERE id_carrou = '3';"));
        $carrou4 = pg_fetch_array(pg_query("SELECT text_carrou, title_carrou FROM carrousel WHERE id_carrou = '4';"));

    ?>
</head>

<body>
    <section>
        <div class="sousMenuContainer">
            <div class="enTête">
                <div class="image">
                    <img id="myImg" src="../img/logocolo.jpg">
                </div>
                <div class="myName">
                    <h6>Bonjour,
                        <?php echo "$requeteNom[0]";?>
                    </h6>
                </div>
                <div class="myName">
                    <a class="myName" href="../deconnexion.php">
                        <button class="btn waves-effect waves-light" type="button" name="deconnexion" id="bouton_deconnexion"
                            value="Déconnexion"> DECONNEXION
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
                    <a href="#Carrousel">Carrousel</a>
                </li>
                <li class="tab col">
                    <a href="#gestionUser">Gestion utilisateur</a>
                </li>
            </ul>
            <div id="renseigner" class=" mySwipe active">
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

            <div id="Carrousel" class="mySwipe">
                <div class="row">
                <!--//////////_Slide 1_///////////-->
                    <form action="" method="post" enctype="multipart/form-data" id="uploadimage">
                        <div class="col s12 m6" id="photoCarrou" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-image">
                                    <img id="previewing" src="img/carrou1.png">
                                    <input type="texte" id="titleArea1" name="titleArea1" class="card-title titleCarrouInput" value="<?php echo "$carrou1[1]";?>">
                                    <input name="file" id="file" type="file" style="display:none">
                                    <label for="file" class="btn-floating halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">photo_library</i>
                                    </label>
                                    <input value="Upload" class="submit" id="CarrouValid" style="display:none" type="submit" name="submit" >
                                </div>
                                <div class="input-field card-content ">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" name="textarea1" class="materialize-textarea" value=""><?php echo "$carrou1[0]";?></textarea>
                                            <label for="textarea1">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="CarrouValid" class="btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons green">done</i>
                                </label>
                            </div>                   
                        </div>
                    </form>
                    <!--//////////_Slide 2_///////////-->
                    <form action="" method="post" enctype="multipart/form-data" id="uploadimage2">
                        <div class="col s12 m6" id="photoCarrou2" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-image">
                                    <img id="previewing2" src="img/carrou2.png">
                                    <input type="texte" id="titleArea2" name="titleArea2" class="card-title titleCarrouInput" value="<?php echo "$carrou2[1]";?>">
                                    <input name="file2" id="file2" type="file" style="display:none">
                                    <label for="file2" class="btn-floating halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">photo_library</i>
                                    </label>
                                    <input value="Upload" class="submit" id="CarrouValid2" style="display:none" type="submit" name="submit" >
                                </div>
                                <div class="input-field card-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" name="textarea2" class="materialize-textarea" value=""><?php echo "$carrou2[0]";?></textarea>
                                            <label for="textarea2">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="CarrouValid2" class="btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons green">done</i>
                                </label>
                            </div>                   
                        </div>
                    </form>
                    </div>
                    <div class="row">
                    <!--//////////_Slide 3_///////////-->
                    <form action="" method="post" enctype="multipart/form-data" id="uploadimage3">
                        <div class="col s12 m6" id="photoCarrou3" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-image">
                                    <img id="previewing3" src="img/carrou3.png">
                                    <input type="texte" id="titleArea3" name="titleArea3" class="card-title titleCarrouInput" value="<?php echo "$carrou3[1]";?>">
                                    <input name="file3" id="file3" type="file" style="display:none">
                                    <label for="file3" class="btn-floating halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">photo_library</i>
                                    </label>
                                    <input value="Upload" class="submit" id="CarrouValid3" style="display:none" type="submit" name="submit" >
                                </div>
                                <div class="input-field card-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea3" name="textarea3" class="materialize-textarea" value=""><?php echo "$carrou3[0]";?></textarea>
                                            <label for="textarea3">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="CarrouValid3" class="btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons green">done</i>
                                </label>
                            </div>                   
                        </div>
                    </form>
                    <!--//////////_Slide 4_///////////-->
                    <form action="" method="post" enctype="multipart/form-data" id="uploadimage4">
                        <div class="col s12 m6" id="photoCarrou4" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-image">
                                    <img id="previewing4" src="img/carrou4.png">
                                    <input type="texte" id="titleArea4" name="titleArea4" class="card-title titleCarrouInput" value="<?php echo "$carrou4[1]";?>">
                                    <input name="file4" id="file4" type="file" style="display:none">
                                    <label for="file4" class="btn-floating halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">photo_library</i>
                                    </label>
                                    <input value="Upload" class="submit" id="CarrouValid4" style="display:none" type="submit" name="submit" >
                                </div>
                                <div class="input-field card-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" name="textarea4" class="materialize-textarea" value=""><?php echo "$carrou4[0]";?></textarea>
                                            <label for="textarea4">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <label for="CarrouValid4" class="btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons green">done</i>
                                </label>
                            </div>                   
                        </div>
                    </form>
                </div>
            </div>

            <div id="gestionUser" class=" mySwipe">
                <ul id="listeAdmin" class="collection">




                </ul>
                <a class="btn-large modal-trigger waves-effect waves-light right" href="#modalAjoutUtil" name="action">Ajouter
                    un utilisateur
                    <i class="material-icons right">person_add</i>
                </a>
            </div>

        </div>
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
                    <input type="number" id="nbPerso" min="1" />
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

    <script src="../js/librairies/jquery.js"></script>
    <script src="../js/librairies/materialize.js"></script>
    <script src="../js/librairies/swipe.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="../js/librairies/heure.js"></script>
    <script src="admin.js"></script>
    <script src="carrousel.js"></script>
    <script src="carrousel2.js"></script>
    <script src="carrousel3.js"></script>
    <script src="carrousel4.js"></script>


</body>

</html>