<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Laravel Guide

-   **app/**: Direktori ini berisi kode aplikasi inti, seperti model, controller, dan middleware.
    -   Model <br>
        Model adalah bagian dari aplikasi yang bertanggung jawab untuk berinteraksi dengan basis data. Dalam konteks Laravel, model biasanya mewakili struktur tabel dalam basis data, dan sering digunakan untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data. Model sering kali berisi definisi relasi antar tabel, validasi data, dan logika bisnis lainnya.
    -   Controller <br>
        Controller adalah bagian dari aplikasi yang bertanggung jawab untuk menangani permintaan HTTP dari pengguna dan mengelola logika bisnis aplikasi. Dalam Laravel, controller berisi metode-metode yang disebut "aksi" yang dipanggil oleh rute aplikasi. Setiap aksi dalam controller biasanya berkorespondensi dengan sebuah permintaan HTTP, seperti menampilkan halaman, menyimpan data, atau menghapus entri dari basis data.
    -   Middleware <br>
        Middleware adalah lapisan perantara yang ditempatkan di antara permintaan masuk dan respon keluar dalam siklus pengelolaan permintaan HTTP. Middleware memungkinkan Anda untuk memodifikasi permintaan HTTP sebelum mencapai rute atau menghentikan penanganan permintaan jika kondisi tertentu tidak terpenuhi. Middleware sering digunakan untuk otentikasi, otorisasi, dan validasi permintaan.
-   **bootstrap/**: Direktori ini berisi file yang digunakan untuk memuat kerangka kerja dan konfigurasi awal sebelum aplikasi dijalankan.
-   **config/**: Direktori ini berisi berbagai file konfigurasi untuk aplikasi, seperti pengaturan database dan cache.
-   **database/**: Direktori ini berisi file terkait database, seperti migrasi, seeders, dan factories.
-   **public/**: Direktori ini adalah titik masuk utama aplikasi web dan berisi file-file publik seperti gambar dan JavaScript.
-   **resources/**: Direktori ini berisi sumber daya yang digunakan dalam pembuatan tampilan aplikasi, seperti template blade, file CSS, dan JavaScript.
-   **routes/**: Direktori ini berisi definisi rute untuk aplikasi, yang menghubungkan URL ke logika pengendali (controller).
-   **storage/**: Direktori ini berisi file-file yang dihasilkan oleh aplikasi, seperti file log dan file sementara.
-   **tests/**: Direktori ini berisi berkas-berkas tes untuk menguji aplikasi Anda.
-   **vendor/**: Direktori ini berisi dependensi aplikasi yang diinstal melalui Composer.

Berkas-berkas berikut ada di root direktori proyek:

-   **.env**: Berkas konfigurasi lingkungan untuk aplikasi.
-   **artisan**: Berkas untuk menjalankan perintah Artisan.
-   **composer.json**: Berkas konfigurasi Composer untuk mengelola dependensi PHP.
-   **composer.lock**: Berkas yang berisi informasi tentang dependensi yang dikunci oleh Composer.
-   **package.json**: Berkas konfigurasi untuk dependensi JavaScript.
-   **phpunit.xml**: Berkas konfigurasi untuk pengujian unit PHP.
-   **server.php**: Berkas untuk server pengembangan built-in PHP.

## Routes

Routes dalam Laravel digunakan untuk menentukan bagaimana aplikasi web Anda merespons permintaan HTTP yang masuk. Routes mendaftarkan URL tertentu dengan metode HTTP tertentu (seperti GET, POST, PUT, DELETE) dan menghubungkannya dengan aksi tertentu yang akan dijalankan ketika URL tersebut diakses.

### Jenis Routes

Ada beberapa jenis routes yang dapat didefinisikan dalam Laravel:

1. **Route Dasar**: Route dasar adalah route yang paling umum digunakan untuk menangani permintaan HTTP. Mereka menghubungkan URL dengan metode HTTP dan aksi tertentu dalam controller.

2. **Route Grup**: Route grup memungkinkan Anda mengelompokkan beberapa route bersama untuk diberikan prefix, middleware, atau namespace yang sama.

3. **Route Tersandi**: Route tersandi digunakan untuk mengamankan rute tertentu dengan autentikasi.

4. **Route API**: Route API memberikan cara mudah untuk mendaftarkan route yang terkait dengan API, biasanya tanpa perlu tampilan HTML.

### Definisi Route

Routes dalam Laravel didefinisikan dalam file `routes/web.php` untuk rute web dan `routes/api.php` untuk rute API. Anda dapat menggunakan helper `Route::` untuk mendefinisikan rute dengan berbagai metode HTTP seperti `get()`, `post()`, `put()`, `delete()`, dan lain-lain.

Setiap route menentukan aksi yang harus diambil ketika permintaan HTTP cocok dengan URL tertentu. Aksi ini dapat berupa fungsi Closure, pengendali (controller), atau tindakan lainnya seperti tampilan langsung atau penanganan langsung.

Routes dalam Laravel sangat fleksibel dan kuat, memungkinkan Anda untuk membuat aplikasi web yang kompleks dengan logika navigasi yang terorganisir dengan baik.

### Contoh Laravel Route

```
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
```

-   Kode di atas menunjukkan penggunaan Laravel Route untuk menangani permintaan HTTP GET pada URL root ('/').
-   `use Illuminate\Support\Facades\Route;`: Mengimpor kelas `Route` dari namespace `Illuminate\Support\Facades`.
-   `Route::get('/', function () { 'welcome' });`: Mendefinisikan route menggunakan metode `get()`. Route ini menangani permintaan HTTP GET pada URL root ('/'). Fungsi anonim yang diberikan akan dipanggil saat route diakses. Dalam contoh ini, ia mengembalikan view 'welcome'. 'welcome' merupakan nama file yang terletak di folder `resources/views/welcome.blade.php`.

## Urutan Buat Project

view(blade) -> controller -> view
