<?php
require_once 'config/config.php';

class StudyGroupModel
{
    private $conn;


    public function __construct()
    {
        $host = 'localhost';
        $db   = 'edumate';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';


        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


        try {
            $this->conn = new PDO($dsn, $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }


    public function saveGroup($namaGrup, $jenjang, $materi)
    {
        $sql = "INSERT INTO study_groups (nama_grup, jenjang, materi) VALUES (:nama_grup, :jenjang, :materi)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nama_grup', $namaGrup);
        $stmt->bindParam(':jenjang', $jenjang);
        $stmt->bindParam(':materi', $materi);
        $stmt->execute();


        return $this->conn->lastInsertId();
    }


    public function getGroupById($id)
    {
        $sql = "SELECT * FROM study_groups WHERE id_grup = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
