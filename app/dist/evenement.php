<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'connexion_bdd.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/materialize.css"></link>
    <link rel="stylesheet" type="text/css" href="css/main.css"></link>
    <link rel="stylesheet" type="text/css" href="css/navfoot.css"></link>


</head>
<i class="fab fa-facebook"></i>
<i class="fab fa-facebook-square"></i>

<body>
    <nav>
        <navmenu></navmenu>
    </nav>


    <?php 
$requete = pg_query("SELECT to_char(date_event, 'dd/mm/ YYYY') , event,nom_artiste,lib_genre,descriptif
FROM artiste
INNER JOIN art_genre ON artiste.id_artiste=art_genre.id_artiste
INNER JOIN genre ON genre.id_genre=art_genre.id_genre
INNER JOIN eve_art ON artiste.id_artiste=eve_art.id_artiste
INNER JOIN evenement ON eve_art.id_event=evenement.id_event");

while ($cou = pg_fetch_assoc($requete)) {

    $dynamicCard .= '    <div class="containerCenterWrap">
<div class="card sizeCard">
    <div class="headerCard"><span class="TitleDate card-title grey-text text-darken-4">' . $cou['to_char'] . '             </span>
    </div>
    <div class="card-image waves-effect waves-block waves-light">
        <img class="activator cardImg" src="logocolo.jpg">
    </div>
    <div class="card-content ResumeCard">
        <div class="containerInfosView">
            <p class="NameEvent">'.$cou['event'].'</p>
            </div>
            <div class="containerInfosView">
                <p class="InfosView">Heure</p>
                </div>
                <div class="footerCard">
                    <a class="plus activator">En Savoir Plus</a>
                </div>
            </div>
            <div class="card-reveal"><span class="card-title grey-text text-darken-4">'.$cou['event'].$cou['to_char'].'     <i class="material-icons right">close</i>
            </span>
            <p>'.$cou['descriptif']. '</p>
        </div>
    </div>';
}
echo $dynamicCard;
?>



  <a class="modal-trigger" href="#modalReservation"><i class="fas fa-ticket-alt"></i></a>
  <div id="modalReservation" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>




    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="js/vue.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/navfoot.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/main.js"></script>
    <script src="js/swipe.js"></script>
</body>

</html>