<?php
require_once 'Database.php';
require_once 'Movies.php';

$db = new Database();

$moviesObject = new Movies($db);

$apiKey = '9a23cb65445bdb0713ad45e54d8b7096';
$apiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=9a23cb65445bdb0713ad45e54d8b7096";
$response = file_get_contents($apiUrl);
$movies = json_decode($response, true)['results'];

$moviesObject->updateMovie($movies);
?>
