<?php

require_once 'Livre.php';
require_once 'Auteur.php';

echo "<br>Test instanciation Auteur: <br><br>";

$auteur = new Auteur("Stephen King", "1947-09-21");
$livre = new Livre("Ca", 1138, 1986, 20, $auteur);
$livre = new Livre("Simetierre", 374, 1983, 15, $auteur);
$livre = new Livre("Le Fléau", 374, 1978, 14, $auteur);
$livre = new Livre("Shining", 447, 1977, 16, $auteur);

$auteur->afficherBibliographie();
// $auteur->âge();


echo"<br>fin";