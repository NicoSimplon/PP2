<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../connexion/connexion_bdd.php';

$getComments = pg_query(
    "SELECT commentaire, date_com, pseudo FROM commentaire ORDER BY date_com DESC"
);

$result = pg_fetch_all($getComments);

$json = json_encode($result);

echo $json;
	