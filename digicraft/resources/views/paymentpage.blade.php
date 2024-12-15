<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="{{ asset('css/paymentpage.css') }}">

</head>
<body>
    <div class="container">
        <header>
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('img/dc.png') }}" alt="Logo">
                <span class="logo-text">DIGICRAFT</span>
            </div>
            <nav>
                <a href="#">AKUN</a>
                <a href="#">RIWAYAT</a>
                <a href="#">KONTAK</a>
            </nav>
            <div>
                <img src="{{ asset('img/search.png') }}" alt="Search Icon" style="height: 30px;">
            </div>
        </header>

        <div class="payment-title">Metode Pembayaran:</div>

        <div class="payment-methods">
            <div class="qr-code-container">
                <img src="{{ asset('img/qrcodedummy.jpeg') }}" alt="QR Code">
            </div>
        </div>

        <div class="payment-section">
            Pembayaran <p>Rp{{ $layanan->formatted_price }}</p>

            <form action="{{ route('uploadpayment.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="no_pesanan" value="{{ $orderdetails->no_pesanan }}">
                <label for="fileUpload" class="pay-button">Upload bukti pembayaran</label>
                <input id="fileUpload" type="file" name="bukti" accept=".png, .jpg, .jpeg" style="display:none;">
                <button type="submit" class="btn-konfirmasi">Konfirmasi</button>
            </form>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        </div>
    </div>
</body>
</html>