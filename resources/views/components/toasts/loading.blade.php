<div {{ $attributes->merge(['class' => 'w-80 bg-white border shadow']) }} role="alert">
    <div class="flex items-center p-4">
        <div class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-zinc-900 rounded-full"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
        <p class="ml-3 text-sm text-gray-700">
            Action in progress
        </p>
    </div>
</div>
