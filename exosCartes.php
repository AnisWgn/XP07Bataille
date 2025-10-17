<?php
require_once 'class.carte.inc.php';

// a. Créer un roi de trèfle
$uneCarte = new Carte("Trèfle", "Roi");

// b. Afficher la couleur
echo "Couleur de la carte : " . $uneCarte->getCouleur() . "<br>";

// c. Afficher le nom
echo "Nom de la carte : " . $uneCarte->getNom() . "<br>";

// d. Vérifier si c'est un atout (Cœur)
$estAtout = $uneCarte->isAtout("Cœur") ? "Oui" : "Non";
echo "Est-ce un atout ? " . $estAtout . "<br>";
?>