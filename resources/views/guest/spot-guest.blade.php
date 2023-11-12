@extends('base.base')
@section('content')
<main>
    <section id="utama" class="container vh100-height text-center align-items-center d-flex justify-content-center">
        <div class="row">
            <h4 class="text-success">Daftar Spot Bak Sampah Kecamatan Sungai Kunjang</h4>
            <table class="table">
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
    </section>
    
</main>
@endsection