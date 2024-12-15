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


        <div class="form-actions">
        <a href="{{ route('formcheckout.tampil', ['id_layanan' => $layanan->id_layanan]) }}"><button type="button" class="btn btn-back">Kembali</button></a>
          <a href="{{ route('payment.tampil', ['id_layanan' => $layanan->id_layanan, 'no_pesanan'=> $order_details->no_pesanan]) }}">  
            <button type="submit" class="btn btn-submit">Bayar Sekarang</button></a>
          
          </div> 
    </div>
</body>
</html>