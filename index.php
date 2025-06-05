<?php
session_start();

define('BASE_PATH', __DIR__ . '/');

require_once BASE_PATH . 'controllers/HomepageController.php';
require_once BASE_PATH . 'controllers/PeerTutoringController.php';
require_once BASE_PATH . 'controllers/StudyGrupController.php';
require_once BASE_PATH . 'controllers/MaterialController.php';

$allowed_pages = [
    'homepage',
    'peer-tutoring',
    'request-mentor',
    'become-mentor',
    'search',
    'notifications',
    'mentor-form',
    'murid-form',
    'study-grup',
    'buat-grup',
    'simpan-grup',
    'halaman-grup',
    'upload',
    'search1',
    'list',
    'detail',
    'home'
];

$page = $_GET['page'] ?? 'homepage';

if (!in_array($page, $allowed_pages)) {
    http_response_code(404);
    echo "Halaman tidak ditemukan.";
    exit;
}

switch ($page) {
    case 'homepage':
    case 'home':
        $controller = new HomepageController();
        $controller->index();
        break;

    case 'peer-tutoring':
        $controller = new PeerTutoringController();
        $controller->showPeerTutoringPage();
        break;

    case 'request-mentor':
        $controller = new PeerTutoringController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->storeMentorRequest();
        } else {
            $controller->showMentorRequestForm();
        }
        break;

    case 'become-mentor':
        $controller = new PeerTutoringController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->storeMuridRequest();
        } else {
            $controller->showMuridRequestForm();
        }
        break;

    case 'search':
        $controller = new PeerTutoringController();
        $controller->search($_GET['query'] ?? '');
        break;

    case 'notifications':
        $controller = new PeerTutoringController();
        $controller->showNotifications();
        break;

    case 'mentor-form':
        $controller = new PeerTutoringController();
        $controller->showMentorFormPage();
        break;

    case 'murid-form':
        $controller = new PeerTutoringController();
        $controller->showMuridFormPage();
        break;

    case 'study-grup':
        $controller = new StudyGrupController();
        $controller->studygrup();
        break;

    case 'buat-grup':
        $controller = new StudyGrupController();
        $controller->buat();
        break;

    case 'simpan-grup':
        $controller = new StudyGrupController();
        $controller->simpan();
        break;

    case 'halaman-grup':
        $controller = new StudyGrupController();
        $controller->halaman_grup();
        break;

    case 'upload':
        $controller = new MaterialController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $judul = $_POST['judul'] ?? '';
            $deskripsi = $_POST['deskripsi'] ?? '';
            $file = $_FILES['file'] ?? null;

            $result = $controller->uploadMaterial($judul, $deskripsi, $file);

            if ($result) {
                echo "Upload berhasil!";
            } else {
                echo "Upload gagal!";
            }
        } else {
            include BASE_PATH . 'views/upload.php';
        }
        break;

    case 'search1':
        $controller = new MaterialController();
        $controller->searchMaterials();
        break;

    case 'list':
        $controller = new MaterialController();
        $controller->getAllMaterials();
        break;

    case 'detail':
        $controller = new MaterialController();
        $controller->getMaterialDetail();
        break;

    default:
        http_response_code(404);
        echo "Halaman tidak ditemukan.";
        exit;
}