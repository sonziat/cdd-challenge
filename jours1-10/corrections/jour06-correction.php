<?php
// Jour 6 — Tableaux & Fonctions (correction)

// Exercice 1
function createShoppingList(): array {
    return ["Pain", "Lait", "Oeufs", "Pâtes", "Fromage"];
}
print_r(createShoppingList());
echo "<br><br>";

// Exercice 2
function sumArray(array $nums): float {
    $s = 0;
    foreach ($nums as $n) { $s += $n; }
    return $s;
}
echo "Somme: " . sumArray([2,5,3.5]) . "<br><br>";

// Exercice 3
function maxArray(array $nums) {
    if (count($nums) === 0) return null;
    $m = $nums[0];
    foreach ($nums as $n) if ($n > $m) $m = $n;
    return $m;
}
echo "Max: " . maxArray([5, 12, 3, 7]) . "<br><br>";

// Exercice 4
function findName(array $prenoms, string $recherche): bool {
    return in_array($recherche, $prenoms, true);
}
echo "Présent (Chloé)? " . (findName(["Alice","Bob","Chloé"], "Chloé") ? "true" : "false") . "<br><br>";

// Exercice 5
function onlyPositives(array $nums): array {
    return array_values(array_filter($nums, fn($x) => $x > 0));
}
print_r(onlyPositives([-3, 0, 4, 7, -1]));
echo "<br><br>";

// Exercice 6
function squareAll(array $nums): array {
    return array_map(fn($x) => $x * $x, $nums);
}
print_r(squareAll([1,2,3,4]));
echo "<br><br>";

// Exercice 7
function averageArray(array $nums): float {
    if (count($nums) === 0) return 0.0;
    return array_sum($nums) / count($nums);
}
echo "Moyenne: " . averageArray([10, 12, 14]) . "<br><br>";

// Exercice 8
function sortByLength(array $words): array {
    usort($words, function($a, $b) {
        return strlen($a) <=> strlen($b);
    });
    return $words;
}
print_r(sortByLength(["pomme", "kiwi", "banane", "figue"]));
echo "<br><br>";

// Exercice 9
function statsNotes(array $notes): array {
    if (count($notes) === 0) return ['min'=>null,'max'=>null,'moyenne'=>0.0];
    $min = $notes[0];
    $max = $notes[0];
    $sum = 0;
    foreach ($notes as $n) {
        if ($n < $min) $min = $n;
        if ($n > $max) $max = $n;
        $sum += $n;
    }
    return ['min'=>$min, 'max'=>$max, 'moyenne'=>$sum / count($notes)];
}
print_r(statsNotes([8, 12, 15, 9, 18]));
echo "<br><br>";

// Exercice 10
function mergeUnique(array $a, array $b): array {
    return array_values(array_unique(array_merge($a, $b)));
}
print_r(mergeUnique([1,2,3], [2,3,4,5]));
echo "<br><br>";

// Exercice 11
function keyValueSwap(array $assoc): array {
    $res = [];
    foreach ($assoc as $k => $v) {
        $res[$v] = $k;
    }
    return $res;
}
print_r(keyValueSwap(["a"=>1,"b"=>2,"c"=>3]));
echo "<br><br>";

// Exercice 12
function groupByFirstLetter(array $words): array {
    $groups = [];
    foreach ($words as $w) {
        $first = mb_strtolower(mb_substr($w, 0, 1)); // support UTF-8
        if (!isset($groups[$first])) $groups[$first] = [];
        $groups[$first][] = $w;
    }
    ksort($groups);
    return $groups;
}
print_r(groupByFirstLetter(["Pomme","Poire","Banane","Abricot","Ananas","Kiwi"]));
echo "<br>";
?>
