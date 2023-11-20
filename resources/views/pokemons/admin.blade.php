@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($pokemons as $pokemon)
            <li>{{ $pokemon->name }}</li>
            <li>{{ $pokemon->weight }}</li>
            <li>{{ $pokemon->height }}</li>
            <li>{{ $pokemon->shiny }}</li>
            <li>
                <a href="{{ route('pokemons.edit', ['pokemon' => $pokemon->id]) }}">Edit</a>
                <!-- Add the delete link with a form for better structure -->
                <form action="{{ route('pokemons.destroy', ['pokemon' => $pokemon->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <li><a href="{{ route('pokemons.create') }}">Create Pokemon</a></li>

@endsection
