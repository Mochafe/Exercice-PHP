<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de jours</title>
</head>
<body>
    <?php   
        date_default_timezone_set("Europe/Paris");
        
        $dateToday = new DateTime();
        $dateEnd = DateTime::createFromFormat("d/m/Y", "22/07/2022");

        $dateDiff = date_diff($dateToday, $dateEnd);
        
        echo("Il reste " . date_diff($dateToday, $dateEnd)->days . " jours.");
    ?>
</body>
</html>