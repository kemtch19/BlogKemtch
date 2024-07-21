@props(['type' => 'info']) {{-- lo que nos indica es que si no trae un valor la variable que por defecto me aplique el switch con el case info --}}

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;

        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;

        case 'success':
            $class =
                'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400'; /* Este componente solo se le llama componente anonimo que no procede de ninguna clase */
            break;

        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;

        case 'dark':
            $class = 'text-dark-800 bg-dark-50 dark:bg-gray-800 dark:text-dark-400';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'p4 text-sm rounded-lg' . $class]) }} role="alert">
    <span class="font-medium">base de todo ahora --> {{ $variable ?? 'no introduciste nada pa' }} </span> -->
    {{ $slot }} y la segunda var --> {{ $VarTwo ?? 'no envio nada marica' }}
</div>

<p> {{ $attributes }} </p>
