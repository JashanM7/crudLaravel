<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

        @hasSection('title')
            @yield('title')
        @endif

        @sectionMissing('title')
           CIRVIAPP
        @endif

    </title>
    @vite('resources/css/app.css')
</head>

<body>

    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold">
                CRUD UF4
            </div>
            <ul class="flex space-x-4">
                <li><a class="text-white" href="{{ route('processButton', ['button' => 'llistar']) }}">Llistar llibre</a></li>
                <li><a class="text-white" href="{{ route('processButton', ['button' => 'crear']) }}">Crear llibre</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>