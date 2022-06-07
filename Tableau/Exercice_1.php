<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>

    <title>Mois de l'année</title>
</head>
<body>

    <a href=Exercice_2_1.php>Exercice 2.1</a>
    <a href="Exercice_2_2.php">Exercice 2.2</a>
    <a href="Exercice_2_3.php">Exercice 2.3</a>
    <a href="Exercice_2_4.php">Exercice 2.4</a>
    <a href="Exercice_3_1.php">Exercice 3.1</a>
    <a href="Exercice_3_2.php">Exercice 3.2</a>
    
    <table>
        <legend>Jours par mois</legend>
        <thead>
            <tr>
                <th>Mois</th>
                <th>Nombre de jours</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mois_jours = array(
                    "Janvier" => 31,
                    "Février" => 28,
                    "Mars" => 31,
                    "Avril" => 30,
                    "Mai" => 31,
                    "Juin" => 30,
                    "Juillet" => 31,
                    "Août" => 30,
                    "Septembre" => 31,
                    "Octobre" => 30,
                    "Novembre" => 31,
                    "Decembre" => 30
                );

                asort($mois_jours);

                foreach($mois_jours as $mois => $jours) {
                    echo"
                        <tr>
                            <td>$mois</td>
                            <td>$jours</td>
                        </tr>
                        ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>