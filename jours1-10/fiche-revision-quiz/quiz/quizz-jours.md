# 🎯 Quizz PHP – Révisions Jours 1 à 9

---

## 🔹 Jour 1 – Introduction à PHP
1. Comment commence et se termine un bloc PHP dans un fichier ?  
   a) `<php> ... </php>`  
   b) `<?php ... ?>`  
   c) `<script> ... </script>`  

2. Quelle est l’extension habituelle des fichiers PHP ?  

3. Quelle instruction sert à afficher du texte en PHP ?  

---

## 🔹 Jour 2 – Variables, Types et Concaténation
1. Quelle est la différence entre `==` et `===` en PHP ?  

2. Compléter : une variable PHP commence toujours par le caractère `__`.  

3. Comment concaténer deux chaînes `$a` et `$b` en PHP ?  

---

## 🔹 Jour 3 – Conditions et Boucles
1. Quelle structure choisir pour tester plusieurs cas exclusifs (par exemple : menu avec 4 choix) ?  

2. Quelle est la sortie de ce code ?  
```php
for ($i=1; $i<=3; $i++) {
   echo $i;
}
```

3. Vrai ou faux : l’instruction `break;` permet de passer directement à l’itération suivante.  

---

## 🔹 Jour 4 – Boucles et Tableaux
1. Quelle fonction PHP permet de connaître le nombre d’éléments dans un tableau ?  

2. Quel est le type de ce tableau ?  
```php
$profil = ["nom"=>"Alice", "age"=>25];
```

3. Écrire une boucle qui affiche tous les éléments du tableau `$fruits = ["pomme","poire","banane"];`.  

---

## 🔹 Jour 5 – Fonctions
1. Quelle est la bonne syntaxe pour définir une fonction `bonjour()` sans paramètre ?  

2. Quelle est la sortie de ce code ?  
```php
function carre($n) {
   return $n * $n;
}
echo carre(4);
```

3. Peut-on définir une valeur par défaut pour un paramètre de fonction en PHP (O/N) ?  

---

## 🔹 Jour 6 – Tableaux & Fonctions
1. Quelle fonction PHP permet de fusionner deux tableaux ?  

2. Que fait la fonction `array_filter()` ?  

3. Quelle sera la sortie ?  
```php
$nums = [1,2,3];
$res = array_map(fn($x)=>$x*2, $nums);
print_r($res);
```

---

## 🔹 Jour 7 – Opérateurs, Variables & Tableaux
1. Quel opérateur retourne `"Pair"` si `$n%2==0`, sinon `"Impair"` ?  

2. Quelle est la différence entre `array_merge` et l’union de tableaux avec `+` ?  

3. Quelle est la sortie ?  
```php
$x = null;
echo $x ?? "defaut";
```

---

## 🔹 Jour 8 – TP de Synthèse
1. Donner un exemple d’utilisation de tableau + boucle + fonction dans un mini-script.  

2. Citer deux exemples d’exercices typiques de synthèse vus au jour 8.  

---

## 🔹 Jour 9 – Mini-projets
1. Dans le projet **Carnet d’adresses**, quelle structure de données est la plus adaptée pour stocker chaque contact ?  

2. Dans le projet **Gestion de notes**, quelle fonction PHP permet de trier un tableau associatif par valeurs décroissantes ?  

3. Donner un exemple de menu simple en PHP avec un `switch`.  
