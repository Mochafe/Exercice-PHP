<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check mot de passe</title>
</head>
<body>
    <?php
        function complex_password($pw) {
            $check = true;

            if(strlen($pw) < 8) {
                $check = false;
            }

            $count = 0;

            if(!preg_match("/\d/",$pw)) {
                $check = false;
            }

            if(!preg_match("/(?=.*[A-Z])(?=.*[a-z])/",$pw)) {
                $check = false;
            }

            return $check;
        }

        $resultat = complex_password("TopSecret48");

        echo ($resultat) ? "Vrai" : "Faux";
    ?>
</body>
</html>