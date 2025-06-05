<?php

require_once 'models/StudyGroupModel.php';

class StudyGrupController
{
    private $studyGroupModel;

    public function __construct()
    {
        global $conn_mysqli;

        if (!($conn_mysqli instanceof mysqli)) {
            die("Koneksi database (MySQLi) tidak tersedia atau tidak valid saat StudyGrupController dibuat. Pastikan 'config/config.php' di-require di 'index.php' sebelum controller diinstansiasi.");
        }

        $this->studyGroupModel = new StudyGroupModel($conn_mysqli);
    }

    public function studygrup()
    {
        require_once 'views/study_grup.php';
    }

    public function buat()
    {
        require_once 'views/buat_grup.php';
    }

    public function simpan()
    {
        if (isset($_POST['nama_grup']) && isset($_POST['jenjang']) && isset($_POST['materi'])) {
            $groupName = htmlspecialchars(trim($_POST['nama_grup']));
            $level = htmlspecialchars(trim($_POST['jenjang']));
            $subject = htmlspecialchars(trim($_POST['materi']));

            $anggota = isset($_POST['anggota']) ? $_POST['anggota'] : [];

            $jumlahAnggota = count($anggota) + 1;

            $idBaru = $this->studyGroupModel->saveGroup($groupName, $level, $subject, $jumlahAnggota);

            if ($idBaru) {
                if (!empty($anggota)) {
                    $this->studyGroupModel->saveGroupMembers($idBaru, $anggota);
                }

                header("Location: /edumate/index.php?c=StudyGrup&m=halaman_grup&id=" . urlencode($idBaru));
                exit();
            } else {
                header("Location: /edumate/index.php?c=StudyGrup&m=buat&error=save_failed");
                exit();
            }
        } else {
            header("Location: /edumate/index.php?c=StudyGrup&m=buat&error=missing_data");
            exit();
        }
    }

    public function halaman_grup()
    {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);

            $data = $this->studyGroupModel->getGroupById($id);

            if ($data) {
                require 'views/halaman_grup.php';
            } else {
                http_response_code(404);
                echo "<h1>404 Not Found</h1><p>Grup dengan ID tersebut tidak ditemukan.</p>";
            }
        } else {
            http_response_code(400);
            echo "<h1>400 Bad Request</h1><p>ID grup tidak diberikan.</p>";
        }
    }
}