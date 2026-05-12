<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pride-pink active:bg-pride-pink focus:outline-none focus:ring-2 focus:ring-pride-pink focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>