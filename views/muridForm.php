<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Temukan Murid | EduMate</title> <script src="https://cdn.tailwindcss.com"></script>
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
            class="navbar bg-edumate-base w-full h-[180px] rounded-bl-3xl rounded-br-3xl px-4 md:px-10 pb-10 pt-[88px] text-xl flex justify-between items-center lg:h-[120px] lg:pt-5 lg:px-20">
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

        <main class="flex-grow mx-auto max-w-md w-full px-4 py-8 lg:max-w-screen-xl flex flex-col items-center">
            <div class="title flex justify-center items-center pt-2 pb-6 text-edumate-base">
                <img src="image/muridd.png" class="w-[30px] h-[30px] mr-2 lg:w-[40px] lg:h-[40px] lg:mr-3"
                    alt="Murid Icon">
                <h1 class="text-2xl font-bold lg:text-3xl">Temukan Murid Baru</h1>
            </div>

            <form action="/edumate/request-mentor" method="POST"
                class="form-request w-[333px] bg-edumate-base rounded-[55px] mx-auto mb-12 px-7 pt-10 pb-10 lg:w-[450px] lg:px-10 lg:pt-12 lg:pb-12 shadow-lg">
                <div class="mb-4">
                    <label for="materi" class="text-edumate-white text-base font-bold pl-2 mb-1 block lg:text-lg">Nama
                        Materi</label>
                    <input type="text" id="materi" name="materi"
                        class="w-full h-[47px] bg-edumate-white rounded-2xl px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent lg:h-[55px] lg:text-base text-edumate-black"
                        required />
                </div>

                <div class="mb-4">
                    <label for="jenjang"
                        class="text-edumate-white text-base font-bold pl-2 mb-1 block lg:text-lg">Jenjang Kelas</label>
                    <input type="text" id="jenjang" name="jenjang"
                        class="w-full h-[47px] bg-edumate-white rounded-2xl px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent lg:h-[55px] lg:text-base text-edumate-black"
                        required />
                </div>

                <div class="mb-6">
                    <label for="kredibilitas"
                        class="text-edumate-white text-base font-bold pl-2 mb-1 block lg:text-lg">Kredibilitas</label>
                    <textarea id="kredibilitas" name="kredibilitas"
                        class="w-full h-[114px] bg-edumate-white rounded-2xl px-4 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent lg:h-[150px] lg:text-base text-edumate-black"
                        required></textarea>
                </div>

                <button type="submit"
                    class="block w-[152px] h-[47px] bg-edumate-white rounded-3xl mx-auto flex justify-center items-center font-bold text-lg text-edumate-base hover:bg-edumate-gray transition-colors duration-200 lg:w-[200px] lg:h-[55px] lg:text-xl">
                    UNGGAH
                </button>
            </form>
        </main>

        <div
            class="bottom-navbar w-full h-[92px] bg-edumate-base p-2 flex justify-center items-center rounded-full mt-auto lg:hidden fixed bottom-0 left-0 right-0 z-50">
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

        <div class="hidden lg:flex justify-center w-full bg-edumate-base py-4 mt-8 rounded-t-3xl">
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

    </div>
</body>

</html>