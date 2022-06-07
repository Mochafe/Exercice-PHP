<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme d'un tableau</title>
</head>
<body>
    <?php
        function somme($arr) {
            echo("<p>" . array_sum($arr) . "</p>");
        }

        $tab = array(4, 3, 8, 2);
        $resultat = somme($tab);
    ?>
</body>
</html>