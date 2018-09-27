<?php
	include 'user.php';
	include 'mdp.php';
	
	$connect = pg_connect("host=localhost port=5432 dbname=bdd_coloco user=".$user." password=".$pswd." ");
?>