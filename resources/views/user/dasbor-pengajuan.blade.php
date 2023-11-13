<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dasbor SPSBS - Pengajuan</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="assets/logo/garbage-truck.png" class="ms-4">
                <span class="fs-4 ms-3">SPSBS</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="/dasbor-spot" class="nav-link text-white">
                Spot
                </a>
            </li>
            <li>
                <a href="/dasbor-pengajuan" class="nav-link active bg-success">
                Pengajuan
                </a>
            </li>
            <li>
                <a href="/dasbor-bantuan" class="nav-link text-white">
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

        <div class="container">
            <h4 class="py-4 text-center">Daftar Pengajuan Spot Bak Sampah Baru Kecamatan Sungai Kunjang</h4>
            <div class="mb-3">
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Form Pengajuan </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="container d-flex flex-column" action="/tambah-pengajuan" method="post">
                                    @csrf
                                    <label for="kelurahan">Kelurahan :</label> 
                                    <select name="kelurahan" id="kelurahan" class="form-select" cols="30" rows="10" placeholder="Pilih lokasi kelurahan">
                                        @foreach ($kelurahanList as $kelurahan)
                                            <option value="{{ $kelurahan -> id_kelurahan }}">{{ $kelurahan -> kelurahan }} </option>
                                        @endforeach
                                    </select>
                                    <label for="lokasi">Lokasi Spesifik :</label>
                                    <input type="text" required="" class="form-control" id="lokasi" name="lokasi" placeholder="Tunjukan lokasi spesifik">
                                    <div class="modal-footer border-top mt-2">
                                        <input type="submit" value="Ajukan Spot Baru" class="btn btn-success col">
                                        <a class="btn btn-danger col" data-bs-dismiss="modal" aria-label="Close">Batalkan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success w-100" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">+ Ajukan Spot Baru</button>
            </div>

            <table class="table table-light bg-danger w-100">
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
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>