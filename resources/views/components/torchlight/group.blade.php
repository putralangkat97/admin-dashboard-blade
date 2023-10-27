@props(['type' => ''])

<pre class="bg-gray-800 max-h-md overflow-y-scroll whitespace-pre max-w-6xl">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/group/' . $type . '.blade.php') }}" />
</pre>
