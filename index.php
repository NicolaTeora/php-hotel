<!-- collego il file con i dati -->
<?php require 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="text-success">HoteLS</h1>
        
        <!-- stampo lista array (modo esteso) -->
        <?php 
        /*
        foreach ($hotels as $hotel) {
            echo "<b>Nome:</b>" . $hotel['name'] . " - "; 
            echo "<b>Descr:</b>" . $hotel['description'] . " - ";
            echo "<b>Parking:</b>" . $hotel['parking'] . " - ";
            echo "<b>Voto:</b>" . $hotel['vote'] . " - ";
            echo "<b>Dal centro:</b>" . $hotel['distance_to_center'] . "km <br>";

        }
        */
        ?>

        <!-- stampo in tabella -->
        <table class="table table-striped-columns mt-5" >
            <tr>
                <th>Nome</th>
                <th>Description</th>
                <th>ParKing</th>
                <th>Vote</th>
                <th>Distance to Center</th>
            </tr>
            <?php foreach ($hotels as $hotel): ?>
            <tr>
                <td> <?= $hotel['name'] ?> </td> 
                <td> <?= $hotel['description'] ?> </td>
                <td> <?= $hotel['parking'] ?> </td>
                <td> <?= $hotel['vote'] ?></td>
                <td> <?= $hotel['distance_to_center'] ?></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>