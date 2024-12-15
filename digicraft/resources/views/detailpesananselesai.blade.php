<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Customer 1</title>
    <link rel="stylesheet" href="{{ asset('css/detailpesanancust.css') }}">
</head>
<body>
 

    <div class="container">
        <h2 class="service-title">{{ $layanan->nama_layanan }}</h2>
        <p class="service-description">
            {!! nl2br($layanan->deskripsi) !!}
        </p>
        <p class="service-price">Rp{{ $layanan->formatted_price }}</p>
        <p class="service-description">Deskripsi pesanan: <br>{{ $order_details->deskripsi_pesanan }}</p>
        <p class="service-description">Email pengiriman: <br>{{ $order_details->email_kirim }}</p>

        <p>Bukti Pembayaran</p>
        @if ($payment && $payment->bukti)
            <img src="{{ asset('storage/' . $payment->bukti) }}" style="max-width: 100%; height: auto;">
        @else
            <p>Belum ada bukti pembayaran.</p>
        @endif


        <div class="form-actions">
        <a href="{{ route('konfirmasiselesai.tampil') }}"><button type="button" class="btn btn-back">Kembali</button></a>
          </div> 
    </div>
</body>
</html>