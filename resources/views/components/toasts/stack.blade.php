<div {{ $attributes->merge(['class' => '']) }}>
    <div class="w-80 bg-white border shadow" role="alert" x-data="{ open: true }" x-show="open"
        x-transition:leave.duration.300ms>
        <div class="flex p-4">
            <div class="flex-shrink-0">
                <x-icons.bell class="w-5 h-5 stroke-2 mt-0.5" />
            </div>
            <div class="ml-4">
                <h3 class="text-gray-800 font-semibold">
                    App notifications
                </h3>
                <div class="mt-1 text-sm text-gray-600">
                    Notifications may include alerts, sounds and icon badges.
                </div>
                <div class="mt-4">
                    <div class="flex space-x-3">
                        <button type="button"
                            class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                            @click="open = !open">
                            Don't allow
                        </button>
                        <button type="button"
                            class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                            @click="open = !open">
                            Allow
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-80 bg-white border shadow" role="alert">
        <div class="flex p-4">
            <div class="flex-shrink-0">
                <x-icons.check class="w-5 h-5 stroke-green-500" />
            </div>
            <div class="ml-3">
                <p class="text-sm text-gray-500">
                    This is a success message.
                </p>
            </div>
        </div>
    </div>
</div>
