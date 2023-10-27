<div {{ $attributes->merge(['class' => '']) }}>
    <div class="sm:flex shadow w-96">
        <input type="text"
            class="py-3 px-4 pr-11 block w-full border-gray-300 -mt-px -ml-px sm:mt-0 sm:first:ml-0 text-sm relative focus:z-10 focus:border-zinc-900 focus:ring-zinc-900">
        <button type="button"
            class="py-3 px-4 inline-flex items-center min-w-fit w-full border border-zinc-900 bg-zinc-900 text-sm text-white -mt-px -ml-px sm:w-auto sm:mt-0 sm:first:ml-0">
            <x-icons.arrow-left-right class="w-5 h-5" />
        </button>
        <input type="text"
            class="py-3 px-4 pr-11 block w-full border-gray-300 -mt-px -ml-px sm:mt-0 sm:first:ml-0 text-sm relative focus:z-10 focus:border-zinc-900 focus:ring-zinc-900">
    </div>
</div>
