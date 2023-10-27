@props(['type' => ''])

<pre class="bg-gray-800 max-h-md overflow-y-scroll whitespace-pre">
    <x-torchlight-code language="blade" contents="{{ resource_path('example/buttons/' . $type . '.blade.php') }}" />
</pre>
