@extends('layout/layout')

@section('title', 'Category')

@section('container')
    <h1 class="mt-3">List</h1>
    @foreach($category as $two)
        <tr>
            <td>{{$two->name}}</td>
        </tr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cover</th>
                    <th scope="col">Title</th>
                    <th scope ="col">Button</th>
                </tr>
            </thead>
        <tbody>
            @forelse($movie as $one)
                @if($one->category_id == $two->id)
                    <tr>
                        <td><img src="/{{$one->photo}}"></td>
                        <td>{{$one->title}}</td>
                        <td>
                            <a href="/detail/{{$one->id}}" 
                                class="badge badge-info">Detail</a>
                        </td>
                    </tr>
                @endif
            @empty
                <p>nothing</p>
            @endforelse
            </tbody>
        </table>
    @endforeach
@endsection