<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Progress') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Progress</h1>
    <div class="p-6 border mb-8 space-y-4">
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-zinc-900" role="progressbar" style="width: 25%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar" style="width: 40%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-yellow-500" role="progressbar"
                style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-orange-500" role="progressbar"
                style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-red-500" role="progressbar" style="width: 55%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-green-500" role="progressbar" style="width: 70%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <h1 class="mb-3">Progress with Label</h1>
    <div class="p-6 border mb-8 space-y-4">
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-zinc-900 text-xs text-white text-center"
                role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
                role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
        </div>
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-yellow-500 text-xs text-white text-center"
                role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
        </div>
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-orange-500 text-xs text-white text-center"
                role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
        </div>
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-red-500 text-xs text-white text-center"
                role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
        </div>
        <div class="flex w-full lg:w-1/2 h-4 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-green-500 text-xs text-white text-center"
                role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
    </div>

    <h1 class="mb-3">Height Progress</h1>
    <div class="p-6 border mb-8 space-y-4">
        <div class="flex w-full lg:w-1/2 h-1.5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar" style="width: 40%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-3 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar"
                style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex w-full lg:w-1/2 h-5 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar"
                style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <h1 class="mb-3">Vertical Progress</h1>
    <div class="p-6 flex border mb-8 space-x-4">
        <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 overflow-hidden">
            <div class="bg-blue-500 overflow-hidden" role="progressbar" style="height: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 overflow-hidden">
            <div class="bg-blue-500 overflow-hidden" role="progressbar" style="height: 50%" aria-valuenow="50"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 overflow-hidden">
            <div class="bg-blue-500 overflow-hidden" role="progressbar" style="height: 75%" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 overflow-hidden">
            <div class="bg-blue-500 overflow-hidden" role="progressbar" style="height: 90%" aria-valuenow="90"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 overflow-hidden">
            <div class="bg-blue-500 overflow-hidden" role="progressbar" style="height: 17%" aria-valuenow="17"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <h1 class="mb-3">Multiple Colours Progress</h1>
    <div class="p-6 border mb-8">
        <div class="flex w-full h-2 bg-gray-200 overflow-hidden">
            <div class="flex flex-col justify-center overflow-hidden bg-red-500" role="progressbar"
                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="flex flex-col justify-center overflow-hidden bg-orange-500" role="progressbar"
                style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="flex flex-col justify-center overflow-hidden bg-yellow-500" role="progressbar"
                style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="flex flex-col justify-center overflow-hidden bg-blue-500" role="progressbar"
                style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</x-app-layout>
