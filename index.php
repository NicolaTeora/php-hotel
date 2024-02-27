<!-- collego il file con i dati -->
<?php require './config/data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">

        <h1 class="text-success">HoteLS</h1>
        <hr>
        <!-- stampo lista array (modo esteso) -->
        <div class="text-start fw-light">

            <?php 
            foreach ($hotels as $hotel) {
                echo "<b>Nome:</b> " . $hotel['name'] . " - "; 
                echo "<b>Descr:</b> " . $hotel['description'] . " - ";
                echo "<b>Parking:</b> " . $hotel['parking'] . " - ";
                echo "<b>Voto:</b> " . $hotel['vote'] . " - ";
                echo "<b>Dal centro:</b> " . $hotel['distance_to_center'] . "km <br>";
            }
            ?>

        </div>

        <hr>

        <!-- aggiungo il form -->
        <form method="GET" action="./index.php" >
            <select name="parking" id="parking-zone" class="form-select w-25 mt-3">
                <option selected value= "all">Parcheggio:</option>
                <option value= true>si</option>
                <option value= false >no</option>
            </select>
            <select name="vote" id="vote_hotel" class="form-select w-25 mt-3">
                <option selected value= "0">Voto:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <button type="submit" class="btn btn-success">Cerca</button>

        </form>
        
        <!-- stampo in tabella -->
        <table class="table table-striped-columns mt-5" >
            <?php include "./template/table-th-hotel.php"; ?>
            <!-- il ciclo For Each nell'html deve avere una chiusura -->
            <?php foreach ($hotels as $hotel): ?>
                <?php include "./template/table-hotel.php"; ?>
            <?php endforeach; ?>

        </table>
    </div>   

    <!-- script bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>