@extends('layouts.app')

@section('main-content')
<div class="container">
    <h1>Title: {{ $comic -> title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{ $comic -> title}}">
    <h4>Description: {{ $comic -> description}}</h4>
    <h3>Price: ${{ $comic -> price}}</h3>
    <h4>Sale date: {{ $comic -> sale_date}}</h4>
    <h4>Type: {{ $comic -> type}}</h4>
    <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
</div>
@endsection
