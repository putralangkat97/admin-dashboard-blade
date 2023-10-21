@props([
    'class' => '',
])

<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
    fill="none" stroke-linecap="round" stroke-linejoin="round"
    {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-home-2 ' . $class]) }}>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
    <path d="M10 12h4v4h-4z" />
</svg>