<?php
// Jour 9 – Mini-projets (CORRECTION DE RÉFÉRENCE)
// Chaque projet est (un peu) démontré ci-dessous. Vous pouvez commenter/décommenter les appels de démo.

echo "<h1>Jour 9 – Mini-projets : Correction</h1>";
echo "<p style='color:#555'>Ce fichier propose des fonctions propres + un exemple minimal d'utilisation pour chaque projet.</p>";
echo "<hr>";

/* =====================================================
   PROJET 1 : Carnet d’adresses simplifié
   Objectifs : tableaux associatifs, foreach, fonctions, tri
===================================================== */
$contacts = [
    ['nom' => 'Martin', 'prenom' => 'Alice', 'email' => 'alice@example.com', 'tel' => '0102030405'],
    ['nom' => 'Dupont', 'prenom' => 'Bob', 'email' => 'bob@example.com', 'tel' => '0605040302'],
    ['nom' => 'Bernard', 'prenom' => 'Chloé', 'email' => 'chloe@example.com', 'tel' => '0708091011'],
];

function afficherContacts(array $contacts): void {
    echo "<h2>Projet 1 — Carnet d’adresses</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='6'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th></tr>";
    foreach ($contacts as $c) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($c['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($c['prenom']) . "</td>";
        echo "<td>" . htmlspecialchars($c['email']) . "</td>";
        echo "<td>" . htmlspecialchars($c['tel']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function ajouterContact(array $contacts, array $contact): array {
    // petite validation rapide
    foreach (['nom','prenom','email','tel'] as $k) {
        if (!array_key_exists($k, $contact)) return $contacts;
    }
    $contacts[] = $contact;
    return $contacts;
}

function supprimerContact(array $contacts, string $email): array {
    $filtered = [];
    foreach ($contacts as $c) {
        if ($c['email'] !== $email) $filtered[] = $c;
    }
    return $filtered;
}

function trierContacts(array $contacts, string $cle = 'nom'): array {
    usort($contacts, function($a, $b) use ($cle) {
        return strcmp(mb_strtolower($a[$cle]), mb_strtolower($b[$cle]));
    });
    return $contacts;
}

// Démo
$contacts = ajouterContact($contacts, ['nom'=>'Zola','prenom'=>'Emile','email'=>'emile@example.com','tel'=>'0123456789']);
$contacts = supprimerContact($contacts, 'bob@example.com');
$contacts = trierContacts($contacts, 'nom');
afficherContacts($contacts);

echo "<hr>";

/* =====================================================
   PROJET 2 : Gestion de notes scolaires
   Objectifs : tableaux, fonctions math, conditions, tri
===================================================== */
$eleves = ['Alice'=>15, 'Bob'=>12, 'Chloé'=>18, 'Diego'=>9];

function moyenne(array $notes): float {
    if (count($notes) === 0) return 0.0;
    return array_sum($notes) / count($notes);
}
function meilleure(array $notes): float {
    return count($notes) ? max($notes) : 0.0;
}
function pire(array $notes): float {
    return count($notes) ? min($notes) : 0.0;
}
function appreciation(float $m): string {
    if ($m < 10) return "Insuffisant";
    if ($m < 12) return "Passable";
    if ($m < 16) return "Bien";
    return "Très bien";
}
function classement(array $eleves): array {
    arsort($eleves); // tri décroissant par note
    return $eleves;
}

echo "<h2>Projet 2 — Gestion de notes</h2>";
$moy = moyenne($eleves);
echo "Moyenne : " . number_format($moy, 2) . " (" . appreciation($moy) . ")<br>";
echo "Meilleure note : " . meilleure($eleves) . "<br>";
echo "Pire note : " . pire($eleves) . "<br>";

$ranked = classement($eleves);
echo "<ol>";
foreach ($ranked as $nom => $note) {
    echo "<li>" . htmlspecialchars($nom) . " — $note</li>";
}
echo "</ol>";

echo "<hr>";

/* =====================================================
   PROJET 3 : Générateur de facture
   Objectifs : tableaux associatifs, calculs, formatage, fonctions
===================================================== */
$panier = ['Livre'=>12.5, 'Stylo'=>2.9, 'Clé USB'=>9.99];

function totalHT(array $panier): float {
    return array_sum($panier);
}
function tva(float $totalHT, float $taux = 0.20): float {
    return $totalHT * $taux;
}
function totalTTC(float $totalHT, float $taux = 0.20): float {
    return $totalHT + tva($totalHT, $taux);
}
function afficherFacture(array $panier, float $taux = 0.20): void {
    echo "<h2>Projet 3 — Facture</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='6'><tr><th>Produit</th><th>Prix (€)</th></tr>";
    foreach ($panier as $prod => $prix) {
        echo "<tr><td>" . htmlspecialchars($prod) . "</td><td>" . number_format($prix, 2) . "</td></tr>";
    }
    echo "</table>";
    $ht = totalHT($panier);
    $montantTVA = tva($ht, $taux);
    $ttc = $ht + $montantTVA;
    echo "Total HT : " . number_format($ht, 2) . " €<br>";
    echo "TVA (" . ($taux*100) . "%) : " . number_format($montantTVA, 2) . " €<br>";
    echo "Total TTC : " . number_format($ttc, 2) . " €<br>";
}
function ajouterArticlePanier(array $panier, string $nom, float $prix): array {
    $panier[$nom] = $prix;
    return $panier;
}
function supprimerArticlePanier(array $panier, string $nom): array {
    unset($panier[$nom]);
    return $panier;
}

// Démo
$panier = ajouterArticlePanier($panier, 'Cahier', 3.5);
$panier = supprimerArticlePanier($panier, 'Stylo');
afficherFacture($panier, 0.20);

echo "<hr>";

/* =====================================================
   PROJET 4 : Analyseur de texte
   Objectifs : chaînes, boucles, conditions, fonctions
===================================================== */
$phrase = "PHP est un excellent langage pour le web !";

function compterVoyelles(string $t): int {
    $voy = "aeiouy";
    $t = mb_strtolower($t);
    $c = 0;
    for ($i = 0, $len = mb_strlen($t); $i < $len; $i++) {
        $ch = mb_substr($t, $i, 1);
        if (mb_strpos($voy, $ch) !== false) $c++;
    }
    return $c;
}
function compterMots(string $t): int {
    $trim = trim($t);
    if ($trim === "") return 0;
    // autoriser quelques caractères accentués
    return str_word_count($trim, 0, "àâäéèêëîïôöùûüç");
}
function contientMot(string $t, string $mot): bool {
    return mb_stripos($t, $mot) !== false;
}
function toUpper(string $t): string { return mb_strtoupper($t); }
function toLower(string $t): string { return mb_strtolower($t); }
function inverserMots(string $t): string {
    $parts = preg_split('/\s+/u', trim($t));
    $parts = array_reverse($parts);
    return implode(' ', $parts);
}

echo "<h2>Projet 4 — Analyseur de texte</h2>";
echo "Phrase : " . htmlspecialchars($phrase) . "<br>";
echo "Voyelles : " . compterVoyelles($phrase) . "<br>";
echo "Mots : " . compterMots($phrase) . "<br>";
echo "Contient 'web' ? " . (contientMot($phrase, 'web') ? "Oui" : "Non") . "<br>";
echo "MAJ : " . htmlspecialchars(toUpper($phrase)) . "<br>";
echo "min : " . htmlspecialchars(toLower($phrase)) . "<br>";
echo "Inversé : " . htmlspecialchars(inverserMots($phrase)) . "<br>";

echo "<hr>";

/* =====================================================
   PROJET 5 : Menu interactif (sans formulaires)
   Objectifs : boucles, switch, fonctions, structuration
===================================================== */
function menu(int $choix, array &$state): void {
    switch ($choix) {
        case 1:
            // Contacts
            $state['contacts'] = ajouterContact($state['contacts'], ['nom'=>'Durand','prenom'=>'Eva','email'=>'eva@example.com','tel'=>'0611223344']);
            $state['contacts'] = trierContacts($state['contacts'], 'nom');
            afficherContacts($state['contacts']);
            break;
        case 2:
            // Notes
            $m = moyenne($state['eleves']);
            echo "<h2>Menu — Notes</h2>";
            echo "Moyenne : " . number_format($m, 2) . " (" . appreciation($m) . ")<br>";
            echo "Classement : <ol>";
            foreach (classement($state['eleves']) as $nom => $note) {
                echo "<li>" . htmlspecialchars($nom) . " — $note</li>";
            }
            echo "</ol>";
            break;
        case 3:
            // Facture
            echo "<h2>Menu — Facture</h2>";
            $state['panier'] = ajouterArticlePanier($state['panier'], 'Crayon', 1.2);
            afficherFacture($state['panier'], 0.2);
            break;
        case 4:
            // Analyse texte
            echo "<h2>Menu — Analyse texte</h2>";
            $ph = $state['phrase'];
            echo "Mots : " . compterMots($ph) . " — Voyelles : " . compterVoyelles($ph) . "<br>";
            echo "Upper : " . htmlspecialchars(toUpper($ph)) . "<br>";
            break;
        case 5:
            echo "<p>Quitter le menu.</p>";
            break;
        default:
            echo "<p>Choix invalide</p>";
    }
}

// État partagé simulé
$state = [
    'contacts' => $contacts,
    'eleves'   => $eleves,
    'panier'   => $panier,
    'phrase'   => $phrase,
];

echo "<h2>Projet 5 — Menu (simulation)</h2>";
$choix = 1;
while ($choix <= 5) {
    echo "<div style='margin:10px 0;padding:6px;border:1px dashed #aaa'><strong>Choix $choix</strong><br>";
    menu($choix, $state);
    echo "</div>";
    if ($choix === 5) { break; } // quitter
    $choix++;
}

echo "<p style='color:#2a7'>Fin de la démonstration.</p>";
?>
