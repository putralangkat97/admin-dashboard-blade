<div {{ $attributes->merge(['class' => 'w-96']) }}>
    <label for="price2" class="block text-sm font-medium mb-2">Price</label>
    <div class="relative">
        <input type="text" id="price2" name="price2"
            class="py-3 px-4 pl-11 pr-20 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
            placeholder="0.00">
        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
            <span class="text-gray-400">
                <x-icons.currency-pound class="w-5 h-5" />
            </span>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center text-gray-400 pr-px">
            <label for="select-country" class="sr-only">Country</label>
            <select id="select-country" name="select-country"
                class="block w-full border-transparent focus:ring-zinc-900 focus:border-zinc-900">
                <option>GBR</option>
                <option>USD</option>
                <option>EUR</option>
            </select>
        </div>
    </div>
</div>
