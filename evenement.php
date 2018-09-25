<?php 
    include 'connexion/connexion_bdd.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/navfoot.css">
</head>

<body>
    <div class="nav">
        <?php 
            include 'nav_footer/nav.php';
        ?>
    </div>

    <section>
        <?php 
            $requete = pg_query("SELECT id_event, to_char(date_fin, 'dd/mm/YYYY')as fin , to_char(date_event, 'dd/mm/YYYY') as debut , event, descriptif, url_img
            FROM evenement");

            while ($createCard = pg_fetch_assoc($requete)) {
                $fin = '';
                $debut = '';
                $artistes = '';

                $id_event = $createCard['id_event'];

                $getArtistes = pg_query(
                    "SELECT nom_artiste, lib_genre 
                    FROM artiste
                    INNER JOIN eve_art ON artiste.id_artiste = eve_art.id_artiste 
                    INNER JOIN art_genre ON artiste.id_artiste = art_genre.id_artiste
                    INNER JOIN genre ON art_genre.id_genre = genre.id_genre
                    WHERE eve_art.id_event =".$id_event
                );

                while($art = pg_fetch_assoc($getArtistes)){

                    $artistes .= '<b>'.$art['nom_artiste'].'</b> (<i class="grey-text">'.$art['lib_genre'].'</i>), <br>';

                }


                if ($createCard['fin']) {
                    $fin .= "&nbsp;"."au" . " " . $createCard['fin'];
                    $debut .= "Du " . "&nbsp;" . $createCard["debut"];
                } 
                else {
                    $fin = '';
                    $debut = "Le " . $createCard["debut"];
                }
                $dynamicCard .= '
                <div class="card sizeCard">
                        <div class="headerCard">
                            <span class="TitleDate card-title grey-text text-darken-4" data-recupval="Val">' . $debut . " " . $fin . '</span>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light containerImgCard">
                            <img class="activator cardImg" src="img_event/'.$createCard["url_img"].'">

                        </div>
                        <div class="card-content ResumeCard">
                            <div class="containerInfosView">
                                <p class="NameEvent">'.$createCard['event'].'</p>
                            </div>
                            <div class="containerInfosView">
                            <div>
                                <div class="chip labPoint modal-trigger tooltipped" data-position="top" data-tooltip="Cliquez pour ouvrir le formulaire de réservation." data-recupval="click" data-date="'.$createCard['debut'].'" href="#modalReservation">
                                    <i class="fas fa-ticket-alt returnImg"></i>
                                    <label class="labPoint">Réserver</label>
                                </div>
                                </div>
                            </div>
                            <div class="footerCard">
                                    <a class="plus activator">En Savoir Plus</a>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">
                                <i class="material-icons right">close</i>
                            </span>
                            <span class="TitleDateHide card-title grey-text text-darken-4" data-recupval="Val">'.$createCard['event'].'</span>
                            <span class="TitleDateHide card-title grey-text text-darken-4" data-recupval="Val">' . $debut . " " . $fin . '</span>
                            <p>Artiste(s): '.$artistes.'</p>
                            <p class="description">'.$createCard['descriptif']. '</p>
                            </div>
                        </div>';
                }
                echo $dynamicCard;
        ?>
    </section>
    
    <div id="modalReservation" class="modal"></div>


    <?php 
        include 'nav_footer/footer.php';
    ?>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="js/librairies/jquery.js"></script>
    <script src="js/navfoot.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/main.js"></script>
    <script src="js/resa.js"></script>
    <script src="js/librairies/swipe.js"></script>
</body>

</html>