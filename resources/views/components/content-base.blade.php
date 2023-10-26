@props(['title' => 'Untitled', 'eventName' => 'showCode'])

<h1 class="mb-3">{{ $title }}</h1>
<div class="p-6 border mb-8" x-data="{ {{ $eventName }}: false }">
    {{ $slot }}
</div>
