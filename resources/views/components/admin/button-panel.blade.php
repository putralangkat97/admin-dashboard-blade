@props(['href'])

<a href={{ $href }} {{ $attributes->merge(['class' => 'text-zinc-900 px-4 py-2 md:px-5 md:py-3 bg-blue-200 uppercase hover:bg-blue-300']) }}>
    {{ $slot }}
</a>
