<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <x-admin.panel title="Edit Profile" class="mb-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-2">
            <div class="mb-4 lg:mb-0">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="mb-4 lg:mb-0">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </x-admin.panel>
    <x-admin.panel title="Delete Account">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-2">
            <div class="lg:col-span-2 mb-4 lg:mb-0">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </x-admin.panel>
</x-app-layout>
