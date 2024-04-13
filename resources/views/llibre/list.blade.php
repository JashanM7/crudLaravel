@extends('layout.app')

@section('title', 'Create')

@section('content')
<table class="border border-black mx-auto">
    <thead>
        <tr>
            <th>Titol</th>
            <th>Autor</th>
            <th>Any</th>
            <th>Editorial</th>
            <th>ISBN</th>
            <th>Categoria</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($llibres as $llibre)
        <tr>
            <td class="" >{{ $llibre->titol }}</td>
            <td>{{ $llibre->autor }}</td>
            <td>{{ $llibre->anypub }}</td>
            <td>{{ $llibre->editorial }}</td>
            <td>{{ $llibre->isbn }}</td>
            <td>{{ $llibre->categoria }}</td>
            <td><button class="bg-sky-500 hover:bg-sky-700 px-2 border border-black">Editar</button></td>
            <td><a href="/llibre/destroy/{{$llibre->id}}"><button class="bg-red-500 hover:bg-red-700 px-2 border border-black">Eliminar</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection