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

    <div class="row">
        <div class="col s12 center-align form">
            <h3>Formulaire de Réservation</h3>
        </div>
    
        <div class="col s6 offset-s3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep
            teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <br>

    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" class="formu" type="text" class="validate">
          <label class="formu" for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" class="formu" type="text" class="validate">
          <label class="formu" for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="address" class="formu" type="text" class="validate">
          <label class="formu" for="address">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="phone" class="formu" type="text" class="validate">
          <label class="formu" for="phone">Téléphone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" class="formu" type="email" class="validate">
          <label class="formu" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="number" class="formu" type="text" class="validate">
          <label class="formu" for="number">Nombre de Personne</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="dato" type="text" class="datepicker">
          <label class="formu" for="dato">Date</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <textarea id="descipt" class="desc" class="materialize-textarea" data-length="120" required></textarea>
            <label for="descript" class="formu">Descriptif</label>
          </div>
      </div>
    </form>
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
