<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-300">
    <header class="bg-gray-800 py-4">
        <nav class="flex justify-between items-center container mx-auto">
            <ul class="flex space-x-4 mx-auto">
                <li><a href="{{url('/employee')}}" class="text-white hover:text-gray-300">Home</a></li>
                <li><a href="{{url('/employee/create')}}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Ajouter</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>