@extends('layouts.master')

@section('content')
    <div class="container my-4">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @auth
            <div class="d-flex justify-content-end mb-3">
                <a href="/kegiatan/create" class="btn btn-primary">Tambah Kegiatan</a>
            </div>
        @endauth
        <div class="row d-flex justify-content-center">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-md-10 mx-4 my-3">
                    <div class="card">
                        <div class="row">
                            @if ($kegiatan->cover)
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $kegiatan->cover) }}" class="card-img-top"
                                        alt="{{ $kegiatan->name }}" style="object-fit: cover; object-position: center;"
                                        width="350px" height="300px">
                                </div>
                            @else
                                <div class="col-md-4">
                                    <img src="https://source.unsplash.com/400x350/?activity" class="img-fluid rounded-start"
                                        alt="{{ $kegiatan->name }}" style="object-fit: cover; object-position: center;">
                                </div>
                            @endif
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fs-1 mb-4">{{ $kegiatan->title }}</h5>
                                    <p class="card-text">{{ substr($kegiatan->desc, 0, 200) }}..</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-text"><small
                                                    class="text-body-secondary">{{ $kegiatan->created_at->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end p-4">
                                            @auth
                                                @if ($kegiatan->member_id == auth()->user()->id)
                                                    <form action="/kegiatan/{{ $kegiatan->id }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus kegiatan ini?')"
                                                            class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    <a href="/kegiatan/{{ $kegiatan->id }}/edit" class="btn btn-warning me-1"><i
                                                            class="fa fa-edit"></i></a>
                                                @endif
                                            @endauth
                                            <a class="btn btn-primary text-light" href="/kegiatan/{{ $kegiatan->id }}">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
