<?php
require_once 'config/config.php';

class Recommendation {
    public static function getRecommendedMentors($userId = null) {
        global $conn;

        $query = "
            SELECT 
                mp.id_pengguna,
                p.nama_lengkap,
                mp.materi_diajarkan,
                mp.rating,
                mp.jumlah_ulasan,
                mp.deskripsi_singkat
            FROM mentor_profil mp
            JOIN pengguna p ON mp.id_pengguna = p.id
        ";

        $result = $conn->query($query);
        $mentors = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $mentors[] = $row;
            }
            $result->free();
        } else {
            error_log("Error fetching recommended mentors: " . $conn->error);
        }
        return $mentors;
    }

    public static function getRecommendedMurids($userId = null) {
        global $conn;

        $query = "
            SELECT 
                mrp.id_pengguna,
                p.nama_lengkap,
                mrp.materi_peminatan,
                mrp.jenjang_saat_ini,
                mrp.deskripsi_peminatan
            FROM murid_profil mrp
            JOIN pengguna p ON mrp.id_pengguna = p.id
        ";

        $result = $conn->query($query);
        $murids = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $murids[] = $row;
            }
            $result->free();
        } else {
            error_log("Error fetching recommended murids: " . $conn->error);
        }
        return $murids;
    }
}