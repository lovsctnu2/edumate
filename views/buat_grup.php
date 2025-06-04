<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
    <title>Buat Grup | EduMate</title>
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

        <main class="mx-auto max-w-[430px] lg:max-w-screen-xl w-full flex-grow p-4 pb-24 space-y-4 lg:p-8">
            <h2 class="text-2xl font-bold text-edumate-black mb-4 lg:text-3xl">Buat Study Grup</h2>

            <form action="index.php?page=simpan-grup" method="POST" class="space-y-6" autocomplete="off">
                <div>
                    <label for="nama_grup" class="block mb-2 font-medium text-edumate-black text-lg">Nama Grup</label>
                    <input type="text" id="nama_grup" name="nama_grup"
                        class="w-full border border-edumate-gray p-3 rounded-xl bg-edumate-white shadow-sm text-edumate-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:p-4 lg:text-lg"
                        placeholder="Contoh: SQL Squad" required>
                </div>

                <div>
                    <label for="jenjang" class="block mb-2 font-medium text-edumate-black text-lg">Jenjang</label>
                    <input type="text" id="jenjang" name="jenjang"
                        class="w-full border border-edumate-gray p-3 rounded-xl bg-edumate-white shadow-sm text-edumate-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:p-4 lg:text-lg"
                        placeholder="Contoh: Kuliah Semester 1" required>
                </div>

                <div>
                    <label for="materi" class="block mb-2 font-medium text-edumate-black text-lg">Materi</label>
                    <input type="text" id="materi" name="materi"
                        class="w-full border border-edumate-gray p-3 rounded-xl bg-edumate-white shadow-sm text-edumate-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 lg:p-4 lg:text-lg"
                        placeholder="Contoh: Dasar SQL" required>
                </div>

                <div class="mt-4">
                    <p class="text-edumate-black text-base mb-3 font-medium">Anggota Grup (opsional)</p>
                    <div
                        class="bg-edumate-white rounded-xl p-3 shadow-md flex items-center justify-between border border-edumate-gray/50 cursor-pointer hover:shadow-lg transition-shadow duration-200">
                        <div class="flex items-center gap-4 p-2">
                            <div
                                class="w-10 h-10 bg-edumate-gray rounded-full flex items-center justify-center lg:w-12 lg:h-12">
                                <img src="image/plus.png" alt="Tambah Anggota Icon" class="w-5 h-5 lg:w-6 lg:h-6">
                            </div>
                            <div>
                                <p class="font-medium text-edumate-black text-base lg:text-lg">Tambah Anggota</p>
                                <p class="text-xs text-gray-500 lg:text-sm">Opsional - Pilih anggota untuk bergabung</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <button type="submit"
                        class="block bg-edumate-black text-edumate-white text-lg font-semibold px-8 py-3 rounded-xl shadow-lg w-fit mx-auto text-center hover:bg-edumate-gray hover:text-edumate-black transition-colors duration-200 lg:px-12 lg:py-4 lg:text-xl">
                        Buat Grup
                    </button>
                </div>
            </form>
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