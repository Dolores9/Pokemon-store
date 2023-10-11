@section()

<form method="POST" action="{{ route('pokemons.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <!-- Add fields for 'weight', 'height', and 'shiny' here -->

    <button type="submit">Create Pokemon</button>
</form>

@endsection
