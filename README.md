<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/user-attachments/assets/c245cc3a-283b-4ca8-8a3f-6ab7db111526" width="400" alt="Laravel Logo"></a></p>


## Tentang Project Kami (Perusahaan LogiTrack)

Dalam era digital yang semakin berkembang, industri logistik menghadapi tantangan besar dalam efisiensi pengiriman, transparansi pelacakan, serta manajemen rantai pasok yang optimal. Banyak perusahaan dan pelanggan mengalami kesulitan dalam memonitor status pengiriman secara real-time, yang sering kali menyebabkan keterlambatan, kehilangan barang, atau ketidakpastian dalam distribusi.

LogiTrack hadir sebagai solusi inovatif dalam sistem informasi logistik dan pelacakan pengiriman. Dengan teknologi berbasis web dan aplikasi, LogiTrack memberikan layanan pelacakan real-time, optimasi rute, serta analisis data yang membantu perusahaan logistik, e-commerce, dan pelanggan dalam mengelola pengiriman dengan lebih efisien.

Kami berkomitmen untuk menghadirkan sistem yang mudah digunakan, akurat, dan andal dalam memastikan setiap proses pengiriman berjalan lancar. Dengan LogiTrack, bisnis dapat meningkatkan produktivitas, mengurangi biaya operasional, serta meningkatkan kepuasan pelanggan melalui sistem yang terintegrasi dan transparan.

Sebagai perusahaan yang mengutamakan inovasi dan efisiensi, LogiTrack terus berkembang dengan mengadopsi teknologi terbaru dalam bidang logistik dan tracking, sehingga mampu menjadi mitra strategis bagi bisnis yang membutuhkan solusi logistik modern dan terpercaya.

## Anggota Kelompok

Muhammad Hafizh Haykal (2308001010041) <br>
Muhammad Radit Febriansyah (2308001010065) <br>
Octa Ramadhana Alfaresi (2308001010031) <br>
Farhan Nouval (2308001010019) <br>

## Tugas Masing Masing

Project Manager (Hafizh) <br>
Front-end (Radit) <br>
Back-end (Octa) <br>
Quality Ansurance (Farhan) <br>

### Bahan/Alat/Package

Laravel V9.52.20<br>
PHP V8.3.11 <br>
mysql <br>
bootstrap <br>
Html <br>
Css <br>

## Panduan DOWNLOAD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Untuk menggunakan project Laravel dari GitHub, langkah pertama yang perlu dilakukan adalah meng-clone repository ke dalam komputer. Pastikan Git sudah terinstal, lalu buka terminal atau command prompt dan jalankan perintah:  

```bash
git clone <URL-REPOSITORY-GITHUB>
```

Gantilah `<URL-REPOSITORY-GITHUB>` dengan URL asli repository tersebut. Setelah proses cloning selesai, masuk ke dalam folder project dengan perintah:  

```bash
cd nama-folder-project
```

Selanjutnya, pastikan Composer sudah terinstal di komputer. Jika belum, unduh dari [getcomposer.org](https://getcomposer.org/), lalu jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan oleh Laravel:  

```bash
composer install
```

Setelah itu, konfigurasi file `.env` dengan cara menyalin file `.env.example` menjadi `.env` menggunakan perintah:  

```bash
cp .env.example .env
```

Kemudian, buka file `.env` dengan text editor seperti VS Code dan sesuaikan konfigurasi database sesuai dengan pengaturan di sistem. Contohnya seperti berikut:  

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

Setelah konfigurasi selesai, buat application key dengan menjalankan perintah:  

```bash
php artisan key:generate
```

Langkah berikutnya adalah membuat database dan menjalankan migrasi untuk membangun struktur tabel. Pastikan MySQL atau MariaDB sudah berjalan, kemudian buat database sesuai dengan nama yang telah ditentukan di file `.env`. Setelah itu, jalankan perintah:  

```bash
php artisan migrate
```

Jika project menyertakan seeder untuk mengisi data awal, jalankan perintah berikut:  

```bash
php artisan db:seed
```

Untuk menjalankan aplikasi, gunakan perintah:  

```bash
php artisan serve
```

Aplikasi Laravel dapat diakses melalui browser di alamat `http://127.0.0.1:8000`. Jika project menggunakan frontend berbasis Tailwind, Vue, atau React, pastikan juga menginstal dependensi frontend dengan menjalankan perintah:  

```bash
npm install
npm run dev
```

Dengan langkah-langkah di atas, project Laravel seharusnya sudah siap dijalankan. Jika mengalami kendala, silakan tanyakan lebih lanjut. 🚀
