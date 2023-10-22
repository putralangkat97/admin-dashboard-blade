<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input File') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Input</h1>
    <div class="p-6 border mb-8">
        <form class="w-96">
            <label for="file-input" class="sr-only">Choose file</label>
            <input type="file" name="file-input" id="file-input"
                class="block w-full border border-gray-300 shadow text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-3 file:px-4 cursor-pointer">
        </form>
    </div>

    <h1 class="mb-3">File with Button</h1>
    <div class="p-6 border mb-8">
        <form class="w-96">
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input type="file"
                    class="cursor-pointer block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-blue-500 file:text-white hover:file:bg-blue-600 active:file:bg-blue-700" />
            </label>
        </form>
    </div>
</x-app-layout>
