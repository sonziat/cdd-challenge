<?php
// Jour 3 — Conditions & Boucles (correction)

// Exercice 1
$age = 17;
echo ($age >= 18) ? "Majeur<br>" : "Mineur<br>";

// Exercice 2
$note = 14;
if ($note < 10) {
    echo "Insuffisant<br>";
} elseif ($note <= 11) {
    echo "Passable<br>";
} elseif ($note <= 13) {
    echo "Assez bien<br>";
} elseif ($note <= 15) {
    echo "Bien<br>";
} else {
    echo "Très bien<br>";
}

// Exercice 3
$jour = 3;
switch ($jour) {
    case 1: echo "Lundi<br>"; break;
    case 2: echo "Mardi<br>"; break;
    case 3: echo "Mercredi<br>"; break;
    case 4: echo "Jeudi<br>"; break;
    case 5: echo "Vendredi<br>"; break;
    case 6: echo "Samedi<br>"; break;
    case 7: echo "Dimanche<br>"; break;
    default: echo "Jour invalide<br>";
}

// Exercice 4
$login = "admin"; $password = "1234";
echo ($login === "admin" && $password === "1234") ? "Accès autorisé<br>" : "Accès refusé<br>";

// Exercice 5
for ($i = 1; $i <= 20; $i++) { echo $i . " "; }
echo "<br>";

// Exercice 6
$j = 10;
while ($j >= 0) { echo $j . " "; $j--; }
echo "<br>";

// Exercice 7
for ($k = 0; $k <= 20; $k++) {
    if ($k % 2 !== 0) continue;
    echo $k . " ";
}
echo "<br>";

// Exercice 8
$sum = 0;
for ($n = 1; $n <= 100; $n++) { $sum += $n; }
echo "Somme 1..100 = $sum<br>";

// Exercice 9
$prenoms = ["Alice", "Bob", "Chloé", "Diego"];
foreach ($prenoms as $p) { echo $p . "<br>"; }

// Exercice 10
$nums = [5, 12, 3, 27, 9, 27, -1];
$max = $nums[0];
foreach ($nums as $val) { if ($val > $max) $max = $val; }
echo "Max = $max<br>";

// Exercice 11
for ($x = 1; $x <= 30; $x++) {
    if ($x % 15 === 0) echo "FizzBuzz ";
    elseif ($x % 3 === 0) echo "Fizz ";
    elseif ($x % 5 === 0) echo "Buzz ";
    else echo $x . " ";
}
echo "<br>";

// Exercice 12
for ($m = 1; $m <= 10; $m++) { echo "7 x $m = " . (7*$m) . "<br>"; }

// Exercice 13
echo "<table border='1' cellpadding='4' cellspacing='0'>";
$val = 1;
for ($r = 1; $r <= 5; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= 5; $c++) {
        echo "<td>$val</td>";
        $val++;
    }
    echo "</tr>";
}
echo "</table><br>";

// Exercice 14
$texte = "Bonjour tout le monde";
$voyelles = 0;
for ($i = 0; $i < strlen($texte); $i++) {
    if (stripos("aeiouy", $texte[$i]) !== false) $voyelles++;
}
echo "Voyelles : $voyelles<br>";

// Exercice 15
$n = 6;
$fact = 1;
for ($i = 2; $i <= $n; $i++) { $fact *= $i; }
echo "$n! = $fact<br>";

// Exercice 16
$produits = ["stylo" => 2.5, "clavier" => 29.9, "souris" => 15.0, "casque" => 49.0];
foreach ($produits as $nom => $prix) {
    if ($prix > 20) echo "$nom : $prix €<br>";
}

// Exercice 17
$liste = [3, 5, 8, 0, 9, 11];
foreach ($liste as $v) {
    if ($v === 0) { echo "Stop (0 rencontré)<br>"; break; }
    echo $v . " ";
}
echo "<br>";

// Exercice 18
$elts = ["", "PHP", null, " ", "OK"];
foreach ($elts as $e) {
    if (!isset($e) || trim((string)$e) === "") continue;
    echo "[" . $e . "] ";
}
echo "<br>";

// Exercice 19
$compteur = 0; $securite = 0;
while ($compteur < 10) {
    $compteur++;
    $securite++;
    if ($securite > 100) { echo "Sécurité activée<br>"; break; }
}
echo "Compteur = $compteur<br>";

// Exercice 20
$essais = 0;
do {
    $essais++;
    $de = rand(1,6);
} while ($de !== 6);
echo "6 obtenu en $essais essai(s).<br>";
?>
