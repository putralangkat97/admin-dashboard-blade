@props(['indicator' => '', 'type' => ''])

<?php
    $top = "";
    $bottom = "";
    if ($type == 'circle') {
        $top = 'top-0';
        $bottom = "bottom-0";
    } else {
        $top = 'top-0 -translate-y-1/2 transform translate-x-1/2';
        $bottom = 'translate-y-1/2 bottom-0';
    }
?>

<div {{ $attributes->merge(['class' => '']) }}>
    <div class="relative inline-block">
        <img class="inline-block h-8 w-8 ring-2 ring-white {{ $type == "circle" ? 'rounded-full' : 'rounded-lg' }}"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description">
        <span
            class="absolute right-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-green-500 {{ $indicator == "top" ? $top : $bottom }}"></span>
    </div>
    <div class="relative inline-block">
        <img class="inline-block h-12 w-12 ring-2 ring-white {{ $type == "circle" ? 'rounded-full' : 'rounded-lg' }}"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description">
        <span
            class="absolute right-0 block h-2.5 w-2.5 rounded-full ring-2 ring-white bg-green-500 {{ $indicator == "top" ? $top : $bottom }}"></span>
    </div>
    <div class="relative inline-block">
        <img class="inline-block h-16 w-16 ring-2 ring-white {{ $type == "circle" ? 'rounded-full' : 'rounded-lg' }}"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description">
        <span
            class="absolute right-0 block h-3.5 w-3.5 rounded-full ring-2 ring-white bg-green-500 {{ $indicator == "top" ? $top : $bottom }}"></span>
    </div>
    <div class="relative inline-block">
        <img class="inline-block h-20 w-20 ring-2 ring-white {{ $type == "circle" ? 'rounded-full' : 'rounded-lg' }}"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description">
        <span
            class="absolute right-0 block h-[1.15rem] w-[1.15rem] rounded-full ring-2 ring-white bg-green-500 {{ $indicator == "top" ? $top : $bottom }}"></span>
    </div>
</div>
