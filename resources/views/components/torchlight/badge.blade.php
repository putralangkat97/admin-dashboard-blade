@props(['type' => 'solid'])

<?php
    $type = match ($type) {
        'solid' => 'solid-colour',
        'soft' => 'soft-colour',
        'dismiss' => 'close-button',
        'status' => 'with-status'
    }
?>

<pre class="bg-gray-800 max-h-md overflow-y-scroll whitespace-pre">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/badges/' . $type . '.blade.php') }}" />
</pre>
