@props([
    'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-loader-2 ' . $class]) }} width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M12 3a9 9 0 1 0 9 9" />
</svg>
