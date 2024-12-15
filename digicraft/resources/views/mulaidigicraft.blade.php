<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memulai Digicraft</title>
    <link rel="stylesheet" href="../css/memulaidigicraft.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/dc.png" alt="Logo">
            <span class="logo-text">DIGICRAFT</span>
        </div>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>

    <main class="main">
        <h1>Memulai Digicraft</h1>
        <p>Bagaimana anda dapat memulai Digicraft?</p>
        <div class="info-box">
            <p>Jika belum memiliki akun, anda harus mendaftarkan akun terlebih dahulu pada halaman registrasi dan masuk pada halaman login.</p>
            <p>Setelah mendaftarkan akun dan masuk, anda dapat mengakses layanan-layanan yang tersedia pada Digicraft.</p>
        </div>
        <div class="button-group">
        <a href="{{ route('helpcenter.tampil') }}"><button class="btn-back">Kembali</button></a> 
        <a href="{{ route('caramemesan') }}"><button class="btn-order">Cara memesan</button></a>
        </div>
    </main>
</body>
</html>