<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Avatars') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Rounded</h1>
    <div class="p-6 space-x-4 border mb-8">
        <img class="inline-block h-8 w-8 rounded-lg ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-12 w-12 rounded-lg ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-16 w-16 rounded-lg ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-20 w-20 rounded-lg ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
    </div>

    <h1 class="mb-3">Rounded With Indicator Top</h1>
    <div class="p-6 space-x-4 border mb-8">
        <div class="relative inline-block">
            <img class="inline-block h-8 w-8 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute top-0 right-0 block h-1.5 w-1.5 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-12 w-12 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-16 w-16 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute top-0 right-0 block h-3.5 w-3.5 rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-20 w-20 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute top-0 right-0 block h-[1.15rem] w-[1.15rem] rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
    </div>

    <h1 class="mb-3">Rounded With Indicator Bottom</h1>
    <div class="p-6 space-x-4 border mb-8">
        <div class="relative inline-block">
            <img class="inline-block h-8 w-8 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-1.5 w-1.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-12 w-12 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-16 w-16 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-20 w-20 rounded-lg ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-[1.15rem] w-[1.15rem] rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-500"></span>
        </div>
    </div>

    <h1 class="mb-3">Rounded Full</h1>
    <div class="p-6 space-x-4 border mb-8">
        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
        <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
    </div>

    <h1 class="mb-3">Rounded Full With Indicator Top</h1>
    <div class="p-6 space-x-4 border mb-8">
        <div class="relative inline-block">
            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span class="absolute top-0 right-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span class="absolute top-0 right-0 block h-3.5 w-3.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute top-0 right-0 block h-[1.15rem] w-[1.15rem] rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
    </div>

    <h1 class="mb-3">Rounded Full With Indicator Bottom</h1>
    <div class="p-6 space-x-4 border mb-8">
        <div class="relative inline-block">
            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
        <div class="relative inline-block">
            <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <span
                class="absolute bottom-0 right-0 block h-[1.15rem] w-[1.15rem] rounded-full ring-2 ring-white bg-green-500"></span>
        </div>
    </div>

    <h1 class="mb-3">Rounded Full Placeholder</h1>
    <div class="p-6 flex items-center space-x-4 border mb-8">
        <span class="inline-block h-8 w-8 border rounded-full overflow-hidden">
            <svg class="h-full w-full text-gray-300" width="16" height="16" viewBox="0 0 16 16"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white" />
                <path
                    d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z"
                    fill="currentColor" />
                <path
                    d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z"
                    fill="currentColor" />
            </svg>
        </span>
        <span class="inline-block h-12 w-12 border rounded-full overflow-hidden">
            <svg class="h-full w-full text-gray-300" width="16" height="16" viewBox="0 0 16 16"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white" />
                <path
                    d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z"
                    fill="currentColor" />
                <path
                    d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z"
                    fill="currentColor" />
            </svg>
        </span>
        <span class="inline-block h-16 w-16 border rounded-full overflow-hidden">
            <svg class="h-full w-full text-gray-300" width="16" height="16" viewBox="0 0 16 16"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white" />
                <path
                    d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z"
                    fill="currentColor" />
                <path
                    d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z"
                    fill="currentColor" />
            </svg>
        </span>
        <span class="inline-block h-20 w-20 border rounded-full overflow-hidden">
            <svg class="h-full w-full text-gray-300" width="16" height="16" viewBox="0 0 16 16"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white" />
                <path
                    d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z"
                    fill="currentColor" />
                <path
                    d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z"
                    fill="currentColor" />
            </svg>
        </span>
    </div>

    <h1 class="mb-3">Rounded Full Stacked</h1>
    <div class="p-6 border mb-8">
        <div class="flex -space-x-2">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                alt="Image Description">
        </div>
    </div>
</x-app-layout>
