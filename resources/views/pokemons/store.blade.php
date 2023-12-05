
@extends('layouts.app')

@section('content')

@foreach ($pokemons as $pokemon)

    @if(Auth::check() && Auth::user()->login_count >= 5)
        <form action="{{ route('pokemons.koop') }}" method="POST">
            @csrf
            <input type="hidden" name="pokemon_id" value="{{ $pokemon->id }}">
            <button type="submit">Koop Pokémon</button>
        </form>
    @else
        <p>Je moet minstens 5 keer zijn ingelogd om een Pokémon te kunnen kopen.</p>
    @endif
@endforeach

@endsection
