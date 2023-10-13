@extends('layouts.app')

@section('title-page', 'homepage')

@section('main-content')
    <div class="container">
        @forelse ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        @empty
            <h1>nessun dato</h1>
        @endforelse
    </div>
@endsection
