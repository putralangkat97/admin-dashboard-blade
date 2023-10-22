<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Switch') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8">
        <input type="checkbox" id="basic"
            class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300">
        <label for="basic" class="sr-only">Switch</label>
    </div>

    <h1 class="mb-3">With Description</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div class="flex items-center">
            <input type="checkbox" id="basic-unchecked"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300">
            <label for="basic-unchecked"
                class="text-sm text-gray-400 ml-3">Unchecked</label>
        </div>
        <div class="flex items-center">
            <input type="checkbox" id="basic-checked"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300" checked>
            <label for="basic-checked"
                class="text-sm text-gray-400 ml-3">Checked</label>
        </div>
        <div class="flex items-center">
            <label for="basic-on-off"
                class="text-sm text-gray-400 mr-3">OFF</label>
            <input type="checkbox" id="basic-on-off"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300">
            <label for="basic-on-off"
                class="text-sm text-gray-400 ml-3">ON</label>
        </div>
    </div>

    <h1 class="mb-3">Disabled Switch</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div class="flex items-center opacity-75">
            <input type="checkbox" id="basic-2-unchecked"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300 cursor-not-allowed" disabled>
            <label for="basic-2-unchecked"
                class="text-sm text-gray-400 cursor-not-allowed ml-3">Unchecked</label>
        </div>
        <div class="flex items-center opacity-75">
            <input type="checkbox" id="basic-2-checked"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300 cursor-not-allowed" checked disabled>
            <label for="basic-2-checked"
                class="text-sm text-gray-400 cursor-not-allowed ml-3">Checked</label>
        </div>
        <div class="flex items-center opacity-75">
            <label for="basic-2-on-off"
                class="text-sm text-gray-400 cursor-not-allowed mr-3">OFF</label>
            <input type="checkbox" id="basic-2-on-off"
                class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full transition-colors ease-in-out duration-300 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-300 cursor-not-allowed" disabled>
            <label for="basic-2-on-off"
                class="text-sm text-gray-400 cursor-not-allowed ml-3">ON</label>
        </div>
    </div>
</x-app-layout>
