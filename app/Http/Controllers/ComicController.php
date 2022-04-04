<?php

namespace App\Http\Controllers;

use App\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // voglio tutta la stampa dei fumetti
        $comics = comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // ritorna vista con form all'interno per aggiungere forme e dati
        return view('pasta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // validazione elementi richiesti necessariamente
        // metodo di lavoro per progetti semplici, per complessi scaffolding diverso
        $request->validate(
            [
                'thumb'=> 'required|url',
                'title'=> 'required|min:10',
                'type' => 'required|min:5',
                'price' => 'required|numeric|min:0',
            ]
            );
        // passo tutte info delle info passate premendo invia
        $data = $request->all();

        $comic = new comic();
        
        $comic->fill($data);

        $comic->save();

        return redirect()->route('comic.index')->with('status', 'Comic aggiunto correttamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $comic = Comic::find($id);
      
        // if($comic){

        //     return view("comic.show", compact("comic"));

        // } else {
        //     abort(404);
        // }
        return view('comic.show', compact('comics'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // forma contratta edit
    public function edit(comic $comics) {
        return view('comic.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comics)
    {
        $request->validate(
            [
                'thumb'=> 'required|url',
                'title'=> 'required|min:10',
                'type' => 'required|min:5',
                'price' => 'required|numeric|min:0',
            ]
        );
        
        $data = $request->all();

        $comics->update($data);
        $comics->save();

        return redirect()->route('comic.show', ['comics' => $comics->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comics)
    {
        // cancellazione elemento su db
        $comics->delete();
        return redirect()->route('comic.index')->with('status', 'Elemento correttamente cancellato!');
    }
}
