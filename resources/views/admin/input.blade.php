<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Input</h1>
    <div class="p-6 border mb-8 space-y-4">
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500">
        <textarea class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500" rows="3"></textarea>
    </div>

    <h1 class="mb-3">Placeholder</h1>
    <div class="p-6 border mb-8 space-y-4">
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="input text" />
        <textarea
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            rows="3" placeholder="textarea"></textarea>
    </div>

    <h1 class="mb-3">Size Input</h1>
    <div class="p-6 border mb-8 space-y-4">
        <input type="text"
            class="py-2 px-3 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="small input" />
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="default input" />
        <input type="text"
            class="py-3 px-4 sm:p-5 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="large input" />
    </div>

    <h1 class="mb-3">Readonly Input</h1>
    <div class="p-6 border mb-8 space-y-4">
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="readonly input" readonly />
    </div>

    <h1 class="mb-3">Disabled Input</h1>
    <div class="p-6 border mb-8 space-y-4">
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="disabled input" disabled />
        <input type="text"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="disabled readonly input" disabled readonly />
    </div>

    <h1 class="mb-3">Input with Label</h1>
    <div class="p-6 border mb-8">
        <label for="email" class="block text-sm font-medium mb-2">Email</label>
        <input type="text" id="email"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="email address" />
    </div>

    <h1 class="mb-3">Helper Text</h1>
    <div class="p-6 border mb-8">
        <label for="email" class="block text-sm font-medium mb-2">Email</label>
        <input type="text" id="email"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="email address" />
        <p class="text-sm text-gray-500 mt-1">We'll never share your details.</p>
    </div>

    <h1 class="mb-3">Inline</h1>
    <div class="p-6 border mb-8">
        <div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full">
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="text" id="email"
                class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
                placeholder="email address" />
            <p class="text-sm text-gray-500 mt-2">We'll never share your details.</p>
        </div>
    </div>

    <h1 class="mb-3">Corner Hint</h1>
    <div class="p-6 border mb-8">
        <div class="w-96 flex justify-between items-center">
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <span class="block text-sm text-gray-500 mb-2">Optional</span>
        </div>
        <input type="text" id="email"
            class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
            placeholder="email address" />
    </div>

    <h1 class="mb-3">Validation</h1>
    <div class="p-6 border mb-3">
        <div class="mb-3">
            <label for="email1" class="block text-sm font-medium mb-2">Email</label>
            <div class="relative w-96">
                <input type="text" id="email1"
                    class="py-3 px-4 block w-96 border-red-500 text-sm focus:border-red-500 focus:ring-red-500 placeholder:text-gray-400" />
                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3 text-red-500">
                    <x-icons.info class="w-4 h-4" />
                </div>
            </div>
            <p class="text-sm text-red-600 mt-2">Please enter a valid email address.</p>
        </div>

        <div>
            <label for="email2" class="block text-sm font-medium mb-2">Email</label>
            <div class="relative w-96">
                <input type="text" id="email2"
                    class="py-3 px-4 block w-96 border-green-500 text-sm focus:border-green-500 focus:ring-green-500 placeholder:text-gray-400" />
                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3 text-green-500">
                    <x-icons.check class="w-4 h-4" />
                </div>
            </div>
            <p class="text-sm text-green-600 mt-2">Looks good!</p>
        </div>
    </div>
</x-app-layout>
