@props([
    'title' => $title ?? '',
    'button' => $button ?? '',
])

<div class="bg-white border border-gray-300 shadow">
    <div class="flex bg-zinc-900 text-white font-semibold">
        <div class="flex flex-grow uppercase p-4">{{ $title }}</div>
        @if ($button)
            <div class="flex">{{ $button }}</div>
        @endif
    </div>

    <div class="p-2 md:p-4">{{ $slot }}</div>
</div>
