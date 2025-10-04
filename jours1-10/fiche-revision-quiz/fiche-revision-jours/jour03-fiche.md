# 📘 Fiche de révision – Jour 3 : Conditions et Boucles

## ✅ Notions clés
- Conditions : `if`, `else`, `elseif`, `switch`.
- Boucles : `for`, `while`, `foreach`.
- Opérateurs logiques : `&&`, `||`, `!`.

## ✨ Exemples
```php
<?php
$age = 18;
if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

$fruits = ["pomme", "poire"];
foreach ($fruits as $f) {
    echo $f . "<br>";
}
?>
```

## ⚡ À retenir
- Utiliser `break;` pour sortir d’une boucle.
- `continue;` saute à l’itération suivante.
