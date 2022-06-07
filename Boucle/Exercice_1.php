<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0>150</title>
</head>
<body>

    <a href="Exercice_2.php">Exercice 2</a>
    <a href="Exercice_3.php">Exercice 3</a>
    
    <p>
        <?php
            for($i = 1; $i <= 150; $i++) {
                if($i % 2 == 1) {
                    echo "$i, ";
                }
            }    
        ?>
    </p>
</body>
</html>