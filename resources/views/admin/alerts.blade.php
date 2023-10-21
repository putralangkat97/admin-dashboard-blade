<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Alerts') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Solid Colour</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="w-1/2 bg-zinc-900 border border-zinc-900 text-white p-4" role="alert">
            <span class="font-bold">Black</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-blue-500 border border-blue-200 text-white p-4" role="alert">
            <span class="font-bold">Blue</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-yellow-500 border border-yellow-200 text-white p-4" role="alert">
            <span class="font-bold">Yellow</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-orange-500 border border-orange-200 text-white p-4" role="alert">
            <span class="font-bold">Orange</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-red-500 border border-red-200 text-white p-4" role="alert">
            <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-green-500 border border-green-200 text-white p-4" role="alert">
            <span class="font-bold">Green</span> alert! You should check in on some of those fields below.
        </div>
    </div>

    <h1 class="mb-3">Soft Colour</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="w-1/2 bg-white border border-gray-200 text-gray-600 p-4" role="alert">
            <span class="font-bold">Basic</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-blue-100 border border-blue-300 text-blue-600 p-4" role="alert">
            <span class="font-bold">Blue</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-yellow-100 border border-yellow-300 text-yellow-600 p-4" role="alert">
            <span class="font-bold">Yellow</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-orange-100 border border-orange-300 text-orange-600 p-4" role="alert">
            <span class="font-bold">Orange</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-red-100 border border-red-300 text-red-600 p-4" role="alert">
            <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
        </div>
        <div class="w-1/2 bg-green-100 border border-green-300 text-green-600 p-4" role="alert">
            <span class="font-bold">Green</span> alert! You should check in on some of those fields below.
        </div>
    </div>

    <h1 class="mb-3">With Close</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="w-1/2 bg-white border border-gray-200 text-gray-600 p-4" role="alert" x-data="{ open: true }"
            x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Basic</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-gray-600 hover:stroke-gray-600" />
                </button>
            </div>
        </div>
        <div class="w-1/2 bg-blue-100 border border-blue-300 text-blue-600 p-4" role="alert" x-data="{ open: true }"
            x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Blue</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-blue-600 hover:stroke-blue-600" />
                </button>
            </div>
        </div>
        <div class="w-1/2 bg-yellow-100 border border-yellow-300 text-yellow-600 p-4" role="alert"
            x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Yellow</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-yellow-600 hover:stroke-yellow-600" />
                </button>
            </div>
        </div>
        <div class="w-1/2 bg-orange-100 border border-orange-300 text-orange-600 p-4" role="alert"
            x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Orange</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-orange-600 hover:stroke-orange-600" />
                </button>
            </div>
        </div>
        <div class="w-1/2 bg-red-100 border border-red-300 text-red-600 p-4" role="alert" x-data="{ open: true }"
            x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-red-600 hover:stroke-red-600" />
                </button>
            </div>
        </div>
        <div class="w-1/2 bg-green-100 border border-green-300 text-green-600 p-4" role="alert"
            x-data="{ open: true }" x-show="open" x-transition:leave.duration.300ms>
            <div class="flex justify-between">
                <div>
                    <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
                </div>
                <button @click="open = !open">
                    <x-icons.close class="w-4 h-4 stroke-2 stroke-green-600 hover:stroke-green-700" />
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
