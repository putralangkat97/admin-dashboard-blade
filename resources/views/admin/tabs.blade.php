<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Tabs') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Tabs</h1>
    <div class="p-6 border mb-8" x-data="{ activeTab: 0 }">
        <div class="w-80 border-b border-gray-200">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 0 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 0">
                    Tab 1
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 1 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 1">
                    Tab 2
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 2 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 2">
                    Tab 3
                </button>
            </nav>
        </div>
        <div class="mt-3">
            <div :class="{ 'active': activeTab === 0 }" role="tabpanel" x-show="activeTab === 0"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div :class="{ 'active': activeTab === 0 }" role="tabpanel" x-show="activeTab === 1"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div :class="{ 'active': activeTab === 0 }" role="tabpanel" x-show="activeTab === 2"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Tabs with Icons</h1>
    <div class="p-6 border mb-8" x-data="{ activeTab: 0 }">
        <div class="w-80 border-b border-gray-200">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-600"
                    :class="activeTab === 0 ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500 '"
                    role="tab" @click="activeTab = 0">
                    <x-icons.home class="w-4 h-4" x- />
                    Tab 1
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-600"
                    :class="activeTab === 1 ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500 '"
                    role="tab" @click="activeTab = 1">
                    <x-icons.bell class="w-4 h-4" />
                    Tab 2
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-600"
                    :class="activeTab === 2 ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500 '"
                    role="tab" @click="activeTab = 2">
                    <x-icons.gear class="w-4 h-4" />
                    Tab 3
                </button>
            </nav>
        </div>

        <div class="mt-3">
            <div x-show="activeTab === 0" x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div x-show="activeTab === 1" x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div x-show="activeTab === 2" x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Badge Tabs</h1>
    <div class="p-6 border mb-8" x-data="{ activeTab: 0 }">
        <div class="w-80 border-b border-gray-200">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 0 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 0">
                    Inbox{{ ' ' }}
                    <span class="inline-flex items-center py-1 px-2 text-sm font-medium"
                        :class="activeTab === 0 ? 'text-blue-600 bg-blue-200' : 'text-gray-600 bg-gray-200'">99+</span>
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 1 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 1">
                    Promotion{{ ' ' }}
                    <span class="inline-flex items-center py-1 px-2 text-sm font-medium"
                        :class="activeTab === 1 ? 'text-blue-600 bg-blue-200' : 'text-gray-600 bg-gray-200'">10</span>
                </button>
                <button type="button"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap hover:text-blue-500"
                    :class="activeTab === 2 ? 'border-b-2 border-blue-500 text-blue-500' :
                        'text-gray-500'"
                    role="tab" @click="activeTab = 2">
                    Spam{{ ' ' }}
                    <span class="inline-flex items-center py-1 px-2 text-sm font-medium"
                        :class="activeTab === 2 ? 'text-blue-600 bg-blue-200' : 'text-gray-600 bg-gray-200'">2</span>
                </button>
            </nav>
        </div>
        <div class="mt-3">
            <div :class="{ 'active': activeTab === 0 }" role="tabpanel" x-show="activeTab === 0"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div :class="{ 'active': activeTab === 1 }" role="tabpanel" x-show="activeTab === 1"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div :class="{ 'active': activeTab === 2 }" role="tabpanel" x-show="activeTab === 2"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-600">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Card Type</h1>
    <div class="p-6 border mb-8" x-data="{ activeTab: 0 }">
        <div class="w-80 border-b border-gray-200">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center border-r border-l border-t hover:text-gray-700"
                    :class="activeTab === 0 ? 'text-blue-500 border-blue-500 border-b-2 bg-blue-50' :
                        'text-gray-500 border-gray-200 bg-gray-50'"
                    @click="activeTab = 0" role="tab">
                    Tab 1
                </button>
                <button type="button"
                    class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center border-r border-l border-t hover:text-gray-700"
                    :class="activeTab === 1 ? 'text-blue-500 border-blue-500 border-b-2 bg-blue-50' :
                        'text-gray-500 border-gray-200 bg-gray-50'"
                    @click="activeTab = 1" role="tab">
                    Tab 2
                </button>
                <button type="button"
                    class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center border-r border-l border-t hover:text-gray-700"
                    :class="activeTab === 2 ? 'text-blue-500 border-blue-500 border-b-2 bg-blue-50' :
                        'text-gray-500 border-gray-200 bg-gray-50'"
                    @click="activeTab = 2" role="tab">
                    Tab 3
                </button>
            </nav>
        </div>

        <div class="mt-3">
            <div id="card-type-tab-1" role="tabpanel" x-show="activeTab === 0"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div id="card-type-tab-2" role="tabpanel" x-show="activeTab === 1"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div id="card-type-tab-3" role="tabpanel" x-show="activeTab === 2"
                x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Segment Tabs</h1>
    <div class="p-6 mb-8 border" x-data="{ activeTab: 0 }">
        <div class="flex">
            <div class="flex bg-gray-100 transition p-2">
                <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="activeTab === 0 ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="activeTab = 0" role="tab">
                        Tab 1
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="activeTab === 1 ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="activeTab = 1" role="tab">
                        Tab 2
                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium"
                        :class="activeTab === 2 ? 'bg-blue-500 text-white hover:text-white' :
                            'text-gray-500 hover:text-gray-600'"
                        @click="activeTab = 2" role="tab">
                        Tab 3
                    </button>
                </nav>
            </div>
        </div>

        <div class="mt-3">
            <div id="segment-1" role="tabpanel" x-show="activeTab === 0" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div id="segment-2" role="tabpanel" x-show="activeTab === 1" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div id="segment-3" role="tabpanel" x-show="activeTab === 2" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Pill Tabs</h1>
    <div class="p-6 border mb-8" x-data="{ activeTab: 0 }">
        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
            <button type="button"
                class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center text-gray-500"
                :class="activeTab === 0 ? 'bg-blue-500 text-white' : 'hover:text-blue-600'" @click="activeTab = 0"
                role="tab">
                Tab 1
            </button>
            <button type="button"
                class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center text-gray-500"
                :class="activeTab === 1 ? 'bg-blue-500 text-white' : 'hover:text-blue-600'" @click="activeTab = 1"
                role="tab">
                Tab 2
            </button>
            <button type="button"
                class="py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center text-gray-500"
                :class="activeTab === 2 ? 'bg-blue-500 text-white' : 'hover:text-blue-600'" @click="activeTab = 2"
                role="tab">
                Tab 3
            </button>
        </nav>

        <div class="mt-3">
            <div role="tabpanel" x-show="activeTab === 0" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div role="tabpanel" x-show="activeTab === 1" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div role="tabpanel" x-show="activeTab === 2" x-transition:enter.opacity.duration.300>
                <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>

    <h1 class="mb-3">Vertical Tabs</h1>
    <div class="p-6 border mb-8">
        <div class="flex flex-wrap" x-data="{ activeTab: 0 }">
            <div class="border-r border-gray-200 dark:border-gray-700">
                <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                        :class="activeTab === 0 ? 'text-blue-500 border-blue-500' : 'border-transparent text-gray-600 hover:text-blue-500'"
                        @click="activeTab = 0"
                        role="tab">
                        Tab 1
                    </button>
                    <button type="button"
                        class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                        :class="activeTab === 1 ? 'text-blue-500 border-blue-500' : 'border-transparent text-gray-600 hover:text-blue-500'"
                        @click="activeTab = 1"
                        role="tab">
                        Tab 2
                    </button>
                    <button type="button"
                        class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                        :class="activeTab === 2 ? 'text-blue-500 border-blue-500' : 'border-transparent text-gray-600 hover:text-blue-500'"
                        @click="activeTab = 2"
                        role="tab">
                        Tab 3
                    </button>
                </nav>
            </div>

            <div class="ml-3">
                <div role="tabpanel" x-show="activeTab === 0" x-transition.in.opacity.duration.300>
                    <p class="text-gray-500">
                        This is the <em class="font-semibold text-gray-800">first</em> item's tab
                        body.
                    </p>
                </div>
                <div role="tabpanel" x-show="activeTab === 1" x-transition.in.opacity.duration.300>
                    <p class="text-gray-500">
                        This is the <em class="font-semibold text-gray-800">second</em> item's tab
                        body.
                    </p>
                </div>
                <div role="tabpanel" x-show="activeTab === 2" x-transition.in.opacity.duration.300>
                    <p class="text-gray-500">
                        This is the <em class="font-semibold text-gray-800">third</em> item's tab
                        body.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
