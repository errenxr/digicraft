<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/riwayatpesanan.css">
    <title>Order Status Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../img/dc.png" alt="Logo" class="logo-img">
                <div class="logo-text">DIGICRAFT</div>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('akunadmin.tampil') }}">Akun</a></li>
                    <li><a href="#">Riwayat</a></li>
                    <li><a href="{{ route('updatelayanan.halaman') }}">Update</a></li>
                </ul>
            </nav>
            <div class="logo-replacement">
                <img src="../img/search.png" alt="Logo" class="header-logo">
            </div>
        </header>

        <section class="status">
            <h2>Status Pemesanan yang Telah Diterima</h2>
            @foreach ($order_headers as $headers )
            <div class="order order-frame">
                <p>No pesanan: {{ $headers->no_pesanan }} / ID Customer: {{ $headers->id_customer }} / {{ $headers->created_at }}</p>

              <a href="{{ route('infopesanan.tampil', ['no_pesanan'=> $headers->no_pesanan]) }}"><button class="info-button">i</button></a>     
            </div>
            @endforeach
            <a href="{{ route('admindashboard.tampil') }}"><button class="back-button">Kembali</button></a>
        </section>
    </div>
</body>
</html>