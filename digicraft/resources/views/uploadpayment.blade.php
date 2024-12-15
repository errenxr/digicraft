<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../css/uploadpayment.css">
</head>
<body>
    <div class="container">
        <header>
            <div style="display: flex; align-items: center;">
                <img src="/path-to-logo/logo.png" alt="Logo">
                <span class="logo-text">DIGICRAFT</span>
            </div>
            <nav>
                <a href="#">AKUN</a>
                <a href="#">RIWAYAT</a>
                <a href="#">KONTAK</a>
            </nav>
            <div>
                <img src="/path-to-search-icon/search.png" alt="Search Icon" style="height: 30px;">
            </div>
        </header>

        <div class="main-wrapper">
            <div class="bukti-pembayaran-container">
                <h2 class="judul">Bukti Pembayaran</h2>
                <div class="bukti-pembayaran-box">
                    
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <label for="fileUpload" class="btn-upload">Masukan Bukti Pembayaran</label>
                        <input id="fileUpload" type="file" name="bukti_bayar" accept="image/*" style="display:none;">
                        
                        <button type="submit" class="btn-konfirmasi">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>                      
</body>
</html>