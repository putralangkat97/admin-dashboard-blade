<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Accordion') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Accordion</h1>
    <div class="p-6 border mb-8" x-data="{ showCode: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode">
            <x-accordion-default />
        </div>

        {{-- code --}}
        <div x-show="showCode">
            <x-torchlight.accordion type="default" />
        </div>
    </div>

    <h1 class="mb-3">Collapse Accordion</h1>
    <div class="p-6 border mb-8" x-data="{ showCode2: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode2 === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode2 = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode2 === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode2 = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode2">
            <x-accordion-collapse />
        </div>

        {{-- code --}}
        <div x-show="showCode2">
            <x-torchlight.accordion type="collapse" />
        </div>
    </div>

    <h1 class="mb-3">Icon Accordion</h1>
    <div class="p-6 border mb-8" x-data="{ showCode3: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode3 === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode3 = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode3 === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode3 = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode3">
            <x-accordion-with-icon />
        </div>

        {{-- code --}}
        <div x-show="showCode3">
            <x-torchlight.accordion type="icon" />
        </div>
    </div>

    <h1 class="mb-3">Collapse Accordion with Icon</h1>
    <div class="p-6 border mb-8" x-data="{ showCode4: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode4 === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode4 = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode4 === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode4 = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode4">
            <x-accordion-collapse-with-icon />
        </div>

        {{-- code --}}
        <div x-show="showCode4">
            <x-torchlight.accordion type="icon-collapse" />
        </div>
    </div>

    <h1 class="mb-3">Basic Accordion with Colour</h1>
    <div class="p-6 border mb-8" x-data="{ showCode5: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode5 === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode5 = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode5 === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode5 = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode5">
            <x-accordion-with-colour />
        </div>

        {{-- code --}}
        <div x-show="showCode5">
            <x-torchlight.accordion type="colour" />
        </div>
    </div>

    <h1 class="mb-3">Collapse Accordion with Colour</h1>
    <div class="p-6 border mb-8" x-data="{ showCode6: false }">
        <div class="flex mb-3">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode6 === false ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode6 = false" role="tab">
                        Preview
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="showCode6 === true ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="showCode6 = true" role="tab">
                        Code
                    </button>
                </nav>
            </div>
        </div>
        {{-- preview --}}
        <div x-show="!showCode6">
            <x-accordion-collapse-with-colour />
        </div>

        {{-- code --}}
        <div x-show="showCode6">
            <x-torchlight.accordion type="colour-collapse" />
        </div>
    </div>
</x-app-layout>
