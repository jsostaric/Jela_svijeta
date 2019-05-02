@extends('layouts.main')

@section('title', 'Dishes')

@section('content')
    @foreach($meals as $meal)
        <h1>{{$meal->title}}</h1>
        <p>{{$meal->description}}</p>
       <p><strong>Tags:</strong>
            @foreach($meal->tags as $tag)
                <a href="{{url("/". $tag->id)}}" class="badge badge-primary">{{$tag->title}}</a>
            @endforeach
       </p>
       <p><strong>Ingredients:</strong>
            @foreach($meal->ingredients as $ingredient)
                <a href="{{url("/", $ingredient->id)}}">{{$ingredient->title . ','}}</a>
            @endforeach
        </p>
        <hr>
    @endforeach

    {{$meals->links()}}
@endsection