# 📘 Fiche de révision – Jour 4 : Boucles et Tableaux

## ✅ Notions clés
- Tableaux indexés : `[ "pomme", "banane" ]`.
- Tableaux associatifs : `[ "nom"=>"Alice", "age"=>25 ]`.
- Parcours avec `foreach`.

## ✨ Exemples
```php
<?php
$jours = ["Lundi","Mardi","Mercredi"];
foreach ($jours as $j) {
    echo $j . "<br>";
}

$notes = [12, 15, 9];
$somme = 0;
foreach ($notes as $n) { $somme += $n; }
echo "Moyenne = " . ($somme / count($notes));
?>
```

## ⚡ Fonctions utiles
- `count($tab)` → taille
- `array_sum($tab)` → somme
