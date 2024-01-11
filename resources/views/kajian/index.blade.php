@extends('layouts.master')

@section('content')
<div class="row">
    @foreach ($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card border border-secondary mt-4" style="width: 20rem;height: 32rem;">
                @if ($book->image)
                <div style="max-height: 400px; overflow:hidden; max-width:400;">
                    <img class="img-fluid rounded" src="{{ asset('storage/'.$book->image) }}" alt="..." />
                </div>
                @else
                <div style="max-height: 400px; overflow:hidden; max-width:400;">
                    <img class="card-img-top" src="https://source.unsplash.com/400x400?{{ $book->category->name }}">
                </div>    
                @endif
                <div class="card-body">
                    <h5 class="card-title ">{{ $book->title }}</h5>
                    <h6>Author: {{ $book->author }}</h6>
                    <h6>Publisher: {{ $book->user->name }}</h6>
                    <p class="card-text">Genre: {{ $book->category->name }}</p>
                    <a href="/books/{{ $book->slug }}/read" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection