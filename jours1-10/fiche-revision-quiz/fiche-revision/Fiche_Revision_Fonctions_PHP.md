# 📝 Fiche de Révision : Fonctions en PHP

## Définir une fonction

```php
function direBonjour() {
    echo "Bonjour !";
}
```

## Fonction avec paramètre

```php
function saluer($nom) {
    echo "Bonjour, $nom !";
}
```

## Fonction avec valeur de retour

```php
function carre($x) {
    return $x * $x;
}
```

## Types de paramètres

```php
function addition($a = 0, $b = 0) {
    return $a + $b;
}
```

## Passage par référence

```php
function doubler(&$nombre) {
    $nombre *= 2;
}
```

## Fonction anonyme

```php
$carre = function($x) {
    return $x * $x;
};
```

## Fonctions natives utiles

- `strlen()`, `strtoupper()`, `substr()`
- `array_map()`, `array_filter()`, `in_array()`
- `is_numeric()`, `isset()`, `empty()`

---

## Bonnes pratiques

- Donner des noms clairs aux fonctions
- Ne pas mélanger affichage (`echo`) et retour (`return`)
- Éviter les effets de bord involontaires
- Utiliser des fonctions pour éviter la duplication de code

---

## À éviter

- Répéter du code dans plusieurs fonctions
- Oublier `return` si un résultat est attendu
- Utiliser des variables globales sans contrôle
