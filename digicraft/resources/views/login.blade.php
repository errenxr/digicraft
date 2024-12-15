<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/regiscustomer.css">
</head>
<body>
  <div class="container">
   
    <form class="form-container" action="{{ route('login.submit') }}" method="POST">
      @csrf
      <div class="form-title">MASUK</div>
      <div class="input-field email-field">
        <input type="email" id="email" name="email" placeholder="EMAIL" required />
      </div>
      
      <div class="input-field password-field">
        <input type="password" id="password" name="password" placeholder="PASSWORD" required />
      </div>
      
      <button type="submit" class="register-button">Login</button>
      
      <div class="login-link">
        Belum Punya Akun? <a href="{{ route('regis.tampil') }}">Daftar</a>
      </div>
      @if(session('msg'))
      <div class="error-message">
        {{ session('msg') }}
       </div>
  @endif
    </form>
  </div>
</body>
</html>
