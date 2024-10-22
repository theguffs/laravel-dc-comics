<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // prende i fumetti ddalla tabella "comics"
        $comics = Comic::all();

        // mostra l'array dei fumetti
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' =>'required|string',
            'description' =>'required|string',
            'thumb' =>'required|string',
            'price' =>'required|string',
            'series' =>'required|string',
            'sale_date' =>'required|date',
            'type' =>'required|string',
        ]);
        Comic::create($data);
        return redirect('')->route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //trova il fumetto tramide id
        $comic = Comic::findOrFail($id);

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
