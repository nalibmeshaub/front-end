@extends('layout/layout')

<a href="/" class="badge badge-info">Back</a>

@section('title', 'Other')

@section('container')
    <h1 class="mt-3">{{$category->name}} List</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Cover</th>
            <th scope="col">Tilte</th>
        </tr>
        </thead>
        <tbody>
            @forelse($movie as $one)
                @if($one->category_id == $category->id)
                    <tr>
                        <th><img src="/{{$one->photo}}"></th>
                        <th>{{$one->title}}</th>
                    </tr>
                @endif
            @empty
                none
            @endforelse
        </tbody>
    </table>
@endsection