# Instruksi ERROR CLONE PROJECT 

**Perintah `composer install`**
Jika anda clone project saya, ada beberapa file yang akan hilang dikarenakan sebuah .gitignore, untuk tidak terjadi nya error saat anda menjalankan web server PHP `php artisan serve`, gunakan perintah `composer install` di dalam project yang anda clone untuk mengunduh file yang di butuhkan.

**.env errors**
gunakan `example .env` sebagai `.env` silahkan rename menjadi `.env` atau bisa juga menggunakan perintah `cp .env.example .env`

**KEY GENERATE**
agar project yang kita gunakan sama dengan di github maka gunakan perintah `php artisan key:generate`
