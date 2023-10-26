<div class="fixed z-50 inset-0" x-data="{ showModal2: false }" x-show="showModal2" x-on:open-modal-2.window="showModal2 = true"
    x-transition.opacity.duration.200ms>
    <div class="fixed inset-0 bg-gray-900 opacity-50" @click="showModal2 = false">
    </div>
    <div class="bg-white m-auto fixed inset-0 max-w-xl p-6 flex flex-col justify-between h-72">
        <div>
            <div class="mb-8">
                <h1 class="text-black font-medium text-lg">Modal Title</h1>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquid cumque soluta, temporibus
                    distinctio nam quibusdam consequuntur obcaecati ipsa sapiente.</p>
            </div>
        </div>
        <div class="space-x-2 self-end">
            <button type="button"
                class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm" @click="showModal2 = false">
                Close
            </button>
            <button type="button"
                class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm">
                Confirm
            </button>
        </div>
    </div>
</div>
