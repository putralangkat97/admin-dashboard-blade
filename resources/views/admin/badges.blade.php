<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Badges') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Solid Colours</h1>
    <div class="p-6 border space-x-3 mb-8">
        <span class="inline-flex items-center py-1.5 px-3 bg-zinc-900 text-white text-sm font-medium">Black</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-blue-500 text-white text-sm font-medium">Blue</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-yellow-500 text-white text-sm font-medium">Yellow</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-orange-500 text-white text-sm font-medium">Orange</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-red-500 text-white text-sm font-medium">Red</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-green-500 text-white text-sm font-medium">Green</span>
    </div>

    <h1 class="mb-3">Soft Colours</h1>
    <div class="p-6 border space-x-3 mb-8">
        <span class="inline-flex items-center py-1.5 px-3 bg-gray-200 text-gray-600 text-sm font-medium">Basic</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-blue-100 text-blue-600 text-sm font-medium">Blue</span>
        <span
            class="inline-flex items-center py-1.5 px-3 bg-yellow-100 text-yellow-600 text-sm font-medium">Yellow</span>
        <span
            class="inline-flex items-center py-1.5 px-3 bg-orange-100 text-orange-600 text-sm font-medium">Orange</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-red-100 text-red-600 text-sm font-medium">Red</span>
        <span class="inline-flex items-center py-1.5 px-3 bg-green-100 text-green-600 text-sm font-medium">Green</span>
    </div>

    <h1 class="mb-3">With Close Button</h1>
    <div class="p-6 border space-x-3 mb-8">
        <div class="inline-flex items-center py-1.5 px-3 bg-gray-200 text-gray-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Basic</span>
                <button class="active:bg-gray-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-gray-600 stroke-2" />
                </button>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-blue-200 text-blue-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Blue</span>
                <button class="active:bg-blue-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-blue-600 stroke-2" />
                </button>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-yellow-200 text-yellow-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Yellow</span>
                <button class="active:bg-yellow-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-yellow-600 stroke-2" />
                </button>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-orange-200 text-orange-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Orange</span>
                <button class="active:bg-orange-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-orange-600 stroke-2" />
                </button>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-red-200 text-red-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Red</span>
                <button class="active:bg-red-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-red-600 stroke-2" />
                </button>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-green-200 text-green-600 text-sm font-medium" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
            <div class="flex items-center justify-between">
                <span class="mr-2">Green</span>
                <button class="active:bg-green-300 active:py-0.5 active:rounded-full" @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-green-600 stroke-2" />
                </button>
            </div>
        </div>
    </div>

    <h1 class="mb-3">With Status</h1>
    <div class="p-6 border space-x-3 mb-8">
        <div class="inline-flex items-center py-1.5 px-3 bg-gray-200 text-gray-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-gray-600"></span>
                <span class="">Basic</span>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-blue-200 text-blue-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-blue-600"></span>
                <span class="">Blue</span>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-yellow-200 text-yellow-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-yellow-600"></span>
                <span class="">Yellow</span>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-orange-200 text-orange-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-orange-600"></span>
                <span class="">Orange</span>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-red-200 text-red-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-red-600"></span>
                <span class="">Red</span>
            </div>
        </div>
        <div class="inline-flex items-center py-1.5 px-3 bg-green-200 text-green-600 text-sm font-medium">
            <div class="flex items-center justify-between">
                <span
                    class="h-1.5 w-1.5 mr-1 rounded-full bg-green-600"></span>
                <span class="">Green</span>
            </div>
        </div>
    </div>
</x-app-layout>
