@extends('layouts.base')

@section('pageTitle')
    {{$comic->title}}
@endsection

@section('content')
{{-- stampo formato pasta con id selezionato --}}

<div class="container">
    <h1>{{$comic->title}}</h1>
    <div><strong>Serie:</strong> {{$comic->series}}</div>
    <div><strong>Tipologia:</strong> {{$comic->type}}</div>
    <div><strong>Uscita:</strong> {{$comic->sale_date}}</div>
    <div><strong>Prezzo:</strong> {{$comic->price}}</div>
    <div><strong>Descrizione:</strong> {!! $comic->description !!}</div>
    <div><img src="{{$comic->thumb}}" alt="" style="height: 150px; margin: 10px 0px;"></div>

    <a role="button" class="btn btn-primary mt-2" href="{{route('comic.index')}}">Torna alla lista dei fumetti</a>
</div>

@endsection