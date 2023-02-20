<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-2xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm transition duration-300 ease-in-out hover:bg-gray-50 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-first-color focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
