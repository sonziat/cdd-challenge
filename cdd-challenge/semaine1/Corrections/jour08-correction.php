<?php
// Jour 8 – TP de Synthèse (correction)

echo "<h1>Jour 8 – TP de Synthèse</h1>";
echo "<hr>";

/* ================================
   Exercice 1 : Profil utilisateur
================================ */
$profil = [
    "nom" => "Martin",
    "prenom" => "Alice",
    "age" => 24,
    "ville" => "Lyon"
];

function afficherProfil(array $p): void {
    echo "<section style='border:1px solid #ccc;padding:10px;border-radius:8px;max-width:320px'>";
    echo "<h3>Profil utilisateur</h3>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($p["nom"]) . "</p>";
    echo "<p><strong>Prénom :</strong> " . htmlspecialchars($p["prenom"]) . "</p>";
    echo "<p><strong>Âge :</strong> " . (int)$p["age"] . " ans</p>";
    echo "<p><strong>Ville :</strong> " . htmlspecialchars($p["ville"]) . "</p>";
    echo "</section>";
}
afficherProfil($profil);
echo "<hr>";

/* ================================
   Exercice 2 : Notes et moyenne
================================ */
$notes = [12, 15, 9, 18, 14];

function calculerMoyenne(array $notes): float {
    if (count($notes) === 0) return 0.0;
    $s = 0;
    foreach ($notes as $n) { $s += $n; }
    return $s / count($notes);
}

function appreciation(float $moy): string {
    if ($moy < 10) return "Insuffisant";
    if ($moy < 12) return "Passable";
    if ($moy < 16) return "Bien";
    return "Très bien";
}

$m = calculerMoyenne($notes);
echo "<h3>Notes et moyenne</h3>";
echo "Notes : [" . implode(", ", $notes) . "]<br>";
echo "Moyenne : " . number_format($m, 2) . " — " . appreciation($m) . "<br>";
echo "<hr>";

/* ============================================
   Exercice 3 : Table de multiplication dynamique
============================================= */
function tableMultiplication(int $n): void {
    echo "<h4>Table de $n</h4>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$n x $i = " . ($n*$i) . "</li>";
    }
    echo "</ul>";
}
for ($k = 3; $k <= 5; $k++) {
    tableMultiplication($k);
}
echo "<hr>";

/* ==================================
   Exercice 4 : Gestion de liste
================================== */
function ajouterArticle(array $liste, string $article): array {
    $liste[] = $article;
    return $liste;
}
function supprimerArticle(array $liste, string $article): array {
    $index = array_search($article, $liste, true);
    if ($index !== false) unset($liste[$index]);
    return array_values($liste);
}
function afficherListe(array $liste): void {
    echo "<h4>Liste de courses</h4><ul>";
    foreach ($liste as $it) echo "<li>" . htmlspecialchars($it) . "</li>";
    echo "</ul>";
}

$courses = ["Pain", "Lait"];
$courses = ajouterArticle($courses, "Oeufs");
$courses = ajouterArticle($courses, "Fromage");
$courses = supprimerArticle($courses, "Lait");
afficherListe($courses);
echo "<hr>";

/* ==================================
   Exercice 5 : Générateur de nombres
================================== */
function genererNombres(int $min, int $max, int $count): array {
    $res = [];
    for ($i = 0; $i < $count; $i++) {
        $res[] = rand($min, $max);
    }
    return $res;
}
function somme(array $arr): int {
    $s = 0; foreach ($arr as $v) $s += $v; return $s;
}
function maxManuel(array $arr) {
    if (!$arr) return null;
    $m = $arr[0];
    foreach ($arr as $v) if ($v > $m) $m = $v;
    return $m;
}

$nums = genererNombres(1, 50, 8);
echo "<h4>Générateur</h4>";
echo "Nombres : [" . implode(", ", $nums) . "]<br>";
echo "Somme : " . somme($nums) . "<br>";
echo "Max : " . maxManuel($nums) . "<br>";
echo "<hr>";

/* ==============================
   Exercice 6 : Analyse de texte
=============================== */
function compterVoyelles(string $texte): int {
    $voy = "aeiouy";
    $t = mb_strtolower($texte);
    $c = 0;
    for ($i = 0; $i < mb_strlen($t); $i++) {
        if (mb_strpos($voy, mb_substr($t, $i, 1)) !== false) $c++;
    }
    return $c;
}
function compterMots(string $texte): int {
    $trim = trim($texte);
    if ($trim === "") return 0;
    return str_word_count($trim, 0, "àâäéèêëîïôöùûüç");
}

$phrase = "PHP est un excellent langage pour le web !";
echo "<h4>Analyse de texte</h4>";
echo "Phrase : $phrase<br>";
echo "Voyelles : " . compterVoyelles($phrase) . "<br>";
echo "Mots : " . compterMots($phrase) . "<br>";
echo "<hr>";

/* =========================
   Exercice 7 : FizzBuzz
========================= */
function fizzbuzz(int $n): void {
    $out = [];
    for ($i = 1; $i <= $n; $i++) {
        $v = "";
        if ($i % 3 === 0) $v .= "Fizz";
        if ($i % 5 === 0) $v .= "Buzz";
        $out[] = $v !== "" ? $v : (string)$i;
    }
    echo implode(" ", $out);
}
echo "<h4>FizzBuzz (1..50)</h4>";
fizzbuzz(50);
echo "<hr>";

/* =========================
   Exercice 8 : Facture simple
========================= */
$panier = [
    "Livre" => 12.5,
    "Stylo" => 2.9,
    "Clé USB" => 9.99
];
function afficherFacture(array $panier, float $tva): void {
    $totalHT = 0;
    echo "<h4>Facture</h4>";
    echo "<table border='1' cellspacing='0' cellpadding='6'><tr><th>Produit</th><th>Prix (€)</th></tr>";
    foreach ($panier as $prod => $prix) {
        $totalHT += $prix;
        echo "<tr><td>" . htmlspecialchars($prod) . "</td><td>" . number_format($prix, 2) . "</td></tr>";
    }
    echo "</table>";
    $montantTVA = $totalHT * $tva;
    $totalTTC = $totalHT + $montantTVA;
    echo "Total HT : " . number_format($totalHT, 2) . " €<br>";
    echo "TVA (" . ($tva*100) . "%) : " . number_format($montantTVA, 2) . " €<br>";
    echo "Total TTC : " . number_format($totalTTC, 2) . " €<br>";
}
afficherFacture($panier, 0.20);
echo "<hr>";

/* =========================
   Exercice 9 : Classement
========================= */
$classement = ["Alice"=>15, "Bob"=>12, "Chloé"=>18, "Diego"=>9];
arsort($classement); // tri décroissant par valeur
echo "<h4>Classement</h4><ol>";
foreach ($classement as $nom => $note) {
    echo "<li>" . htmlspecialchars($nom) . " — $note</li>";
}
echo "</ol>";
echo "<hr>";

/* =========================
   Exercice 10 : Menu principal
========================= */
function menu(int $choix): void {
    global $profil, $notes;
    switch ($choix) {
        case 1: afficherProfil($profil); break;
        case 2:
            $m = calculerMoyenne($notes);
            echo "<p>Moyenne (menu) : " . number_format($m, 2) . " — " . appreciation($m) . "</p>";
            break;
        case 3: tableMultiplication(7); break;
        case 4: echo "<p>Au revoir 👋</p>"; break;
        default: echo "<p>Choix invalide</p>";
    }
}
echo "<h4>Menu (simulation)</h4>";
$choix = 0;
while ($choix !== 4) {
    $choix++;
    menu($choix);
    if ($choix > 4) break;
}
?>
