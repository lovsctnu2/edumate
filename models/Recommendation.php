<?php
require_once 'config/config.php';

class Recommendation {
    public static function getForUser($userId) {
        global $conn;
        $stmt = $conn->prepare("
            SELECT r.*, u.name 
            FROM recommendations r 
            JOIN users u ON r.recommended_user_id = u.id 
            WHERE r.user_id = ?
        ");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $recs = [];
        while ($row = $result->fetch_assoc()) {
            $recs[] = $row;
        }
        return $recs;
    }
}
