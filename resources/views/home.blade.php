<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN de TaildWin --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <title>kemtch from laravel</title>
</head>

<body>
    <h1 class="text-primary">title from my web page of laravel</h1>

    <x-alert> 
        <x-slot name="variable">
            saludos desde una etiqueta slot
        </x-slot>

        saludos desde una variable
    </x-alert>
</body>

</html>
