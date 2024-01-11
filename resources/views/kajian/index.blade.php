@extends('layouts.master')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-end">
        <a href="/kajian/create" class="btn btn-primary">Tambah Kajian</a>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($kajians as $kajian)
            <div class="col-md-3 mb-4">
                <div class="card border border-secondary mt-4">
                    <div style="overflow:hidden; height: 36vh">
                        @if($kajian->cover)
                        <img class="card-img-top" height="100%" src="{{ asset('storage/'.$kajian->cover)}}">
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
                                <a href="/kajian/edit/{{ $kajian->id }}" class="btn btn-warning me-1"><i class="fa fa-edit"></i></a>
                                <form action="/kajian/delete/{{$kajian->id}}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>   
                                </form> 
                                @endif
                                @endauth
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <a href="/kajians/{{ $kajian->id }}/read" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection