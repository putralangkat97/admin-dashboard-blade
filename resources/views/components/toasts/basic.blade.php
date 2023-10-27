<div {{ $attributes->merge(['class' => '']) }}>
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
