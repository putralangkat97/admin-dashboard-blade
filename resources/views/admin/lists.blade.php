<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Lists') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Lists</h1>
    <div class="p-6 border mb-8">
        <ul class="list-disc list-inside text-gray-600">
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
        </ul>
    </div>

    <h1 class="mb-3">Horizontal Lists</h1>
    <div class="p-6 border mb-8">
        <ul class="list-disc list-inside text-gray-600 space-x-5">
            <li class="inline-block">Home</li>
            <li class="inline-block">About</li>
            <li class="inline-block">FAQ</li>
            <li class="inline-block">Contact us</li>
        </ul>
    </div>

    <h1 class="mb-3">List with Icon</h1>
    <div class="p-6 border mb-8">
        <ul class="space-y-3 text-sm">
            <li class="flex space-x-3 items-center">
              <x-icons.check class="w-6 h-6 text-blue-500" />
              <span class="text-gray-600">
                FAQ
              </span>
            </li>
            <li class="flex space-x-3 items-center">
              <x-icons.check class="w-6 h-6 text-blue-500" />
              <span class="text-gray-600">
                Home
              </span>
            </li>
            <li class="flex space-x-3 items-center">
              <x-icons.check class="w-6 h-6 text-blue-500" />
              <span class="text-gray-600">
                About
              </span>
            </li>
        </ul>
    </div>
</x-app-layout>
