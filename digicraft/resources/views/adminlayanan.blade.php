<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGICRAFT - Layanan</title>
    <link rel="stylesheet" href="../css/adminlayanan.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-container">
                <img src="../img/dc.png" alt="Logo" class="logo-image">
                <h1 class="logo-text">DIGICRAFT</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('akunadmin.tampil') }}"  class="nav-link">AKUN</a></li>
                    <li><a href="{{ route('riwayatpesanan.buka') }}">RIWAYAT</a></li>
                    <li><a href="#">KONTAK</a></li>
                </ul>
            </nav>
            <div class="search">
                <img src="../img/search.png" alt="Search Icon" class="search-icon">
            </div>
        </header>

        <main>
            <section class="services">
                <h2>Layanan Yang Tersedia</h2>
                <div class="service-grid">
                    @foreach ($layanan as $layan )
                    <a href="{{ route('detaillayanan', ['id_layanan' => $layan->id_layanan]) }}">
                    <button class="service-button">{{ $layan->nama_layanan }}</button> 
                    @endforeach
                    </a>
                </div>
                <a href="{{ route('admindashboard.tampil') }}"><button class="back-button">Kembali</button></a>
            </section>
        </main>
    </div>
</body>
</html>