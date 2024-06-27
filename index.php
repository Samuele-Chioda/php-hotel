<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-hotel</title>
</head>

<body>

    <?php
    // Include il file che contiene l'array degli hotel
    require_once __DIR__ . '/arrayHotels.php';
    ?>

    <main>
        <!-- Form per filtrare gli hotel con parcheggio -->
        <div class="form">
            <form action="./index.php" method="GET">
                <label for="parking">Mostra solo hotel con parcheggio disponibile</label>
                <!-- Checkbox per il filtro del parcheggio -->
                <input type="checkbox" name="parking" id="parking" <?= isset($_GET['parking']) ? 'checked' : '' ?>>
                <button type="submit">Cerca</button>
            </form>
        </div>

        <!-- Tabella per mostrare la lista degli hotel -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Hotel:</th>
                    <th scope="col">Descrizione:</th>
                    <th scope="col">Parcheggio:</th>
                    <th scope="col">Voto:</th>
                    <th scope="col">Distanza dal centro:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ciclo attraverso ciascun hotel 
                foreach ($hotels as $hotel) {
                    // Filtro hotel in base al parcheggio se checkbox è selezionato
                    if (isset($_GET['parking'])) {
                        // Controllo se il checkbox del parcheggio è selezionato
                        if (!$hotel['parking']) {
                            continue;
                        }
                    }
                    echo "<tr>
                        <th scope=\"row\">{$hotel['name']}</th>
                        <td>{$hotel['description']}</td>
                        <td>" . ($hotel['parking'] ? 'Parcheggio disponibile' : 'Nessun parcheggio') . "</td>
                        <td>Voto: {$hotel['vote']}</td>
                        <td>Distanza dal centro: {$hotel['distance_to_center']} km</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>

<style>
    main {
        padding: 4rem;
    }
</style>