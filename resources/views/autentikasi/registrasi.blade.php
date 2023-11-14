<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPSBS - Registrasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="containerlogin">
        <div class="card login-form bg-light">
            <div class="card-body pt-5 mt-5">
              <h5 class="d-flex card-title justify-content-center text-success fs-4">Registrasi Akun Baru</h5>
              <h6 class="d-flex card-subtitle text-mute mb-4 fs-8 justify-content-center">Registrasi untuk terautentikasi dengan akun anda!</h6>
              <form action="/registrasi" method="POST">
                @csrf
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label text-success">Nama</label>
                  <input type="text" class="form-control rounded-5" name="name" required="" placeholder="Masukan nama Anda!">
                </div>
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label text-success">Surel</label>
                  <input type="email" class="form-control" name="email" required="" aria-describedby="emailHelp" placeholder="Masukan email Anda!">
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label text-success">Kata Sandi Baru</label>
                  <input type="password" class="form-control" name="password" required="" minlength="8" placeholder="Masukan password Anda!">
                </div>                
                <div class="d-flex gap-3 mt-4" >
                  <a href="/masuk" class="btn btn-dark btn-login w-50">Masuk</a>
                  <button type="submit" class="btn btn-success btn-login w-50">Daftar</button>
                </div>
              </form>
            </div>
          </div>
    </div>
</body>