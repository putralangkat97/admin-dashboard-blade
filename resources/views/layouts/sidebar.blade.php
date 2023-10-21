<aside class="fixed lg:flex flex-col lg:flex-row lg:min-h-screen w-full lg:w-80 bg-zinc-900 z-50 lg:z-0">
    <div @click.away="open = false" class="flex flex-col w-full text-white flex-shrink-0 border-b lg:border-0"
        x-data="{ open: false }">
        <div
            class="flex-shrink-0 px-8 lg:px-2 text-left py-4 lg:py-8 flex flex-row lg:flex-col gap-6 items-center justify-between">
            <x-application-logo class="w-14 h-14 lg:w-20 lg:h-20 inline -mt-1 mr-3 fill-white" />
            <a href="{{ route('dashboard') }}"
                class="hidden lg:block text-sm text-center lg:text-lg font-medium tracking-widest uppercase text-white focus:outline-none focus:shadow-outline">
                {{ config('app.name', 'Admin Dashboard') }}
            </a>
            <button class=" lg:hidden focus:outline-none focus:shadow-outline text-white" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'block': open, 'hidden': !open }"
            class="flex-grow items-left lg:block px-3 pb-4 lg:pb-0 lg:overflow-y-auto mt-4 lg:mt-8">
            <span class="lg:hidden text-white text-sm">Menu</span>
            <a href="{{ route('dashboard') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('dashboard') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Dashboard</span>
            </a>
            <a href="{{ route('accordion') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('accordion') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Accordion</span>
            </a>
            <a href="{{ route('alerts') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('alerts') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Alerts</span>
            </a>
            <a href="{{ route('avatars') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('avatars') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Avatars</span>
            </a>
            <a href="{{ route('badges') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('badges') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Badges</span>
            </a>
            <a href="{{ route('buttons') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('buttons') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Buttons</span>
            </a>
            <a href="{{ route('cards') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('cards') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Cards</span>
            </a>
            <a href="{{ route('lists') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('lists') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Lists</span>
            </a>
            <a href="{{ route('placeholders') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('placeholders') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Placeholders</span>
            </a>
            <a href="{{ route('progress') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('progress') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Progress</span>
            </a>
            <a href="{{ route('table') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 {{ request()->routeIs('table') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Table</span>
            </a>
            {{-- <a href="{{ route('profile.edit') }}"
                class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300  {{ request()->routeIs('profile.edit') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                <span class="font-semibold">Profile</span>
            </a> --}}
            <div class="lg:hidden flex-grow mt-6 lg:mt-0">
                <span class="text-white text-sm">{{ Auth::user()->name }}</span>
                <div class="flex flex-row items-center text-white hover:text-white mt-2">
                    <a href="{{ route('profile.edit') }}" class="flex flex-row items-center hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 text-white font-semibold w-full {{ request()->routeIs('profile.*') ? 'text-zinc-900 bg-blue-200' : 'text-white' }}">
                        <span>Profile</span>
                    </a>
                </div>
                <div class="flex flex-row items-center mb-3 text-white hover:text-white">
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <a href="#"
                            class="flex flex-row items-center mb-3 hover:bg-blue-200 hover:text-zinc-900 mt-3 lg:mt-0 px-4 py-2 transition-colors duration-300 text-white font-semibold"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            <span>Logout</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</aside>
