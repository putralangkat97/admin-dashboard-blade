<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Toasts</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.info class="w-5 h-5 stroke-blue-500 stroke-2" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-500">
                        This is a info message.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.check class="w-5 h-5 stroke-green-500" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-500">
                        This is a success message.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.close class="w-5 h-5 stroke-red-500 stroke-2" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-500">
                        This is an error message.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.info class="w-5 h-5 stroke-orange-500 stroke-2" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-500">
                        This is a warning message.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Colour Toasts with Close Button</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div>
            <div class="w-80 bg-zinc-900 text-sm text-white shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-zinc-900 focus:ring-zinc-900 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-blue-500 text-sm text-white shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-500 focus:ring-blue-500 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-yellow-500 text-sm text-white shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-yellow-500 focus:ring-yellow-500 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-orange-500 text-sm text-white shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-orange-500 focus:ring-orange-500 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-red-500 text-sm text-white shadow" role="alert" x-data="{ open: true }" x-show="open"
                x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-500 focus:ring-red-500 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-green-500 text-sm text-white shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-500 focus:ring-green-500 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-white" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Soft Colour Toasts with Close Button</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div>
            <div class="w-80 bg-gray-200 text-sm text-gray-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-gray-600/[.5] hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-300 focus:ring-gray-300 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-gray-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-blue-200 text-sm text-blue-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-blue-600/[.5] hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-600 focus:ring-blue-600 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-blue-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-yellow-200 text-sm text-yellow-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-yellow-600/[.5] hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-yellow-600 focus:ring-yellow-600 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-yellow-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-orange-200 text-sm text-orange-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-orange-600/[.5] hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-orange-600 focus:ring-orange-600 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-orange-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-red-200 text-sm text-red-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-red-600/[.5] hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-red-600 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-red-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-80 bg-green-200 text-sm text-green-600 shadow" role="alert" x-data="{ open: true }"
                x-show="open" x-transition:leave.duration.300ms>
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ml-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-green-600/[.5] hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-600 focus:ring-green-600 transition-all text-sm"
                            @click="open = !open">
                            <span class="sr-only">Close</span>
                            <x-icons.close class="h-5 w-5 stroke-green-600" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Loading Progress</h1>
    <div class="p-6 border mb-8">
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex items-center p-4">
                <div class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-zinc-900 rounded-full"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <p class="ml-3 text-sm text-gray-700">
                    Action in progress
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Prompt Dialog</h1>
    <div class="p-6 border mb-8">
        <div class="w-80 bg-white border shadow" role="alert" x-data="{ open: true }" x-show="open"
            x-transition:leave.duration.300ms>
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.bell class="w-5 h-5 stroke-2 mt-0.5" />
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        App notifications
                    </h3>
                    <div class="mt-1 text-sm text-gray-600">
                        Notifications may include alerts, sounds and icon badges.
                    </div>
                    <div class="mt-4">
                        <div class="flex space-x-3">
                            <button type="button"
                                class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                                @click="open = !open">
                                Don't allow
                            </button>
                            <button type="button"
                                class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                                @click="open = !open">
                                Allow
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Stack</h1>
    <div class="p-6 border mb-8 space-y-3">
        <div class="w-80 bg-white border shadow" role="alert" x-data="{ open: true }" x-show="open"
            x-transition:leave.duration.300ms>
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.bell class="w-5 h-5 stroke-2 mt-0.5" />
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        App notifications
                    </h3>
                    <div class="mt-1 text-sm text-gray-600">
                        Notifications may include alerts, sounds and icon badges.
                    </div>
                    <div class="mt-4">
                        <div class="flex space-x-3">
                            <button type="button"
                                class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                                @click="open = !open">
                                Don't allow
                            </button>
                            <button type="button"
                                class="inline-flex justify-center items-center gap-2 border border-transparent font-medium text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                                @click="open = !open">
                                Allow
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white border shadow" role="alert">
            <div class="flex p-4">
                <div class="flex-shrink-0">
                    <x-icons.check class="w-5 h-5 stroke-green-500" />
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-500">
                        This is a success message.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Placement</h1>
    <div class="p-6 border mb-8">
        <div class="relative h-80">
            <div class="absolute top-0 left-0">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Top left
                        </h3>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Top center
                        </h3>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Top right
                        </h3>
                    </div>
                </div>
            </div>
            <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Center
                        </h3>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Bottom left
                        </h3>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Bottom center
                        </h3>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 right-0">
                <div class="max-w-xs bg-white border shadow"
                    role="alert">
                    <div class="p-2 sm:p-4">
                        <h3 class="text-xs text-gray-800 font-semibold sm:text-base">
                            Bottom right
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
