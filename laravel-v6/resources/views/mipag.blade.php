<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

       
    </head>
    <body>
    <!-- Section define una secccion de un contenido -->
    @section('sidebar')

    modifique mi siderbar desde mi layout

    <div class="container">
    <!-- Yield es utilizada para mostrar contenido de una seccion determinada -->
         mi contenido desde mi layot master mipag

    </div>
    </body>
</html>
