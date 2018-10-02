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
        <div class="col s12 m12 l8">
            <iframe class="mapa" src="https://www.openstreetmap.org/export/embed.html?bbox=1.8257045745849612%2C43.934417643656786%2C1.8407034873962405%2C43.94308581326467&amp;layer=mapnik&amp;marker=43.93875961206273%2C1.8332147598266602" ></iframe>        
        </div>

        <div class="col s12 m12 l4">
            <div class="card-panel">
                <span class="white-text">La Canal, St. Jérôme, 81140 Castelnau-de-Montmiral</span>
                <p class="white-text">05 63 57 42 33</p>
                <br>
                <img class="responsive-img" src="img/index.jpeg"> 
            </div>
        </div>
    </div>
  

    <form>
        <div class="row">
            <div class="col s12 white-text">
                <h4><p>Formulaire de contact</p></h4>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix conticone">perm_identity</i>
                <input id="nom" class="texbo" type="text" name="nom" class="validate" required>
                <label for="nom" class="texbo">Nom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix conticone">person</i>
                <input  id="prenom" class="texbo" name="prenom" type="text" class="validate" required>
                <label for="prenom" class="texbo">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix conticone">phone</i>
                <input id="num" class="texbo" type="text" name="num" class="validate">
                <label for="num" class="texbo">Téléphone (facultatif)</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix conticone">email</i>
                <input id="email" class="texbo" type="email" name="email" class="validate" required>
                <label for="email" class="texbo">Email</label>
            </div>
        </div>
        <div class="row">
           <div class="input-field col s12">
           <i class="material-icons prefix conticone">mode_edit</i>
                <textarea id="icon_prefix2" class="botext" class="materialize-textarea" data-length="120" required></textarea>
                <label for="icon_prefix2" class="texbo">Message</label>
            </div>
        </div>
        <div class="row">
           <div class="col s12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                <i class="material-icons right fleche">send</i>
                </button>
            </div>
        </div>
    </form>


        <div>
            <h3>Les services aux alentours</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep
            teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <br>
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