<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Radio') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="flex">
            <input type="radio" name="radio-1" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                id="radio-1">
            <label for="radio-1" class="text-sm text-gray-500 ml-3">Default
                radio</label>
        </div>

        <div class="flex">
            <input type="radio" name="radio-1"
                class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900" id="radio-2" checked>
            <label for="radio-2" class="text-sm text-gray-500 ml-3">Checked
                radio</label>
        </div>
    </div>

    <h1 class="mb-3">Radio Disabled</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="flex opacity-75">
            <input type="radio" name="radio-2"
                class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                id="radio-2" disabled>
            <label for="radio-2" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Default
                radio</label>
        </div>

        <div class="flex opacity-75">
            <input type="radio" name="radio-2"
                class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                id="radio-2" checked disabled>
            <label for="radio-2" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Checked
                radio</label>
        </div>
    </div>

    <h1 class="mb-3">Radio Group</h1>
    <div class="p-6 border mb-8">
        <div class="flex space-x-6 mb-4">
            <div class="flex">
                <input type="radio" name="fruit" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="fruit-1">
                <label for="fruit-1" class="text-sm text-gray-400 ml-3">Apple</label>
            </div>

            <div class="flex">
                <input type="radio" name="fruit" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="fruit-2">
                <label for="fruit-2" class="text-sm text-gray-400 ml-3">Pear</label>
            </div>

            <div class="flex">
                <input type="radio" name="fruit" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="fruit-3">
                <label for="fruit-3" class="text-sm text-gray-400 ml-3">Orange</label>
            </div>
        </div>
    </div>

    <h1 class="mb-3">List with Description</h1>
    <div class="p-6 border mb-8">
        <div class="grid space-y-3">
            <div class="relative flex items-start">
                <div class="flex items-center h-5 mt-1">
                    <input type="radio" name="choose" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                        id="delete">
                </div>
                <label for="delete" class="ml-3">
                    <span class="block text-sm font-semibold text-gray-400">Delete</span>
                    <span id="delete-description" class="block text-sm text-gray-500">Notify me when this action
                        happens.</span>
                </label>
            </div>

            <div class="relative flex items-start">
                <div class="flex items-center h-5 mt-1">
                    <input type="radio" name="choose" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                        id="archive">
                </div>
                <label for="archive" class="ml-3">
                    <span class="block text-sm font-semibold text-gray-400">Archive</span>
                    <span id="archive-description" class="block text-sm text-gray-500">Notify me when this action
                        happens.</span>
                </label>
            </div>
        </div>
    </div>
</x-app-layout>
