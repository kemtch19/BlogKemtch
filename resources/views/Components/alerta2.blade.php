<div {{ $attributes->merge(['class' => 'p4 text-sm rounded-lg' . $class]) }} role="alert">
    <span class="font-medium">base de todo ahora --> {{ $variable ?? 'no introduciste nada pa' }} </span> -->
    {{ $slot }} y la segunda var --> {{ $VarTwo ?? 'no envio nada marica' }}
</div>
