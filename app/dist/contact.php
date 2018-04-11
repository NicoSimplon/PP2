<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
       crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
       crossorigin="anonymous">
</head>

<body>

  <?php
  if(isset($_POST['action'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['num'];
    $email = $_POST['email'];
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <form method="post" class="col s12 m6">

        <div class="input-field">
          <input id="nom" type="text"name=nom class="validate" required="required">
          <label for="nom">Nom</label>

        </div>

        <div class="input-field">
          <input  id="prenom" name=prenom type="text" class="validate" required="required">
          <label for="prenom">Prénom</label>
        </div>


        <div class="input-field">
          <input id="num" type="text"name=num class="validate" required="required">
          <label for="num">Téléphone</label>
        </div>



        <div class="input-field">
          <input id="email" type="email"name=email class="validate" required="required">
          <label for="email">Email</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Valider
          <i class="material-icons right"></i>
        </button>
      </form>
      <div class="card col s12 m6 valign-wrapper flow-text z-depth-3 urf">
        <div class="card-content white-text">
          <p>La canal, St. Jérome
            Castelnau-De-Montmiral, Midi-Pyrenees, France
            @colo.co.81
            Appeler 05 63 57 42 33</p>
          </div>
        </div>
      </div>
    </div>
    <div id="carte">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.9643245552575!2d1.8313439510196203!3d43.93941197900997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12adcd4d6e7b2837%3A0xad216fa76c084ae8!2sColo+%26+Co!5e0!3m2!1sfr!2sfr!4v1522931445838" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <h3>Les services aux alentours</h3>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep
    teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
<?php
include 'footer.php';
?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>
