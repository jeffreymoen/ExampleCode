@extends('main')


@section('content')
{{-- Displays the Cat data in a table --}}
<h2>Example Cat</h2>
<table class="ui table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Breed</th>
        <th>Legs</th>
        <th>Tail</th>
        <th>Sound</th>
        <th>Tongue Texture</th>
        <th>Chases Mice</th>
        <th>Front Claws</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $cat->name() }}</td>
        <td>{{ $cat->breed() }}</td>
        <td>{{ $cat->legs() }}</td>
        <td>{{ $cat->tail() }}</td>
        <td>{{ $cat->sound() }}</td>
        <td>{{ $cat->tongueTexture() }}</td>
        <td>{{ $cat->chasesMice() }}</td>
        <td>{{ $cat->frontClaws() ? 'True' : 'False' }}</td>
    </tr>
    </tbody>
</table>
@endsection