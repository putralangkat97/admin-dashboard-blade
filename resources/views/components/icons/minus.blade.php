@props([
    'class' => '',
])

<svg xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-minus ' . $class]) }} width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M5 12l14 0" />
</svg>
