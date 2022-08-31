@extends('layouts.app')

@section('main-content')
    <div class="card-details">
        <h1>Title: {{ $comic -> title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{ $comic -> title}}">
        <h4>Description: {{ $comic -> description}}</h4>
        <h3>Price: ${{ $comic -> price}}</h3>
        <h4>Sale date: {{ $comic -> sale_date}}</h4>
        <h4>Type: {{ $comic -> type}}</h4>
        <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>
        <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Elimina" onClick="return confirm('Sei sicuro di volerlo eliminare? Guarda che è bello!')">
        </form>
    </div>
@endsection
