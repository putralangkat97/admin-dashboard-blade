@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-zinc-900 focus:ring-zinc-900 shadow']) !!}>
