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
            <th colspan="3"></th>
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
            <td><x-button_1 :id="$llibre->id" text="Ventas" color="bg-amber-200" colorHover="hover:bg-amber-800" ruta="redirectToCreate" /></td>
            <td><x-button_1 :id="$llibre->id" text="Editar" color="bg-sky-500" colorHover="hover:bg-sky-800"  ruta="llibre.edit" /></td>
            <td><x-button_delete :id="$llibre->id" ruta="llibre.destroy"/></td>
        </tr>
        @endforeach
    </tbody>
</table>

@else
<div>No hi ha cap llibre afegit. Afegeix-ne un!</div>
@endif



@endsection