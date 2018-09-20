<?php

include 'connexion/connexion_bdd.php';

session_start();
session_destroy();


header ('Location: index.php');


?>