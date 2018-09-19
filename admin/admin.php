<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <?php

        include "../connexion/connexion_bdd.php";

        $mail = $_POST['mail'];

        $requeteNom = pg_fetch_array(pg_query("SELECT nom_admin, prenom_admin FROM tab_admin WHERE mail_admin = '".$mail."';"));

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
                    <h6 id="variente"></h6>
                    <h6><?php echo "$requeteNom[0]$requeteNom[1]";?></h6>
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
                <li class="tab col s3 ">
                    <a class="active" href="#renseigner">Evenements</a>
                </li>
                <li class="tab col s3">
                    <a href="#modifier">Comentaires</a>
                </li>
                <li class="tab col s3">
                    <a href="#renseignement">Clients</a>
                </li>
                <li class="tab col s3">
                    <a href="#imageMod">Images</a>
                </li>
            </ul>
            <div id="renseigner" class=" mySwipe active">
                <div class="containerTools">
                    <ul class="collection">
                        <li class="collection-item">
                            <div class="input-field col s12">
                                <select class="requete">
                                    <option value="" disabled selected>Choisir un Evenement</option>
                                    <?php

                                        $NameEvent = pg_query("SELECT event FROM evenement");

                                        while ($recupNameEvent = pg_fetch_array($NameEvent)) {
                                            echo '<option>'.$recupNameEvent['event'].'</option>';
                                        }
                                    ?>
                                </select>
                                <label>Séléctionner un Evenement</label>
                            </div>
                            <p class="inline txt" id="date_evenement">
                                
                            </p>
                            <div class="inline">
                            <a id="valider" class="waves-effect waves-light btn" data-req="reqTab">Valider</a>
                            &nbsp
                            &nbsp
                            <a class="waves-effect waves-light btn">Modifier</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="contentInfo">
                <table class="striped">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Nombre de Personnes</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Total Réservations</th>
                    </tr>
                    </thead>

                    <tbody id="tableau_reservation">
                    </tbody>
                </table>
                </div>
            </div>
            <div id="modifier" class=" mySwipe">Test 3</div>
            <div id="renseignement" class=" mySwipe ">Test 3</div>
            <div id="imageMod" class=" mySwipe">Test 2</div>
        </div>
    </section>

    <script src="../js/librairies/jquery.js"></script>
    <script src="../js/librairies/materialize.js"></script>
    <script src="../js/librairies/swipe.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="../js/librairies/heure.js"></script>
    <script src="admin.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>

</html>