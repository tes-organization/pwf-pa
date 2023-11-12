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
<<<<<<< HEAD:resources/views/pengajuan-user.blade.php
                <a href="/spot-user" class="nav-link text-white">
=======
                <a href="/spot" class="nav-link text-white">
>>>>>>> origin/raya:resources/views/user/pengajuan-user.blade.php
                Spot
                </a>
            </li>
            <li>
                <a href="/pengajuan" class="nav-link active bg-success">
                Pengajuan
                </a>
            </li>
            <li>
                <a href="/bantuan-user" class="nav-link text-white">
                Bantuan
                </a>
            </li>
            <li>
                <form action="/keluar" method="POST">
                    @csrf
                    <button class="nav-link text-white">
                    Keluar
                    </button>
                </form>
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

        
        <div class="">
            <h4 class="mt-3">Daftar Pengajuan Spot Bak Sampah Baru Kecamatan Sungai Kunjang</h4>
            <table class="table table-success">
                <thead>
                    <tr>
                        <th>Nomor Pengajuan</th>
                        <th>Pengaju</th>
                        <th>Kelurahan</th>
                        <th>Lokasi Spesifik</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuanList as $p)
                        <tr>
                            <td>{{$p -> no_pengajuan}}</td>
                            <td>{{$p -> pengaju}}</td>
                            <td>{{$p -> kelurahanpengajuan['kelurahan']}}
                            <td>{{$p -> lokasi}}</td>
                            <td>{{$p -> tgl_pengajuan}}</td>
                            <td>{{$p -> status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="/tambah-pengajuan-user" class="btn btn-success">Ajukan Spot Baru</a>
            </div>
        </div>
    </div>
</body>