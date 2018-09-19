<?php

include 'connexion/connexion_bdd.php';

session_start();
session_destroy();
setcookie('e_mail', '', -1);

if(isset($_COOKIE['e_mail'])) {
	header ('Location: index.php');
}

?>