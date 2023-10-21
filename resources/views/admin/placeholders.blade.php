<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Placeholders') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Placeholder</h1>
    <div class="p-6 border mb-8">
        <h3 class="h-4 bg-gray-200" style="width: 15%;"></h3>
        <ul class="mt-5 space-y-3">
            <li class="w-96 h-4 bg-gray-200"></li>
            <li class="w-96 h-4 bg-gray-200"></li>
            <li class="w-96 h-4 bg-gray-200"></li>
            <li class="w-96 h-4 bg-gray-200"></li>
        </ul>
    </div>

    <h1 class="mb-3">Complex Placeholders</h1>
    <div class="p-6 border mb-8">
        <div class="flex">
            <div class="flex-shrink-0">
                <span class="w-12 h-12 block bg-gray-200"></span>
            </div>

            <div class="ml-4 mt-2 w-full">
                <h3 class="h-4 bg-gray-200" style="width: 15%;"></h3>

                <ul class="mt-5 space-y-3">
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Animation Placeholders</h1>
    <div class="p-6 border mb-8">
        <div class="animate-pulse">
            <h3 class="h-4 bg-gray-200" style="width: 15%;"></h3>
            <ul class="mt-5 space-y-3">
                <li class="w-96 h-4 bg-gray-200"></li>
                <li class="w-96 h-4 bg-gray-200"></li>
                <li class="w-96 h-4 bg-gray-200"></li>
                <li class="w-96 h-4 bg-gray-200"></li>
            </ul>
        </div>
    </div>

    <h1 class="mb-3">Complex Animation Placeholders</h1>
    <div class="p-6 border mb-8">
        <div class="flex animate-pulse">
            <div class="flex-shrink-0">
                <span class="w-12 h-12 block bg-gray-200"></span>
            </div>

            <div class="ml-4 mt-2 w-full">
                <h3 class="h-4 bg-gray-200" style="width: 15%;"></h3>

                <ul class="mt-5 space-y-3">
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                    <li class="w-96 h-4 bg-gray-200"></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
