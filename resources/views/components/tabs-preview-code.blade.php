@props([
    'eventName' => 'showCode'
])

<div class="flex mb-4">
    <div class="flex bg-gray-50 hover:bg-gray-100 transition-color duration-300 p-2">
        <nav class="flex space-x-2">
            <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                :class="{{ $eventName }} === false ? 'bg-blue-500 text-white hover:text-white' :
                    'text-gray-500 hover:text-gray-600'"
                @click="{{ $eventName }} = false">
                Preview
            </button>
            <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                :class="{{ $eventName }} === true ? 'bg-blue-500 text-white hover:text-white' :
                    'text-gray-500 hover:text-gray-600'"
                @click="{{ $eventName }} = true">
                Code
            </button>
        </nav>
    </div>
</div>
