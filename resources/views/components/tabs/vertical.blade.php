<div {{ $attributes->merge(['class' => 'flex flex-wrap']) }} x-data="{ activeTab: 0 }">
    <div class="border-r border-gray-200 dark:border-gray-700">
        <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist">
            <button type="button"
                class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                :class="activeTab === 0 ? 'text-blue-500 border-blue-500' :
                    'border-transparent text-gray-600 hover:text-blue-500'"
                @click="activeTab = 0" role="tab">
                Tab 1
            </button>
            <button type="button"
                class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                :class="activeTab === 1 ? 'text-blue-500 border-blue-500' :
                    'border-transparent text-gray-600 hover:text-blue-500'"
                @click="activeTab = 1" role="tab">
                Tab 2
            </button>
            <button type="button"
                class="py-1 pr-4 inline-flex items-center gap-2 border-r-[3px] text-sm whitespace-nowrap"
                :class="activeTab === 2 ? 'text-blue-500 border-blue-500' :
                    'border-transparent text-gray-600 hover:text-blue-500'"
                @click="activeTab = 2" role="tab">
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
