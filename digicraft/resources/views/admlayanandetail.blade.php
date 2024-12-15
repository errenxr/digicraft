<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Layanan</title>
    <link rel="stylesheet" href="../css/admlayanandetail.css">
</head>
<body>

    <div class="header">
        <h1>Detail Layanan</h1>
    </div>

    <div class="container">
        <h2 class="service-title">{{ $layanan->nama_layanan }}</h2>
        <p class="service-description">
            {!! nl2br($layanan->deskripsi) !!}
        </p>
        <p class="service-price">Rp{{ $layanan->formatted_price }}</p>
        <div class="button-container">
        <a href="{{ route('adminlayanan.tampil') }}" class="back-button">Kembali</a>
        <a href="{{ route('layanan.edit', $layanan->id_layanan) }}" class="edit-button">Edit</a>
        
        <form method="POST" action="{{ route('hapus.layanan', $layanan->id_layanan) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button">Hapus</button>
        </form>
    </div>

    </div>

</body>
</html>