@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<section id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carousel.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>MERRY CHRISTMAS & HAPPY NEW YEAR 2024</h5>
                    <hr>
                    <h6>BADAN EKSEKUTIF MAHASISWA UNIVERSITAS KRISTEN MARANATHA</h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>MERRY CHRISTMAS & HAPPY NEW YEAR 2024</h5>
                    <hr>
                    <h6>BADAN EKSEKUTIF MAHASISWA UNIVERSITAS KRISTEN MARANATHA</h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>MERRY CHRISTMAS & HAPPY NEW YEAR 2024</h5>
                    <hr>
                    <h6>BADAN EKSEKUTIF MAHASISWA UNIVERSITAS KRISTEN MARANATHA</h6>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<div class="container">
    <section id="about" class="p-5">
        <div class="row">
            <div class="col-md-4 text-primary">
                <div id="about-bem">TENTANG BEM</div>
                <div id="about-ukm">Universitas Kristen Maranatha</div>
            </div>
            <div class="col-md-8 text-center">
                <div class="bg-primary mt-5" style="height: 10px;"></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('img/about.png') }}" id="about-img">
            </div>
            <div class="col-md-6">
                <div id="about-content" class="bg-primary p-5 text-light text-center">
                    Badan Eksekutif Mahasiswa Universitas Kristen Maranatha (BEM UKM) merupakan organisasi mahasiswa UKM yang memegang fungsi eksekutif skala Universitas. BEM UKM lahir untuk memberikan jawaban dari berbagai macam persoalan serta mempersatukan mahasiswa UKM menjadi #kitasatumaranatha
                </div>
            </div>
        </div>
    </section>
</div>

<section id="visi-misi" class="p-5 bg-primary">
    <div class="container text-center">
        <img src="{{ asset('img/visi-misi.png') }}" id="visi-misi-img">
    </div>
</section>

<div class="container">
    <section id="kabinet" class="p-5">
        <div class="text-center text-primary">
            <h1 id="kabinet-logo">LOGO</h1>
            <h5 id="kabinet-nama">Kabinet - Prabatha Abhipraya</h5>
        </div>
        <img src="{{ asset('img/logo-kabinet.png') }}" id="kabinet-img">
    </section>
</div>

<section id="bem-section" class="p-5 text-center bg-primary">
    <h1 class="text-light">BEM Maranatha</h1>
</section>

<div class="container">
    <section id="logo" class="p-5">
        <div class="text-center text-primary">
            <h1 id="logo-title">Logo Resmi Badan Eksekutif Mahasiswa</h1>
        </div>
        <img src="{{ asset('img/logo-resmi.png') }}" id="kabinet-img">
        <div id="logo-content" class="mt-5">
            <ul>
                <li>Logo BEM Maranatha menonjolkan siluet huruf M yang tergabung dari stilasi huruf B dan E.</li>
                <li>Pada logo dapat terlihat stilasi dari orang-orang yang sedang berkumpul melambangkan sebuah <span style="font-weight: 800;">community.</span></li>
                <li>Tampilan logo yang tampak tersambung satu sama lain tanpa terputus mencerminkan <span style="font-weight: 800;">connection</span> dan bond/ikatan yang terjalin dalam BEM Marantha baik dengan
                    sesama anggota maupun pihak luar.</li>
                <li>3 bulatan pada bagian atas logo merepresentasikan 3 nilai Universitas Kristen Maranatha yaitu <span style="font-weight: 800;">Integrity, Care, dan Excellence.</span></li>
                <li>Warna biru pada logo merupakan turunan dari warna utama Universitas Kristen Maranatha.</li>
            </ul>
        </div>
    </section>
</div>

@endsection