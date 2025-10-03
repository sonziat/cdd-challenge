<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles et tableaux</title>
</head>
<body>
    <h1>Les Boucles et Tableaux</h1>
    <p>1. Afficher les nombres de 1 à 10  </p>
    <?php
        for($i=1;$i<=10;$i++){
            echo "$i - " ; // ESSAIE avec une autre boucle
        }
    ?>
    <p>2. Créer la table de multiplication de 5   </p>
    <?php
        $nombre=5;
        //const NOMBRE=6;//ou en définissant une constante
        echo "<strong>Table de multiplication de : $nombre </strong> <br> ";  
        for($i=0;$i<=10;$i++){
            echo "$i * $nombre = " .$i*$nombre ."<br>";
            //echo "$i * ".NOMBRE." = " .$i*NOMBRE ."<br>";
        }  
    ?>
    <p>3. Afficher les éléments d’un tableau </p>
    <?php
        $tab3=[1, "Jean", "Ville", 29, "France"];
        foreach($tab3 as $val){
            echo "$val - ";
        }
    ?>
    <p>4. Compter de 10 à 0</p>
    <?php
        for($i=10;$i>=0;$i--){
            echo "$i - ";
        }
    ?>
    
    <p>5. Créer une liste de courses (tableau) </p>
    <?php

    ?>
    
    <p>6. Afficher la somme d’un tableau</p>
    <?php

    ?>
    <p>7. Lister les jours de la semaine </p>
    <?php

    ?>
    <p>8. Afficher les valeurs paires entre 1 et 20</p>
    <?php
    // On remplit un tableau de valueurs entre 1 et 20
        $tab8a=[];
        for ($i=1;$i<=20;$i++){
            $tab8a[]=$i;
        }
    //j'affiche les nombre paires
        foreach($tab8a as $val){
            if($val%2==0){
                echo "$val - ";
            }
        }
        echo "<br>";
        echo "<p>Bonus :avec une valeur aléatoir du tableau</p>";

        // prend une valeur aleatoire dans c etableau et dit si elle est paire
        $valAleatoire=array_rand($tab8a); 
        echo " La valeur aléatoire est : $valAleatoire <br>";
            if ($valAleatoire %2==0) {
                echo "La valeur $valAleatoire est paire <br>";
            }else{
                echo "La valeur $valAleatoire est impair <br>";
            }

    ?>
    <p>9. Lister les notes >10 dans un tableau  </p>
    <?php
        $tab9=[2,10,12,5,15,"12",20];// Si le chiffre en string , le compte qd meme 
        foreach($tab9 as $val){
            if($val>10){
                echo "$val - ";
           }
        }

    ?>
    <p>10. Parcourir un tableau associatif</p>
    <?php

    ?>
    
</body>
</html>