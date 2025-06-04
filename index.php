<?php
session_start();

// --- ROUTING BERBASIS 'page' ---
if (isset($_GET['page'])) {
    require_once 'controllers/HomepageController.php';
    require_once 'controllers/PeerTutoringController.php';
    require_once 'controllers/StudyGrupController.php';
    require_once 'controllers/MaterialController.php';

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

    $page = $_GET['page'];

    if (!in_array($page, $allowed_pages)) {
        http_response_code(404);
        echo "Halaman tidak ditemukan.";
        exit;
    }

    switch ($page) {
        case 'homepage':
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
                $controller->storeMentorOffer();
            } else {
                $controller->showMentorOfferForm();
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
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $judul = $_POST['judul'] ?? '';
                $deskripsi = $_POST['deskripsi'] ?? '';
                $file = $_FILES['file'] ?? null;

                $controller = new MaterialController();
                $result = $controller->uploadMaterial($judul, $deskripsi, $file);

                if ($result) {
                    echo "Upload berhasil!";
                } else {
                    echo "Upload gagal!";
                }
            } else {
                include 'views/upload.php'; // form upload
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
        case 'home':
        default:
            $controller = new MaterialController();
            $controller->home();
            break;
    }

} else {
    // --- ROUTING BERBASIS 'c' DAN 'm' ---
    $controllerName = isset($_GET['c']) ? $_GET['c'] : 'StudyGrup';
    $methodName = isset($_GET['m']) ? $_GET['m'] : 'index';

    $controllerFile = 'controller/' . $controllerName . 'Controller.php';
    $controllerClass = $controllerName . 'Controller';

    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();

            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                http_response_code(404);
                echo "<h1>404 - Method '$methodName' tidak ditemukan di $controllerClass</h1>";
            }
        } else {
            http_response_code(404);
            echo "<h1>404 - Class '$controllerClass' tidak ditemukan</h1>";
        }
    } else {
        http_response_code(404);
        echo "<h1>404 - File controller '$controllerFile' tidak ditemukan</h1>";
    }
}
