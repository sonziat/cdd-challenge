# ✅ Corrigé — Quizz PHP (Jours 1 à 9)

---

## 🔹 Jour 1 – Introduction à PHP
1. **b) `<?php ... ?>`**
2. **`.php`**
3. **`echo`** (ou `print`)

---

## 🔹 Jour 2 – Variables, Types et Concaténation
1. **`==`** compare les valeurs (conversion de types possible) alors que **`===`** compare valeur **et type** (strict).
2. **`$`**
3. **`$a . $b`**

---

## 🔹 Jour 3 – Conditions et Boucles
1. **`switch`**
2. **`123`**
3. **Faux** — `break;` sort de la boucle ; c’est **`continue;`** qui passe à l’itération suivante.

---

## 🔹 Jour 4 – Boucles et Tableaux
1. **`count($tableau)`**
2. **Tableau associatif**
3. Exemple :
   ```php
   foreach ($fruits as $f) {
       echo $f . "<br>";
   }
   ```

---

## 🔹 Jour 5 – Fonctions
1. **`function bonjour() { /* ... */ }`**
2. **`16`**
3. **Oui** (paramètre par défaut)

---

## 🔹 Jour 6 – Tableaux & Fonctions
1. **`array_merge($a, $b)`**
2. **`array_filter()`** retourne un **sous-tableau** des éléments pour lesquels la **callback renvoie true**.
3. **`[2, 4, 6]`** (imprimé par `print_r` : `Array ( [0] => 2 [1] => 4 [2] => 6 )`)

---

## 🔹 Jour 7 – Opérateurs, Variables & Tableaux
1. **`($n % 2 == 0) ? "Pair" : "Impair"`**
2. **`array_merge`** fusionne les valeurs et peut **réindexer** les clés numériques ; les clés identiques de droite **écrasent** celles de gauche.  
   **`+` (union)** garde **les clés et valeurs de gauche** en priorité (n’écrase pas), n’ajoute que les clés **absentes**.
3. **`defaut`**

---

## 🔹 Jour 8 – TP de Synthèse
1. Exemple :
   ```php
   function somme($t){ $s=0; foreach($t as $v){ $s+=$v; } return $s; }
   $notes = [12,15,9];
   echo "Somme = " . somme($notes);
   ```
2. Exemples valides : **Profil utilisateur**, **Notes & moyenne**, **Facture**, **FizzBuzz**, **Liste de courses** (deux au choix).

---

## 🔹 Jour 9 – Mini-projets
1. Un **tableau associatif** par contact (ex: `['nom'=>'...','prenom'=>'...','email'=>'...']`) ; et une **liste** de ces tableaux pour le carnet.
2. **`arsort()`** (tri décroissant par **valeur** en conservant les clés).
3. Exemple :
   ```php
   switch ($choix) {
       case 1: echo "Profil"; break;
       case 2: echo "Notes"; break;
       case 3: echo "Facture"; break;
       default: echo "Quitter";
   }
   ```
