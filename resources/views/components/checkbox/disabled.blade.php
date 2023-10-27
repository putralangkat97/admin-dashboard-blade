<div {{ $attributes->merge(['class' => '']) }}>
    <div class="flex opacity-75">
        <input type="checkbox"
            class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed" id="checkbox-2"
            disabled>
        <label for="checkbox-2" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Default
            checkbox</label>
    </div>
    <div class="flex opacity-75">
        <input type="checkbox"
            class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
            id="checkbox-2-checked" checked disabled>
        <label for="checkbox-2-checked" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Checked
            checkbox</label>
    </div>
</div>
