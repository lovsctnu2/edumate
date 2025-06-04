<?php
require_once 'config/config.php';

class PeerTutoringOffer {
    public static function create($data) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO peer_tutoring_offers (user_id, materi, jenjang, kredibilitas) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $data['user_id'], $data['materi'], $data['jenjang'], $data['kredibilitas']);
        $stmt->execute();
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM peer_tutoring_offers");
        $offers = [];
        while ($row = $result->fetch_assoc()) {
            $offers[] = $row;
        }
        return $offers;
    }
}
