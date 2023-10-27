<div {{ $attributes->merge(['class' => '']) }}>
    <div>
        <div class="w-80 bg-gray-200 text-sm text-gray-600 shadow" role="alert" x-data="{ open: true }" x-show="open"
            x-transition:leave.duration.300ms>
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
        <div class="w-80 bg-blue-200 text-sm text-blue-600 shadow" role="alert" x-data="{ open: true }" x-show="open"
            x-transition:leave.duration.300ms>
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
        <div class="w-80 bg-red-200 text-sm text-red-600 shadow" role="alert" x-data="{ open: true }" x-show="open"
            x-transition:leave.duration.300ms>
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
