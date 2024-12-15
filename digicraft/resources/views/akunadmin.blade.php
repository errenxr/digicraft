<!DOCTYPE html>
<html lang="id">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akun Saya</title>
  <link rel="stylesheet" href="../css/akunadmin.css">
</head>

<body>
  <header class="header-container">
    <div>
      <img src="../img/dc.png" alt="Logo">
      <span class="logo-text">DIGICRAFT</span>
    </div>
    <nav>
      <a href="{{ route('admindashboard.tampil') }}">HOME</a>
      <a href="{{ route('riwayatpesanan.buka') }}">RIWAYAT</a>
    </nav>
  </header>

  <div class="content-container">
    <div class="form-container">
      <h2>Akun Saya</h2>
      <div class="input-group">
        <div>
          <label for="nama">Nama:</label>
          <input type="text" id="nama" value="{{ $admin->name }}" readonly>
        </div>
      </div>
      <div class="single-input">
        <label for="email">Email:</label>
        <input type="email" id="email" value="{{ $admin->email }}" readonly>
      </div>
      <a href="{{ route('logout') }}"><button class="logout-btn">Keluar</button></a>
    </div>
  </div>
</body>

</html>