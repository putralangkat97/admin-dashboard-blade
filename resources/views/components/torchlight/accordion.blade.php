@props(['type'])

<?php
    $style = "";
    $style = match ($type) {
        'default' => 'default',
        'collapse' => 'collapse',
        'icon' => 'with-icon',
        'icon-collapse' => 'collapse-with-icon',
        'colour' => 'with-colour',
        'colour-collapse' => 'collapse-with-colour',
    }
?>

<pre class="bg-gray-800 h-[500px] overflow-y-scroll">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/accordions/accordion-' . $style . '.blade.php') }}" />
</pre>
