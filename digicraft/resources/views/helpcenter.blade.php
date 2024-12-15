<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan Digicraft</title>
    <link rel="stylesheet" href="../css/helpcenter.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/dc.png" alt="Logo">
            <span class="logo-text">DIGICRAFT</span>
        </div>
        <nav>
            <ul>
                <a href="{{ route('dashboardcust.tampil') }}">HOME</a>
        <a href="{{ route('akuncustomer.tampil') }}">AKUN</a>
        <a href="{{ route('konfirmasiselesai.tampil') }}">RIWAYAT</a>
            </ul>
        </nav>
        
    </header>

    <main>
        <h2>Pusat Bantuan</h2>
        <p class="contact">
            Jelajahi pusat dukungan kami untuk mendapatkan jawaban atas pertanyaan Anda dan bantuan terkait
            pengalaman Anda di <strong>Digicraft</strong>.
        </p>
        <p class="contact">Telepon: +62 822-8411-0753</p>
        <p class="contact">Email: <a href="mailto:digicraft@gmail.com">digicraft@gmail.com</a></p>

        <div class="cards">
            <div class="card">
                <img src="../img/memulai.png" alt="Memulai Digicraft">
                <h3>Memulai Digicraft</h3>
                <p>Mempelajari dasar-dasar pengaturan akun Anda dan belajar tentang Digicraft.</p>
                <a href="{{ route('mulaidigicraft') }}">Pelajari lebih lanjut &rarr;</a>
            </div>

            <div class="card">
                <img src="../img/carapesan.png" alt="Cara Memesan">
                <h3>Cara Memesan</h3>
                <p>Mempelajari cara melakukan pemesanan yang benar di Digicraft.</p>
                <a href="{{ route('caramemesan') }}">Pelajari lebih lanjut &rarr;</a>
            </div>
        </div>
    </main>
</body>

</html>