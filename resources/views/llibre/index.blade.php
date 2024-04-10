@extends('layout.app')

@section('title', 'Títol de la pàgina')

@section('content')

<!--
    tu k aixo sigui un navbar, ok?
-->

<h1>Click on a Link</h1>

<a href="{{ route('processButton', ['button' => 'llistar']) }}">Llistar llibre</a>
<a href="{{ route('processButton', ['button' => 'crear']) }}">Crear llibre</a>
<a href="{{ route('processButton', ['button' => 'eliminar']) }}">Eliminar llibre</a>
<a href="{{ route('processButton', ['button' => 'editar']) }}">Editar llibre</a>


@endsection