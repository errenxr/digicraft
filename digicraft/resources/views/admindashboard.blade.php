<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigiCraft</title>
  <link rel="stylesheet" href="../css/admindashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo-container">
          <img src="../img/dc.png" alt="Logo" class="logo-image">
          <div class="logo-text">DIGICRAFT</div>
        </div>
        <nav class="nav">
          <a href="{{ route('akunadmin.tampil') }}" class="nav-link">Akun</a>
          <a href="{{ route('riwayatpesanan.buka') }}" class="nav-link">Riwayat</a>
          <a href="{{ route('updatelayanan.halaman') }}" class="nav-link">Update</a>
        </nav>
      </header>      
  <main class="main-container">
    <div class="card">
      <div class="icon-container">
        <img src="../img/tambah.png" alt="Logo" class="logo-image">
      </div>
      <p class="card-title">Tambah Layanan Jasa</p>
      <a href="{{ route('updatelayanan.halaman') }}"><button class="arrow-button">&gt;</button> </a>
    </div>
    <div class="card">
      <div class="icon-container">
        <img src="../img/layanantersedia.png" alt="Logo" class="logo-image">
      </div>
      <p class="card-title">Layanan Tersedia</p>
      <a href="{{ route('adminlayanan.tampil') }}"><button class="arrow-button">&gt;</button> </a>
    </div>
    <div class="card">
      <div class="icon-container">
        <img src="../img/Vectorpesanan.png" alt="Logo" class="logo-image">
      </div>
      <p class="card-title">Status Pemesanan</p>

      <a href="{{ route('pesananmasuk.tampil') }}"><button class="arrow-button">&gt;</button></a>
    </div>
  </main>
</body>
</html>
