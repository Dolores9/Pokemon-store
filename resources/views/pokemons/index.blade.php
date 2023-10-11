<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1> Pokemons</h1>

<ul>
    @foreach ($pokemons as $pokemon)
        <li>{{ $pokemon->name }}</li>
        <li>{{ $pokemon->weight }}</li>
        <li>{{ $pokemon->height }}</li>
        <li>{{ $pokemon->shiny }}</li>
        <a href="{{ route('pokemons.edit', ['pokemon' => $pokemon->id]) }}">Edit</a>

    @endforeach
</ul>

<a href="{{route('pokemons.store')}}">go to login!</a>
<li><a href="{{route('pokemons.create')}}">create pokemon</a> </li>

</body>
</html>


