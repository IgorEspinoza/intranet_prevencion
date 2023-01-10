<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">">

</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 tet-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold"> Andimar</p>
        </div>

        <ul class="w-1/2px-16 mlauto flex justify-end pt-1">
            @if(auth()->check())
            <li class="mx-8">
                <p class="text-xl">Bienvenido <b>{{ auth()->user()->name}}</b> </p>
            </li>

            <li class="mx-6">
                <a href="{{route('login.destroy')}}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Cerrar Sesion</a>
            </li>
            @else
            <li class="mx-6">
                <a href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
            </li>
            @endif
        </ul>

    </nav>

    @yield('content')

</body>

</html>