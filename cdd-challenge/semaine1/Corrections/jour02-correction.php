<?php
// Jour 2 – Variables, Types et Concaténation

// Exercice 1 : Créer 5 variables avec différents types
$nom = "Alice"; // string
$age = 22; // int
$taille = 1.68; // float
$etudiant = true; // bool
$ville = "Lyon"; // string

// Exercice 2 : Afficher un résumé de profil
echo "Profil : $nom, $age ans, $ville<br>";

// Exercice 3 : Utiliser des commentaires
// Ceci est un commentaire sur une ligne
/* Ceci est 
   un commentaire
   sur plusieurs lignes */

// Exercice 4 : Calculer une addition
$a = 10;
$b = 5;
echo "La somme de $a et $b est : " . ($a + $b) . "<br>";

// Exercice 5 : Créer une phrase avec concaténation
$phrase = "Je m'appelle " . $nom . " et j'habite à " . $ville . ".";
echo $phrase . "<br>";

// Exercice 6 : Afficher une chaîne en majuscules
echo strtoupper($nom) . "<br>";

// Exercice 7 : Afficher la longueur d'une chaîne
echo "Longueur du prénom : " . strlen($nom) . "<br>";

// Exercice 8 : Afficher un booléen (true/false)
echo "Étudiant : " . ($etudiant ? "true" : "false") . "<br>";

// Exercice 9 : Créer une variable contenant du HTML
$html = "<p>Ceci est du HTML généré par PHP.</p>";
echo $html;

// Exercice 10 : Afficher l’heure actuelle avec date()
echo "Heure actuelle : " . date("H:i:s") . "<br>";
?>
