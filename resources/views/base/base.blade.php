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
<body class="bg-light">
    <header>
        <nav class="navbar fixed-top px-5 py-4">
            <div class="container-fluid">
                <a class="navbar-brand text-success d-flex align-items-center gap-2">
                    <img src="assets/logo/garbage-truck.png" alt="">
                    <span>SPSBS</span> 
                </a>
                <div class="d-flex gap-5 fs-6">
                    <a href="#utama" class="link-success link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Utama</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="link-success link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover border-0 bg-transparent force-underline" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Spot
                    </button>
                    
                    <a href="/dasbor-spot" class="link-success link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Dasbor</a>
                </div>
            </div>
          </nav>
    </header>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Spot Bak Sampah Kecamatan Sungai Kunjan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-light text-center">
                        <thead>
                            <tr>
                                <th>ID Spot</th>
                                <th>Kelurahan</th>
                                <th>Lokasi Spesifik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spotList as $s)
                                <tr>
                                    <td>{{$s -> id_spot}}</td>
                                    <td>{{$s -> kelurahanspot['kelurahan']}}
                                    <td>{{$s -> lokasi}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>

