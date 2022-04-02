@extends('layouts.base')

@section('pageTitle')
    {{$comic->title}}
@endsection

@section('content')
{{-- stampo formato pasta con id selezionato --}}

<div class="container">
    <h1>{{$comic->title}}</h1>
    <div><strong>Serie:</strong> {{$comic->series}}</div>
    <div><strong>Immagine:</strong> {{$comic->thumb}}</div>
    <div><strong>Tipologia:</strong> {{$comic->type}}</div>
    <div><strong>Uscita:</strong> {{$comic->sale_date}}</div>
    <div><strong>Prezzo:</strong> {{$comic->price}}</div>
    <div><strong>Descrizione:</strong> {!! $comic->description !!}</div>

    <a role="button" class="btn btn-primary m-5" href="{{route('comic.index')}}">Torna alla lista dei fumetti</a>
</div>

@endsection