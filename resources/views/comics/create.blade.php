@extends('layouts.app')

@section('main-content')
   
        <h1>Inserisci il tuo Comic personale!</h1>
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="title">
                <label for="title">Titolo: </label>
                <input type="text" id="title" name="title" value="{{old('title') ? old('title') : ''}}">
            </div>

            <div class="description">
                <label for="description">Descrizione: </label>
                <input type="text" id="description" name="description" value="{{old('description') ? old('description') : ''}}">
            </div>

            <div class="thumb">
                <label for="thumb">Cover: </label>
                <input type="text" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : ''}}">
            </div>

            <div class="price">
                <label for="price">Prezzo: </label>
                <input type="text" id="price" name="price" value="{{old('price') ? old('price') : ''}}">
            </div>

            <div class="series">
                <label for="series">Serie: </label>
                <input type="text" id="series" name="series" value="{{old('series') ? old('series') : ''}}">
            </div>

            <div class="sale-date">
                <label for="sale_date">In vendita dal: </label>
                <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : ''}}">
            </div>

            <div class="type">
                <label for="type">Tipo: </label>
                <input type="text" id="type" name="type" value="{{old('type') ? old('type') : ''}}">
            </div>

            <input type="submit" value="Salva">
        </form>
@endsection
