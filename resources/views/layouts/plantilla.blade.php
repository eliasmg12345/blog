<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

    <!-- D1. para que sea variable ponemos con arroba -->
    <title>@yield('title')</title>

</head>
<body>
    <!-- D2. aca tambien para que sea variable ...luego a las vistas que queremos
que se hereden ..ejemplo en el home.php debo escribir por encima el a@extends
con su respectiva ubicacion al layouts => home.php-->
    @yield('content')
</body>
</html>