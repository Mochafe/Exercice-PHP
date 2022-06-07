<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de lien</title>
</head>
<body>
    <?php
        function lien($lien, $titre) {
            echo("<a href=" . $lien . ">" . $titre . "</a>");
        }

        lien("https://google.fr", "Bing");
    ?>
</body>
</html>