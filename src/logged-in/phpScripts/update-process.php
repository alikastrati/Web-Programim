<?php
require_once('C:\xampp\htdocs\Web-Programim\phpDatabase\Database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateUser'])) {
    $userId = $_POST['user_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Update user in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $db = new Database();
    $conn = $db->getDBConnection();
    $sql = "UPDATE user SET name=?, username=?, email=?, password=?, role=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $username, $email, $hashedPassword, $role, $userId);

    if ($stmt->execute()) {
        echo 'User updated successfully';
        header("Location: /Web-Programim/src/logged-in/adminPages/users-dashboard.php");
        exit();
    } else {
        echo 'Error updating user: ' . $stmt->error;
    }

    $stmt->close();
    $db->closeConnection();
} else {
    echo 'Invalid Request.';
}
?>
