<?php
// Jour 4 – Boucles et Tableaux (correction)

// Exercice 1
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

// Exercice 2
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}

// Exercice 3
$prenoms = ["Alice", "Bob", "Charlie"];
foreach ($prenoms as $p) {
    echo $p . "<br>";
}

// Exercice 4
$j = 10;
while ($j >= 0) {
    echo $j . " ";
    $j--;
}
echo "<br>";

// Exercice 5
$courses = ["Pain", "Lait", "Oeufs", "Fromage"];
foreach ($courses as $article) {
    echo "- $article<br>";
}

// Exercice 6
$nums = [2, 5, 8, 3, 10];
$sum = 0;
foreach ($nums as $n) {
    $sum += $n;
}
echo "Somme = $sum<br>";

// Exercice 7
$jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
foreach ($jours as $jour) {
    echo $jour . "<br>";
}

// Exercice 8
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br>";

// Exercice 9
$notes = [8, 12, 15, 9, 18];
foreach ($notes as $note) {
    if ($note > 10) {
        echo $note . "<br>";
    }
}

// Exercice 10
$ages = ["Alice" => 22, "Bob" => 30, "Charlie" => 25];
foreach ($ages as $nom => $age) {
    echo "$nom a $age ans<br>";
}
?>
