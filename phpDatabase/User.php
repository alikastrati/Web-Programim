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

    public function getUserId() {
        return $this->db->getDBConnection()->insert_id;
    }




    // USER AUTHENTICATION 
    public function authenticateUser($email, $password) {
        $sql = "SELECT id, password FROM user WHERE email = ?";
        $stmt = $this->db->getDBConnection()->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userId, $hashedPassword);
            $stmt->fetch();

            if (password_verify($password, $hashedPassword)) {
                // Password is correct
                return $userId;
            }
        }

        // Authentication failed
        return false;
    }
}
?>
