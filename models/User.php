<?php
require_once 'config/config.php';

class User {
    public static function getCurrentUserId() {
        return 1; // Simulasi login user
    }

    public static function find($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
