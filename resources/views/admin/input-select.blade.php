<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Select') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8">
        <select class="py-3 px-4 pr-9 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
            <option selected>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>

    <h1 class="mb-3">Disabled Select</h1>
    <div class="p-6 border mb-8">
        <select
            class="py-3 px-4 pr-9 block w-96 border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 cursor-not-allowed text-gray-400"
            disabled>
            <option selected>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>

    <h1 class="mb-3">With Label</h1>
    <div class="p-6 border mb-8">
        <label for="number" class="block text-sm font-medium mb-2">Choose Number</label>
        <select id="number"
            class="py-3 px-4 pr-9 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
            <option selected>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>

    <h1 class="mb-3">Hide Label</h1>
    <div class="p-6 border mb-8">
        <label for="number-2" class="sr-only">Choose Number</label>
        <select id="number-2"
            class="py-3 px-4 pr-9 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
            <option selected>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>

    <h1 class="mb-3">Validation</h1>
    <div class="p-6 border mb-8 space-y-4">
        <div>
            <label for="number-3" class="block text-sm font-medium mb-2 text-red-500">Choose Number</label>
            <div class="relative w-96">
                <select id="number-3"
                    class="py-3 px-4 pr-9 block w-full border-red-500 text-sm focus:border-red-500 focus:ring-red-500">
                    <option selected>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-8 text-red-500">
                    <x-icons.info class="w-4 h-4" />
                </div>
            </div>
            <p class="text-sm text-red-600 mt-2">Please select a number.</p>
        </div>
        <div>
            <label for="number-4" class="block text-sm font-medium mb-2 text-green-500">Choose Number</label>
            <div class="relative w-96">
                <select id="number-4"
                    class="py-3 px-4 pr-9 w-full block border-green-500 text-sm focus:border-green-500 focus:ring-green-500">
                    <option selected>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-8 text-green-500">
                    <x-icons.check class="w-4 h-4" />
                </div>
            </div>
            <p class="text-sm text-green-600 mt-2">Looks good!</p>
        </div>
    </div>
</x-app-layout>
