<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP de Synthèse</title>
</head>
<style>
    p{
        color: blue;
    }
</style>
<body>
    <h1>Révisions : variables, conditions, boucles</h1>
    <p>1. Créer une mini-calculatrice (addition)</p>
    <?php
        $nombre1  = 4;
        $nombre2  = 3;
        $addition = $nombre1 + $nombre2;
        echo "$nombre1 + $nombre2 = $addition <br>";
    ?>
    <p>2. Ajouter opérations multiples </p>
    <?php
        $soustraction = $nombre1 - $nombre2;
        echo "$nombre1 - $nombre2 = $soustraction <br>";
        $multiplication = $nombre1 * $nombre2;
        echo "$nombre1 * $nombre2 = $multiplication <br>";
        $division = $nombre1 / $nombre2;
        echo "$nombre1 / $nombre2 = $division <br>";
    ?>
    <h2>3. Page météo personnalisée</h2>
    <?php
        $temp = 18;
        if ($temp <= 20) {
            echo " il fait froid <br>";
        } elseif ($temp <= 25 && $temp > 20) {
            echo "il fait un temps tempéré <br> ";
        } else {
            echo "Il fait chaud <br>";
        }
    ?>
    <h2>5. Afficher un tableau de valeurs avec boucle</h2>
    <p>Avec une boucle `foreach`</p>
    <?php
        $fruits = ["mangue", "goyave", "papaye"];
        echo "la liste de fruits : ";
        foreach ($fruits as $fruit) {
            echo " $fruit - ";
        }
    ?>
    <p>Avec une boucle `for` </p>
    <?php
        echo "la liste de fruits : ";
        for ($i = 0; $i < count($fruits); $i++) {
            echo "$fruits[$i] - ";
        }
    ?>
    <p>Avec une boucle `While`</p>
    <?php
        echo "la liste est : ";
        $i = 0;
        while ($i <= count($fruits) - 1) {
            echo " $fruits[$i] - ";
            $i++;
        }
    ?>
    <p>Avec une boucle `Do While`</p>
    <?php
        echo "la liste est : ";
        $i = 0;
        do {
            echo " $fruits[$i] - ";
            $i++;
        } while ($i <= count($fruits) - 1);
    ?>
    <h2>8. Galerie de noms avec `foreach`</h2>
    <?php
        $galerie = [
            "Marie", "Audrey", "Vincent", "Gertrude", "Christophe",
        ];
        echo "les noms dans le tableau : ";
        foreach ($galerie as $nom) {
            echo "$nom - ";
        }
    ?>
    <h2>9. Jours restants avant un événement</h2>
    <?php
        echo "Jours restants avant un événement : <br>";
        $nbreJours     = 12;
        $ecoules       = 3;
        $joursRestants = $nbreJours - $ecoules;
        for ($i = $ecoules; $i <= $nbreJours; $i++) {
            echo $nbreJours - $i . "<br>";
        }
    ?>
    <h2>10. Générateur d’insultes humoristiques</h2>
    <p>Citations avec mots clés</p>
    <?php
        $citations = [
            1 => "bonheur",
            2 => "travail",
            3 => "persévérance",
            4 => "succès",
            5 => "echec",
        ];
        foreach ($citations as $key => $citation) {
            echo "$key : $citation <br>";
        }
        echo "prends une citation aleatoire : <br>";
        $citationAleaIndex = array_rand($citations);
        echo "$citationAleaIndex <br> "; // prends un index aleatoire dans le tableau
        echo "$citations[$citationAleaIndex]";
    ?>
    <p>Citations avec phrases</p>
    <?php
        $citations = [
            "La vie est belle.",
            "Rien n'est impossible.",
            "Le succès, c'est d'aller d'échec en échec sans perdre son enthousiasme.",
            "Faites de votre vie un rêve, et d'un rêve, une réalité.",
            "L'échec est le fondement de la réussite.",
        ];
        foreach ($citations as $citation) {
            echo "$citation <br>";
        }
        echo "Une citation aléatoire : ". $citations[array_rand($citations)]. "<br> ";
    ?>
    <p>J'affiche les citations dans une liste</p>
    <?php
        foreach ($citations as $citation) {
            echo " <ol>
                        <li>$citation</li>
                    </ol>";
        }
    ?>
    <p>J'affiche les citations dans un tableau</p>
    <?php
        echo "<table style=\"color:blue solid :1px\">";
        foreach ($citations as $citation) {
            echo "<table style=\"color:blue solid :1px\">";
            echo "<th>
                        <tr>
                            <td>$citation</td>
                        </tr>
                    </th>";
        }
        echo "</table>";
    ?>
    <h2>4. Formulaire avec `GET` pour calcul IMC</h2>
    <p>Calcul IMC sans formulaire</p>
    <?php
        $taille=1.65;
        $poids=70;
        $imc=$poids/$taille*$taille;
        echo "l'IMC est de  : $imc <br>";
    ?>
    <p>Avec formulaire</p>
    <form action="#" method="GET">
        <label for="taille">Quel est votre taille (m) : </label>
        <input type="number" name="taille_user" id="taille">
        <br>
        <label for="poids">Quel est votre poids (kg) :</label>
        <input type="float" name="poids_user" id="poids">
        <br>
        <button type="submit" name="submit">Calucer votre IMC</button>
    </form>
    <p>Récuperation des valeurs saisies et calcul IMC</p>
    <?php
        $poids=$_GET['poids_user']??'';
        $taille=$_GET['taille_user']??'';
        //$imc= $poids/($taille*$taille);
        //affiche les valeurs recupéres
        echo "Poids saisi : $poids <br>";
        echo "taille saisie: $taille <br>";
        //echo "$imc <br>";
        //calcul
        if(!empty($_GET['submit'])){
            //$poids=$_GET['poids_user'];
            //$taille=(float)$_GET['taille_user'];
            $imc= $poids/($taille*$taille);
            echo "Votre IMC est de  : $imc <br>";
        }else{
            echo "Veuillez saisir tous les champs du formulaire ";
        }
    ?>
    <hr>
    <p>Reste à faire </p>
    <hr>
    <pre>
        6. Simulateur de devis
        7. Système de login sans base de données
    </pre>


</body>
</html>