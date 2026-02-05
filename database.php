<?php

$bdd = mysqli_connect("localhost", "", "", "projet_docker");

$valeur = (int)$_GET['score'];

mysqli_query($bdd, "UPDATE compteur SET valeur = $valeur");
