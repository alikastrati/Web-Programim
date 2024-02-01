<?php
require_once 'Database.php';
require_once 'Movies.php';

$db = new Database();
$moviesObject = new Movies($db);

$apiKey = '9a23cb65445bdb0713ad45e54d8b7096';

$numberOfPages = 5; 

for ($page = 1; $page <= $numberOfPages; $page++) {
    $apiUrl = "https://api.themoviedb.org/3/trending/all/week?api_key=9a23cb65445bdb0713ad45e54d8b7096&page=$page";
    $response = file_get_contents($apiUrl);
    $items = json_decode($response, true)['results'];

    foreach ($items as $item) {
        $tmdbItemId = $item['id'];
        $title = isset($item['title']) ? $item['title'] : (isset($item['name']) ? $item['name'] : '');
        $imageUrl = $item['poster_path'];

        $result = $moviesObject->addMovie($tmdbItemId, $title, $imageUrl);

        if ($result) {
            echo "Item added successfully: $title\n";
        } else {
            echo "Failed to add item: $title\n";
        }
    }
}

$db->closeConnection();


?>