# 📝 Fiche de Révision : Tableaux en PHP

## Déclaration d’un tableau

### Tableau indexé

```php
$fruits = ["pomme", "banane", "cerise"];
```

### Tableau associatif

```php
$age = ["Alice" => 25, "Bob" => 30];
```

### Tableau multidimensionnel

```php
$notes = [
  ["math" => 12, "anglais" => 15],
  ["math" => 14, "anglais" => 17]
];
```

---

## Parcourir un tableau

### Avec `foreach`

```php
foreach ($fruits as $fruit) {
    echo $fruit;
}
```

### Avec `for`

```php
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
}
```

---

## Fonctions utiles

- `count($tab)` : taille du tableau
- `in_array("valeur", $tab)` : vérifier la présence d'une valeur
- `array_push($tab, "élément")` : ajouter un élément
- `array_merge($a, $b)` : fusionner deux tableaux
- `array_unique($tab)` : retirer les doublons
- `array_keys($tab)` / `array_values($tab)`

---

## Astuces

- Toujours tester l’existence d’un index avec `isset()`
- Utiliser `print_r()` ou `var_dump()` pour inspecter les tableaux
- Pour trier : `sort()`, `rsort()`, `asort()`, `ksort()`

---

## Attention

- Les tableaux commencent à l’index `0`
- Un tableau associatif peut mélanger types de clés
- `foreach` est plus lisible que `for` pour les tableaux associatifs
