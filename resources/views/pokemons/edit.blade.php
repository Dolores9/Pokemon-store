<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hoi</title>
</head>
<body>

<h1> Edit: {{$pokemon['name']}} </h1>

 <form action="" method="post">
    @method('PUT')
    @csrf
    <input name="title" type="text" value="{{ $pokemon->name}}">
    <br>
    <input type="number" class="form"   name="weight" value="{{ $pokemon->weigth }}">
    <input type="number" class="form"   name="height" value="{{ $pokemon->height }}">
    <select name="interest" class="form" id="control-714036">
        <option value="Force-users" {{($pokemon->pokemon == "Yes")?"selected":"" }}>Yes</option>
        <option value="History" {{($pokemon->pokemon == "No")?"selected":"" }}>No</option>
    </select>
    <br>
    <button type="submit" class="submit btn-default btn">upload
        <br>
    </button>

</form>

<a href="{{route('delete', ['id' => $pokemon['id']])}}" >delete</a>

</body>
</html>


{{--{{ route('update', ['pokemon' => $pokemon->id]) }}--}}




