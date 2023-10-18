<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-zinc-900 border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-zinc-950 focus:bg-zinc-950 active:bg-zinc-950 focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
