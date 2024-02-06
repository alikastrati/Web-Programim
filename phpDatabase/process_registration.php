<?php
require_once('Database.php');
require_once('User.php');


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // GET USER INPUT 
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // DB CONNECTION 
    $db = new Database();

    // USER OBJECT 
    $user = new user($db);


    // REGISTER USER 
    if($user->registerUser($name, $username, $email, $password)) {
        $userID = $user->getUserId();
        setcookie("user_id", $userID, time() + 3600, "/");
        header("Location: /Web-Programim/register-login/LoginForm.php");
        exit();
        
    } else {
        echo 'Error : Registration Failed!';
    }


    // CLOSE DB CONNECTION 
    $db->closeConnection();
} else {
    echo 'Invalid request method';
}


?>
