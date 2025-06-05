<?php

class StudyGroupModel
{
    private $conn;

    public function __construct(mysqli $mysqliConnection)
    {
        $this->conn = $mysqliConnection;
    }

    public function saveGroup($namaGrup, $jenjang, $materi, $jumlahAnggota)
    {
        $sql = "INSERT INTO study_groups (nama_grup, jenjang, materi, jumlah_anggota) VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $this->conn->error);
        }

        $stmt->bind_param('sssi', $namaGrup, $jenjang, $materi, $jumlahAnggota);

        if (!$stmt->execute()) {
            die("Error executing statement: " . $stmt->error);
        }

        $newId = $stmt->insert_id;
        $stmt->close();

        return $newId;
    }

    public function saveGroupMembers($groupId, array $memberIds)
    {
        if (empty($memberIds)) {
            return;
        }

        $sql = "INSERT INTO group_members (group_id, user_id) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing member insert statement: " . $this->conn->error);
        }

        foreach ($memberIds as $userId) {
            $stmt->bind_param('ii', $groupId, $userId);
            if (!$stmt->execute()) {
                error_log("Failed to insert group member user_id $userId into group_id $groupId: " . $stmt->error);
            }
        }
        $stmt->close();
    }

    public function getGroupById($id)
    {
        $sql = "SELECT * FROM study_groups WHERE id_grup = ?";

        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $this->conn->error);
        }

        $stmt->bind_param('i', $id);

        if (!$stmt->execute()) {
            die("Error executing statement: " . $stmt->error);
        }

        $result = $stmt->get_result();

        $data = $result->fetch_assoc();

        $stmt->close();
        // $result->free(); // Tidak diperlukan setelah fetch_assoc() satu kali

        return $data;
    }
}