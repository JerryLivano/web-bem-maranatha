@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card">
        <h3 class="card-header text-center">Pendaftaran Selesai</h3>
        <div class="card-body p-3">
            <div class="text-center p-3">
                <img src="../img/done.png" width="40%">
                <div class="mt-4" style="font-size: 24px;">
                    Terima Kasih Sudah Mendaftar
                </div>
            </div>
            <div class="mt-2">
                Join Grup WhatsApp <a href="http://">Klik Disini</a>
            </div>
            <div class="mt-3">
                <label>Contact Person: Matthew Christopher</label>
                <div>
                    <a href="">Klik untuk chat</a>
                </div>
            </div>
            <div class="mt-3 text-center">
                <a href="index.html"><button type="button" class="btn btn-primary w-100">Kembali</button></a>
            </div>
        </div>
    </div>
</div>
@endsection