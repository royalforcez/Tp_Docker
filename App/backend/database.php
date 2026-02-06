<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");

$bdd = mysqli_connect("db", "root", "", "docker_db", 3306);

$valeur = (int)$_GET['score'];

mysqli_query($bdd, "UPDATE compteur SET valeur = $valeur");
