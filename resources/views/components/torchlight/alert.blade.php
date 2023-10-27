@props(['type' => 'solid'])

<?php
    $type = match ($type) {
        'solid' => 'solid-colour',
        'soft' => 'soft-colour',
        'dismiss' => 'close-button'
    }
?>

<pre class="bg-gray-800 h-[500px] overflow-y-scroll whitespace-pre max-w-6xl">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/alerts/' . $type . '.blade.php') }}" />
</pre>
