@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/struktur.css') }}">
<section id="struktur">
    <img src="{{ asset('img/foto-struktur.png') }}" id="struktur-img">
</section>

<section id="bagan">
    <div class="container p-5 text-center">
        <img src="{{ asset('img/bagan.png') }}" id="bagan-img">
    </div>
</section>

<section id="bagan" class="bg-primary">
    <div class="container p-5 text-center">
        <img src="{{ asset('img/bph.png') }}" id="bagan-img">
    </div>
</section>

<section id="keanggotaan">
    <div class="container p-5 text-center">
        <!-- Tabel keanggotaan per departemen
    - Badan Pengurus harian
    - Departemen Keuangan, Sarana, dan Prasarana
    - Departemen Kesekretariatan
    - Departemen Informasi & Komunikasi
    - Departemen Keilmuan & Pengembangan
    - Departemen Pengabdian Masyarakat
    - Departemen Sosial, Politik, dan Hukum
    - Departemen Pengembangan SUmber Daya Organisasi
    - Departemen Minat & Bakat
    - Departemen Permodalan
    - Departemen Hubungan Luar Universitas -->
    </div>
</section>

@endsection