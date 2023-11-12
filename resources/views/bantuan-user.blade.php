<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengajuan Spot Bak Sampah</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="assets/logo/garbage-truck.png" class="ms-4">
                <span class="fs-4 ms-3">SPSBS</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="/spot-user" class="nav-link text-white">
                Spot
                </a>
            </li>
            <li>
                <a href="/pengajuan-user" class="nav-link text-white">
                Pengajuan
                </a>
            </li>
            <li>
                <a href="/bantuan-user" class="nav-link active bg-success">
                Bantuan
                </a>
            </li>
            </ul>
            <hr>
            <div class="">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="assets/logo/sungai-kunjang.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>DLH Kota Samarinda</strong>
                </a>            
            </div>
        </div>
        <div class="contactUs">
            <div class="title">
                <h2 class="text-success">Pusat Bantuan</h2>
            </div>
            <div class="box">
                <div class="contact form">
                    <h4>Hubungi kami di :</h4>
                </div>
                <div class="contact info">
                    <h4>Informasi Kontak</h4>
                    <div class="infoBox">
                        <div>
                            <span></span>
                            <p>Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur<br>INDONESIA</p>
                        </div>
                        <div>
                            <span></span>
                            <a href="mailto:dlh@kaltimprov.go.id. "></a>
                            <a href="mailto:kec.sungaikunjang@gmail.com "></a>
                        </div>
                    </div>
                </div>
                <div class="contact map"></div>
            </div>
        </div>
    </div>
</body>