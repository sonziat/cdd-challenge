<?php
// Jour 2 – Variables, Types et Concaténation (correction exercices supplémentaires)

// Exercice 11 : Créer une variable $pays et l’afficher avec votre prénom dans une phrase.
$pays = "France";
$prenom = "Alice";
echo "Je m'appelle $prenom et je vis en $pays.<br>";

// Exercice 12 : Créer deux variables numériques et afficher leur multiplication.
$x = 7;
$y = 3;
echo "La multiplication de $x et $y est : " . ($x * $y) . "<br>";

// Exercice 13 : Créer une variable contenant un nombre décimal et l’afficher avec 2 chiffres après la virgule.
$prix = 19.5678;
echo "Prix formaté : " . number_format($prix, 2) . "<br>";

// Exercice 14 : Déclarer une variable booléenne et afficher "Vrai" ou "Faux".
$disponible = false;
echo "Disponible : " . ($disponible ? "Vrai" : "Faux") . "<br>";

// Exercice 15 : Créer une phrase avec interpolation.
$animal = "chat";
$ageAnimal = 3;
echo "Mon $animal a $ageAnimal ans.<br>";

// Exercice 16 : Déclarer une chaîne et l’afficher en minuscules.
$texte = "BONJOUR TOUT LE MONDE";
echo strtolower($texte) . "<br>";

// Exercice 17 : Afficher le nombre de mots contenus dans une chaîne.
$phrase = "PHP est un langage puissant";
echo "Nombre de mots : " . str_word_count($phrase) . "<br>";

// Exercice 18 : Créer une variable qui contient prénom + âge et l’afficher.
$prenom2 = "Lucas";
$age2 = 28;
echo "Je m'appelle " . $prenom2 . " et j'ai " . $age2 . " ans.<br>";

// Exercice 19 : Créer une variable contenant du code HTML et l’afficher.
$button = "<button>Cliquez ici</button>";
echo $button;

// Exercice 20 : Créer une variable contenant la date d’aujourd’hui et l’afficher.
$today = date("d-m-Y");
echo "<br>Aujourd'hui, nous sommes le $today.<br>";
?>
