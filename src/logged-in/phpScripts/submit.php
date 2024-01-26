<?php
require_once('C:\xampp\htdocs\Web-Programim\phpDatabase\Database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // FORM VALIDATION 
    if(empty($name) || empty($username) || empty($email) || empty($password) || empty($role) ) {
        echo 'Please fill in all of the fields!';
        exit();
    }


    // PASSWORD HASH 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $db = new Database();
    $conn = $db->getDBConnection();


    // INSERT USER TO DB 
    $sql = "INSERT INTO user (name, username, email, password, role) VALUES (?,?,?,?,?)" ;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $username, $email, $hashedPassword, $role);


    if($stmt->execute()) {
        header("Location: \Web-Programim\src\logged-in\adminPages\users-dashboard.php");
        exit(); 
     } 
    else {
        echo 'Error adding a user: ' .$stmt->error;
    }

    $stmt->close();
    $db->closeConnection();

}
else {
    echo 'Invalid Request.';
}


?>