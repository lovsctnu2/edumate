<?php
require_once 'config/config.php';

class PermintaanMurid {
    public static function create($data) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO permintaan_murid (id_pengguna_mentor, materi_dicari, jenjang_kelas_dicari, kredibilitas_murid_dicari, status) VALUES (?, ?, ?, ?, ?)");
        $status = $data['status'] ?? 'aktif';
        $stmt->bind_param("issss", $data['id_pengguna_mentor'], $data['materi_dicari'], $data['jenjang_kelas_dicari'], $data['kredibilitas_murid_dicari'], $status);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            error_log("Error creating Permintaan Murid: " . $stmt->error);
            $stmt->close();
            return false;
        }
    }

    public static function all() {
        global $conn;
        $result = $conn->query("SELECT * FROM permintaan_murid");
        $permintaan_murid = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $permintaan_murid[] = $row;
            }
            $result->free();
        } else {
            error_log("Error fetching all Permintaan Murid: " . $conn->error);
        }
        return $permintaan_murid;
    }
}
?>