@extends('main')


@section('content')
    {{-- Displays the Dog data in a table --}}
    <h2>Example Dog</h2>
    <table class="ui table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Breed</th>
            <th>Legs</th>
            <th>Tail</th>
            <th>Sound</th>
            <th>Plays Fetch</th>
            <th>Rolls Over</th>
            <th>Wags Tail</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $dog->name() }}</td>
            <td>{{ $dog->breed() }}</td>
            <td>{{ $dog->legs() }}</td>
            <td>{{ $dog->tail() ? 'True' : 'False' }}</td>
            <td>{{ $dog->sound() }}</td>
            <td>{{ $dog->playsFetch() ? 'True' : 'False' }}</td>
            <td>{{ $dog->rollsOver() ? 'True' : 'False' }}</td>
            <td>{{ $dog->wagsTail() ? 'True' : 'False' }}</td>
        </tr>
        </tbody>
    </table>
@endsection