<?php
// Jour 9 – Mini-projets (consignes prêtes à coder, sans correction)
// Chaque projet est indépendant. Créez des fonctions, utilisez variables, conditions, boucles & tableaux.
// Vous pouvez exécuter chaque bloc séparément ou créer un menu pour naviguer entre eux.

/* =====================================================
   PROJET 1 : Carnet d’adresses simplifié
   Objectifs : tableaux associatifs, foreach, fonctions, tri
   Tâches :
   1) Créez un tableau $contacts = [ [ 'nom'=>'...', 'prenom'=>'...', 'email'=>'...', 'tel'=>'...' ], ... ].
   2) Écrivez afficherContacts(array $contacts): affiche un <table> HTML.
   3) Écrivez ajouterContact(array $contacts, array $contact): array  (retourne le nouveau tableau).
   4) Écrivez supprimerContact(array $contacts, string $email): array (supprime par email exact).
   5) BONUS : Écrivez trierContacts(array $contacts, string $cle='nom'): array (usort).
*/
$contacts = [
    ['nom' => 'Martin', 'prenom' => 'Alice', 'email' => 'alice@example.com', 'tel' => '0102030405'],
    ['nom' => 'Dupont', 'prenom' => 'Bob', 'email' => 'bob@example.com', 'tel' => '0605040302'],
];
// TODO: vos fonctions + affichage ici

/* =====================================================
   PROJET 2 : Gestion de notes scolaires
   Objectifs : tableaux, fonctions math, conditions, tri
   Tâches :
   1) $eleves = ['Alice'=>15, 'Bob'=>12, 'Chloé'=>18, 'Diego'=>9].
   2) moyenne(array $notes): float — meilleure(array $notes): float — pire(array $notes): float
   3) appreciation(float $m): string ( <10 insuffisant, <12 passable, <16 bien, sinon très bien )
   4) classement(array $eleves): array trié décroissant par note (arsort) puis affichage <ol>.
*/
$eleves = ['Alice'=>15, 'Bob'=>12, 'Chloé'=>18, 'Diego'=>9];
// TODO: vos fonctions + affichage ici

/* =====================================================
   PROJET 3 : Générateur de facture
   Objectifs : tableaux associatifs, calculs, formatage, fonctions
   Tâches :
   1) $panier = ['Livre'=>12.5, 'Stylo'=>2.9, 'Clé USB'=>9.99].
   2) totalHT(array $panier): float — tva(float $totalHT, float $taux=0.20): float — totalTTC(...): float
   3) afficherFacture(array $panier, float $taux): void  (table HTML + totaux formatés avec number_format)
   4) BONUS : ajouterArticle(array $panier, string $nom, float $prix): array ; supprimerArticle(...) : array
*/
$panier = ['Livre'=>12.5, 'Stylo'=>2.9, 'Clé USB'=>9.99];
// TODO: vos fonctions + affichage ici

/* =====================================================
   PROJET 4 : Analyseur de texte
   Objectifs : chaînes, boucles, conditions, fonctions
   Tâches :
   1) $phrase = "Votre phrase ici".
   2) compterVoyelles(string $t): int — compterMots(string $t): int
   3) contientMot(string $t, string $mot): bool  (recherche insensible à la casse)
   4) BONUS : toUpper/toLower(string $t), inverserMots(string $t): string
*/
$phrase = "PHP est un excellent langage pour le web !";
// TODO: vos fonctions + affichage ici

/* =====================================================
   PROJET 5 : Menu interactif (sans formulaires)
   Objectifs : boucles, switch, fonctions, structuration
   Tâches :
   1) Créez un menu() qui affiche les options : 1-Contacts, 2-Notes, 3-Facture, 4-Analyse texte, 5-Quitter.
   2) Dans une boucle while, simulez des choix ($choix) et appelez la fonction adéquate.
   3) BONUS : sous-menus (ex. ajouter/supprimer contact), validation des entrées simulées.
*/
$choix = 1; // changez pour simuler
// TODO: implémentez menu() + boucle while + appels aux projets ci-dessus

// Bon code !
?>
