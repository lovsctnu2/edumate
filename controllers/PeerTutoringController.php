<?php
require_once 'models/PermintaanMentor.php';
require_once 'models/PermintaanMurid.php';
require_once 'models/Recommendation.php';
require_once 'models/User.php';

class PeerTutoringController {
    public function showPeerTutoringPage() {
        $recommendedMentors = Recommendation::getRecommendedMentors(User::getCurrentUserId());
        $recommendedMurids = Recommendation::getRecommendedMurids(User::getCurrentUserId());

        include 'views/peerTutoring.php';
    }

    public function showMentorRequestForm() {
        include 'views/muridForm.php';
    }

    public function storeMentorRequest() {
        PermintaanMentor::create([
            'id_pengguna_murid' => User::getCurrentUserId(),
            'materi_diminta'    => $_POST['materi_diminta'] ?? '',
            'jenjang_kelas_pilihan' => $_POST['jenjang_kelas_pilihan'] ?? '',
            'target_belajar'    => $_POST['target_belajar'] ?? ''
        ]);

        header("Location: /edumate/peer-tutoring");
        exit;
    }

    public function showMuridRequestForm() {
        include 'views/mentorForm.php';
    }

    public function storeMuridRequest() {
        PermintaanMurid::create([
            'id_pengguna_mentor'    => User::getCurrentUserId(),
            'materi_dicari'         => $_POST['materi_dicari'] ?? '',
            'jenjang_kelas_dicari'  => $_POST['jenjang_kelas_dicari'] ?? '',
            'kredibilitas_murid_dicari' => $_POST['kredibilitas_murid_dicari'] ?? ''
        ]);

        header("Location: /edumate/peer-tutoring");
        exit;
    }

    public function showMentorFormPage() {
        $this->showMuridRequestForm();
    }

    public function showMuridFormPage() {
        $this->showMentorRequestForm();
    }

    public function search($query) {
        $results = [
            ['name' => 'Mentor A', 'subject' => 'Matematika'],
            ['name' => 'Murid B', 'subject' => 'Fisika'],
            ['name' => 'Mentor C', 'subject' => 'Kimia']
        ];

        $filtered = array_filter($results, function($item) use ($query) {
            return stripos($item['name'], $query) !== false || stripos($item['subject'], $query) !== false;
        });

        include 'views/searchResults.php';
    }

    public function showNotifications() {
        $notifications = [
            "Mentor A menerima permintaan Anda.",
            "Murid B mengajukan diri untuk diajar.",
            "Mentor C mengirim pesan balasan."
        ];

        include 'views/notifications.php';
    }
}