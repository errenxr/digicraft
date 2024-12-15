<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../css/regiscustomer.css">
</head>
<body>
  <div class="container">
    <form class="form-container" action="{{ route('regis.submit') }}" method="POST">
      @csrf
      <div class="form-title">DAFTAR</div>
      
      <div class="input-field name-field">
        <input type="text" id="name" name="name" placeholder="USERNAME" required />
      </div>
      
      <div class="input-field email-field">
        <input type="email" id="email" name="email" placeholder="EMAIL" required />
      </div>
      
      <div class="input-field password-field">
        <input type="password" id="password" name="password" placeholder="PASSWORD" required />
      </div>
      
      <button type="submit" class="register-button">Daftar</button>
      
      <div class="login-link">
        Sudah Punya Akun? <a href="{{ route('login') }}">Masuk</a>
      </div>
    </form>
  </div>
</body>
</html>
