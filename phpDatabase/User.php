<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser($name, $username, $email, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (name, username, email, password) VALUES (?,?,?,?)";
        $stmt = $this->db->getDBConnection()->prepare($sql);
        $stmt->bind_param("ssss", $name, $username, $email, $passwordHash);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

        $stmt->close();
    }
}
?>
