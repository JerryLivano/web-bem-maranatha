@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pendaftaran.css') }}">
    <div class="container d-flex justify-content-center my-5">
        <div class="card">
            <h3 class="card-header">Form Penambahan Kegiatan</h3>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="/kegiatan">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul:</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Input Judul"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="desc">Deskripsi:</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" name="desc" id="desc" placeholder="Deskripsi"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="cover">Cover:</label>
                        <img src="" class="img-preview img-fluid d-block" id="frame"
                            style="max-height: 500px; overflow:hidden">
                        <input class="form-control" type="file" accept="img/*" name="cover" onchange="preview()"
                            id="cover">
                    </div>
                    <div class="button mt-4 d-flex justify-content-end">
                        <a href="/kegiatan" class="btn btn-danger me-2">Cancel</a>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
