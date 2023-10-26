<div class="fixed z-50 inset-0" x-data="{ showModal3: false }" x-show="showModal3" x-on:open-modal-3.window="showModal3 = true"
    x-transition.opacity.duration.200ms>
    <div class="fixed inset-0 bg-gray-900 opacity-50" @click="showModal3 = false">
    </div>
    <div class="bg-white mx-auto mt-16 relative inset-0 max-w-xl h-96 flex flex-col justify-between">
        <div class="mb-20 overflow-y-scroll">
            <div class="sticky top-0 bg-white border-b p-6">
                <h1 class="text-black font-medium text-lg">Modal Title</h1>
            </div>
            <div class="p-6">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti obcaecati adipisci eligendi
                        odit repudiandae ad quia alias sint laudantium dolor explicabo at, temporibus sapiente deleniti
                        voluptatum necessitatibus quas voluptate labore autem magni. Laborum obcaecati officiis, aperiam
                        reiciendis hic tempora tempore nulla facilis consequatur debitis omnis laudantium suscipit
                        dolores quaerat cum amet voluptas dolorem! Minus doloribus nihil assumenda iure quidem suscipit
                        maxime veritatis aspernatur alias autem doloremque amet ipsam aut quis ab odit a provident,
                        repellendus voluptates quas corrupti, animi delectus tempora commodi? Natus ab eos cupiditate
                        alias adipisci, suscipit excepturi, exercitationem maiores velit quod, eligendi expedita saepe?
                        Facere, exercitationem dolore. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Blanditiis nesciunt, sapiente deleniti sint vero soluta ducimus voluptatibus perferendis impedit
                        illum dolorem odit possimus iure sequi dolorum in illo fugiat sunt voluptates reprehenderit
                        deserunt qui. Sed provident recusandae incidunt esse veritatis nihil aspernatur deleniti vitae
                        similique, asperiores quaerat in fugiat tenetur, minima iste dolore? Consectetur quidem quam
                        numquam excepturi nihil, dolorem assumenda aliquam ipsam! Deserunt necessitatibus, aliquam quo
                        quaerat mollitia consequuntur similique sequi nemo cumque autem nobis voluptas omnis minus
                        molestias est facilis ex, cupiditate repellendus illum quia qui non. Magnam recusandae adipisci
                        eligendi repellendus incidunt voluptatum nemo non minus illum.</p>
                </div>
            </div>
        </div>
        <div class="p-6 bg-white absolute bottom-0 left-0 w-full">
            <div class="flex justify-end">
                <div class="space-x-2">
                    <button type="button"
                        class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm"
                        @click="showModal3 = false">
                        Close
                    </button>
                    <button type="button"
                        class="py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-zinc-900 text-white hover:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-950 focus:ring-offset-2 transition-all text-sm">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
