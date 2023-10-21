<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Breadcrumb') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Chevron</h1>
    <div class="p-6 border mb-8">
        <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    Home
                    <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
                </a>
            </li>
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    App Center
                    <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
                </a>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate">
                Application
            </li>
        </ol>
    </div>

    <h1 class="mb-3">Slashes</h1>
    <div class="p-6 border mb-8">
        <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    Home
                    <span class="ml-2">/</span>
                </a>
            </li>
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    App Center
                    <span class="ml-2">/</span>
                </a>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate">
                Application
            </li>
        </ol>
    </div>

    <h1 class="mb-3">With Icon</h1>
    <div class="p-6 border mb-8">
        <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    <x-icons.home class="w-5 h-5 mr-2" />
                    Home
                    <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
                </a>
            </li>
            <li class="text-sm mr-2">
                <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                    <x-icons.notification class="w-5 h-5 mr-2" />
                    App Center
                    <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
                </a>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                Application
            </li>
        </ol>
    </div>
</x-app-layout>
