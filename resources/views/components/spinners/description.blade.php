<div {{ $attributes->merge(['class' => 'w-1/2 relative']) }}>
    <div class="bg-gray-50 border border-zinc-200 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-4 w-4 text-zinc-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm text-zinc-400 font-medium">
                    Attention needed
                </h3>
                <div class="text-sm text-zinc-400 mt-2">
                    <span class="font-semibold">Holy guacamole!</span> You should check in on some of those
                    fields below.
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-white/[.5]"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-zinc-900 rounded-full"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>
