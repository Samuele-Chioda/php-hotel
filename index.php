<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-hotel</title>
</head>

<body>

    <?php
    // recupero il contenuto del file arrayHotels
    require_once __DIR__ . '/arrayHotels.php';
    // stampo in pagina per ogni informazione
    foreach ($hotels as $hotel) {
        // echo $hotel['name'] . '<br>';
        // echo $hotel['description'] . '<br>';
        // echo ($hotel['parking'] ? 'Parking available' : 'No parking') . '<br>';
        // echo 'Vote: ' . $hotel['vote'] . '<br>';
        // echo 'Distance to center: ' . $hotel['distance_to_center'] . ' km <br>';
        // echo '<br>';
    }

    ?>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <?php foreach ($hotels as $hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $hotel['name'] . '<br>'; ?></th>
                    <td><?php echo $hotel['description'] . '<br>'; ?></td>
                    <td><?php echo ($hotel['parking'] ? 'Parking available' : 'No parking') . '<br>'; ?></td>
                    <td><?php echo 'Vote: ' . $hotel['vote'] . '<br>'; ?></td>
                    <td><?php echo 'Distance to center: ' . $hotel['distance_to_center'] . ' km <br>'; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>