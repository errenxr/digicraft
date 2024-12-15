<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pemesanan Baru - Digicraft</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/pesananmasuk.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <img src="../img/dc.png" alt="DC Logo">
                <div class="logo-text">DIGICRAFT</div>
            </div>
            <div class="nav">
                <a href="{{ route('akunadmin.tampil') }}" class="nav-item">AKUN</a>
                <a href="{{ route('riwayatpesanan.buka') }}" class="nav-item">RIWAYAT</a>
                <a href="{{ route('updatelayanan.halaman') }}" class="nav-item">UPDATE</a>
                <img src="../img/search.png" alt="Search" class="search-icon">
            </div>
        </div>
        <div class="container">
            <div class="title">Status Pemesanan Baru</div>
            <form action="{{ route('konfirmasipesanan') }}" method="POST">
                @csrf
            <ul class="order-list">
                @foreach ($order_headers as $headers )
                <li class="order-item">
                    <label>No pesanan: {{ $headers->no_pesanan }} / ID Customer: {{ $headers->id_customer }} / {{ $headers->created_at }}</label>
                   <a href="{{ route('infopesanan.tampil', ['no_pesanan'=> $headers->no_pesanan]) }}"> <button type="button" class="info-button">info</button></a>      
                    <input type="checkbox" name="konfirmasi[{{ $headers->id }}]" value="1" class="checkbox" {{ $headers->konfirmasi ? 'checked': '' }}>
                   
                </li>
                @endforeach
            </ul>
            <div class="action-buttons">
                <a href="{{ route('admindashboard.tampil') }}"><button type="button" class="button button-back">Kembali</button></a> 
                <button type="submit" class="button button-accept">Accept</button>
            </div>
        </form>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
</div>
          
        </div>
    </div>
</body>
</html>