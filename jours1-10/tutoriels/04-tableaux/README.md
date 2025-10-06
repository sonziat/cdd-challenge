# Tutoriel – Tableaux et `foreach`

## Objectif
Afficher une liste avec un tableau PHP.

## Code

```php
<?php
$taches = ["Lire", "Coder", "Dormir"];

foreach ($taches as $tache) {
    echo "- $tache<br>";
}
?>
```

## Explication
- Utilisation d’un tableau
- Affichage d’une liste avec une boucle