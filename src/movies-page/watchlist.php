<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['user_id'];
    $movieId = $_POST['movie_id'];
    $imageUrl = $_POST['poster_path'];

    require_once 'C:\xampp\htdocs\Web-Programim\phpDatabase\Movies.php';
    require_once 'C:\xampp\htdocs\Web-Programim\phpDatabase\Database.php';

    $db = new Database();

    $movies = new Movies($db);

    if ($movies->addToWatchlist($userId, $movieId, $imageUrl)) {
        echo "Movie added to watchlist successfully!";
    } else {
        echo "Error adding movie to watchlist.";
    }

    $db->closeConnection();

} else {
    echo "Invalid request method!";
}

?>
