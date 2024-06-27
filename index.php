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

    ?>
    <main>
        <div class="form">
            <form action="./index.php" method="GET"></form>
            <label for="parking">Mostra solo hotel con parcheggio libero</label>
            <input type="checkbox" name="parking" id="parking" <?= isset($_GET['parking']) ? 'checked' : '' ?>>
            <button type="submit">Invia</button>
        </div>
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
            <!-- foreach che comprende la sezione su cui voglio iterare in modo da escludere i vari th sopra -->
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

