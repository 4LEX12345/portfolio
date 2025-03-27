<button {{ $attributes->merge(['type' => 'submit'])->class([' px-4 py-2
    bg-primarybutton hoverPrimaryColor border border-transparent rounded-md font-semibold 
    text-white
    uppercase
    tracking-widest hover:bg-primaryhoverstate dark:hover:bg-primaryhoverstate dark:hover:text-white focus:bg-gray-700
    active:bg-gray-900
    active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
    focus:ring-offset-gray-800 transition ease-in-out duration-150 text-center']) }}>
    {{ $slot }}
</button>