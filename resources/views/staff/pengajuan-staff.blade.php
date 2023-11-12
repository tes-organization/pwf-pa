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
                <a href="/spot-staff" class="nav-link text-white">
                Spot
                </a>
            </li>
            <li>
                <a href="/pengajuan-staff" class="nav-link active bg-success">
                Pengajuan
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
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

        
        <div class="">
            <h4 class="md-3">Daftar Pengajuan Spot Bak Sampah Baru Kecamatan Sungai Kunjang</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor Pengajuan</th>
                        <th>Pengaju</th>
                        <th>Kelurahan</th>
                        <th>Lokasi Spesifik</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Opsi</th>
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
                            <td>
                                <a href="/terima-pengajuan-user/{{$p->no_pengajuan}}" class="btn btn-success">Terima</a>
                                <a href="/tolak-pengajuan-user/{{$p->no_pengajuan}}" class="btn btn-danger ms-3">Tolak</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>