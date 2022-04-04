@extends('layouts.base')

@section('pageTitle', 'Aggiungi nuovo fumetto')

@section('content')

    <div class="container">

        <h1>Aggiungi un nuovo fumetto</h1>

        <form method="POST" action="{{ route('comic.store') }}">

            @csrf

            <div class="mb-3">
                <label for="src" class="form-label">Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Nome del formato</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label">Tipologia</label>
                <input type="number" class="form-control" id="type" name="type" value="{{old('type')}}" required>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}" required>
            </div>

            <button type="submit" class="btn btn-secondary">Aggiungi</button>

        </form>

    </div>




@endsection