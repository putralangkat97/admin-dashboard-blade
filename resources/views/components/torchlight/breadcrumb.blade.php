@props(['type' => 'solid'])

<?php
    $type = match ($type) {
        'chevron' => 'chevron',
        'slash' => 'slash',
        'icon' => 'icon',
    }
?>

<pre class="bg-gray-800 h-[400px] overflow-y-scroll whitespace-pre max-w-6xl">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/breadcrumbs/' . $type . '.blade.php') }}" />
</pre>
