<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View show | Posts</title>
</head>
<body>
    {{-- <h1>hola desde la función show y esto es lo que escribiste en la url -> <?= $var ?> </h1> ------> esta es la primera forma de meter código de php en una plantilla de blade --}}

    <h1>hola desde la función show y esto es lo que escribiste en la url -> {{$var}} </h1> {{-- esta es la otra forma mas limpia pero directamente desde las plantillas blade no siendo inyectada como la de php con el fin de que sea mas estetico --}}

    @if(true){
        <p>Esto es una prueba de condicional</p>
    }@endif  

    @php
        print "hola mundo";
    @endphp
    
</body>
</html>