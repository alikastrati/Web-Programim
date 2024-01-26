<?php
require_once('C:\xampp\htdocs\Web-Programim\phpDatabase\Database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    // USER DETAILS FROM DB
    $db = new Database();
    $conn = $db->getDBConnection();
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
    $db->closeConnection();
} else {
    echo 'Invalid Request.';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="global-styles.css">
    <link rel="stylesheet" href="user-dashboard-styles.css">
</head>
<body>
   

    
    <div class="mainContainer">

<!-- LEFT PANEL  -->
       <?php
       include('global-dashboard.php');
       ?>






        <!-- RIGHT PANNEL  -->
        <div class="right-panel">
            <div class="tableContainer">
                <div class="right-panel">
                    <h2>Update User</h2>
                    <form class="user-form" method="POST" action="/Web-Programim/src/logged-in/phpScripts/update-process.php">
                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                        <label for="text">Name:</label><br>
                        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>"><br>
                        <label for="text">Username:</label><br>
                        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br>
                        <label for="password">Email:</label><br>
                        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" placeholder="Enter new password"><br>
                        <label for="text">Role:</label><br>
                        <input type="text" id="role" name="role" value="<?php echo $user['role']; ?>"><br>
                        <button type="submit" name="updateUser">Update User</button>
                    </form>
                </div>

              <?php 
              ?>
            </div>
    

    
</div>
</div>
</body>
</html>
