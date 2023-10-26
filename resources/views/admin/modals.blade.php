<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Modal') }}
        </h2>
    </x-slot>

    <h1 class="mb-3">Basic Usage</h1>
    <div class="p-6 border mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
            x-data @click="$dispatch('open-modal-1')">
            Basic Modal
        </button>
        <x-modals.modal-default />
    </div>

    <h1 class="mb-3">Modal Center</h1>
    <div class="p-6 border mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
            x-data @click="$dispatch('open-modal-2')">
            Center Modal
        </button>
        <x-modals.modal-center />
    </div>

    <h1 class="mb-3">Scroll Modal</h1>
    <div class="p-6 border mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
            x-data @click="$dispatch('open-modal-3')">
            Scroll Modal
        </button>
        <x-modals.modal-scroll />
    </div>

    <h1 class="mb-3">Scroll Modal Center</h1>
    <div class="p-6 border mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
            x-data @click="$dispatch('open-modal-4')">
            Scroll Modal Center
        </button>
        <x-modals.modal-center-scroll />
    </div>

    <h1 class="mb-3">Prevent Outside Click</h1>
    <div class="p-6 border mb-8">
        <button type="button"
            class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
            x-data @click="$dispatch('open-modal-5')">
            Prevent Outside Click
        </button>
        <x-modals.modal-prevent-outside />
    </div>
</x-app-layout>
