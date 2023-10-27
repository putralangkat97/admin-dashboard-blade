@props(['type' => 'solid'])

<?php
    $type = match ($type) {
        'solid' => 'solid-colour',
        'soft' => 'soft-colour',
        'dismiss' => 'close-button',
        'status' => 'with-status'
    }
?>

<pre class="bg-gray-800 h-[400px] overflow-y-scroll whitespace-pre max-w-6xl">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/badges/' . $type . '.blade.php') }}" />
</pre>
