<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DigiCraft</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style -->

    <link rel="stylesheet" href="../css/dashboard.css" />
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">DIGI<span>CRAFT</span></a>

      <div class="navbar-nav">
        <a href="#home">HOME</a>
        <a href="{{ route('akuncustomer.tampil') }}">AKUN</a>
        <a href="{{ route('konfirmasiselesai.tampil') }}">RIWAYAT</a>
        <a href="{{ route('helpcenter.tampil') }}">KONTAK</a>
      </div>

      <div class="navbar-extra">
       
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section/layar landing start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Buat UMKM kamu <span>go Digital</span></h1>
        <p>
          Transformasi UMKM menuju digitalisasi: <br> Solusi modern untuk meningkatkan efisiensi, jangkauan, dan pendapatan bisnis Anda
        </p>
        
      </main>
    </section>
    <!-- hero section/layar landing end -->

    <!-- buat section start-->
    <section id="menu" class="cta">
      <h2>Product Digi<span>Craft</span></h2>
     
      <div class="service-grid">
        @foreach ($layanan as $layan )
        <a href="{{ route('checkoutcustomer', ['id_layanan' => $layan->id_layanan]) }}">
        <button class="service-button">{{ $layan->nama_layanan }}</button> 
        @endforeach
        </a>
    </div>
    </section>
    <!-- buat section end-->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- my javascript -->
    <script src="../js/script.js"></script>
    <section id="menu" class="cta">
      <h2>FAQ</h2>
    </section>

    <div class="faq-container">
      <div class="faq-item">
          <div class="faq-question">Bagaimana cara melihat riwayat pemesanan?</div>
          <div class="faq-answer">Untuk melihat riwayat pemesanan, anda dapat menekan tombol “Riwayat” pada navigasi bar di dashboard</div>
      </div>
      <div class="faq-item">
          <div class="faq-question">Berapa lama waktu proses pengerjaan layanan?</div>
          <div class="faq-answer">Proses pengerjaan layanan tergantung pada jenis layanan masing-masing</div>
      </div>
      <div class="faq-item">
          <div class="faq-question">Bagaimana cara pembayarannya?</div>
          <div class="faq-answer">Pembayaran dilakukan dengan scan QR code untuk semua e-wallet</div>
      </div>
  </div>
  <script src="../js/faq.js"></script>
  </body>
</html>