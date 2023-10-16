@props(['href'])

<a href={{ $href }} {{ $attributes->merge(['class' => 'text-zinc-900 px-6 py-4 bg-blue-200 uppercase hover:bg-blue-300']) }}>
    {{ $slot }}
</a>
