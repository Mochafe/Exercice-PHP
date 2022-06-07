<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Ville</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fp = file("customers.csv");
                $customers = array();

                foreach($fp as $row) {
                    array_push($customers, explode(",", trim($row)));
                }

                foreach($customers as $customer) {
                    echo("<tr>");
                    foreach($customer as $info) {
                        echo("<td>$info</td>");
                    }
                    echo("</tr>");
                }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>