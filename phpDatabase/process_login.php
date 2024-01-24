<?php
session_start();

require_once('Database.php');
require_once('User.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new Database();   
    $user = new User($db);


    $userId = $user->authenticateUser($email, $password);

    if($userId) {
        // Successful Authentication 
        $_SESSION['user_id'] = $userId;
        header("Location: /Web-Programim/src/logged-in/user-index.php");
        exit();
    } else {
        // Failed Authentication 
        echo 'Invalid Credentials.';
    }

    $db->closeConnection();
} else {
    echo 'Invalid request method';
}



?>