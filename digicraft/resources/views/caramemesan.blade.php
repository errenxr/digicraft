<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Memesan</title>
    <link rel="stylesheet" href="../css/caramemesan.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/dc.png" alt="Logo">
            <span class="logo-text">DIGICRAFT</span>
        </div>
    </header>

    <main class="main">
        <h1>Cara Memesan</h1>
        <p>Jangan bingung lagi bagaimana cara memesan di Digicraft</p>
        <div class="info-box">
            <p>Klik layanan yang anda inginkan</p>
            <p>Pastikan anda membaca informasi layanan dengan benar sebelum melakukan pemesanan</p>
            <p>Jika yakin ingin memesan, silahkan klik ‘Checkout’ dan masukkan deskripsi pesanan serta email</p>
            <p>‘Deskripsi pesanan’ diisi sedetail mungkin bagaimana konsep dan hasil yang anda inginkan dari layanan
                yang anda pesan.
                Sedangkan email ialah email aktif anda. Kami akan mengirim hasil pengerjaan ke email anda</p>
            <p>Selanjutnya klik ‘Checkout’ dan anda akan diarahkan ke halaman QR Code pembayaran. Silahkan lakukan
                pembayaran.
                Pesanan anda tidak dikonfirmasi apabila tidak mengunggah bukti pembayaran yang benar</p>
            <p>Setelah dilakukan pembayaran, silahkan upload bukti pembayaran. Admin akan mengonfirmasi pesanan anda.
                Pesanan selesai dan tunggu hingga pengerjaan pesanan anda selesai</p>
        </div>
        <div class="button-group">
            <a href="{{ route('helpcenter.tampil') }}"><button class="btn-back">Kembali</button></a>
           <a href="{{ route('dashboardcust.tampil') }}"><button class="btn-order">Memulai Digicraft</button></a> 
        </div>
    </main>
</body>

</html>