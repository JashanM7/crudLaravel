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
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($llibreries as $llibreria)
        <tr>
            <td>{{ $llibreria->nom }}</td>
            <td>{{ $llibreria->lloc }}</td> 

            <td><x-button :id="$llibreria->id" text="Afegir un llibre" color="bg-amber-500" colorHover="hover:bg-amber-800"  ruta="redirectStoreToList" /></td>
            <td><x-button :id="$llibreria->id" text="Llistar llibres" color="bg-amber-500" colorHover="hover:bg-amber-800"  ruta="redirectToCreate" /></td>
            <td><x-button :id="$llibreria->id" text="Editar" color="bg-sky-500" colorHover="hover:bg-sky-800"  ruta="llibreria.edit" /></td>
            <td><x-button_delete :id="$llibreria->id" ruta="llibreria.destroy"/></td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@else
<div>No hi ha cap llibreria afegida. Afegeix-ne un!</div>
@endif

@endsection