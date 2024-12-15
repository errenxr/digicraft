<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Checkout</title>
  <link rel="stylesheet" href="../css/formcheckout.css">
</head>
<body>

  @if (session('message'))
  <div style="color: green;">{{ session('message') }}</div>
  @endif
  
    <main class="main-container">
      <h2 class="title">Checkout</h2>
      <form class="form" action="{{ route('formcheckout.submit') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="hidden" name="id_layanan" value="{{ $layanan->id_layanan }}">
        </div>
        <div class="form-group">
          <label class="form-label">Nama Layanan</label>
          <p class="service-title">{{ $layanan->nama_layanan }}</p>
        </div>
        <div class="form-group">
          <label class="form-label">Deskripsi Layanan</label>
          <p class="service-description">{!! nl2br($layanan->deskripsi) !!}</p>
        </div>
        <div class="form-group">
          <label class="form-label">Harga Layanan</label>
          <p class="service-price">Rp{{ $layanan->formatted_price }}</p>
        </div>

        <div class="form-group">
          <label for="deskripsi" class="form-label">Deskripsi Pesanan</label>
          <input type="text" id="deskripsi" name="deskripsi_pesanan" class="form-input">
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email Aktif</label>
          <input type="email" id="email" name="email_kirim" class="form-input">
        </div>


         
        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Checkout</button>
          </div>          
      </form>
    </main>
  </body>
  </html>
  