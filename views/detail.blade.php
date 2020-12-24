@extends('layout/layout')

<a href="/" class="badge badge-info">Back</a>
<a href="/based/{{$movie->category_id}}" 
        class="badge badge-info">Category</a>

@section('title', 'Detail')

@section('container')
    <h1 class="mt-3">Movie Detail</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted"><img src="/{{$movie->photo}}"></h6>
            <h6 class="card-subtitle mb-2 text-muted">Description: {{$movie->description}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Rating: {{$movie->rating}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Category: {{$movie->category->name}}</h6>
            <a href="/based/{{$movie->category_id}}" class="badge badge-info">Category</a>
            <p class="card-text"></p>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Episode</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach($episode as $one)
                @if($one->movie_id == $movie->id)
                    <tr>
                        <td>{{$one->episode}}</td>
                        <td>{{$one->episode_title}}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection