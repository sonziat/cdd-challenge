<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les bases</title>
</head>
<body>
    <h1>Les bases en PHP</h1>
    <h2>Exercices</h2>
    <p>1. Installer XAMPP et VS Code. <br>
    2. Créer un fichier `index.php` </p>
    <p>3- Écrire `Bonjour le monde` </p>
    <?php
        echo "Bonjour le monde <br>";
    ?>
    <p>4. Afficher votre prénom </p>
    <?php
        $prenom="Marie-Audrey";
        echo "Mon prénom : $prenom <br>";
        //ou
        echo 'Bonjour mon prénom est '.$prenom. '.';
    ?>
     <p>5. Afficher votre âge </p>
     <?php
        $age=25;
        echo "J'ai $age ans <br>";
        // Ou
        echo 'Bonjour, j\'ai '.$age.' ans.'; 
     ?>
     <p>6. Afficher votre ville </p>
     <?php
        $ville= "Brest";
        print "J'habite à $ville <br>";// printpermet d'afficher aussi mais echo est préférable     
    ?>
    <p>8. Afficher la date du jour </p>
    <?php
        date_default_timezone_set('UTC');//Ondéfinit le fuseau horaire par défaut à utiliser 
        echo date('l d-Y h:i:s') ."<br>" ;
        echo "Aujourdh'ui le ".date(DATE_RFC822)." . <br>";//en utilisant une constante deja definie
        echo date("d-m-Y H:i:s");
    ?>
    <p>9. Utiliser `echo` pour afficher 3 lignes HTML</p>
    <?php
    echo "<p>En savoir plus sur les dates :
        <a href : https://www.php.net/manual/fr/function.date.php> Les dates en PHP</a></p>";
    echo "<p>J'affiche l'exercice 10</p>";
    echo '<p style="color:red;">10. Afficher un message coloré avec HTML + PHP </p>';
    ?>



    
</body>
</html>