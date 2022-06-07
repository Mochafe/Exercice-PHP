<?php
    function is_leap(DateTime $dateTime) : bool {
        if(intval($dateTime->format(("Y"))) % 4 == 0) {
            return true;
        } else {
            return false;
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année bissextile</title>
</head>
<body>
    <?php
        date_default_timezone_set("Europe/Paris");
           
        $dateToday = new DateTime();
        
        echo($dateToday->format("Y") . " est " . (is_leap($dateToday) ? "bissextile" : "non bissextile"));
    ?>
</body>
</html>