@extends('layout.app')

@section('title', 'Create')

@section('content')

    @if (isset($unLlibre))
    <form action="/llibre/update" class="m-5" method="POST">
    @else
    <form action="/llibre/store" class="m-5" method="POST">
    @endif

    

        <h1 class="text-4xl mb-2">Afegir Nou Llibre</h1>

        @csrf
        <label for="titol">Títol:</label><br>
        <input type="text" id="titol" name="titol" class="w-1/6" value="{{ $unLlibre->titol ?? '' }}"><br><br>

        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" class="w-1/6" value="{{ $unLlibre->autor ?? '' }}"><br><br>

        <label for="anypub">Any de Publicació (yyyy):</label><br>
        <input type="text" id="anypub" name="anypub" pattern="\d{4}" maxlength="4" class="w-1/6"
            value="{{ $unLlibre->anypub ?? '' }}"><br><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" id="editorial" name="editorial" class="w-1/6"
            value="{{ $unLlibre->editorial ?? '' }}"><br><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" class="w-1/6" value="{{ $unLlibre->isbn ?? '' }}"><br><br>

        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria" class=" border border-black w-1/6 h-7 bg-white">
            <option value="mates" {{ ($unLlibre->categoria ?? '') == 'mates' ? 'selected' : '' }}>Mates</option>
            <option value="historia" {{ ($unLlibre->categoria ?? '') == 'historia' ? 'selected' : '' }}>Història</option>
            <option value="catala" {{ ($unLlibre->categoria ?? '') == 'catala' ? 'selected' : '' }}>Català</option>
            <option value="castella" {{ ($unLlibre->categoria ?? '') == 'castella' ? 'selected' : '' }}>Castellà</option>
        </select><br><br>

        @if (isset($unLlibre))
        <input type="hidden" name="id" value="{{$unLlibre->id}}">
        @endif

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Afegir
            llibre</button>

    </form>

@endsection
