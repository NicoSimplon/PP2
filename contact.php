<?php 
    include 'connexion/connexion_bdd.php';
?>


<!DOCTYPE html>
<html>

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

<div class="container">
    <div class="row">
        <div class="col s12 m4 l8">
            <div id="carte">
            <iframe class="mapa" src="https://www.openstreetmap.org/export/embed.html?bbox=1.8257045745849612%2C43.934417643656786%2C1.8407034873962405%2C43.94308581326467&amp;layer=mapnik&amp;marker=43.93875961206273%2C1.8332147598266602" ></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=43.9388&amp;mlon=1.8332#map=16/43.9388/1.8332">Agrandir le plan</a></small>         
            </div>
        </div>

        <div class="col s12 m4 l4 valign-wrapper flow-text  amber lighten-2 z-depth-3"style="margin-top: 2%;">
            <div class="card-content white-text">
            <p>La canal, St. Jérome
            Castelnau-De-Montmiral, Midi-Pyrenees, France
            @colo.co.81
            Appeler 05 63 57 42 33</p>
            </div>
        </div>

        <form>

        <div class="col s12 m4 l4">
            <div class="input-field col s12">
                <input id="nom" type="text" name="nom" class="validate" required>
                <label for="nom">Nom</label>
            </div>

            <div class="input-field col s12">
                <input  id="prenom" name="prenom" type="text" class="validate" required>
                <label for="prenom">Prénom</label>
            </div>

            <div class="input-field col s12">
                <input id="num" type="text" name="num" class="validate" required>
                <label for="num">Téléphone</label>
            </div>

            <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate" required>
                <label for="email">Email</label>
            </div>

           <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Message</label>
          </div>

            <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 32%;">Valider
                <i class="material-icons right"></i>
            </button>
        </div>
        </form>
    </div>

        <div>
            <h3>Les services aux alentours</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep
            teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
</div>

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