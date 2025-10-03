# ❓ Quiz PHP : Tableaux

## Niveau 1

1. Comment accéder au deuxième élément d’un tableau ?

   - A) $tab[2]
   - B) $tab[1]
   - C) $tab[0]
   - D) $tab{2}

2. Quelle fonction donne la taille d’un tableau ?

   - A) size()
   - B) count()
   - C) length()
   - D) sizeof()

3. Que fait `array_push($tab, "valeur")` ?
   - A) Supprime la valeur
   - B) Trie le tableau
   - C) Ajoute un élément à la fin
   - D) Crée un tableau

## Niveau 2

4. Comment fusionner deux tableaux ?

   - A) $a + $b
   - B) array_merge($a, $b)
   - C) join($a, $b)
   - D) implode($a, $b)

5. Que fait ce code ?

```php
$tab = ["a", "b", "a", "c"];
print_r(array_unique($tab));
```

- A) Supprime les lettres
- B) Trie le tableau
- C) Supprime les doublons
- D) Affiche le tableau à l’envers

6. Comment tester si une valeur existe dans un tableau ?
   - A) has()
   - B) in_array()
   - C) contains()
   - D) isset()

## Niveau 3

7. Quelle boucle est préférable pour un tableau associatif ?

   - A) for
   - B) while
   - C) foreach
   - D) do...while

8. Que fait `array_keys($tab)` ?

   - A) Renvoie les clés du tableau
   - B) Renvoie les valeurs
   - C) Trie le tableau
   - D) Supprime les clés

9. Que retourne ce code ?

```php
$tab = [2 => 'a', 0 => 'b', 1 => 'c'];
ksort($tab);
print_r($tab);
```

- A) Trie par valeur
- B) Trie par clé
- C) Efface les doublons
- D) Trie en ordre alphabétique

---

**Réponses :**
