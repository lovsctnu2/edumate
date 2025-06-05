<?php

if (!isset($currentUser) || !is_array($currentUser)) {
    $currentUser = [
        'nama_lengkap' => 'Pengguna Tamu',
        'peran' => 'Tidak Diketahui',
        'url_foto_profil' => 'image/profile.png'
    ];
}

if (!isset($materials) || !is_array($materials)) {
    $materials = [];
}

if (!isset($recommendedMentors) || !is_array($recommendedMentors)) {
    $recommendedMentors = [];
}

if (!isset($recommendedStudents) || !is_array($recommendedStudents)) {
    $recommendedStudents = [];
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Homepage | EduMate</title>
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
                        'edumate-base': '#B3B3B3',
                        'edumate-black': '#1A1A1A',
                        'edumate-white': '#FFFFFF',
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
            class="navbar bg-edumate-base w-full h-[100px] rounded-bl-3xl rounded-br-3xl px-4 md:px-10 pb-10 pt-[88px] text-xl flex justify-between items-center lg:h-[100px] lg:pt-5 lg:px-20">
            <img src="image/logo.png" alt="Logo EduMate" class="w-[92px] h-[51px] lg:w-[120px] lg:h-[66px]" />
            <div class="profil flex items-center">
                <div class="user text-edumate-white mr-2 text-xl font-bold leading-none lg:text-right lg:mr-4">
                    <?= htmlspecialchars($currentUser['nama_lengkap']) ?><br>
                    <span class="text-xl font-extralight"><?= htmlspecialchars(ucfirst($currentUser['peran'])) ?></span>
                </div>
                <img src="<?= htmlspecialchars($currentUser['url_foto_profil']) ?>" class="w-[56px] h-[56px] rounded-full lg:w-[70px] lg:h-[70px]"
                    alt="Profile Picture" />
            </div>
        </div>

        <main class="flex-grow mx-auto max-w-[430px] lg:max-w-screen-xl w-full px-4 lg:px-0 pb-16">
            <div
                class="studyGroup-peerTutor flex flex-row justify-center mt-6 mb-4 space-x-4 lg:my-10 lg:space-x-12 lg:px-10">
                <a href="/edumate/study-grup"
                    class="w-full md:w-1/2 lg:flex-grow hover:scale-105 transition-transform duration-200 shadow-md">
                    <div
                        class="h-[60px] rounded-xl bg-edumate-base flex justify-center items-center text-center text-lg font-bold text-edumate-white lg:h-[70px] lg:text-xl lg:px-12 lg:py-4 hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                        Study<br>Group
                    </div>
                </a>
                <a href="/edumate/peer-tutoring"
                    class="w-full md:w-1/2 lg:flex-grow hover:scale-105 transition-transform duration-200 shadow-md">
                    <div
                        class="h-[60px] rounded-xl bg-edumate-base flex justify-center items-center text-center text-lg font-bold text-edumate-white lg:h-[70px] lg:text-xl lg:px-12 lg:py-4 hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                        Peer<br>Tutoring
                    </div>
                </a>
            </div>

            <form action="/edumate/search1" method="GET" class="searchbar py-4 flex items-center lg:py-8 lg:px-10">
                <input type="text" name="query"
                    class="search w-full max-w-[289px] h-[40px] rounded-full bg-edumate-base px-4 py-2 mr-2 border-none font-bold text-edumate-white placeholder:text-edumate-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:max-w-[calc(100%-120px)] lg:h-[50px] lg:text-lg"
                    placeholder="Cari materi">
                <button type="submit" class="p-0 border-none bg-transparent cursor-pointer">
                    <img src="image/search.png"
                        class="search-icon w-[37px] h-[37px] bg-edumate-base rounded-full p-2 hover:scale-110 transition-transform duration-200 lg:w-[45px] lg:h-[45px] lg:p-2"
                        alt="Search Icon">
                </button>
                <a href="/edumate/notifications" class="ml-auto">
                    <img src="image/notif.png"
                        class="w-[48px] h-[48px] rounded-full p-2 hover:scale-110 transition-transform duration-200 lg:w-[55px] lg:h-[55px] lg:p-2"
                        alt="Notifications Icon">
                </a>
            </form>

            <div class="card-grid grid grid-cols-2 gap-4 mt-4 md:px-6 lg:grid-cols-3 lg:gap-6 lg:px-10">
                <?php if (!empty($materials)): ?>
                    <?php foreach ($materials as $material): ?>
                        <div
                            class="w-full h-[150px] rounded-2xl bg-edumate-base lg:h-[180px] hover:scale-105 transition-transform duration-200 cursor-pointer shadow-md">
                            <div class="flex flex-col justify-end h-full p-4">
                                <h2 class="text-edumate-white text-lg font-bold"><?= htmlspecialchars($material['judul']) ?></h2>
                                <p class="text-edumate-white text-sm"><?= htmlspecialchars($material['deskripsi']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-2 lg:col-span-3 text-center w-full">
                        <p class="text-edumate-base mb-4">Tidak ada materi tersedia saat ini. Coba jelajahi rekomendasi di bawah!</p>

                        <?php if (!empty($recommendedMentors)): ?>
                            <h2 class="text-edumate-black text-2xl font-bold mb-4 mt-8">Mentor Rekomendasi</h2>
                            <div class="card-grid grid grid-cols-2 gap-4 md:grid-cols-3 lg:gap-6">
                                <?php foreach ($recommendedMentors as $mentor): ?>
                                    <div class="w-full rounded-2xl bg-edumate-base p-4 text-center hover:scale-105 transition-transform duration-200 cursor-pointer shadow-md">
                                        <img src="<?= htmlspecialchars($mentor['url_foto_profil'] ?? 'image/default_mentor.png') ?>" 
                                             class="w-24 h-24 rounded-full mx-auto mb-2 object-cover" 
                                             alt="<?= htmlspecialchars($mentor['nama_lengkap']) ?>">
                                        <h3 class="text-edumate-white text-lg font-semibold"><?= htmlspecialchars($mentor['nama_lengkap']) ?></h3>
                                        <p class="text-edumate-white text-sm font-extralight"><?= htmlspecialchars(ucfirst($mentor['peran'])) ?></p>
                                        <p class="text-edumate-white text-sm">Spesialisasi: <?= htmlspecialchars($mentor['spesialisasi'] ?? 'N/A') ?></p>
                                        <p class="text-edumate-white text-sm">Rating: <?= htmlspecialchars(number_format($mentor['rating'] ?? 0, 1)) ?>/5</p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($recommendedStudents)): ?>
                            <h2 class="text-edumate-black text-2xl font-bold mb-4 mt-8">Murid Rekomendasi</h2>
                            <div class="card-grid grid grid-cols-2 gap-4 md:grid-cols-3 lg:gap-6">
                                <?php foreach ($recommendedStudents as $student): ?>
                                    <div class="w-full rounded-2xl bg-edumate-base p-4 text-center hover:scale-105 transition-transform duration-200 cursor-pointer shadow-md">
                                        <img src="<?= htmlspecialchars($student['url_foto_profil'] ?? 'image/default_student.png') ?>" 
                                             class="w-24 h-24 rounded-full mx-auto mb-2 object-cover" 
                                             alt="<?= htmlspecialchars($student['nama_lengkap']) ?>">
                                        <h3 class="text-edumate-white text-lg font-semibold"><?= htmlspecialchars($student['nama_lengkap']) ?></h3>
                                        <p class="text-edumate-white text-sm font-extralight"><?= htmlspecialchars(ucfirst($student['peran'])) ?></p>
                                        <p class="text-edumate-white text-sm">Minat: <?= htmlspecialchars($student['minat_belajar'] ?? 'N/A') ?></p>
                                        <p class="text-edumate-white text-sm">Jenjang: <?= htmlspecialchars($student['tingkat_pendidikan'] ?? 'N/A') ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (empty($recommendedMentors) && empty($recommendedStudents)): ?>
                            <p class="text-edumate-base mt-4">Tidak ada rekomendasi mentor atau murid saat ini.</p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </main>

        <div
            class="bottom-navbar w-full h-[92px] bg-edumate-base p-2 flex justify-center items-center rounded-xl mt-auto lg:hidden fixed bottom-0 left-0 right-0 z-50 shadow-lg">
            <div class="nav-icon flex justify-between gap-12 p-2">
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/home.png" alt="Home Icon" class="w-full h-full">
                </a>
                <a href="/edumate/halaman-grup" class="w-8 h-8">
                    <img src="image/chat.png" alt="Chat Icon" class="w-full h-full">
                </a>
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/plus.png" alt="Add Icon" class="w-full h-full">
                </a>
                <a href="/edumate/peer-tutoring" class="w-8 h-8">
                    <img src="image/tutor.png" alt="Tutoring Icon" class="w-full h-full">
                </a>
                <a href="/edumate/homepage" class="w-8 h-8">
                    <img src="image/settings.png" alt="Settings Icon" class="w-full h-full">
                </a>
            </div>
        </div>

        <div class="hidden lg:flex justify-center w-full bg-edumate-base py-4 mt-8 rounded-t-3xl">
            <div class="flex space-x-16">
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/home.png" alt="Home Icon" class="w-10 h-10 mb-1">
                    Home
                </a>
                <a href="/edumate/halaman-grup" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/chat.png" alt="Chat Icon" class="w-10 h-10 mb-1">
                    Chat
                </a>
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/plus.png" alt="Add Icon" class="w-10 h-10 mb-1">
                    Add
                </a>
                <a href="/edumate/peer-tutoring" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/tutor.png" alt="Tutoring Icon" class="w-10 h-10 mb-1">
                    Tutoring
                </a>
                <a href="/edumate/homepage" class="flex flex-col items-center text-edumate-white font-bold">
                    <img src="image/settings.png" alt="Settings Icon" class="w-10 h-10 mb-1">
                    Settings
                </a>
            </div>
        </div>

    </div>

</body>

</html>