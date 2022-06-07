<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semaine</title>
</head>
<body>
    <?php    
        date_default_timezone_set("Europe/Paris");
        
        $date = DateTime::createFromFormat("d/m/Y", "14/07/2019");
        echo($date->format("d/m/Y") . " ce trouve dans la " . $date->format("W") . "eme semaine");
    ?>
</body>
</html>