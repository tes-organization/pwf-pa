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
                    <h4>Kunjungi Kami</h4>
                    <h4>Kunjungi Kami</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2566.6876194945658!2d117.12216911654279!3d-0.4850841263227612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67ee00dc9afd9%3A0x21c8b6a884c50acc!2sDinas%20Lingkungan%20Hidup%20Kota%20Samarinda!5e0!3m2!1sid!2sid!4v1699816436056!5m2!1sid!2sid" width="600" height="400" style="border:0; padding-top:2em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact info">
                    <h4>Informasi Kontak</h4>
                    <div class="infoBox">
                        <div class="d-flex">
                            <span><ion-icon name="location"></ion-icon></span>
                            <p class="ms-2">Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur<br>INDONESIA</p>
                        </div>
                        <div class="d-flex">
                            <span><ion-icon name="mail"></ion-icon></span>
                            <a class="ms-2" href="https://mail.google.com/mail/u/0/#inbox?compose=jrjtXLFVCBFgnkzmlDTdrzJPfTpnLgmwhrMPXStmNhPnQpgzkHvlsNfhtfRsnbbNJQzwbsnF">dlhkotasmdbersih@gmail.com</a>
                        </div>
                        <div class="d-flex mt-2">
                            <span><ion-icon name="call"></ion-icon></ion-icon></span>
                            <a class="ms-2" href="tel:+6283152633635">+6283152633635</a>
                        </div>
                        <div class="d-flex mt-2">
                            <span><ion-icon name="chatbox-ellipses"></ion-icon></span>
                            <a class="ms-2" href="https://wa.link/4yilz3">Hubungi Admin via WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="contact map">
                    <h4>Media Sosial</h4>
                    <div class="mapBox mt-4">
                        <div class="d-flex mt-2">
                            <span><ion-icon name="logo-facebook"></ion-icon></span>
                            <a class="ms-2" href="https://www.facebook.com/dlh.samarinda/?locale=id_ID"></ion-icon> DLH Kota Samarinda</a>
                        </div>
                        <div class="d-flex mt-2">
                            <span><ion-icon name="logo-twitter"></ion-icon></span>
                            <a class="ms-2" href="https://x.com/ppid_smr?s=20"> Pemkot Samarinda</a>
                        </div>
                        <div class="d-flex mt-2">
                            <span><ion-icon name="logo-instagram"></ion-icon></span>
                            <a class="ms-2" href="https://www.instagram.com/dlh.samarinda/"> dlh.samarinda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>