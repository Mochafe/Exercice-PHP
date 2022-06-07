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

    <title>Capitales</title>
</head>
<body>

    <a href="Exercice_1.php">Exercice 1</a>
    <a href="Exercice_2_2.php">Exercice 2.2</a>
    <a href="Exercice_2_3.php">Exercice 2.3</a>
    <a href="Exercice_2_4.php">Exercice 2.4</a>
    <a href="Exercice_3_1.php">Exercice 3.1</a>
    <a href="Exercice_3_2.php">Exercice 3.2</a>

    <table>
        <legend>1.Capitales</legend>
        <thead>
            <tr>
                <th>Capitales</th>
                <th>Pays</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $capitales = array(
                        "Bucarest" => "Roumanie",
                        "Bruxelles" => "Belgique",
                        "Oslo" => "Norvège",
                        "Ottawa" => "Canada",
                        "Paris" => "France",
                        "Port-au-Prince" => "Haïti",
                        "Port-d'Espagne" => "Trinité-et-Tobago",
                        "Prague" => "République tchèque",
                        "Rabat" => "Maroc",
                        "Riga" => "Lettonie",
                        "Rome" => "Italie",
                        "San José" => "Costa Rica",
                        "Santiago" => "Chili",
                        "Sofia" => "Bulgarie",
                        "Alger" => "Algérie",
                        "Amsterdam" => "Pays-Bas",
                        "Andorre-la-Vieille" => "Andorre",
                        "Asuncion" => "Paraguay",
                        "Athènes" => "Grèce",
                        "Bagdad" => "Irak",
                        "Bamako" => "Mali",
                        "Berlin" => "Allemagne",
                        "Bogota" => "Colombie",
                        "Brasilia" => "Brésil",
                        "Bratislava" => "Slovaquie",
                        "Varsovie" => "Pologne",
                        "Budapest" => "Hongrie",
                        "Le Caire" => "Egypte",
                        "Canberra" => "Australie",
                        "Caracas" => "Venezuela",
                        "Jakarta" => "Indonésie",
                        "Kiev" => "Ukraine",
                        "Kigali" => "Rwanda",
                        "Kingston" => "Jamaïque",
                        "Lima" => "Pérou",
                        "Londres" => "Royaume-Uni",
                        "Madrid" => "Espagne",
                        "Malé" => "Maldives",
                        "Mexico" => "Mexique",
                        "Minsk" => "Biélorussie",
                        "Moscou" => "Russie",
                        "Nairobi" => "Kenya",
                        "New Delhi" => "Inde",
                        "Stockholm" => "Suède",
                        "Téhéran" => "Iran",
                        "Tokyo" => "Japon",
                        "Tunis" => "Tunisie",
                        "Copenhague" => "Danemark",
                        "Dakar" => "Sénégal",
                        "Damas" => "Syrie",
                        "Dublin" => "Irlande",
                        "Erevan" => "Arménie",
                        "La Havane" => "Cuba",
                        "Helsinki" => "Finlande",
                        "Islamabad" => "Pakistan",
                        "Vienne" => "Autriche",
                        "Vilnius" => "Lituanie",
                        "Zagreb" => "Croatie"
                    );

                    ksort($capitales);

                    foreach($capitales as $cap => $pays) {
                        echo("
                            <tr>
                                <td>$cap</td>
                                <td>$pays</td>
                            </tr>
                            ");
                    }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>