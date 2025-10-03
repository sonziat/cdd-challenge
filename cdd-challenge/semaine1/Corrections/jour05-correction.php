<?php
// Jour 5 — Fonctions en PHP (correction)

// Exercice 1
function sayHello(string $nom): void {
    echo "Bonjour, $nom!<br>";
}
sayHello("Alice");

// Exercice 2
function add(float $a, float $b): float {
    return $a + $b;
}
echo "Somme 2+3 = " . add(2, 3) . "<br>";

// Exercice 3
function greet(string $nom = "Invité"): void {
    echo "Bienvenue, $nom !<br>";
}
greet();
greet("Bob");

// Exercice 4
function areaRectangle(float $longueur, float $largeur): float {
    return $longueur * $largeur;
}
echo "Aire 4x2 = " . areaRectangle(4, 2) . "<br>";

// Exercice 5
function isEven(int $n): bool {
    return $n % 2 === 0;
}
echo "10 est pair ? " . (isEven(10) ? "true" : "false") . "<br>";

// Exercice 6
function toUpper(string $texte): string {
    return strtoupper($texte);
}
echo toUpper("bonjour") . "<br>";

// Exercice 7
function fullName(string $prenom, string $nom): string {
    return "Nom complet : " . $nom . " " . $prenom;
}
echo fullName("Chloé", "Martin") . "<br>";

// Exercice 8
function average(array $nombres): float {
    if (count($nombres) === 0) {
        return 0.0;
    }
    $somme = 0;
    foreach ($nombres as $n) {
        $somme += $n;
    }
    return $somme / count($nombres);
}
echo "Moyenne [10, 12, 14] = " . average([10,12,14]) . "<br>";
echo "Moyenne [] = " . average([]) . "<br>";

// Exercice 9
function factorial(int $n): int {
    if ($n < 0) return 0; // simple garde
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}
echo "6! = " . factorial(6) . "<br>";

// Exercice 10
function countVowels(string $texte): int {
    $count = 0;
    $texteLower = strtolower($texte);
    $voyelles = "aeiouy";
    for ($i = 0; $i < strlen($texteLower); $i++) {
        if (strpos($voyelles, $texteLower[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}
echo "Voyelles dans 'Programmation' : " . countVowels("Programmation") . "<br>";

// Exercice 11
function applyVAT(float $prixHT, float $taux = 0.20): float {
    return $prixHT * (1 + $taux);
}
echo "Prix TTC (100€, 20%) = " . applyVAT(100) . "<br>";

// Exercice 12
function printList(array $items): void {
    echo "<ul>";
    foreach ($items as $it) {
        echo "<li>" . htmlspecialchars((string)$it) . "</li>";
    }
    echo "</ul>";
}
printList(["Pain", "Lait", "Œufs"]);
?>
