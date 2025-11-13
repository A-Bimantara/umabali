<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full text-white hover:bg-[#dd0000] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-[#FF0000]']) }}>
    {{ $slot }}
</button>
