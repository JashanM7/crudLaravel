@extends('layout.app')

@section('title', 'Create')

@section('content')

<table>
    <thead>
        <tr>
            <th>Titol</th>
            <th>Autor</th>
            <th>Any</th>
            <th>Editorial</th>
            <th>ISBN</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach($llibres as $llibre)
        <tr>
            <td>{{ $llibre->titol }}</td>
            <td>{{ $llibre->autor }}</td>
            <td>{{ $llibre->anypub }}</td>
            <td>{{ $llibre->editorial }}</td>
            <td>{{ $llibre->isbn }}</td>
            <td>{{ $llibre->categoria }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection