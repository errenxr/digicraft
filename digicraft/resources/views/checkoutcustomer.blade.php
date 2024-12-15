<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Customer 1</title>
    <link rel="stylesheet" href="../css/checkoutcustomer.css">
</head>
<body>
 

    <div class="container">
        <h2 class="service-title">{{ $layanan->nama_layanan }}</h2>
        <p class="service-description">
            {!! nl2br($layanan->deskripsi) !!}
        </p>
        <p class="service-price">Rp{{ $layanan->formatted_price }}</p>

        <div class="form-actions">
          <a href="{{ route('dashboardcust.tampil') }}"><button type="button" class="btn btn-back">Kembali</button></a>
          <a href="{{ route('formcheckout.tampil', ['id_layanan' => $layanan->id_layanan]) }}">  
            <button type="submit" class="btn btn-submit">Checkout</button></a>

        </a>
          
          </div> 
    </div>
</body>
</html>