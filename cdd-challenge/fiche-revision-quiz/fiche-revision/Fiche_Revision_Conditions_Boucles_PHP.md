# Fiche de Révision : Conditions et Boucles en PHP

## Les Conditions

### `if`, `else`, `elseif`

```php
if ($age >= 18) {
    echo "Majeur";
} elseif ($age >= 13) {
    echo "Adolescent";
} else {
    echo "Enfant";
}
```

### `switch`

```php
$note = 'A';
switch ($note) {
    case 'A': echo "Excellent"; break;
    case 'B': echo "Bien"; break;
    case 'C': echo "Moyen"; break;
    default: echo "Note inconnue";
}
```

---

## Les Boucles

### `for`

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```

### `while`

```php
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
```

### `do...while`

```php
$i = 5;
do {
    echo $i;
    $i--;
} while ($i > 0);
```

### `foreach`

```php
$fruits = ['pomme', 'banane', 'kiwi'];
foreach ($fruits as $fruit) {
    echo $fruit;
}
```

---

## Fonctions utiles

- `isset()`, `empty()`, `is_numeric()`
- `strlen()`, `str_word_count()`
- `in_array()`, `array_sum()`, `count()`

---

## Astuces

- N'oublie pas les accolades `{}` même pour une seule instruction.
- Utilise `break` pour stopper une boucle ou un `switch`.
- Teste toujours les bornes (`0`, valeurs négatives...).
