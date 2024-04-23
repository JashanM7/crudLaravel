@extends('layout.app')

@if (!isset($unLlibre))
    @section('title', 'Create')
@else
    @section('title', 'Editar')
@endif

@section('content')

    @if (isset($unaLlibreria))
        <form action="{{ route('llibreria.update') }}" class="m-5" method="POST">
    @else
        <form action="{{ route('llibreria.store') }}" class="m-5" method="POST">
    @endif

    <h1 class="text-4xl mb-2">Crear llibreria</h1>

    @csrf
    <label for="nom">Nom de la llibreria:</label><br>
    <input type="text" id="nom" name="nom" class="w-1/6"><br><br>

    @error('nom')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="lloc">Lloc de la llibreria:</label><br>
    <input type="text" id="lloc" name="lloc" class="w-1/6"><br><br>

    @error('lloc')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Confirmar</button>


    </form>

@endsection
