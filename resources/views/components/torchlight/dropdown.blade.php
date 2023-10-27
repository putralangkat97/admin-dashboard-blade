@props(['type' => ''])

<pre class="bg-gray-800 h-[400px] overflow-y-scroll whitespace-pre max-w-6xl">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/dropdowns/' . $type . '.blade.php') }}" />
</pre>
