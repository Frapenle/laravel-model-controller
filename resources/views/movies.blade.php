@extends('layouts.app')
@section('main')
<section id="movie">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Title: {{$movie['title']}} </h4>
                                    <p class="card-title">Nationality: {{ $movie['nationality'] }}</p>
                                    <p class="card-title">Vote {{$movie['vote']}} </p>
                                    <p class="card-title">Date {{$movie['date']}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

        </div>
    </div>
</section>
    
@endsection

