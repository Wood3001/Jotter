<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-2xl font-semibold text-xs text-white uppercase tracking-widest transition duration-300 ease-in-out hover:bg-red-500 transition duration-300 ease-in-out active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
