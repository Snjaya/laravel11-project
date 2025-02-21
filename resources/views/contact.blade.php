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
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, silakan isi formulir di bawah ini.</p>
        <form action="#" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>
    <footer>
        <p>&copy; Dibuat dengan ❤ oleh {{ $nama }}</p>
    </footer>
</body>
</html>