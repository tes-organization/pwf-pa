<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPSBS - Masuk</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="containerlogin ">
        <div class="card login-form bg-light" >
            <div class="card-body pt-5 mt-5">
              <h5 class="d-flex card-title justify-content-center text-success fs-4">Masuk ke Akun Pengguna</h5>
              <h6 class="d-flex card-subtitle text-mute mb-5 fs-8 justify-content-center">Login terlebih dahulu untuk mengakses layanan ini!</h6>
              <form action="/masuk" method="POST">
                @csrf
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label text-success">Surel</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email Anda!" required="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-success">Kata Sandi*</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan password Anda!" required="">
                </div>                
                <div class="d-flex align-items-end fs-8">
                    <label>Belum punya akun? <a href="/registrasi" class="link-success link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Register sekarang!</a></label>
                </div>
                
                
                <div class="d-grid mt-5" >
                    <button type="submit" class="btn btn-success btn-login">Masuk</button>
                </div>
              </form>
            </div>
          </div>
    </div>
</body>