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

        $dateErr = new DateTime("2019-17-14");
        $errors = DateTime::getLastErrors();


        if($errors["warning_count"] > 0 || $errors["error_count"] > 0) {
            echo($dateErr->format("d/m/Y") . " est incorrect.");
        }
        
        //echo($dateToday->format("Y") . " est " . (is_leap($dateToday) ? "bissextile" : "non bissextile"));
    ?>
</body>
</html>