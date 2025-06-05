<?php
require_once 'config/config.php';

class PermintaanMentor {
    public static function create($data) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO permintaan_mentor (id_pengguna_murid, materi_diminta, jenjang_kelas_pilihan, target_belajar, status) VALUES (?, ?, ?, ?, ?)");
        $status = $data['status'] ?? 'menunggu'; // Set default status jika tidak disediakan, sesuai dengan tabel ENUM
        $stmt->bind_param("issss", $data['id_pengguna_murid'], $data['materi_diminta'], $data['jenjang_kelas_pilihan'], $data['target_belajar'], $status);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            error_log("Error creating Permintaan Mentor: " . $stmt->error);
            $stmt->close();
            return false;
        }
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM permintaan_mentor");
        $requests = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $requests[] = $row;
            }
            $result->free();
        } else {
            error_log("Error fetching all Permintaan Mentor: " . $conn->error);
        }
        return $requests;
    }
}