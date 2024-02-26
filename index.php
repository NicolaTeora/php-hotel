<!-- collego il file con i dati -->
<?php require 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <h1>HotelS</h1>
    
    <?php foreach ($hotels as $hotel) {
        echo "<b>Nome:</b>" . $hotel['name'] . " - "; 
        echo "<b>Descr:</b>" . $hotel['description'] . " - ";
        echo "<b>Parking:</b>" . $hotel['parking'] . " - ";
        echo "<b>Voto:</b>" . $hotel['vote'] . " - ";
        echo "<b>Dal centro:</b>" . $hotel['distance_to_center'] . "km <br>";

    }

    ?>
<hr>
    <table border= 1px >
        <tr>
            <th>Nome</th>
            <th>Description</th>
            <th>ParKing</th>
            <th>Vote</th>
            <th>Distance to Center</th>
        </tr>
        <tr>
            <td> <?= $hotels[0]['name'] ?> </td> 
            <td> <?= $hotels[0]['description'] ?> </td>
            <td> <?= $hotels[0]['parking'] ?> </td>
            <td> <?= $hotels[0]['vote'] ?></td>
            <td> <?= $hotels[0]['distance_to_center'] ?></td>
        </tr>


    </table>

</body>
</html>