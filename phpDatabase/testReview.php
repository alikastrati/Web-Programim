<?php
require_once 'Database.php';
require_once 'Review.php';

// Instantiate Review class
$db = new Database();
$review = new Review($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a way to get the user ID (replace with your logic)
    // For example, if you store the user ID in a session variable
    session_start();
    $loggedInUserId = $_SESSION['user_id'] ?? null; // Replace with your user ID logic

    if (!$loggedInUserId) {
        echo "User not logged in.";
        exit;
    }

    // Retrieve other review-related information from the form
    $rating = $_POST['rating']; // Replace with your actual form field names
    $comment = $_POST['comment']; // Replace with your actual form field names

    // Use the movie ID retrieved from the URL
    $movieId = $_GET['id'] ?? null;

    // Check if movieId is available
    if (!$movieId) {
        echo "Movie ID not provided.";
        exit;
    }

    // Add the review
    $result = $review->addReview($loggedInUserId, $movieId, $rating, $comment);

    if ($result) {
        echo "Review added successfully!";
    } else {
        echo "Failed to add review.";
    }
}
?>
