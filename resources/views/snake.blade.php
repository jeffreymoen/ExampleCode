@extends('main')


@section('content')
    {{-- Displays the Snake data in a table --}}
    <h2>Example Snake</h2>
    <table class="ui table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Breed</th>
            <th>Legs</th>
            <th>Tail</th>
            <th>Sound</th>
            <th>Oviparous</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $snake->name() }}</td>
            <td>{{ $snake->breed() }}</td>
            <td>{{ $snake->legs() }}</td>
            <td>{{ $snake->tail() ? 'True' : 'False' }}</td>
            <td>{{ $snake->sound() }}</td>
            <td>{{ $snake->oviparous() ? 'True' : 'False' }}</td>
        </tr>
        </tbody>
    </table>
@endsection