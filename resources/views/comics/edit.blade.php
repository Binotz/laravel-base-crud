@extends('layouts.app')

@section('main-content')
    <h1>Modifica il tuo Comic!</h1>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="edit-title">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="edit-description">
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" value="{{$comic->description}}">
        </div>

        <div class="edit-thumb">
            <label for="thumb">Cover</label>
            <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="edit-price">
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{old('price') ? old('price') : $comic->price}}">
        </div>

        <div class="edit-series">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{$comic->series}}">
        </div>

        <div class="edit-sale-date">
            <label for="sale_date">Data di vendita</label>
            <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div class="edit-type">
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" value="{{$comic->type}}">
        </div>
        <input type="submit" value="Modifica">
    </form>
@endsection
