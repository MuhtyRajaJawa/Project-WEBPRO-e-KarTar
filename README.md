E-KARTAR 
E-KARTAR adalah website sistem informasi berbasis web yang dirancang untuk membantu anggota Karang Taruna dalam mengelola data organisasi secara lebih efisien, terpusat, dan transparan.
Sistem ini memudahkan pengelolaan anggota, kegiatan, dan keuangan dengan fitur CRUD lengkap (Create, Read, Update, Delete).

> Tujuan Project
Website E-KARTAR dibuat untuk:
1. Mempermudah pengurus Karang Taruna dalam mengelola data anggota.
2. Mencatat dan mengelola kegiatan secara terstruktur.
3. Mengelola data keuangan secara rapi dan transparan.
4. Mengurangi pencatatan manual yang rawan kesalahan.

> Fitur Utama
1. Manajemen Anggota
    Tambah, edit, hapus, dan lihat detail anggota.
2. Manajemen Kegiatan
    Pengelolaan data kegiatan Karang Taruna.
3. Manajemen Keuangan
    Pencatatan pemasukan dan pengeluaran.
4. CRUD Lengkap
    Semua data dapat ditambah, diubah, dihapus, dan dilihat detailnya.
5. Antarmuka Web yang Mudah Digunakan

> Software yang kami gunakan;
1. PHP 
2. Laravel Framework
3. MySQL
4. Git & GitHub
5. Laragon (Local Development Environment)

> Tim Pengembang                     
1. Muhty Alyansyah(19241645) Leader & Integrasi Sistem     
2. Frediansyah Justisia(19240365) Website Design                
3. Eugenia Inez Muhkhlistiani Azaria(19240375) Fitur Anggota                 
4. Daulia Artika Samdani(19240995) Fitur Anggota                 
5. Sahda Nabilah(19240906) Fitur Keuangan                
6. Shafyya Putri Meyranti(19241373) Testing                       

> Cara Menjalankan Project
1. Clone Repository
git clone https://github.com/MuhtyRajajawa/Project-WEBPRO-e-KarTar.git
cd Project-WEBPRO-e-KarTar
2. Install Dependency
composer install
3. Copy Environment
cp .env.sistemkartar .env
php artisan key:generate
4. Setting Database
DB_DATABASE=db_karangtaruna
DB_USERNAME=root
DB_PASSWORD=
5. Jalankan Migrasi
php artisan migrate
6. Jalankan Serve
php artisan serve
7. Akses Dibrowser
http://127.0.0.1:8000/login

> Alur Kerja Tim (Git Workflow)
1. Setiap anggota bekerja di branch masing-masing
2. Commit dilakukan secara bertahap
3. Push ke branch
4. Membuat Pull Request
5. Leader melakukan review & merge ke main

> Bukti Kontribusi
Kontribusi anggota dapat dilihat pada:
Tab Commits
Tab Pull Requests
Tab Insights → Contributors

#Catatan
Project ini dikembangkan secara kolaboratif menggunakan GitHub
sebagai media version control dan dokumentasi kerja tim.




