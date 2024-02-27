<!-- Lista hotel del link -->

<?php
    // Array multidimensionali
    //Primo livello
    $hotels = [ 
        //Secondo Livello
        [
            //'indice' => 'valore'
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    //opzioni filtro per la selezione 
    $parking_zone = isset($_GET['parking']) ? $_GET['parking'] : 'all';
    $vote_hotel = isset($_GET['vote']) ? $_GET['vote'] : 0;
    
    var_dump($vote_hotel);
    var_dump($parking_zone);

    $hotels = array_filter($hotels, fn($hotel)=> $hotel['vote'] >= $vote_hotel);

?>