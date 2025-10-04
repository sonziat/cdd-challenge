# 📘 Fiche de révision – Jour 5 : Fonctions

## ✅ Notions clés
- Définition avec `function nom($arg) { ... }`.
- Paramètres par défaut possibles.
- Une fonction peut retourner une valeur (`return`).

## ✨ Exemples
```php
<?php
function direBonjour($nom = "Invité") {
    echo "Bonjour $nom<br>";
}

function addition($a, $b) {
    return $a + $b;
}

direBonjour("Alice");
echo addition(2,3);
?>
```

## ⚡ À retenir
- Bonnes pratiques : noms clairs, éviter variables globales.
