# ❓ Quiz PHP : Les Fonctions

## Niveau 1

1. Que fait `return` dans une fonction ?

   - A) Affiche une valeur
   - B) Termine le script
   - C) Renvoie une valeur à l'appelant
   - D) Appelle une autre fonction

2. Que fait ce code ?

```php
function salut($nom) {
  echo "Salut " . $nom;
}
salut("Jean");
```

- A) Affiche "Salut"
- B) Affiche "Jean"
- C) Affiche "Salut Jean"
- D) Erreur

3. Quel mot-clé permet d’envoyer un résultat depuis une fonction ?
   - A) break
   - B) continue
   - C) exit
   - D) return

## Niveau 2

4. Que retourne cette fonction ?

```php
function test($x = 2, $y = 3) {
  return $x * $y;
}
echo test();
```

- A) 5
- B) 6
- C) 2
- D) 3

5. Que fait `array_map()` ?

   - A) Filtre un tableau
   - B) Applique une fonction à chaque élément
   - C) Trie un tableau
   - D) Recherche une valeur

6. Que fait `&` dans un paramètre de fonction ?
   - A) Copie la valeur
   - B) Retourne un tableau
   - C) Passe par référence
   - D) Supprime la variable

## Niveau 3

7. Quelle est la différence entre `echo` et `return` dans une fonction ?

   - A) Aucune
   - B) `echo` arrête la fonction
   - C) `return` permet de stocker une valeur, `echo` l'affiche
   - D) `return` affiche uniquement du texte

8. Que fait ce code ?

```php
function somme($a, $b) {
  return $a + $b;
}
echo somme(somme(1,2), somme(3,4));
```

- A) 10
- B) 7
- C) 6
- D) 12

9. Peut-on créer une fonction dans une autre fonction ?
   - A) Oui
   - B) Non
   - C) Seulement dans des classes
   - D) Uniquement avec des lambdas

---

**Réponses :**

