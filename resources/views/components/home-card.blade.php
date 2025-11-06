@props(['id','image', 'title', 'price'])

<a href="/penginapan/{{ $id }}">
    <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition bg-white w-55 cursor-pointer">
        <div class="relative">
            <img src="{{ asset('images/kamar-hotel.jpg') }}" alt="{{ $title }}" class="h-48 w-full object-cover">
            <span class="absolute top-2 left-2 bg-white text-sm font-semibold px-2 py-1 rounded-md shadow">Guest favorite</span>
            <button class="absolute top-2 right-2 bg-white rounded-full p-2 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.015-4.5-4.5-4.5S12 5.765 12 8.25 9.985 12.75 7.5 12.75 3 10.735 3 8.25C3 5.015 5.015 3 7.5 3S12 5.015 12 8.25s2.015 4.5 4.5 4.5S21 10.735 21 8.25z" />
                </svg>
            </button>
        </div>
        <div class="p-3">
            <h3 class="font-semibold text-gray-800 text-sm">{{ $title }}</h3>
            <p class="text-gray-600 text-sm">{{ $price }} untuk 1 malam</p>
            {{-- <p class="text-gray-500 text-xs mt-1">★ {{ $rating }}</p> --}}
        </div>
    </div>
</a>

