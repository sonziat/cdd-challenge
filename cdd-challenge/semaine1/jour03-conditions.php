
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Conditions - Exercices</title>
</head>
<body>
    <h1>Les conditions - Exercices</h1>
    <p>1. Vérifier si un utilisateur est majeur</p>
    <?php
        $ageUser = 24;
        if ($ageUser >= 18) {
            echo "Tu as $ageUser : tu es <b>Majeur</b> <br>";
        } else {
            echo "Tu as $ageUser : tu es <b>Mineur</b> <br>";
        }
    ?>
    <p><mark>Bonus</mark> : en utilisant l'operateur ternaire</p>
    <?php
        echo($ageUser >= 18) ? "Tu as $ageUser : tu es <b>Majeur</b>" : "Tu as $ageUser : tu es <b>Mineur</b> <br>";
    ?>
  
    <p>2. Afficher un message selon l'heure</p>
    <?php
        echo "";
    ?>
    <p>3. Afficher une note (A, B, C...) </p>
    <?php
        $note=13;
        if ($note<=10) {
            echo "Mention A <br>";
        }else if ($note >10 and $note<=15) {
            echo "Mention B <br>";
        }else{
            echo "Mention C <br>";
        }
    ?>
    <p><mark>Bonus</mark> : en utilisant `switch`</p>

</body>
</html>