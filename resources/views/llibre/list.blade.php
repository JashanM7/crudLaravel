@extends('layout.app')

@section('title', 'List')

@section('content')

@if(session('msgFlash'))
    <div class="bg-black text-white font-bold px-4 py-2 shadow-md">
        {{ session('msgFlash') }}
    </div>
@endif

@if(count($llibres) != 0)

<table class="border border-black mt-10 mx-auto">
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
            <td><a href="/llibre/update/{{$llibre->id}}"><button class="bg-sky-500 hover:bg-sky-700 px-2 border border-black">Editar</button></a></td>
            <td><a href="/llibre/destroy/{{$llibre->id}}"><button class="bg-red-500 hover:bg-red-700 px-2 border border-black">Eliminar</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@else
<div>No hi ha cap llibre afegit. Afegeix-ne un!</div>
@endif



@endsection