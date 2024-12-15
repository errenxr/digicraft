<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Layanan Jasa</title>
  <link rel="stylesheet" href="../css/updatelayanan.css">
</head>
<body>
  <header class="header">
    <div class="logo-container">
      <img src="../img/dc.png" alt="Logo" class="logo-image">
      <h1 class="logo-text">DIGICRAFT</h1>
    </div>
    <nav class="nav">
      <a href="{{ route('akunadmin.tampil') }}" class="nav-link">Akun</a>
        <a href="{{ route('riwayatpesanan.buka') }}" class="nav-link">Riwayat</a>
        <a href="#" class="nav-link">Update</a>
        <a href="#"><img src="../img/search.png" alt="Search" class="search-icon"></a>
      </nav>
    </header>
  
    <main class="main-container">
      <h2 class="title">Update Layanan Jasa</h2>
      <form class="form" action="{{ route('updatelayanan.submit') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="tipe" class="form-label">Nama Layanan Baru</label>
          <input type="text" id="tipe" name="nama_layanan" class="form-input">
        </div>
        <div class="form-group">
          <label for="deskripsi" class="form-label">Deskripsi Layanan Baru</label>
          <textarea type="text" id="deskripsi" name="deskripsi" class="form-input"></textarea>
        </div>
        <div class="form-group">
          <label for="harga" class="form-label">Harga Layanan Baru</label>
          <input type="text" id="harga" name="biaya" class="form-input">
        </div>
        <div class="form-actions">
          <a href="{{ route('admindashboard.tampil') }}"><button type="button" class="btn btn-back">Kembali</button></a>
            
            <button type="submit" class="btn btn-submit">Upload</button>
          </div>          
      </form>
    </main>
  </body>
  </html>
  