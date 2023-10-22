<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Checkbox') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="flex">
            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                id="checkbox-1">
            <label for="checkbox-1" class="text-sm text-gray-500 ml-3">Default
                checkbox</label>
        </div>

        <div class="flex">
            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                id="checkbox-1-checked" checked>
            <label for="checkbox-1-checked" class="text-sm text-gray-500 ml-3">Checked
                checkbox</label>
        </div>
    </div>

    <h1 class="mb-3">Checkbox Disabled</h1>
    <div class="p-6 border mb-8 space-y-2">
        <div class="flex opacity-75">
            <input type="checkbox"
                class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                id="checkbox-2" disabled>
            <label for="checkbox-2" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Default
                checkbox</label>
        </div>

        <div class="flex opacity-75">
            <input type="checkbox"
                class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                id="checkbox-2-checked" checked disabled>
            <label for="checkbox-2-checked" class="text-sm text-gray-500 ml-3 cursor-not-allowed">Checked
                checkbox</label>
        </div>
    </div>

    <h1 class="mb-3">Checkbox Group</h1>
    <div class="p-6 border mb-8">
        <div class="flex space-x-6 mb-4">
            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="apple-1">
                <label for="apple-1" class="text-sm text-gray-400 ml-3">Apple</label>
            </div>

            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="pear-1">
                <label for="pear-1" class="text-sm text-gray-400 ml-3">Pear</label>
            </div>

            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="orange-1">
                <label for="orange-1" class="text-sm text-gray-400 ml-3">Orange</label>
            </div>
        </div>
        <div class="flex space-x-6 mb-4">
            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="apple-2" checked>
                <label for="apple-2" class="text-sm text-gray-400 ml-3">Apple</label>
            </div>

            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="pear-2" checked>
                <label for="pear-2" class="text-sm text-gray-400 ml-3">Pear</label>
            </div>

            <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                    id="orange-2" checked>
                <label for="orange-2" class="text-sm text-gray-400 ml-3">Orange</label>
            </div>
        </div>
        <div class="flex space-x-6 mb-4">
            <div class="flex opacity-75">
                <input type="checkbox"
                    class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                    id="apple-3" disabled>
                <label for="apple-3" class="text-sm text-gray-400 ml-3 cursor-not-allowed">Apple</label>
            </div>

            <div class="flex opacity-75">
                <input type="checkbox"
                    class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                    id="pear-3" disabled>
                <label for="pear-3" class="text-sm text-gray-400 ml-3 cursor-not-allowed">Pear</label>
            </div>

            <div class="flex opacity-75">
                <input type="checkbox"
                    class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900 cursor-not-allowed"
                    id="orange-3" disabled>
                <label for="orange-3" class="text-sm text-gray-400 ml-3 cursor-not-allowed">Orange</label>
            </div>
        </div>
    </div>

    <h1 class="mb-3">List with Description</h1>
    <div class="p-6 border mb-8">
        <div class="grid space-y-3">
            <div class="relative flex items-start">
                <div class="flex items-center h-5 mt-1">
                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                        id="delete">
                </div>
                <label for="delete" class="ml-3">
                    <span class="block text-sm font-semibold text-gray-400">Delete</span>
                    <span id="delete-description"
                        class="block text-sm text-gray-500">Notify me when this action
                        happens.</span>
                </label>
            </div>

            <div class="relative flex items-start">
                <div class="flex items-center h-5 mt-1">
                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 text-zinc-900 focus:ring-zinc-900"
                        id="archive">
                </div>
                <label for="archive" class="ml-3">
                    <span class="block text-sm font-semibold text-gray-400">Archive</span>
                    <span id="archive-description"
                        class="block text-sm text-gray-500">Notify me when this action
                        happens.</span>
                </label>
            </div>
        </div>
    </div>
</x-app-layout>
