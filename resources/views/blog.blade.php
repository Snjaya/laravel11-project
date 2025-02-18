<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="/">Laravel 11</a>
    <a href="/home">Home</a>
    <a href="/home">About</a>
    <a href="/contact">Contact</a>
    <header>
        <h1>Blog Tentang Laravel</h1>
    </header>
    <article>
    <h2>Apa Itu Laravel?</h2>
    <p>Laravel adalah salah satu framework PHP yang paling populer dan banyak digunakan. Laravel dirancang untuk mempermudah pengembangan aplikasi web dengan fitur-fitur seperti routing, middleware, ORM (Eloquent), dan banyak lagi.</p>
    
    <h2>Mengapa Memilih Laravel?</h2>
    <p>Laravel menawarkan berbagai keuntungan, di antaranya:</p>
        <ul>
            <li>Syntax yang elegan dan mudah dipahami.</li>
            <li>Komunitas yang besar dan aktif.</li>
            <li>Fitur bawaan yang lengkap seperti authentication, queue, dan job scheduling.</li>
        </ul>

        <h2>Cara Memulai Laravel</h2>
        <p>Untuk memulai menggunakan Laravel, Anda membutuhkan:</p>
        <ol>
            <li>PHP versi 8.0 atau lebih baru.</li>
            <li>Composer untuk mengelola dependensi.</li>
            <li>Web server seperti Apache atau Nginx.</li>
        </ol>
        <p>Anda dapat menginstal Laravel dengan menjalankan perintah berikut di terminal:</p>
        <pre>
composer create-project laravel/laravel nama-proyek-anda
        </pre>

        <h2>Dokumentasi Laravel</h2>
        <p>Untuk mempelajari lebih lanjut tentang Laravel, kunjungi <a href="https://laravel.com/docs" target="_blank">dokumentasi resmi Laravel</a>.</p>
    </article>
    <footer>
        <p>&copy; Dibuat dengan ❤ oleh {{ $nama }}</p>
    </footer>
</body>
</html>