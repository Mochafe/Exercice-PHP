<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date test</title>
</head>
<body>
    <?php  
        date_default_timezone_set("Europe/Paris");

        $dateErr = DateTime::createFromFormat("d/m/Y", "32/17/2019");
        $errors = DateTime::getLastErrors();

        var_dump($dateErr);

        if($errors["warning_count"] > 0 || $errors["error_count"] > 0) {
            echo("La date est incorrect.");
        }
    ?>
</body>
</html>