<div x-data="{ activeTab: 0 }" {{ $attributes->merge(['class' => '']) }}>
    <div class="w-80 border-b border-gray-200">
        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
            <button type="button"
                class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] text-sm whitespace-nowrap hover:text-blue-500"
                :class="activeTab === 0 ? 'border-b-2 border-blue-500 text-blue-500' :
                    'text-gray-500 border-transparent'"
                role="tab" @click="activeTab = 0">
                Inbox{{ ' ' }}
                <span class="inline-flex items-center py-1 px-2 text-sm font-medium"
                    :class="activeTab === 0 ? 'text-blue-600 bg-blue-200' : 'text-gray-600 bg-gray-200'">99+</span>
            </button>
            <button type="button"
                class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] text-sm whitespace-nowrap hover:text-blue-500"
                :class="activeTab === 1 ? 'border-b-2 border-blue-500 text-blue-500' :
                    'text-gray-500 border-transparent'"
                role="tab" @click="activeTab = 1">
                Promotion{{ ' ' }}
                <span class="inline-flex items-center py-1 px-2 text-sm font-medium"
                    :class="activeTab === 1 ? 'text-blue-600 bg-blue-200' : 'text-gray-600 bg-gray-200'">10</span>
            </button>
            <button type="button"
                class="py-4 px-1 inline-flex items-center gap-2 border-b-[3px] text-sm whitespace-nowrap hover:text-blue-500"
                :class="activeTab === 2 ? 'border-b-2 border-blue-500 text-blue-500' :
                    'text-gray-500 border-transparent'"
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
