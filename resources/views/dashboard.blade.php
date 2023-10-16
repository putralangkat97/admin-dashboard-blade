<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <x-admin.panel title="dashboard panel">
        <x-slot name="button">
            <x-admin.button-panel href="#">Link</x-admin.button-panel>
        </x-slot>

        <div class="p-2">
            <x-text-input id="search" class="block mb-3 w-64" type="text" name="search" placeholder="Search user" />
            <table class="w-full shadow">
                <thead class="text-left">
                    <tr class="bg-gray-100 border-t border-l border-r">
                        <th class="p-6">No.</th>
                        <th class="p-6">Name</th>
                        <th class="p-6">Role</th>
                        <th class="p-6 text-center">Status</th>
                        <th class="p-6 text-center"></th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    @foreach ($users as $index => $user)
                        <tr class="border-b border-r border-l hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $index + 1 . '.' }}</td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-medium text-gray-800">{{ $user->name }}</span>
                                    <span class="text-xs text-gray-500">+62822{{ rand(77243366, 99999999) }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-gray-800 font-medium">Admin</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-green-500 font-medium">active</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span>Edit | Delete</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </x-admin.panel>
</x-app-layout>
