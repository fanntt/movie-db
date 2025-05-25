@extends('layout.template')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $movie->cover_image }}" class="img-fluid rounded-start" alt="{{ $movie->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $movie->title }}</h2>
                    <p><strong>Category:</strong> {{ $movie->category->category_name }}</p>
                    <p><strong>Year:</strong> {{ $movie->year }}</p>
                    <p><strong>Actors:</strong> {{ $movie->actors }}</p>
                    <p><strong>Synopsis:</strong></p>
                    <p>{{ $movie->synopsis }}</p>
                    <a href="/" class="btn btn-success mt-3">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
