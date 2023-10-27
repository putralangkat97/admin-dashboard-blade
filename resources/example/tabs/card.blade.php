<div x-data="{ activeTab: 0 }">
    <div class="w-80 border-b border-gray-200">
        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
            <button type="button"
                class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center hover:text-gray-700"
                :class="activeTab === 0 ? 'text-blue-500 border-blue-500 border-b-2 border-r border-l border-t bg-blue-50' :
                    'text-gray-500 border-gray-200 bg-gray-50 border-r border-l border-t'"
                @click="activeTab = 0" role="tab">
                Tab 1
            </button>
            <button type="button"
                class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center hover:text-gray-700"
                :class="activeTab === 1 ? 'text-blue-500 border-blue-500 border-b-2 border-r border-l border-t bg-blue-50' :
                    'text-gray-500 border-gray-200 bg-gray-50 border-r border-l border-t'"
                @click="activeTab = 1" role="tab">
                Tab 2
            </button>
            <button type="button"
                class="-mb-px py-3 px-4 inline-flex items-center gap-2 text-sm font-medium text-center hover:text-gray-700"
                :class="activeTab === 2 ? 'text-blue-500 border-blue-500 border-b-2 border-r border-l border-t bg-blue-50' :
                    'text-gray-500 border-gray-200 bg-gray-50 border-r border-l border-t'"
                @click="activeTab = 2" role="tab">
                Tab 3
            </button>
        </nav>
    </div>
    <div class="mt-3">
        <div id="card-type-tab-1" role="tabpanel" x-show="activeTab === 0" x-transition:enter.opacity.duration.300>
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
            </p>
        </div>
        <div id="card-type-tab-2" role="tabpanel" x-show="activeTab === 1" x-transition:enter.opacity.duration.300>
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
            </p>
        </div>
        <div id="card-type-tab-3" role="tabpanel" x-show="activeTab === 2" x-transition:enter.opacity.duration.300>
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
            </p>
        </div>
    </div>
</div>
