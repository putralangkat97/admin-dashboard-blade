<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>

    <div class="p-2">
        <x-text-input id="search" class="block mb-3 w-full lg:w-64" type="text" name="search"
            placeholder="Search user" />
    </div>
    <div class="p-2 overflow-x-auto">
        <table class="w-full shadow">
            <thead class="text-left">
                <tr class="bg-zinc-900 border-t border-l border-r text-white">
                    <th class="p-4 md:p-6 text-sm md:text-md">No.</th>
                    <th class="p-4 md:p-6 text-sm md:text-md">Name</th>
                    <th class="p-4 md:p-6 text-sm md:text-md">Role</th>
                    <th class="p-4 md:p-6 text-center text-sm md:text-md">Status</th>
                    <th class="p-4 md:p-6 text-center text-sm md:text-md"></th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($users as $index => $user)
                    <tr class="border-b border-r border-l hover:bg-gray-50">
                        <td class="px-4 py-2 md:px-6 md:py-4">{{ $index + 1 . '.' }}</td>
                        <td class="px-4 py-2 md:px-6 md:py-4">
                            <div class="flex flex-col">
                                <span class="font-medium text-gray-800 text-sm md:text-md">{{ $user->name }}</span>
                                <span class="text-xs text-gray-500">+62822{{ rand(77243366, 99999999) }}</span>
                            </div>
                        </td>
                        <td class="px-4 py-2 md:px-6 md:py-4">
                            <span class="text-gray-800 font-medium text-sm md:text-md">Admin</span>
                        </td>
                        <td class="px-4 py-2 md:px-6 md:py-4 text-center">
                            <span class="text-green-500 font-medium text-sm md:text-md">active</span>
                        </td>
                        <td class="px-4 py-2 md:px-6 md:py-4 text-center">
                            <span class="text-sm md:text-md">Edit | Delete</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-2">
        {{ $users->links() }}
    </div>
</x-app-layout>
