# ❓ Quiz PHP : Conditions et Boucles

## Niveau Débutant

1. Quelle structure utilise-t-on pour tester plusieurs cas distincts ?

   - A) if/else
   - B) while
   - C) switch
   - D) for

2. Quel mot-clé utilise-t-on pour arrêter une boucle ?

   - A) stop
   - B) halt
   - C) break
   - D) exit

3. Que retourne `5 % 2` ?
   - A) 2
   - B) 0
   - C) 1
   - D) 5

## Niveau Intermédiaire

4. Quelle boucle s’exécute au moins une fois, même si la condition est fausse ?

   - A) while
   - B) do...while
   - C) for
   - D) foreach

5. Que fait ce code ?

```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) break;
    echo $i;
}
```

- A) Affiche 1 2 3 4 5
- B) Affiche 1 2
- C) Affiche 3
- D) Ne fait rien

6. Que retourne `count([1, 2, 3, 4])` ?
   - A) 4
   - B) 3
   - C) 5
   - D) Erreur

## 🧠 Niveau Avancé

7. Quel algorithme utilise-t-on pour vérifier un nombre premier ?

   - A) on le divise par 2
   - B) on additionne ses chiffres
   - C) on vérifie ses diviseurs jusqu'à √n
   - D) on le compare à une liste fixe

8. Comment éviter un double affichage dans une boucle `foreach` ?

   - A) Utiliser `break`
   - B) Comparer avec `isset`
   - C) Stocker les valeurs déjà vues
   - D) Utiliser `continue`

9. Quelle fonction permet de vérifier si une valeur existe dans un tableau ?
   - A) in_array()
   - B) array_key_exists()
   - C) isset()
   - D) includes()

---

**Réponses :**

1. C, 2. C, 3. C, 4. B, 5. B, 6. A, 7. C, 8. C, 9. A
