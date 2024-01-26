<?php  
require_once('C:\xampp\htdocs\Web-Programim\phpDatabase\Database.php');

$db = new Database();
$conn = $db->getDBConnection();


$sql = "SELECT * from user";
$result = $conn->query($sql);


if($result->num_rows > 0) {
    echo '<table class="greyGridTable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Username</th>';
    echo '<th>Email</th>';
    echo '<th>Role</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["username"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["role"] . '</td>';
        echo '<td>';
        echo '<form method="POST" action="update-dashboard.php">';
        echo '<input type="hidden" name="user_id" value="' . $row["id"] . '">';
        echo '<button type="submit" name="updateButton" id="updateButton">Update</button>';
        echo '</form>';        
        echo '<form method="POST" action="\Web-Programim\src\logged-in\phpScripts\delete-user.php">';
        echo '<input type="hidden" name="user_id" value="' . $row["id"] . '">';
        echo '<button type="submit" name="deleteButton" id="deleteButton">Delete</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}



?>