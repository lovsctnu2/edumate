<?php
// views/halaman_grup.php

// PENTING: Hapus semua baris ini dari file view:
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     require_once 'model/StudyGroupModel.php'; // HAPUS INI
//     $model = new StudyGroupModel(); // HAPUS INI (Penyebab error "Too few arguments")
//     $data = $model->getGroupById($id); // HAPUS INI

// Periksa apakah data ditemukan
// If ($data) { // Baris ini harusnya sudah ada di controller yang memanggil view ini

// Variabel $data ASUMSIKAN sudah tersedia dan berisi data grup
// karena method halaman_grup() di controller sudah menyiapkannya
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

    <div class="h-16 bg-white px-4 shadow flex items-center gap-3">
        <img src="public/images/profil_grup.png" alt="Profil Grup" class="w-10 h-10 rounded-full object-cover">
        <div>
            <p class="font-semibold text-sm text-gray-700"><?= htmlspecialchars($data['nama_grup']); ?></p>
            <p class="text-xs text-gray-700">2 Anggota</p> </div>
    </div>

    <div class="flex-1 flex items-center justify-center">
        <p class="text-gray-400 italic text-center">Belum ada pesan. Mulai diskusi dengan grupmu!</p>
    </div>

    <div class="h-16 bg-white px-4 shadow-inner flex items-center gap-2">
        <div class="flex-1 px-4 py-2 rounded-full text-sm text-gray-400 bg-gray-100">
            Tulis Pesan...
        </div>
        <img src="public/images/send.png" alt="Kirim" class="w-5 h-5 opacity-80">
    </div>

</body>
</html>
<?php
// PENTING: Hapus juga bagian else ini dari file view:
// } else {
//     echo "Grup tidak ditemukan.";
// }
// } else { // Hapus ini juga
//     echo "ID grup tidak diberikan.";
// }
?>