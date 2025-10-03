<?php
// Bonjour le monde
echo "Bonjour le monde<br>";

// Définir des variables
$prenom = "Jean";
$nom = "Dupont";
$age = 25;
$ville = "Paris";

// Afficher prénom, âge, ville
echo "Mon prénom est : $prenom<br>";
echo "J'ai $age ans<br>";
echo "J'habite à $ville<br>";

// Concaténer nom + prénom + ville
echo "Identité complète : " . $nom . " " . $prenom . " de " . $ville . "<br>";

// Afficher la date du jour
echo "Nous sommes le " . date("d/m/Y") . "<br><br>";

// Utiliser echo pour afficher 3 lignes HTML
echo "<h2>Exemple de HTML avec PHP</h2>";
echo "<p>Ligne 1 : Ceci est un paragraphe.</p>";
echo "<p>Ligne 2 : Ceci est un deuxième paragraphe.</p>";
echo "<p>Ligne 3 : Et voici un troisième paragraphe.</p>";

// Afficher un message coloré avec HTML + PHP
?>
<div style="color: blue; font-weight: bold;">
    <?php echo "Ceci est un message coloré en bleu généré par PHP et HTML !"; ?>
</div>
