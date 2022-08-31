@extends('layouts.app')
@section('main-content')
    <h1>Lista di tutti i Comics</h1>
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
                <a class="link-card" href="{{route('comics.show', 
                                    ['comic' => $comic->id]
                                )}}">
                    <div class="card">
                        <h2>Title: {{ $comic -> title}}</h2>
                        <img src="{{$comic->thumb}}" alt="{{ $comic -> title}}">
                        <h4>Description: {{ $comic -> description}}</h4>
                        <h3>Price: ${{ $comic -> price}}</h3>
                        <h4>Sale date: {{ $comic -> sale_date}}</h4>
                        <h4>Type: {{ $comic -> type}}</h4>
                    </div>  
                </a>              
            @endforeach
        </div>
    </div>
@endsection
