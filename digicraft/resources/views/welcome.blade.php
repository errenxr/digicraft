<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/landing.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di <span>Digicraft</span></h1>
        <p>"Memberikan layanan profesional untuk membantu digitalisasi UMKM. Percayakan bisnis Anda kepada kami dan fokuslah mengembangkan usaha Anda!"</p>
        <div class="buttons">
            <a href="{{ route('regis.tampil') }}" class="button">Daftar</a>
            <a href="{{ route('login') }}" class="button">Masuk</a>
        </div>
        <div class="background-bubbles">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
    </div>
</body>
</html>