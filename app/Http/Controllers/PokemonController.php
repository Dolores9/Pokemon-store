<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();


        return view('pokemons.index', compact('pokemons'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'weight' => 'required|numeric|min:5|max:1000',
            'height' => 'required|numeric|min:5|max:100',
        ]);

        $pokemon = new Pokemon([
            'name' => $request->input('name'),
            'weight' => $request->input('weight'),
            'height' => $request->input('height'),
            'shiny' => $request->has('shiny'),
        ]);

        // Save the Pokémon to the database
        $pokemon->save();


        return redirect()->route('pokemons.store')->with('success', 'Pokémon created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemonModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);

        return view('pokemons.edit')->with('pokemon', $pokemon);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'weight' => 'numeric|min:5|max:1000',
            'height' => 'numeric|min:5|max:1000',
//
        ]);

        $pokemon = Pokemon::find($id);
        $pokemon->name = $request->input('name');
        $pokemon->weight = $request->input('weight');
        $pokemon->height = $request->input('height');

        $pokemon->save();

        return redirect()->route('pokemon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Pokemon $id)
    {
        $pokemon =Pokemon::where('id',$id)->first();

        if ($pokemon != null) {
            $pokemon->delete();
            return redirect()->route('pokemons.index')->with(['message'=> 'Successfully deleted!!']);
        }
    }
}
