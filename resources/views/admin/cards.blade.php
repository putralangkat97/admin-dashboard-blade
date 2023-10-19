<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Cards') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Card</h1>
    <div class="p-6 border mb-8">
        <div class="w-80 flex flex-col bg-white border shadow">
            <img class="w-full h-auto" src="https://i.ebayimg.com/thumbs/images/g/nIwAAOSwqvxeJ2Z4/s-l640.jpg"
                alt="Image Description" />
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-800">
                    Card Title
                </h3>
                <p class="mt-1 text-zinc-800">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda error autem incidunt ab iusto
                    dolore hic ut dolor nam atque.
                </p>
                <button type="button"
                    class="mt-3 py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
                    <div class="flex justify-between items-center">
                        <span class="mr-2">Add to Cart</span>
                        <x-icons.cart class="w-5 h-5 stroke-white stroke-2" />
                    </div>
                </button>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Simple Card</h1>
    <div class="p-6 border mb-8">
        <div class="w-80 flex flex-col bg-white border shadow p-4 md:p-5">
            <h3 class="text-lg font-bold text-zinc-900">
                Card Title
            </h3>
            <p class="mt-1 text-xs font-medium uppercase text-gray-500">
                Subtitle
            </p>
            <p class="mt-2 text-zinc-900">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis quasi perferendis repudiandae
                iure praesentium soluta similique asperiores sed quidem!
            </p>
            <a class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-600"
                href="#">
                Card link
                <x-icons.carot-right class="w-2 h-2" />
            </a>
        </div>
    </div>

    <h1 class="mb-3">Header and Footer Card</h1>
    <div class="flex p-6 border mb-8 space-x-8">
        <div class="flex flex-col bg-white border shadow">
            <div class="bg-zinc-900 border-b py-3 px-4 md:py-4 md:px-5">
                <p class="mt-1 text-sm font-medium text-white">
                    Featured
                </p>
            </div>
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-900">
                    Card title
                </h3>
                <p class="mt-2 text-zinc-900">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, itaque dolore. Beatae totam
                    numquam fugiat nostrum commodi, quidem tempora animi!
                </p>
                <a class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700"
                    href="#">
                    Card link
                    <x-icons.carot-right class="w-2 h-2" />
                </a>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow">
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-900">
                    Card title
                </h3>
                <p class="mt-2 text-zinc-900">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, itaque dolore. Beatae totam
                    numquam fugiat nostrum commodi, quidem tempora animi!
                </p>
                <a class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700"
                    href="#">
                    Card link
                    <x-icons.carot-right class="w-2 h-2" />
                </a>
            </div>
            <div class="bg-zinc-900 border-b py-3 px-4 md:py-4 md:px-5">
                <p class="mt-1 text-sm font-medium text-white">
                    Footer
                </p>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow">
            <div class="bg-gray-100 border-b py-3 px-4 md:py-4 md:px-5">
                <p class="mt-1 text-sm font-medium text-gray-600">
                    Featured
                </p>
            </div>
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-900">
                    Card title
                </h3>
                <p class="mt-2 text-zinc-900">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, itaque dolore. Beatae totam
                    numquam fugiat nostrum commodi, quidem tempora animi!
                </p>
                <a class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700"
                    href="#">
                    Card link
                    <x-icons.carot-right class="w-2 h-2" />
                </a>
            </div>
        </div>
        <div class="flex flex-col bg-white border shadow">
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-900">
                    Card title
                </h3>
                <p class="mt-2 text-zinc-900">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, itaque dolore. Beatae totam
                    numquam fugiat nostrum commodi, quidem tempora animi!
                </p>
                <a class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700"
                    href="#">
                    Card link
                    <x-icons.carot-right class="w-2 h-2" />
                </a>
            </div>
            <div class="bg-gray-100 border-b py-3 px-4 md:py-4 md:px-5">
                <p class="mt-1 text-sm font-medium text-gray-600">
                    Footer
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Card with Placeholder</h1>
    <div class="p-6 border mb-8">
        <div class="w-80 flex flex-col bg-white border shadow">
            <img class="w-full h-auto rounded-t-xl" src="{{ asset('img/img1.jpg') }}" alt="Image Description">
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-zinc-800">
                    Card title
                </h3>
                <p class="mt-1 text-zinc-800">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas doloremque, nam neque
                    esse totam quam nobis? Consectetur, iure ipsa.
                </p>
                <p class="mt-5 text-xs text-gray-500">
                    Last updated 5 mins ago
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Card with Overlay</h1>
    <div class="p-6 border mb-8">
        <div class="w-1/2 relative bg-white border shadow">
            <img class="w-full h-auto opacity-50"
                src="https://i.ebayimg.com/thumbs/images/g/nIwAAOSwqvxeJ2Z4/s-l640.jpg" alt="Image Description">
            <div class="absolute top-0 left-0 right-0">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-zinc-900">
                        Card title
                    </h3>
                    <p class="mt-1 text-zinc-900">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate ratione nobis laboriosam quo
                        culpa odit aperiam adipisci labore illo voluptatibus.
                    </p>
                    <p class="mt-5 text-xs text-gray-500">
                        Last updated 5 mins ago
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Card Horizontal</h1>
    <div class="p-6 border mb-8">
        <div
            class="bg-white border shadow sm:flex">
            <div
                class="flex-shrink-0 relative w-full overflow-hidden pt-[40%] sm:max-w-[15rem] md:max-w-xs">
                <img class="w-full h-full absolute top-0 left-0 object-cover"
                    src="https://i.ebayimg.com/thumbs/images/g/nIwAAOSwqvxeJ2Z4/s-l640.jpg" alt="Image Description">
            </div>
            <div class="flex flex-wrap">
                <div class="p-4 flex flex-col h-full sm:p-7">
                    <h3 class="text-lg font-bold text-zinc-900">
                        Card title
                    </h3>
                    <p class="mt-1 text-zinc-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse error quos ullam officiis porro corporis aspernatur nostrum reiciendis! Ea, eaque.
                    </p>
                    <div class="mt-5 sm:mt-auto">
                        <p class="text-xs text-gray-500">
                            Last updated 5 mins ago
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
