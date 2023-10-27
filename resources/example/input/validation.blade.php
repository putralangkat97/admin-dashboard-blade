<div class="mb-3">
    <label for="email1" class="block text-sm font-medium mb-2">Email</label>
    <div class="relative w-96">
        <input type="text" id="email1"
            class="py-3 px-4 block w-96 border-red-500 text-sm focus:border-red-500 focus:ring-red-500 placeholder:text-gray-400" />
        <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3 text-red-500">
            <x-icons.info class="w-4 h-4" />
        </div>
    </div>
    <p class="text-sm text-red-600 mt-2">Please enter a valid email address.</p>
</div>
<div>
    <label for="email2" class="block text-sm font-medium mb-2">Email</label>
    <div class="relative w-96">
        <input type="text" id="email2"
            class="py-3 px-4 block w-96 border-green-500 text-sm focus:border-green-500 focus:ring-green-500 placeholder:text-gray-400" />
        <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3 text-green-500">
            <x-icons.check class="w-4 h-4" />
        </div>
    </div>
    <p class="text-sm text-green-600 mt-2">Looks good!</p>
</div>
