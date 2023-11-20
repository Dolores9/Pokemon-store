<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Create a New Pokémon</h2>

@if(Auth::user()->admin)
    ADMIN
@endif

<form method="POST" action="{{ route('pokemons.store') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="weight">Weight:</label>
        <input type="number" name="weight" id="weight" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="height">Height:</label>
        <input type="number" name="height" id="height" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="shiny">Shiny:</label>
        <input type="checkbox" name="shiny" id="shiny" class="form-check-input">
    </div>

    <button type="submit" class="btn btn-primary">Create Pokémon</button>
</form>




</body>
</html>

