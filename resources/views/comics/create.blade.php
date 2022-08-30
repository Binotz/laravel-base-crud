@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h1>Inserisci il tuo Comic personale!</h1>
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            <label for="title">Titolo: </label>
            <input type="text" id="title" name="title" >

            <label for="description">Descrizione: </label>
            <input type="text" id="description" name="description" >

            <label for="thumb">Cover: </label>
            <input type="text" id="thumb" name="thumb" >

            <label for="price">Prezzo: </label>
            <input type="text" id="price" name="price" >

            <label for="series">Serie: </label>
            <input type="text" id="series" name="series" >

            <label for="sale_date">In vendita dal: </label>
            <input type="text" id="sale_date" name="sale_date" >

            <label for="type">Tipo: </label>
            <input type="text" id="type" name="type" >

            <input type="submit" value="Salva">
        </form>
    </div>
@endsection
