<div {{ $attributes->merge(['class' => 'w-96']) }}>
    <label for="price" class="block text-sm font-medium mb-2">Price</label>
    <div class="relative">
        <div class="absolute text-gray-400 inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
            <x-icons.currency-pound class="w-5 h-5" />
        </div>
        <input type="text" id="price" name="price"
            class="py-3 px-4 pl-11 pr-14 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
            placeholder="0.00">
        <div class="absolute text-gray-400 inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
            <span>GBP</span>
        </div>
    </div>
</div>
