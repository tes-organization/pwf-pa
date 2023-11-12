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
    <div class="container">
        <form class="form" action="/tambah-pengajuan-user/store" method="post">
            {{ csrf_field() }}
            Pengaju :
            <input type="text" name="pengaju" placeholder="Pengajuan atas nama"><br>
            Kelurahan :
            <select name="kelurahan" class="form-select" cols="30" rows="10" placeholder="Pilih lokasi kelurahan">
                <option value="1">Loa Bahu</option>
                <option value="2">Loa Bakung</option>
                <option value="3">Loa Buah</option>
                <option value="4">Karang Anyar</option>
                <option value="5">Karang Asam Ilir</option>
                <option value="6">Karang Asam Ulu</option>
                <option value="7">Teluk Lerong Ulu</option>
            </select>
            Lokasi Spesifik :
            <input type="text" name="lokasi" placeholder="Tunjukan lokasi spesifik"><br>
            
            <br><input type="submit" value="Ajukan Spot Baru" class="btn btn-success">
            <a href="/pengajuan-user" class="btn btn-danger">Batalkan</a>
        </form>
    </div>
</body>