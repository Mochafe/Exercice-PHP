<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heure Format</title>
</head>
<body>
    <?php  
       date_default_timezone_set("Europe/Paris");

        $date = new DateTime();
        $dateInterval = DateInterval::createFromDateString("1 months");

        $date->add($dateInterval);

        echo($date->format("d/m/Y"));
    ?>
</body>
</html>