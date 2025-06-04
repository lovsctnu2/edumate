<?php
require_once 'config/config.php';

class PeerTutoringRequest {
    public static function create($data) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO peer_tutoring_requests (user_id, materi, jenjang, target) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $data['user_id'], $data['materi'], $data['jenjang'], $data['target']);
        $stmt->execute();
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM peer_tutoring_requests");
        $requests = [];
        while ($row = $result->fetch_assoc()) {
            $requests[] = $row;
        }
        return $requests;
    }
}
