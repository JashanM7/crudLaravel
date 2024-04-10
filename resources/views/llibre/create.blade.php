@extends('layout.app')

@section('title', 'Create')

@section('content')

<h1>Afegir Nou Llibre</h1>

<form action="/guardar-llibre" class="m-5" method="POST">
    @csrf 
    <label for="titol">Títol:</label><br>
    <input class="" type="text" id="titol" name="titol"><br><br>
    
    <label for="autor">Autor:</label><br>
    <input type="text" id="autor" name="autor"><br><br>
    
    <label for="any_publicacio">Any de Publicació:</label><br>
    <input type="text" id="any_publicacio" name="any_publicacio"><br><br>
    
    <label for="editorial">Editorial:</label><br>
    <input type="text" id="editorial" name="editorial"><br><br>
    
    <label for="isbn">ISBN:</label><br>
    <input type="text" id="isbn" name="isbn"><br><br>
    
    <label for="categoria">Categoria:</label><br>
    <input type="text" id="categoria" name="categoria"><br><br>
    
    <input type="submit" value="Afegir Llibre">
</form>

@endsection