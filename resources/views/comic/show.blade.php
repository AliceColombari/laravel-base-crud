@extends('layouts.base')

@section('pageTitle')
    {{$comics->title}}
@endsection

@section('content')
{{-- stampo formato pasta con id selezionato --}}

<div class="container">
    <h1>{{$comics->title}}</h1>
    <div><strong>Serie:</strong> {{$comics->series}}</div>
    <div><strong>Immagine:</strong> {{$comics->thumb}}</div>
    <div><strong>Tipologia:</strong> {{$comics->type}}</div>
    <div><strong>Uscita:</strong> {{$comics->sale_date}}</div>
    <div><strong>Prezzo:</strong> {{$comics->price}}</div>
    <div><strong>Descrizione:</strong> {!! $comics->description !!}</div>

    <a role="button" class="btn btn-primary m-5" href="{{route('comic.index')}}">Torna alla lista dei fumetti</a>
</div>

@endsection