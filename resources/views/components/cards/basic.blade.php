<div {{ $attributes->merge(['class' => 'w-80 flex flex-col bg-white border shadow']) }}>
    <img class="w-full h-auto" src="https://i.ebayimg.com/thumbs/images/g/nIwAAOSwqvxeJ2Z4/s-l640.jpg"
        alt="Image Description" />
    <div class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-zinc-800">
            Card Title
        </h3>
        <p class="mt-1 text-zinc-800">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda error autem incidunt ab iusto
            dolore hic ut dolor nam atque.
        </p>
        <button type="button"
            class="mt-3 py-2 px-4 inline-flex justify-center items-center border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
            <div class="flex justify-between items-center">
                <span class="mr-2">Add to Cart</span>
                <x-icons.cart class="w-5 h-5 stroke-white stroke-2" />
            </div>
        </button>
    </div>
</div>
