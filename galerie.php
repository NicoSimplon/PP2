<!DOCTYPE html>

<html>

<head>

    <title>Galerie</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"

        crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"

        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/navfoot.css">

    <link rel="stylesheet" type="text/css" href="css/materialize.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <?php

        include 'connexion/connexion_bdd.php';

    ?>

</head>

<body>

    <div class="nav">

        <?php include 'nav_footer/nav.php'; ?>

    </div>

    <div class="container">

        <div class="row">

            <div class="col s12 center-align">

                <h3 class="white-text">Galerie :</h3>

            </div>

        </div>

        <div class="row valign-wrapper">

            <div class="col s12 m4">

                <img class="materialboxed responsive-img" id="img1" src="img/spookyPumpkin.jpeg">

            </div>

            <div class="col s12 m4">

            <img class="materialboxed responsive-img" src="img/spookyTrumpet.jpg">

            </div>

            <div class="col s12 m4">

            <img class="materialboxed responsive-img" src="img/spookyPumpkin.jpeg">

            </div>

        </div>

    </div>

    <?php include 'nav_footer/footer.php'; ?>

    <script src="js/librairies/jquery.js"></script>

    <script src="js/librairies/materialize.js"></script>

    <script src="js/navfoot.js"></script>

    <script src="js/main.js"></script>

    <script src="js/gallerie.js"></script>

    <script src="js/librairies/swipe.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</body>

</html>

