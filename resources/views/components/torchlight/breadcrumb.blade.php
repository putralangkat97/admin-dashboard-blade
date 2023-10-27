@props(['type' => 'solid'])

<?php
    $type = match ($type) {
        'chevron' => 'chevron',
        'slash' => 'slash',
        'icon' => 'icon',
    }
?>

<pre class="bg-gray-800 max-h-md overflow-y-scroll whitespace-pre">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/breadcrumbs/' . $type . '.blade.php') }}" />
</pre>
