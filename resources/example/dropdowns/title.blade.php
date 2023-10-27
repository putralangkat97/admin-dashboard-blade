<div class="relative" x-data="{ activeMenu: false }">
    <button id="" type="button"
        class="py-3 px-4 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
        @click="activeMenu = !activeMenu">
        Actions
        <svg class="w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" />
        </svg>
    </button>

    <div class="absolute transition-[opacity,margin] duration-[0.1ms] w-72 z-10 mt-2 bg-white shadow p-2"
        x-show="activeMenu" @click.outside="activeMenu = false" x-transition:leave.duration.200ms
        x-transition:enter.duration.200ms>
        <span class="text-gray-400 text-sm py-1">Menu</span>
        <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
            href="#">
            Newsletter
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
            href="#">
            Purchases
        </a>
        <span class="text-gray-400 text-sm py-1">Menu 2</span>
        <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
            href="#">
            Downloads
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
            href="#">
            Team Account
        </a>
    </div>
</div>
