# 📘 Fiche de révision – Jour 6 : Tableaux & Fonctions

## ✅ Notions clés
- Fonctions pour traiter les tableaux :
  - `array_map` → applique une fonction
  - `array_filter` → filtre des valeurs
  - `array_merge` → fusion
  - `array_unique` → supprime doublons

## ✨ Exemples
```php
<?php
$nums = [1,2,3,4];

$squares = array_map(fn($x)=>$x*$x, $nums);
print_r($squares);

$positifs = array_filter([-2,0,5], fn($x)=>$x>0);
print_r($positifs);
?>
```
