<div {{ $attributes->class(['class' => '']) }}>
    <div class="w-1/2 bg-white border border-gray-200 text-gray-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Basic</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-gray-600 hover:stroke-gray-600" />
            </button>
        </div>
    </div>
    <div class="w-1/2 bg-blue-100 border border-blue-300 text-blue-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Blue</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-blue-600 hover:stroke-blue-600" />
            </button>
        </div>
    </div>
    <div class="w-1/2 bg-yellow-100 border border-yellow-300 text-yellow-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Yellow</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-yellow-600 hover:stroke-yellow-600" />
            </button>
        </div>
    </div>
    <div class="w-1/2 bg-orange-100 border border-orange-300 text-orange-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Orange</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-orange-600 hover:stroke-orange-600" />
            </button>
        </div>
    </div>
    <div class="w-1/2 bg-red-100 border border-red-300 text-red-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-red-600 hover:stroke-red-600" />
            </button>
        </div>
    </div>
    <div class="w-1/2 bg-green-100 border border-green-300 text-green-600 p-4" role="alert" x-data="{ open: true }"
        x-show="open" x-transition:leave.duration.300ms>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Red</span> alert! You should check in on some of those fields below.
            </div>
            <button @click="open = !open">
                <x-icons.close class="w-4 h-4 stroke-2 stroke-green-600 hover:stroke-green-700" />
            </button>
        </div>
    </div>
</div>
