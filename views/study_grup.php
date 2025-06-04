<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Study Group | EduMate</title>
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

        <main class="mx-auto max-w-[430px] lg:max-w-screen-xl w-full flex-grow px-4 pt-5 pb-16">
            <div class="create-group-button py-2 lg:px-3">
                <a href="/edumate/buat-grup"
                    class="block w-full h-[40px] rounded-lg bg-edumate-black text-edumate-white shadow-md font-semibold flex items-center justify-center
                                lg:h-[50px] lg:text-lg hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200">
                    + Buat Grup Baru
                </a>
            </div>

            <div class="searchbar py-4 flex items-center lg:px-3 lg:py-8">
                <input type="text"
                    class="search w-full max-w-[289px] h-[40px] rounded-lg bg-edumate-black px-4 py-2 mr-2 border-none font-bold text-edumate-white placeholder:text-edumate-white/70 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:max-w-[calc(100%-120px)] lg:h-[50px] lg:text-lg"
                    placeholder="Cari grup">
                <img src="image/search.png"
                    class="search-icon w-[37px] h-[37px] bg-edumate-black rounded-lg p-2 cursor-pointer lg:w-[45px] lg:h-[45px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Search Icon">
                <img src="image/notif.png"
                    class="w-[48px] h-[48px] rounded-full p-2 ml-auto cursor-pointer lg:w-[55px] lg:h-[55px] lg:p-2 hover:scale-110 transition-transform duration-200"
                    alt="Notifications Icon">
            </div>

            <section class="mb-6 lg:px-3">
                <h2 class="font-semibold text-edumate-black text-lg mb-2 lg:text-xl">Grup yang Diikuti</h2>
                <div
                    class="bg-edumate-white rounded-xl p-3 shadow-md flex gap-3 items-center border border-edumate-gray/50 hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <img src="public/images/profil_grup.png" alt="Frontend Warriors Group Profile"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-1">
                        <p class="font-semibold text-edumate-black text-base">Frontend Warriors</p>
                        <p class="text-gray-500 text-xs">Jenjang: Kuliah Semester 2</p>
                        <p class="text-gray-500 text-xs">Materi: HTML & CSS</p>
                    </div>
                    <a href="#"
                        class="bg-edumate-white border border-edumate-gray rounded-full px-3 py-1.5 text-xs shadow-sm text-edumate-black font-normal hover:bg-edumate-black hover:text-edumate-white transition-colors duration-200 lg:text-sm">
                        Lihat Grup
                    </a>
                </div>
            </section>

            <section class="lg:px-3">
                <h2 class="font-semibold text-edumate-black text-lg mb-2 lg:text-xl">Rekomendasi Study Group</h2>

                <div
                    class="bg-edumate-white rounded-xl p-3 shadow-md flex gap-3 items-center mb-3 border border-edumate-gray/50 hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <img src="public/images/profil_grup.png" alt="Backend Builders Group Profile"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-1">
                        <p class="font-semibold text-edumate-black text-base">Backend Builders</p>
                        <p class="text-gray-500 text-xs">Jenjang: Kuliah Semester 3</p>
                        <p class="text-gray-500 text-xs">Materi: Node.js</p>
                    </div>
                    <a href="#"
                        class="bg-edumate-black text-edumate-white rounded-full px-3 py-1.5 text-xs shadow-sm font-normal hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200 lg:text-sm">
                        Gabung Grup
                    </a>
                </div>

                <div
                    class="bg-edumate-white rounded-xl p-3 shadow-md flex gap-3 items-center mb-3 border border-edumate-gray/50 hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <img src="public/images/profil_grup.png" alt="Pythonistas Club Group Profile"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-1">
                        <p class="font-semibold text-edumate-black text-base">Pythonistas Club</p>
                        <p class="text-gray-500 text-xs">Jenjang: Kuliah Semester 1</p>
                        <p class="text-gray-500 text-xs">Materi: Dasar Python</p>
                    </div>
                    <a href="#"
                        class="bg-edumate-black text-edumate-white rounded-full px-3 py-1.5 text-xs shadow-sm font-normal hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200 lg:text-sm">
                        Gabung Grup
                    </a>
                </div>

                <div
                    class="bg-edumate-white rounded-xl p-3 shadow-md flex gap-3 items-center mb-3 border border-edumate-gray/50 hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <img src="public/images/profil_grup.png" alt="React Rangers Group Profile"
                        class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-1">
                        <p class="font-semibold text-edumate-black text-base">React Rangers</p>
                        <p class="text-gray-500 text-xs">Jenjang: Kuliah Semester 2</p>
                        <p class="text-gray-500 text-xs">Materi: React.js</p>
                    </div>
                    <a href="#"
                        class="bg-edumate-black text-edumate-white rounded-full px-3 py-1.5 text-xs shadow-sm font-normal hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200 lg:text-sm">
                        Gabung Grup
                    </a>
                </div>
            </section>
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