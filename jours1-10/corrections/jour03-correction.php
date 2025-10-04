<?php
// Jour 3 — Conditions & Boucles (correction exercices supplémentaires)

// Exercice 21 : Vérifier si un utilisateur est majeur
$age = 20;
echo ($age >= 18) ? "Majeur<br>" : "Mineur<br>";

// Exercice 22 : Afficher un message selon l'heure
$heure = 15;
if ($heure < 12) {
    echo "Bonjour, c'est le matin<br>";
} elseif ($heure < 18) {
    echo "Bon après-midi<br>";
} else {
    echo "Bonsoir<br>";
}

// Exercice 23 : Afficher une note en lettre
$note = 14;
if ($note >= 16) {
    echo "A<br>";
} elseif ($note >= 14) {
    echo "B<br>";
} elseif ($note >= 12) {
    echo "C<br>";
} elseif ($note >= 10) {
    echo "D<br>";
} else {
    echo "E<br>";
}

// Exercice 24 : Vérifier si une variable est vide
$val = "";
echo empty($val) ? "Variable vide<br>" : "Variable non vide<br>";

// Exercice 25 : Vérifier un mot de passe simple
$password = "secret12";
if (strlen($password) >= 6) {
    echo "Mot de passe valide<br>";
} else {
    echo "Mot de passe trop court<br>";
}

// Exercice 26 : Afficher un message selon l'âge
$age = 70;
if ($age < 13) {
    echo "Enfant<br>";
} elseif ($age < 18) {
    echo "Ado<br>";
} elseif ($age < 65) {
    echo "Adulte<br>";
} else {
    echo "Senior<br>";
}

// Exercice 27 : Tester si un nombre est pair ou impair
$n = 11;
echo ($n % 2 == 0) ? "Pair<br>" : "Impair<br>";

// Exercice 28 : Choix de menu avec switch
$choix = 2;
switch ($choix) {
    case 1: echo "Nouveau fichier<br>"; break;
    case 2: echo "Ouvrir un fichier<br>"; break;
    case 3: echo "Quitter le programme<br>"; break;
    default: echo "Choix invalide<br>";
}

// Exercice 29 : Rediriger selon le jour de la semaine
$jour = 5;
switch ($jour) {
    case 1: echo "Travail - Lundi<br>"; break;
    case 2: echo "Travail - Mardi<br>"; break;
    case 3: echo "Travail - Mercredi<br>"; break;
    case 4: echo "Travail - Jeudi<br>"; break;
    case 5: echo "Travail - Vendredi<br>"; break;
    case 6: echo "Repos - Samedi<br>"; break;
    case 7: echo "Repos - Dimanche<br>"; break;
    default: echo "Jour invalide<br>";
}

// Exercice 30 : Afficher une météo simulée
$meteo = "pluie";
switch ($meteo) {
    case "soleil": echo "Il fait beau, sortez profiter !<br>"; break;
    case "pluie": echo "Prenez un parapluie.<br>"; break;
    case "nuageux": echo "Le temps est couvert.<br>"; break;
    case "neige": echo "Attention sur la route, il neige.<br>"; break;
    default: echo "Météo inconnue.<br>";
}
?>
