<?php
include __DIR__ . '/data.php';

//opzioni filtro per la selezione 
$parking_zone = isset($_GET['parking']) ? $_GET['parking'] : 'all';
$vote_hotel = isset($_GET['vote']) ? $_GET['vote'] : 0;

$hotels = array_filter($hotels, fn($hotel)=> $hotel['vote'] >= $vote_hotel);

if ($parking_zone == 'true'){
    $hotels = array_filter($hotels, fn($hotel)=> $hotel['parking'] == true, ARRAY_FILTER_USE_BOTH);        
} elseif ($parking_zone == 'false') {
    $hotels = array_filter($hotels, fn($hotel)=> $hotel['parking'] == false, ARRAY_FILTER_USE_BOTH);
}