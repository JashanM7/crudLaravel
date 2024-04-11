@extends('layout.app')

@section('title', 'Create')

@section('content')

    <form action="llibre/store" class="m-5" method="POST">

        <h1 class="text-4xl mb-2">Afegir Nou Llibre</h1>

        @csrf
        <label for="titol">Títol:</label><br>
        <input type="text" id="titol" name="titol" class="w-1/6 "><br><br>

        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" class="w-1/6"><br><br>

        <label for="any">Any de Publicació (yyyy):</label><br>
        <input type="text" id="any" name="any" pattern="\d{4}" maxlength="4" class="w-1/6"><br><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" id="editorial" name="editorial" class="w-1/6"><br><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" class="w-1/6"><br><br>

        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria" class=" border border-black w-1/6 h-7">
            <option value="mates">Mates</option>
            <option value="historia">Història</option>
            <option value="catala">Català</option>
            <option value="castella">Castellà</option>
        </select><br><br>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Afegir llibre</button>

    </form>

@endsection
