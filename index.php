<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

require_once __DIR__ . '/arrayHotels.php';

foreach ($hotels as $hotel) {
    echo $hotel['name'] . '<br>';
    echo $hotel['description'] . '<br>';
    echo ($hotel['parking'] ? 'Parking available' : 'No parking') . '<br>';
    echo 'Vote: ' . $hotel['vote'] . '<br>';
    echo 'Distance to center: ' . $hotel['distance_to_center'] . ' km <br>';
    echo '<br>';
}

?>

</body>
</html>