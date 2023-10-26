@props(['type' => 'rounded'])

<?php
$type = match ($type) {
    'rounded' => 'rounded-lg',
    'circle' => 'rounded-full',
};
?>

<div {{ $attributes->merge(['class' => '']) }}>
    <img class="{{ 'inline-block h-8 w-8 ring-2 ring-white ' . $type }}"
        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
        alt="Image Description" />
    <img class="{{ 'inline-block h-12 w-12 ring-2 ring-white ' . $type }}"
        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
        alt="Image Description" />
    <img class="{{ 'inline-block h-16 w-16 ring-2 ring-white ' . $type }}"
        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
        alt="Image Description" />
    <img class="{{ 'inline-block h-20 w-20 ring-2 ring-white ' . $type }}"
        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
        alt="Image Description" />
</div>
