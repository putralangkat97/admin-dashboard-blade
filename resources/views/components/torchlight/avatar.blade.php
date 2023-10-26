@props(['type' => 'basic'])

<?php
    $type = match ($type) {
        'basic' => 'rounded',
        'circle' => 'circle',
        'stacked' => 'stacked',
        'indicator-top' => 'rounded-top',
        'indicator-bottom' => 'rounded-bottom',
        'circle-indicator-top' => 'circle-top',
        'circle-indicator-bottom' => 'circle-bottom',
        'circle-placeholder' => 'circle-placeholder',
    }
?>

<pre class="bg-gray-800 max-h-md overflow-y-scroll whitespace-pre">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/avatars/' . $type . '.blade.php') }}" />
</pre>
