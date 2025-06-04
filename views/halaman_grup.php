<?php
// Pastikan ID grup diterima
if (isset($_GET['id'])) {
    // Ambil ID grup dari URL
    $id = $_GET['id'];


    // Sertakan file model untuk mengambil data grup
    require_once 'model/StudyGroupModel.php';


    // Buat instance dari model
    $model = new StudyGroupModel();


    // Ambil data grup berdasarkan ID
    $data = $model->getGroupById($id);


    // Periksa apakah data ditemukan
    if ($data) {
        // Menampilkan halaman grup
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Grup Belajar | EduMate</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-100 text-sm flex flex-col h-screen">


            <!-- Info Grup -->
            <div class="h-16 bg-white px-4 shadow flex items-center gap-3">
                <img src="public/images/profil_grup.png" alt="Profil Grup" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <p class="font-semibold text-sm text-gray-700"><?= htmlspecialchars($data['nama_grup']); ?></p>
                    <p class="text-xs text-gray-700">2 Anggota</p> <!-- Anggota sementara bisa diganti dinamis -->
                </div>
            </div>


            <!-- Area Chat Kosong -->
            <div class="flex-1 flex items-center justify-center">
                <p class="text-gray-400 italic text-center">Belum ada pesan. Mulai diskusi dengan grupmu!</p>
            </div>


            <!-- Kolom Kirim Pesan -->
            <div class="h-16 bg-white px-4 shadow-inner flex items-center gap-2">
                <div class="flex-1 px-4 py-2 rounded-full text-sm text-gray-400 bg-gray-100">
                    Tulis Pesan...
                </div>
                <img src="public/images/send.png" alt="Kirim" class="w-5 h-5 opacity-80">
            </div>


        </body>
        </html>
        <?php
    } else {
        echo "Grup tidak ditemukan.";
    }
} else {
    echo "ID grup tidak diberikan.";
}
?>
