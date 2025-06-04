<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Peer Tutoring | EduMate</title> <script src="https://cdn.tailwindcss.com"></script>
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
    <style>
        /* Hide scrollbar for webkit browsers */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="bg-edumate-white font-poppins text-edumate-black">

    <div class="min-h-screen flex flex-col">

        <div
            class="navbar bg-edumate-black w-full h-[180px] rounded-bl-3xl rounded-br-3xl px-4 md:px-10 pb-10 pt-[88px] text-xl flex justify-between items-center lg:h-[120px] lg:pt-5 lg:px-20">
            <img src="image/logo.png" alt="EduMate Logo" class="w-[92px] h-[51px] lg:w-[120px] lg:h-[66px]" />
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
            <div class="searchbar py-4 flex items-center lg:px-10 lg:py-8">
                <input type="text"
                    class="search w-full max-w-[289px] h-[40px] rounded-full bg-edumate-black px-4 py-2 mr-2 border-none font-bold text-edumate-white placeholder:text-edumate-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:max-w-[calc(100%-120px)] lg:h-[50px] lg:text-lg"
                    placeholder="Cari mentor / murid">
                <img src="image/search.png"
                    class="search-icon w-[37px] h-[37px] bg-edumate-black rounded-full p-2 cursor-pointer lg:w-[45px] lg:h-[45px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Search Icon">
                <img src="image/notif.png"
                    class="w-[48px] h-[48px] rounded-full p-2 ml-auto cursor-pointer lg:w-[55px] lg:h-[55px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Notifications Icon">
            </div>

            <hr class="border-2 mx-auto w-3/4 border-edumate-gray my-2 lg:w-full lg:my-6">

            <div
                class="button-group flex flex-col md:flex-row justify-around p-4 space-y-4 md:space-y-0 md:space-x-4 lg:justify-center lg:space-x-12 lg:py-8">
                <a href="/edumate/mentor-form"
                    class="bg-edumate-black rounded-full px-8 py-3 flex items-center justify-center text-center w-full md:w-auto lg:px-12 lg:py-4 lg:text-xl shadow-md hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                    <img src="image/mentor2.png" alt="Mentor Icon" class="w-8 h-8 mr-2 lg:w-10 lg:h-10 lg:mr-3">
                    <span class="text-sm font-bold text-edumate-white lg:text-lg">Request <br> Mentor Baru</span>
                </a>
                <a href="/edumate/murid-form"
                    class="bg-edumate-black rounded-full px-8 py-3 flex items-center justify-center text-center w-full md:w-auto lg:px-12 lg:py-4 lg:text-xl shadow-md hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                    <img src="image/murid.png" alt="Murid Icon" class="w-8 h-8 mr-2 lg:w-10 lg:h-10 lg:mr-3">
                    <span class="text-sm font-bold text-edumate-white lg:text-lg">Temukan <br> Murid Baru</span>
                </a>
            </div>

            <div class="px-6 mt-2 lg:px-10 lg:mt-8">
                <h2 class="text-lg font-bold text-edumate-black mb-2 lg:text-xl lg:mb-4">Mentor untuk kamu</h2>
                <div
                    class="mentor-list flex gap-8 pl-5 overflow-x-auto pb-4 scrollbar-hide lg:pl-0 lg:grid lg:grid-cols-4 lg:gap-6">
                    <div
                        class="mentor-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-between shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <div>
                            <img src="image/profile.png" alt="Rayhan Noor's profile picture"
                                class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                            <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Rayhan Noor
                            </h3>
                            <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Mahasiswa</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex items-center">
                                <img src="image/star.png" alt="Star rating icon"
                                    class="w-4 h-4 mt-1 mr-1 lg:w-5 lg:h-5">
                                <span class="mt-1 text-xs text-edumate-white font-bold lg:text-sm">5.0</span>
                            </div>
                            <div
                                class="mt-1 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                                React js</div>
                        </div>
                    </div>

                    <div
                        class="mentor-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-between shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <div>
                            <img src="image/profile.png" alt="Tristan Juliano's profile picture"
                                class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                            <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Tristan
                                Juliano</h3>
                            <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Mahasiswa</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex items-center">
                                <img src="image/star.png" alt="Star rating icon"
                                    class="w-4 h-4 mt-1 mr-1 lg:w-5 lg:h-5">
                                <span class="mt-1 text-xs text-edumate-white font-bold lg:text-sm">4.8</span>
                            </div>
                            <div
                                class="mt-1 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                                React js</div>
                        </div>
                    </div>
                    <div
                        class="mentor-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-between shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <div>
                            <img src="image/profile.png" alt="Budi Santoso's profile picture"
                                class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                            <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Budi
                                Santoso</h3>
                            <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Dosen</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex items-center">
                                <img src="image/star.png" alt="Star rating icon"
                                    class="w-4 h-4 mt-1 mr-1 lg:w-5 lg:h-5">
                                <span class="mt-1 text-xs text-edumate-white font-bold lg:text-sm">4.9</span>
                            </div>
                            <div
                                class="mt-1 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                                Python</div>
                        </div>
                    </div>
                    <div
                        class="mentor-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-between shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <div>
                            <img src="image/profile.png" alt="Citra Dewi's profile picture"
                                class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                            <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Citra Dewi
                            </h3>
                            <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Praktisi</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex items-center">
                                <img src="image/star.png" alt="Star rating icon"
                                    class="w-4 h-4 mt-1 mr-1 lg:w-5 lg:h-5">
                                <span class="mt-1 text-xs text-edumate-white font-bold lg:text-sm">5.0</span>
                            </div>
                            <div
                                class="mt-1 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                                UI/UX</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 mt-2 mb-3 lg:px-10 lg:mt-8">
                <h2 class="text-lg font-bold text-edumate-black mb-2 lg:text-xl lg:mb-4">Murid untuk kamu</h2>
                <div
                    class="student-list flex gap-8 pl-5 overflow-x-auto pb-4 scrollbar-hide lg:pl-0 lg:grid lg:grid-cols-4 lg:gap-6">
                    <div
                        class="student-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-center items-center shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <img src="image/profile.png" alt="Daniel Baskara's profile picture"
                            class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                        <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Daniel Baskara
                        </h3>
                        <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Mahasiswa</p>
                        <div
                            class="mt-2 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                            HTML</div>
                    </div>

                    <div
                        class="student-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-center items-center shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <img src="image/profile.png" alt="Adnan Denan's profile picture"
                            class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                        <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Adnan Denan
                        </h3>
                        <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Mahasiswa</p>
                        <div
                            class="mt-2 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                            JavaScript</div>
                    </div>
                    <div
                        class="student-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-center items-center shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <img src="image/profile.png" alt="Siti Rahayu's profile picture"
                            class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                        <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Siti Rahayu
                        </h3>
                        <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Pelajar SMA</p>
                        <div
                            class="mt-2 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                            Matematika</div>
                    </div>
                    <div
                        class="student-card flex-shrink-0 w-[150px] h-[160px] bg-edumate-black rounded-2xl p-4 flex flex-col justify-center items-center shadow-md lg:w-auto lg:h-auto lg:aspect-square hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <img src="image/profile.png" alt="Bayu Pramono's profile picture"
                            class="w-16 h-16 rounded-full mx-auto lg:w-20 lg:h-20">
                        <h3 class="text-sm font-bold text-center text-edumate-white mt-2 lg:text-base">Bayu Pramono
                        </h3>
                        <p class="text-xs text-center text-edumate-white/70 lg:text-sm">Pelajar SMP</p>
                        <div
                            class="mt-2 bg-edumate-white rounded-full px-2 py-1 text-xs font-bold text-edumate-black lg:px-3 lg:py-1.5 lg:text-sm">
                            Bahasa Inggris</div>
                    </div>
                </div>
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