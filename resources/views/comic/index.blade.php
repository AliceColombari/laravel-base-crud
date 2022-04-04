@extends('layouts.base')

@section('pageTitle', 'Tipi di fumetti')

@section('content')
{{-- stampo elenco di tutti i fumetti presenti --}}

<div class="container">
    <h1>Lista dei fumetti</h1>

    <table class="table">

        <thead>
          <tr class="bg-primary">
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Immagine</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Uscita</th>
            <th scope="col">Prezzo</th>
            {{-- <th scope="col">Descrizione</th> --}}
            <th scope="col">Azioni</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->price}}</td>
                {{-- <td>{{$comic->description}}</td> --}}
                <td class="d-flex ms-3">

                    <a role="button" class="btn btn-primary" href="{{route('comic.show', $comic->id)}}">Vedi</a>
                    <a role="button" class="btn btn-warning" href="{{route('comic.edit', $comic->id)}}">Modifica</a>

                    <form method="POST" action="{{route('comic.destroy', ['comic' => $comic->id])}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>

                </td>
            </tr>
          @endforeach
        </tbody>

      </table>      
</div>

@endsection