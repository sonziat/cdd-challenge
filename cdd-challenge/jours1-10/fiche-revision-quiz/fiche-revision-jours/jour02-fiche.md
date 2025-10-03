# 📘 Fiche de révision – Jour 2 : Variables, Types et Concaténation

## ✅ Notions clés
- Types de base : string, int, float, bool.
- Interpolation possible dans les chaînes `"Bonjour $nom"`.
- Concaténation avec `.`.

## ✨ Exemples
```php
<?php
$nom = "Dupont";
$age = 20;
$taille = 1.75;
$etudiant = true;

echo "Nom : $nom<br>";
echo "Âge : " . $age . "<br>";
echo "Taille : " . $taille . "m<br>";
echo "Étudiant ? " . ($etudiant ? "Oui" : "Non");
?>
```

## ⚡ Fonctions utiles
- `strtoupper($str)` → majuscules
- `strlen($str)` → longueur
- `date("d/m/Y")` → date du jour
