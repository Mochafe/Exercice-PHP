<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table, th, td {
            border: 1px black solid;
        }
    </style>

    <title>Table de multiplication</title>
</head>
<body>
    
    <a href="Exercice_1.php">Exercice 1</a>
    <a href="Exercice_2.php">Exercice 2</a>

    <?php
        $x = 12;
        $y = 12;
    ?>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                    for($i = 0; $i <= $x; $i++) {
                        echo("<th>$i</th>");
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                for($row = 0; $row < $x; $row++) {

                    echo("
                        <tr>
                            <th>$row</th>
                    ");

                   for($col = 0; $col <= $y; $col++) {
                        echo("
                            <td>" . $col*$row . "</td>
                        ");
                   } 
                   echo("</tr>");
                } 
            ?>
        </tbody>
    </table>
</body>
</html>