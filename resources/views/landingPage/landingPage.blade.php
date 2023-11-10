@extends('base.base')
@section('content')
<main>
    <section id="utama" class="container vh100-height text-center d-flex align-items-center justify-content-center">
        <div class="row">
            <article class="col d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-success">Sistem Pengajuan Spot Bak Sampah</h1>
            </article>
            
            <article class="col d-flex justify-content-center align-items-center flex-column gap-2">
                <figure>
                    <img src="assets/img/garbage-activity.png" alt="">
                </figure>
                <a href="#" class="btn btn-outline-success">Ajukan Sekarang</a>
            </article>
        </div>
    </section>

    <section class="container text-center d-flex justify-content-center align-items-center border-top py-5 my-5 vh80-height">
        <article>
            <h2 class="text-success fs-1">SPSBS</h2>
            <p class="text-success fs-4 text-opacity-75">"Sistem Spot Sistem Pengajuan Bak Sampah merupakan platform pengajuan spot bak sampah di kecamatan Sungai Kunjang, Samarinda"</p>
        </article>
    </section>

    <section class="container-fluid text-center row">
        <div class="d-flex flex-column align-items-center justify-content-center gap-5 col bg-success bg-gradient pt-5 vh100-height">
            <article class="d-flex justify-content-center align-items-center flex-column">
                <h2 class="text-light">Didukung oleh:</h2>
                <figure class="d-flex justify-content-center align-items-center">
                    <img class="w-25" src="assets/logo/pemprov-kaltim.png" alt="">
                    <img class="w-25" src="assets/logo/sungai-kunjang.png" alt="">
                </figure>
            </article>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-end gap-5 col">
            <article class="text-success text-end d-flex justify-content-center flex-column w-75">
                <h1>Simplifikasi</h1>
                <p class="text-success text-opacity-75">Kemudahan pengguna dalam pengajuan spot bak sampah di Kecamatan Sungai Kunjang, Samarinda</p>
            </article>
            <article class="text-success text-end d-flex justify-content-center flex-column w-75">
                <h1>Fleksibilitas</h1>
                <p class="text-success text-opacity-75">Pengajuan dapat dilakukan fleksibel kapan dan di mana saja, memberikan kenyamanan dan efisiensi pengguna tanpa terikat waktu atau lokasi.</p>
            </article>
            <article class="text-success text-end d-flex justify-content-center flex-column w-75">
                <h1>Presisi</h1>
                <p class="text-success text-opacity-75">Tingkat ketepatan dalam pemberian titik spot yang </p>
            </article>
        </div>
    </section>
</main>



@endsection
