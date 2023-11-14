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
                <a href="/dasbor-spot" class="btn btn-outline-success">Ajukan Sekarang</a>
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

    <section class="container py-5 my-5 text-center d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col text-success-emphasis">
                <div class="border border-success border-2 p-1 rounded-5">
                    <article class="border border-success border-2 rounded-5 d-flex justify-content-center align-items-center">
                        <span class="p-5">5</span>
                    </article>
                </div>
                <h5 class="fs-6">Pengajuan Disetujui</h5>
            </div>
            <div class="col text-warning-emphasis">
                <div class="border border-warning border-2 p-1 rounded-5">
                    <article class="border border-warning border-2 rounded-5 d-flex justify-content-center align-items-center">
                        <span class="p-5">5</span>
                    </article>
                </div>
                <h5 class="fs-6 ">Pengajuan Diproses</h5>
            </div>
            <div class="col text-danger-emphasis">
                <div class="border border-danger border-2 p-1 rounded-5">
                    <article class="border border-danger border-2 rounded-5 d-flex justify-content-center align-items-center">
                        <span class="p-5">5</span>
                    </article>
                </div>
                <h5 class="fs-6">Pengajuan Ditolak</h5>
            </div>
        </div>
    </section>

    <footer class="vh40-height bg-black text-light d-flex justify-content-center align-items-center">
        <div class="container row">
            <div class="col d-flex flex-column">
                <span class="text-success d-flex align-items-center gap-2 fs-3">
                    <img src="assets/logo/garbage-truck.png" alt="">
                    SPSBS
                </span>
                <span class="fs-5 text-light text-opacity-75">Sistem Pengajuan Spot Bak Sampah</span>
                <span class="fs-6 text-light text-opacity-50 pb-5">Kecamatan Sungai Kunjang, Kota Samarinda, Kalimantan Timur, Indonesia</span>
                <span class="text-light text-opacity-25">© 2023 Raya Prasetya. All rights reserved</span>
            </div>
            <div class="container col d-flex flex-column justify-content-center align-items-end">
                <a class="text-light text-opacity-75 link-light link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:kec.sungaikunjang@gmail.com" target="_blank">
                    kec.sungaikunjang@gmail.com ✉️
                </a>
                <a class="text-light text-opacity-75 link-light link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://www.google.com/search?q=nomor+telpon+dlh+sungai+kunjnag&oq=nomor+telpon+dlh+sungai+kunjnag&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQABiiBDIHCAIQABiiBDIHCAMQABiiBDIHCAQQABiiBNIBCDc3NDVqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8#">
                    +(0541)743450 ☎️
                </a>
            </div>
        </div>
    </footer>
</main>



@endsection
