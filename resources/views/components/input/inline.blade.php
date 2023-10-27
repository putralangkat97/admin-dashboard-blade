<div {{ $attributes->merge(['class' => 'sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full']) }}>
    <label for="email" class="block text-sm font-medium mb-2">Email</label>
    <input type="text" id="email"
        class="py-3 px-4 block w-96 border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 placeholder:text-gray-400"
        placeholder="email address" />
    <p class="text-sm text-gray-500 mt-2">We'll never share your details.</p>
</div>
