<?php
require_once 'models/PeerTutoringRequest.php';
require_once 'models/PeerTutoringOffer.php';
require_once 'models/Recommendation.php';
require_once 'models/User.php';

class PeerTutoringController {

    // Menampilkan halaman Peer Tutoring utama
    public function showPeerTutoringPage() {
        $recommendations = Recommendation::getForUser(User::getCurrentUserId());
        include 'views/peerTutoring.php';
    }

    // Menampilkan form untuk murid mencari mentor
    public function showMentorRequestForm() {
        include 'views/muridForm.php';
    }

    // Menyimpan request mencari mentor
    public function storeMentorRequest() {
        PeerTutoringRequest::create([
            'materi'    => $_POST['materi'] ?? '',
            'jenjang'   => $_POST['jenjang'] ?? '',
            'target'    => $_POST['target'] ?? '',
            'user_id'   => User::getCurrentUserId()
        ]);

        // Redirect menggunakan URL bersih
        header("Location: /edumate/peer-tutoring");
        exit; // Pastikan eksekusi berhenti di sini
    }

    // Menampilkan form untuk menawarkan diri menjadi mentor
    public function showMentorOfferForm() {
        include 'views/mentorForm.php';
    }

    // Tambahan method baru:
    public function showMentorFormPage() {
        include 'views/mentorForm.php';
    }

    public function showMuridFormPage() {
        include 'views/muridForm.php';
    }

    // Menyimpan data penawaran menjadi mentor
    public function storeMentorOffer() {
        PeerTutoringOffer::create([
            'materi'        => $_POST['materi'] ?? '',
            'jenjang'       => $_POST['jenjang'] ?? '',
            'kredibilitas'  => $_POST['kredibilitas'] ?? '',
            'user_id'       => User::getCurrentUserId()
        ]);

        // Redirect menggunakan URL bersih
        header("Location: /edumate/peer-tutoring");
        exit; // Pastikan eksekusi berhenti di sini
    }

    // Menampilkan hasil pencarian mentor/murid berdasarkan query
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

    // Menampilkan notifikasi terkait respons dan tawaran
    public function showNotifications() {
        $notifications = [
            "Mentor A menerima permintaan Anda.",
            "Murid B mengajukan diri untuk diajar.",
            "Mentor C mengirim pesan balasan."
        ];

        include 'views/notifications.php';
    }
}
