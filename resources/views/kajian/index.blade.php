@extends('layouts.master')

@section('content')
<div class="container my-4">
    @auth
    <div class="d-flex justify-content-end">
        <a href="/kajians/create" class="btn btn-primary">Tambah Kajian</a>
    </div>
    @endauth
    <div class="row d-flex justify-content-center">
        @foreach ($kajians as $kajian)
        <div class="col-md-3 mb-4">
            <div class="card border border-secondary mt-4">
                <div style="overflow:hidden; height: 56vh">
                    @if($kajian->cover)
                    <img class="card-img-top" height="100%" src="{{ asset('storage/'.$kajian->cover) }}">
                    @else
                    <img class="card-img-top" height="100%" src="storage/kajian-cover/default.jpg">
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">{{ $kajian->title }}</h5>
                    <h6>Author: {{ $kajian->user->name }}</h6>
                    <div class="row mt-4">
                        <div class="col-md-8 d-flex justify-content-start">
                            @auth
                            @if ($kajian->member_id == auth()->user()->id)
                            <a href="/kajians/edit/{{ $kajian->id }}" class="btn btn-warning me-1"><i class="fa fa-edit"></i></a>
                            <form action="/kajians/delete/{{$kajian->id}}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kajian ini?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            @endif
                            @endauth
                        </div>
                        <div class="col-md-4 d-flex justify-content-end">
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#pdfModal{{ $kajian->id }}">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="pdfModal{{ $kajian->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Isi Kajian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (isset($kajian->file))
                        <iframe src="{{ asset('storage/' . $kajian->file) }}" width="100%" height="550px"></iframe>
                        @else
                        {{ $kajian->title }} belum memiliki isi
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection