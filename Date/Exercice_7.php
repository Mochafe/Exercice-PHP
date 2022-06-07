<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconde</title>
</head>
<body>
    <?php  
        $date = new DateTime();

        echo($date->setTimestamp(1000200000)->format("d/m/Y H:m:s"));
    ?>
</body>
</html>