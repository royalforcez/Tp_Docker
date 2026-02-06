<?php

$bdd = mysqli_connect("localhost", "root", "", "docker_db");

$valeur = (int)$_GET['score'];

mysqli_query($bdd, "UPDATE compteur SET valeur = $valeur");
