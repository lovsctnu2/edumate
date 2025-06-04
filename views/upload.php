<?php
require_once 'controllers/MaterialController.php';
$controller = new MaterialController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $file = $_FILES['file'];

    if ($controller->uploadMaterial($judul, $deskripsi, $file)) {
        // Menggunakan absolute path atau path relatif yang benar dari root server
        header("Location: /edumate/materi_list.php"); // Sesuaikan path jika perlu
        exit(); // Penting untuk menghentikan eksekusi script setelah header redirect
    } else {
        echo "<script>alert('Gagal upload materi! Pastikan file valid.');</script>";
        // Anda mungkin ingin menampilkan pesan error di UI daripada hanya echo
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Materi | EduMate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'edumate-black': '#1A1A1A',
                        'edumate-white': '#F2F2F2',
                        'edumate-gray': '#D4D4D4',
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-edumate-white font-poppins text-edumate-black">

    <div class="min-h-screen flex flex-col">
        <div
            class="navbar bg-edumate-black w-full h-[180px] rounded-bl-3xl rounded-br-3xl px-4 md:px-10 pb-10 pt-[88px] text-xl flex justify-between items-center lg:h-[120px] lg:pt-5 lg:px-20">
            <img src="image/logo.png" alt="Logo EduMate" class="w-[92px] h-[51px] lg:w-[120px] lg:h-[66px]" />
            <div class="profil flex items-center">
                <div class="user text-edumate-white mr-2 text-xl font-bold leading-none lg:text-right lg:mr-4">
                    Daniel Baskara<br>
                    <span class="text-xl font-extralight">Mahasiswa</span>
                </div>
                <img src="image/profile.png" class="w-[56px] h-[56px] rounded-full lg:w-[70px] lg:h-[70px]"
                    alt="Profile Picture" />
            </div>
        </div>

        <main class="flex-grow mx-auto max-w-md w-full px-4 py-8 lg:max-w-screen-xl">
            <h1 class="text-2xl font-bold text-center mb-6 lg:text-3xl text-edumate-black">Upload Materi Baru</h1>

            <form action="" method="post" enctype="multipart/form-data" class="space-y-6 bg-edumate-white p-6 rounded-lg shadow-md lg:p-8">
                <div>
                    <label for="judul" class="block text-sm font-medium text-edumate-black mb-1">Judul Materi</label>
                    <input type="text" id="judul" name="judul" placeholder="Masukkan judul materi"
                        class="w-full border border-edumate-gray p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-edumate-black focus:border-transparent text-sm lg:text-base bg-edumate-white">
                </div>
                
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-edumate-black mb-1">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsikan materi ini..." rows="4"
                        class="w-full border border-edumate-gray p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-edumate-black focus:border-transparent text-sm lg:text-base resize-y bg-edumate-white"></textarea>
                </div>
                
                <div>
                    <label for="file_upload" class="block text-sm font-medium text-edumate-black mb-1">Pilih File</label>
                    <input type="file" id="file_upload" name="file"
                        class="w-full border border-edumate-gray p-3 rounded-md text-sm lg:text-base file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-edumate-gray file:text-edumate-black hover:file:bg-edumate-black hover:file:text-edumate-white transition-colors duration-200 cursor-pointer bg-edumate-white">
                    <p class="mt-1 text-xs text-edumate-gray">Ukuran maksimum file: 2MB (contoh).</p>
                </div>
                
                <button type="submit"
                    class="w-full bg-edumate-black text-edumate-white font-semibold py-3 rounded-md hover:bg-gray-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-edumate-black focus:ring-offset-2 lg:py-4 lg:text-lg">
                    Upload Materi
                </button>
            </form>
        </main>

        <div class="hidden lg:flex justify-center w-full bg-edumate-black py-4 mt-8 rounded-t-3xl">
            <div class="flex space-x-16">
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/home.png" alt="Home" class="w-10 h-10 mb-1">
                    Home
                </a>
                <a href="/edumate/halaman-grup" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/chat.png" alt="Chat" class="w-10 h-10 mb-1">
                    Chat
                </a>
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/plus.png" alt="Add" class="w-10 h-10 mb-1">
                    Add
                </a>
                <a href="/edumate/peer-tutoring" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/tutor.png" alt="Tutoring" class="w-10 h-10 mb-1">
                    Tutoring
                </a>
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/settings.png" alt="Settings" class="w-10 h-10 mb-1">
                    Settings
                </a>
            </div>
        </div>

        <div class="bottom-navbar w-full h-[92px] bg-edumate-black p-2 flex justify-center items-center rounded-full mt-auto lg:hidden">
            <div class="nav-icon flex justify-between gap-12 p-2">
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/home.png" alt="Home" class="w-full h-full">
                </a>
                <a href="/edumate/halaman-grup" class="w-8 h-8">
                    <img src="image/chat.png" alt="Chat" class="w-full h-full">
                </a>
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/plus.png" alt="Add" class="w-full h-full">
                </a>
                <a href="/edumate/peer-tutoring" class="w-8 h-8">
                    <img src="image/tutor.png" alt="Tutoring" class="w-full h-full">
                </a>
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/settings.png" alt="Settings" class="w-full h-full">
                </a>
            </div>
        </div>

    </div>
</body>

</html>