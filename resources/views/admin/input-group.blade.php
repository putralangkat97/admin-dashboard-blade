<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Input Group') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8">
        <div class="flex shadow w-80">
            <span
                class="px-4 inline-flex items-center min-w-fit border border-r-0 border-zinc-900 bg-zinc-900 text-sm text-white">Email</span>
            <input type="text"
                class="py-3 px-4 border-gray-300 pr-11 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900">
        </div>
    </div>

    <h1 class="mb-3">Multiple Input</h1>
    <div class="p-6 border mb-8">
        <div>
            <div class="sm:flex shadow w-96">
                <input type="text"
                    class="py-3 px-4 pr-11 block w-full border-gray-300 -mt-px -ml-px sm:mt-0 sm:first:ml-0 text-sm relative focus:z-10 focus:border-zinc-900 focus:ring-zinc-900">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center min-w-fit w-full border border-zinc-900 bg-zinc-900 text-sm text-white -mt-px -ml-px sm:w-auto sm:mt-0 sm:first:ml-0">
                    <x-icons.arrow-left-right class="w-5 h-5" />
                </button>
                <input type="text"
                    class="py-3 px-4 pr-11 block w-full border-gray-300 -mt-px -ml-px sm:mt-0 sm:first:ml-0 text-sm relative focus:z-10 focus:border-zinc-900 focus:ring-zinc-900">
            </div>
        </div>
    </div>

    <h1 class="mb-3">Leading Icon</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="email" class="block text-sm font-medium mb-2">Email address</label>
            <div class="relative">
                <input type="text" id="email" name="email"
                    class="py-3 px-4 border-gray-300 placeholder:text-gray-400 pl-11 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="you@site.com">
                <div class="absolute text-gray-400 inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <x-icons.mail class="w-5 h-5" />
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Trailing Icon</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="credit-card" class="block text-sm font-medium mb-2">Card number</label>
            <div class="relative">
                <input type="text" id="credit-card" name="credit-card"
                    class="py-3 px-4 pr-11 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="xxxx xxxx xxxx xxxx">
                <div class="absolute text-gray-400 inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
                    <x-icons.credit-card class="w-5 h-5" />
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Leading and Trailing Icon</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="price" class="block text-sm font-medium mb-2">Price</label>
            <div class="relative">
                <div class="absolute text-gray-400 inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <x-icons.currency-pound class="w-5 h-5" />
                </div>
                <input type="text" id="price" name="price"
                    class="py-3 px-4 pl-11 pr-14 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="0.00">
                <div class="absolute text-gray-400 inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
                    <span>GBP</span>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Add On</h1>
    <div class="p-6 border mb-8">
        <label for="website" class="block text-sm font-medium mb-2">Website URL</label>
        <div class="flex shadow w-96">
            <span
                class="px-4 inline-flex items-center min-w-fit border border-r-0 border-gray-300 bg-gray-100 text-sm text-gray-600">http://</span>
            <input type="text" id="website"
                class="py-3 px-4 border-gray-300 pr-11 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                placeholder="example.com">
        </div>
    </div>

    <h1 class="mb-3">Inline Add On</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="website2" class="block text-sm font-medium mb-2">Website URL</label>
            <div class="relative">
                <input type="text" id="website2" name="website2"
                    class="py-3 px-4 pl-20 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="www.example.com">
                <div class="absolute text-gray-400 inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <span>http://</span>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Inline Leading Select</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="phone-number" class="block text-sm font-medium mb-2">Phone
                Number</label>
            <div class="relative">
                <input type="text" id="phone-number" name="phone-number"
                    class="py-3 px-4 pl-20 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="+1 (000) 000-0000">
                <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px">
                    <label for="select-country" class="sr-only">Country</label>
                    <select id="select-country" name="select-country"
                        class="block w-full border-transparent focus:ring-blue-600 focus:border-blue-600">
                        <option>US</option>
                        <option>CA</option>
                        <option>EU</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Inline Leading and Trailing Select</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="price2" class="block text-sm font-medium mb-2">Price</label>
            <div class="relative">
                <input type="text" id="price2" name="price2"
                    class="py-3 px-4 pl-11 pr-20 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="0.00">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <span class="text-gray-400">
                        <x-icons.currency-pound class="w-5 h-5" />
                    </span>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center text-gray-400 pr-px">
                    <label for="select-country" class="sr-only">Country</label>
                    <select id="select-country" name="select-country"
                        class="block w-full border-transparent focus:ring-zinc-900 focus:border-zinc-900">
                        <option>GBR</option>
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">With Loading Icon</h1>
    <div class="p-6 border mb-8">
        <div class="w-96">
            <label for="search" class="block text-sm font-medium mb-2">Search</label>
            <div class="relative">
                <input type="text" id="search" name="search"
                    class="py-3 px-4 pl-11 border-gray-300 placeholder:text-gray-400 block w-full text-sm focus:z-10 focus:border-zinc-900 focus:ring-zinc-900"
                    placeholder="Input search">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                    <div class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-zinc-900 rounded-full"
                        role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
