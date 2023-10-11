<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<ul>
    @foreach ($pokemons as $pokemon)
        <li>{{ $pokemon->name }}</li>
        <li>{{ $pokemon->weight }}</li>
        <li>{{ $pokemon->height }}</li>
        <li>{{ $pokemon->shiny }}</li>

    @endforeach
</ul>

</body>
</html>

