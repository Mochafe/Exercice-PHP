<?php
    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
?>

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
    
    <title>Département</title>
</head>
<body>

    <a href="Exercice_1.php">Exercice 1</a>
    <a href="Exercice_2_1.php">Exercice 2.1</a>
    <a href="Exercice_2_2.php">Exercice 2.2</a>
    <a href="Exercice_2_3.php">Exercice 2.3</a>
    <a href="Exercice_2_4.php">Exercice 2.4</a>
    <a href="Exercice_3_1.php">Exercice 3.1</a>

    <table>
        <legend>Département</legend>
        <thead>
            <tr>
                <th>Région</th>
                <th>Nbr de Département</th>
            </tr>
        </thead>
        <tbody>
            <?php
                ksort($departements);

                foreach($departements as $region => $deptArray) {
                        echo("
                        <tr>
                            <td>$region</td>
                            <td>".sizeof($deptArray)."</td>
                        </tr>  
                    ");
                }
            ?>
        </tbody>
    </table>
</body>
</html>