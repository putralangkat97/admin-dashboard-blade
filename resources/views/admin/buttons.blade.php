<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Buttons') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Solid Colours</h1>
    <div class="p-6 border space-x-3 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm">
            Black
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
            Blue
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 transition-all text-sm">
            Yellow
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 transition-all text-sm">
            Orange
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all text-sm">
            Red
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-all text-sm">
            Green
        </button>
    </div>

    <h1 class="mb-3">Outline</h1>
    <div class="p-6 border space-x-4 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-zinc-200 font-semibold text-zinc-900 hover:text-white hover:bg-zinc-900 hover:border-zinc-900 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:ring-offset-2 transition-all text-sm">
            Black
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-blue-200 font-semibold text-blue-500 hover:text-white hover:bg-blue-500 hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
            Blue
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-yellow-200 font-semibold text-yellow-500 hover:text-white hover:bg-yellow-500 hover:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all text-sm">
            Yellow
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-orange-200 font-semibold text-orange-500 hover:text-white hover:bg-orange-500 hover:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
            Orange
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm">
            Red
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border-2 border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all text-sm">
            Green
        </button>
    </div>

    <h1 class="mb-3">Ghost</h1>
    <div class="p-6 border space-x-4 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm">
            Basic
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-zinc-900 hover:bg-zinc-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:ring-offset-2 transition-all text-sm">
            Black
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
            Blue
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-yellow-500 hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 transition-all text-sm">
            Yellow
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-orange-500 hover:bg-orange-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 transition-all text-sm">
            Orange
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-red-500 hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all text-sm">
            Red
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-green-500 hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-all text-sm">
            Green
        </button>
    </div>

    <h1 class="mb-3">With Icon</h1>
    <div class="p-6 border space-x-3 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Black</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Blue</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Yellow</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Orange</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Red</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Green</span>
                <x-icons.basket class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
    </div>

    <h1 class="mb-3">With Loading</h1>
    <div class="p-6 border space-x-3 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Black</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Blue</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Yellow</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Orange</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Red</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Green</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
    </div>

    <h1 class="mb-3">Disabled</h1>
    <div class="p-6 border space-x-4 mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Black</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Blue</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Yellow</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Orange</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Red</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-all text-sm disabled:opacity-75 cursor-not-allowed"
            disabled>
            <div class="flex justify-between items-center">
                <span class="mr-2">Green</span>
                <x-icons.loader class="animate-spin w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
    </div>
</x-app-layout>
