<?php
// controllers/HomepageController.php

class HomepageController {

    public function index() {
        // 1. Siapkan data pengguna saat ini (current user)
        // Data ini biasanya diambil dari sesi atau database setelah login
        $currentUser = [
            'nama_lengkap' => 'Daniel Baskara',
            'peran' => 'Mahasiswa',
            'url_foto_profil' => 'image/profile.png' // Pastikan path ini benar dari root publik
        ];

        // 2. Siapkan data materi
        // Ini adalah bagian penting yang Anda tanyakan.
        // Array ini berisi beberapa 'materi' fiktif.
        $materials = [
            [
                'judul' => 'Pengantar React JS',
                'deskripsi' => 'Dasar-dasar pengembangan UI dengan React JS.'
            ],
            [
                'judul' => 'Algoritma dan Struktur Data',
                'deskripsi' => 'Memahami konsep penting dalam pemrograman.'
            ],
            [
                'judul' => 'Basis Data SQL Lanjutan',
                'deskripsi' => 'Topik mendalam tentang optimalisasi query SQL.'
            ],
            [
                'judul' => 'Pengembangan Web dengan PHP',
                'deskripsi' => 'Membangun aplikasi web dinamis dengan PHP.'
            ],
            [
                'judul' => 'Desain Grafis untuk Pemula',
                'deskripsi' => 'Prinsip dasar desain visual dan tools.'
            ],
            [
                'judul' => 'Machine Learning: Intro',
                'deskripsi' => 'Pengenalan konsep dan aplikasi Machine Learning.'
            ],
        ];

        // 3. Siapkan data mentor rekomendasi (jika ada)
        $recommendedMentors = [
            [
                'id' => 1,
                'nama_lengkap' => 'Rayhan Noor',
                'peran' => 'mentor',
                'url_foto_profil' => 'image/mentor_rayhan.png', // Contoh path
                'spesialisasi' => 'React JS',
                'rating' => 4.8
            ],
            [
                'id' => 2,
                'nama_lengkap' => 'Siti Aminah',
                'peran' => 'mentor',
                'url_foto_profil' => 'image/mentor_siti.png', // Contoh path
                'spesialisasi' => 'Algoritma & PHP',
                'rating' => 4.5
            ],
        ];

        // 4. Siapkan data murid rekomendasi (jika ada)
        $recommendedStudents = [
            [
                'id' => 1,
                'nama_lengkap' => 'Budi Santoso',
                'peran' => 'murid',
                'url_foto_profil' => 'image/student_budi.png', // Contoh path
                'minat_belajar' => 'Pengembangan Web',
                'tingkat_pendidikan' => 'Mahasiswa'
            ],
            [
                'id' => 2,
                'nama_lengkap' => 'Citra Lestari',
                'peran' => 'murid',
                'url_foto_profil' => 'image/student_citra.png', // Contoh path
                'minat_belajar' => 'Desain Grafis',
                'tingkat_pendidikan' => 'SMA'
            ],
        ];

        // 5. Sertakan (include) file view.
        // Dengan menggunakan `extract($this->data);` atau langsung menggunakan `include`,
        // semua variabel yang telah didefinisikan di controller akan tersedia di dalam view.
        // Cara umum adalah menggunakan `extract()` setelah variabel disiapkan.
        // Atau, jika Anda tidak menggunakan kelas, Anda bisa langsung include view.
        // Untuk contoh ini, kita asumsikan ini adalah bagian dari sistem routing sederhana.

        // Agar variabel tersedia di view, Anda harus meletakkannya di scope yang sama dengan include.
        // Cara paling sederhana adalah dengan mendeklarasikan variabel langsung sebelum include.
        // Aturan: variabel yang dideklarasikan sebelum `include` akan tersedia di dalam file yang di-include.
        include __DIR__ . '/../views/homepage.php'; // Sesuaikan path jika struktur Anda berbeda
    }
}