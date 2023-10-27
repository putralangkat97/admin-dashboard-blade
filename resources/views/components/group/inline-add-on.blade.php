<div {{ $attributes->merge(['class' => 'w-96']) }}>
    <label for="website2" class="block text-sm font-medium mb-2">Website URL</label>
    <div class="relative">
        <input type="text" id="website2" name="website2"
            class="py-3 px-4 pl-20 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
            placeholder="www.example.com">
        <div class="absolute text-gray-400 inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
            <span>http://</span>
        </div>
    </div>
</div>
