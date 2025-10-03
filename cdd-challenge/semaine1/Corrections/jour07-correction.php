<?php
// Jour 7 — Opérateurs, Variables & Tableaux (correction)

echo "<h2>Correction Jour 7</h2>";

// Exercice 1
$a = 15; $b = 4;
echo "<strong>Ex1</strong><br>";
echo "\$a + \$b = " . ($a + $b) . "<br>";
echo "\$a - \$b = " . ($a - $b) . "<br>";
echo "\$a * \$b = " . ($a * $b) . "<br>";
echo "\$a / \$b = " . ($a / $b) . "<br>";
echo "\$a % \$b = " . ($a % $b) . "<br>";
echo "\$a ** \$b = " . ($a ** $b) . "<br><br>";

// Exercice 2
$x = 10;
echo "<strong>Ex2</strong><br>";
$x += 5; echo "\$x += 5 -> $x<br>";
$x -= 3; echo "\$x -= 3 -> $x<br>";
$x *= 2; echo "\$x *= 2 -> $x<br>";
$x /= 4; echo "\$x /= 4 -> $x<br>";
$x %= 3; echo "\$x %= 3 -> $x<br><br>";

// Exercice 3
$p = 5; $q = "5";
echo "<strong>Ex3</strong><br>";
echo "== : " . ( ($p == $q) ? "true" : "false") . "<br>";
echo "=== : " . ( ($p === $q) ? "true" : "false") . "<br>";
echo "!= : " . ( ($p != $q) ? "true" : "false") . "<br>";
echo "!== : " . ( ($p !== $q) ? "true" : "false") . "<br>";
echo "< : " . ( ($p < 10) ? "true" : "false") . "<br>";
echo "<= : " . ( ($p <= 5) ? "true" : "false") . "<br>";
echo "> : " . ( ($p > 3) ? "true" : "false") . "<br>";
echo ">= : " . ( ($p >= 6) ? "true" : "false") . "<br><br>";

// Exercice 4
$age = 19; $permis = true;
echo "<strong>Ex4</strong><br>";
if ($age >= 18 && $permis) { echo "Peut conduire<br>"; }
if ($age < 18 || !$permis) { echo "Ne peut pas conduire (condition alternative)<br>"; }
echo "<br>";

// Exercice 5
$i = 5;
echo "<strong>Ex5</strong><br>";
echo "Post-incrément i++ : " . ($i++) . " (après: $i)<br>";
echo "Pré-incrément ++i : " . (++$i) . " (après: $i)<br>";
echo "Post-décrément i-- : " . ($i--) . " (après: $i)<br>";
echo "Pré-décrément --i : " . (--$i) . " (après: $i)<br><br>";

// Exercice 6
$val = null;
$defaut = $val ?? "valeur par défaut";
echo "<strong>Ex6</strong><br>";
echo "Coalescence nulle: " . $defaut . "<br><br>";

// Exercice 7
$n = 13;
echo "<strong>Ex7</strong><br>";
echo ($n % 2 === 0) ? "Pair<br><br>" : "Impair<br><br>";

// Exercice 8
$tab = ["pomme", "poire", "banane"];
$tab[1] = "kiwi"; // modification
echo "<strong>Ex8</strong><br><pre>";
print_r($tab);
echo "</pre><br>";

// Exercice 9
$nums = [1, 2, 3];
array_push($nums, 4);
$last = array_pop($nums);
array_unshift($nums, 0);
$first = array_shift($nums);
echo "<strong>Ex9</strong><br>";
echo "Pop = $last, Shift = $first<br><pre>";
print_r($nums);
echo "</pre><br>";

// Exercice 10
$a1 = ["a", "b"];
$a2 = [0 => "b", 1 => "c", 2 => "d"];
$merge = array_merge($a1, $a2);
$union = $a1 + $a2; // préserve les clés existantes à gauche
echo "<strong>Ex10</strong><br><em>array_merge</em><pre>";
print_r($merge);
echo "</pre><em>Union +</em><pre>";
print_r($union);
echo "</pre><br>";

// Exercice 11
$fruits = ["pomme", "banane", "cerise"];
echo "<strong>Ex11</strong><br>";
echo "in_array('banane') ? " . (in_array("banane", $fruits, true) ? "true" : "false") . "<br>";
echo "array_search('cerise') = " . array_search("cerise", $fruits, true) . "<br><br>";

// Exercice 12
$vals = [5, 2, 9, 2, 7];
echo "<strong>Ex12</strong><br>";
echo "Count = " . count($vals) . "<br>";
$vals_sorted = $vals;
sort($vals_sorted);
echo "<pre>"; print_r($vals_sorted); echo "</pre>";
rsort($vals_sorted);
echo "<pre>"; print_r($vals_sorted); echo "</pre><br>";

// Exercice 13
$triple = ["Alice", "Bob", "Chloé", "Diego"];
list($a, $b, $c) = $triple;
echo "<strong>Ex13</strong><br>";
echo "a=$a, b=$b, c=$c<br><br>";

// Exercice 14
$withDup = [1,2,2,3,3,3,4];
$unique = array_unique($withDup);
$diff = array_diff([1,2,3,4,5], [2,4]);
echo "<strong>Ex14</strong><br><pre>";
print_r($unique);
print_r($diff);
echo "</pre>";
?>
