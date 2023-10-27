<div {{ $attributes->merge(['class' => '']) }}>
    <div class="inline-flex items-center py-1.5 px-3 bg-gray-200 text-gray-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Basic</span>
            <button class="active:bg-gray-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-gray-600 stroke-2" />
            </button>
        </div>
    </div>
    <div class="inline-flex items-center py-1.5 px-3 bg-blue-200 text-blue-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Blue</span>
            <button class="active:bg-blue-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-blue-600 stroke-2" />
            </button>
        </div>
    </div>
    <div class="inline-flex items-center py-1.5 px-3 bg-yellow-200 text-yellow-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Yellow</span>
            <button class="active:bg-yellow-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-yellow-600 stroke-2" />
            </button>
        </div>
    </div>
    <div class="inline-flex items-center py-1.5 px-3 bg-orange-200 text-orange-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Orange</span>
            <button class="active:bg-orange-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-orange-600 stroke-2" />
            </button>
        </div>
    </div>
    <div class="inline-flex items-center py-1.5 px-3 bg-red-200 text-red-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Red</span>
            <button class="active:bg-red-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-red-600 stroke-2" />
            </button>
        </div>
    </div>
    <div class="inline-flex items-center py-1.5 px-3 bg-green-200 text-green-600 text-sm font-medium"
        x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
        <div class="flex items-center justify-between">
            <span class="mr-2">Green</span>
            <button class="active:bg-green-300 active:py-0.5 active:rounded-full" @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-green-600 stroke-2" />
            </button>
        </div>
    </div>
</div>
