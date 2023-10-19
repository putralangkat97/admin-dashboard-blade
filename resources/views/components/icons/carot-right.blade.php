@props([
    'class' => '',
])

<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => 'w-2.5 h-auto ' . $class]) }}>
    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" />
</svg>
