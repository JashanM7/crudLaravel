@extends('layout.app')

@if (!isset($unLlibre))
@section('title', 'Create')
@else
@section('title', 'Editar')
@endif

@section('content')

    <form action="{{ route("user.login")}}" class="m-5" method="POST">

        <h1 class="text-4xl mb-2">Log in</h1>

        @csrf
        <label for="name">Username:</label><br>
        <input type="text" id="name" name="name" class="w-1/6"><br><br>

        @error('name')
            <div class="text-red-500">{{$message}}</div>
        @enderror

        <label for="password">Contrasenya:</label><br>
        <input type="text" id="password" name="password" class="w-1/6"><br><br>

        @error('password')
            <div class="text-red-500">{{$message}}</div>
        @enderror

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Confirmar</button>


    </form>

@endsection
