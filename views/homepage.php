<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Homepage | EduMate</title> <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        // Define custom colors for consistency
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

        <main class="flex-grow mx-auto max-w-[430px] lg:max-w-screen-xl w-full px-4 lg:px-0 pb-16">
            <div
                class="studyGroup-peerTutor flex flex-col md:flex-row justify-center mt-6 mb-4 space-y-4 md:space-y-0 md:space-x-4 lg:my-10 lg:space-x-12 lg:px-10">
                <a href="/edumate/study-grup"
                    class="w-full md:w-1/2 lg:flex-grow hover:scale-105 transition-transform duration-200 shadow-md">
                    <div
                        class="h-[60px] rounded-xl bg-edumate-black flex justify-center items-center text-center text-lg font-bold text-edumate-white lg:h-[70px] lg:text-xl lg:px-12 lg:py-4 hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                        Study<br>Group
                    </div>
                </a>
                <a href="/edumate/peer-tutoring"
                    class="w-full md:w-1/2 lg:flex-grow hover:scale-105 transition-transform duration-200 shadow-md">
                    <div
                        class="h-[60px] rounded-xl bg-edumate-black flex justify-center items-center text-center text-lg font-bold text-edumate-white lg:h-[70px] lg:text-xl lg:px-12 lg:py-4 hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                        Peer<br>Tutoring
                    </div>
                </a>
            </div>

            <div class="searchbar py-4 flex items-center lg:py-8 lg:px-10">
                <input type="text"
                    class="search w-full max-w-[289px] h-[40px] rounded-full bg-edumate-black px-4 py-2 mr-2 border-none font-bold text-edumate-white placeholder:text-edumate-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:max-w-[calc(100%-120px)] lg:h-[50px] lg:text-lg"
                    placeholder="Cari materi">
                <img src="image/search.png"
                    class="search-icon w-[37px] h-[37px] bg-edumate-black rounded-full p-2 cursor-pointer lg:w-[45px] lg:h-[45px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Search Icon">
                <img src="image/notif.png"
                    class="w-[48px] h-[48px] rounded-full p-2 ml-auto cursor-pointer lg:w-[55px] lg:h-[55px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Notifications Icon">
            </div>

            <div class="card-grid grid grid-cols-2 gap-4 mt-4 md:px-6 lg:grid-cols-3 lg:gap-6 lg:px-10">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <div
                        class="w-full h-[150px] rounded-2xl bg-edumate-black lg:h-[180px] hover:scale-105 transition-transform duration-200 cursor-pointer shadow-md">
                        <div class="flex flex-col justify-end h-full p-4">
                            <h2 class="text-edumate-white text-lg font-bold">Materi Pelajaran <?= $i + 1 ?></h2>
                            <p class="text-edumate-gray text-sm">Deskripsi singkat materi.</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </main>

        <div
            class="bottom-navbar w-full h-[92px] bg-edumate-black p-2 flex justify-center items-center rounded-full mt-auto lg:hidden fixed bottom-0 left-0 right-0 z-50 shadow-lg">
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

        <div class="hidden lg:flex justify-center w-full bg-edumate-black py-4 mt-8 rounded-t-3xl shadow-lg">
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