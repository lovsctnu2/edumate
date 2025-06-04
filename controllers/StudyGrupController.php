<?php
require_once 'models/StudyGroupModel.php';

class StudyGrupController
{
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

            require_once 'models/StudyGroupModel.php';
            $model = new StudyGroupModel();
            $idBaru = $model->saveGroup($groupName, $level, $subject);

            // ✅ Redirect pakai routing berbasis ?page=
            header("Location: index.php?page=halaman-grup&id=" . urlencode($idBaru));
            exit();
        } else {
            // Kembali ke halaman form jika data kurang
            header("Location: index.php?page=buat-grup&error=missing_data");
            exit();
        }
    }


    public function halaman_grup()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];


            require_once 'models/StudyGroupModel.php';
            $model = new StudyGroupModel();
            $data = $model->getGroupById($id);


            if ($data) {
                require 'views/halaman_grup.php';
            } else {
                echo "Grup tidak ditemukan.";
            }
        } else {
            echo "ID grup tidak diberikan.";
        }
    }
}
