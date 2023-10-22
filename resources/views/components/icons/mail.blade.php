@props([
    'class' => '',
])

<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
    {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-mail ' . $class]) }}>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
    <path d="M3 7l9 6l9 -6" />
</svg>