<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x500</title>
</head>
<body>

    <a href="Exercice_1.php">Exercice 1</a>
    <a href="Exercice_3.php">Exercice 3</a>

    <?php
        for($i = 0; $i < 500; $i++) {
            echo("<p>" . $i + 1 . ".Je dois faire des sauvegardes régulières de mes fichiers</p>");
        } 
    ?>
</body>
</html>