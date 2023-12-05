
@extends('layouts.app')

@section('content')

<body>

<h1> Pokemons</h1>

can't find your pokemon?
<form method="get" action="{{url('/search')}}">
    <input type="text" name="search" placeholder="Zoek"> </form>

<form method="get" action="{{url('/filter')}}">
    <select name="interest" class="form">
        <option value="shiny" selected="true" >shiny</option>
    </select>
    <button type="submit" class="submit btn-default btn">filter
        <br>
    </button>

</form>

<ul>
    @foreach ($pokemons as $pokemon)
        <li>{{ $pokemon->name }}</li>
        <li>{{ $pokemon->weight }}</li>
        <li>{{ $pokemon->height }}</li>
        <li>{{ $pokemon->shiny }}</li>


    @endforeach
</ul>


<li><a href="{{ route('pokemons.store') }}" class="btn btn-primary">Koop Pokémon</a> </li>



</body>


@endsection


