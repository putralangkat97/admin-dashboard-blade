<button type="button"
    class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm"
    x-data @click="$dispatch('open-modal-3')">
    Scroll Modal
</button>
<x-modals.modal-scroll />
