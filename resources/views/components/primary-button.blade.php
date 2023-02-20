<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-first-color border border-transparent rounded-2xl font-semibold text-xs text-white uppercase tracking-widest text-second-color transition duration-300 ease-in-out hover:bg-second-color text-third-color transition duration-300 ease-in-out focus:bg-second-color active:bg-third-color focus:outline-none focus:ring-2 focus:ring-first-color focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
<!-- 

-->
