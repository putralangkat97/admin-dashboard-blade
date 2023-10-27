<div x-data="{ activeTab: 0 }">
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
