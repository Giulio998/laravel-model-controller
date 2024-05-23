@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>all movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        {{ $movie->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</main>

@endsection