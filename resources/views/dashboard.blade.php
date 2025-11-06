@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text-2xl font-bold mb-6">Popular homes in Badung ></h2>
            <div class="flex flex-wrap gap-6">
                @php
                    $homes = [
                        [
                            'image' => 'ubud-resort.jpg',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp2,400,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,beach',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp1,980,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?ubud,villa',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp3,200,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?nusa,penida',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp1,540,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,pool',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp1,220,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,pool',
                            'title' => 'Villa di Badung',
                            'price' => 'Rp1,220,000 for 1 nights',
                        ],
                        
                    ];
                @endphp

                @foreach($homes as $home)
                    <x-home-card 
                        :image="$home['image']" 
                        :title="$home['title']" 
                        :price="$home['price']" 
                        {{-- :rating="$home['rating']" --}}
                    />
                @endforeach
            </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6">Popular homes in Ubud ></h2>
            <div class="flex flex-wrap gap-6">
                @php
                    $homes = [
                        [
                            'image' => 'ubud-resort.jpg',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp2,400,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,beach',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp1,980,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?ubud,villa',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp3,200,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?nusa,penida',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp1,540,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,pool',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp1,220,000 for 1 nights',
                        ],
                        [
                            'image' => 'https://source.unsplash.com/800x600/?bali,pool',
                            'title' => 'Villa di Ubud',
                            'price' => 'Rp1,220,000 for 1 nights',
                        ],
                        
                    ];
                @endphp

                @foreach($homes as $home)
                    <x-home-card 
                        :image="$home['image']" 
                        :title="$home['title']" 
                        :price="$home['price']" 
                        {{-- :rating="$home['rating']" --}}
                    />
                @endforeach
            </div>
    </div>
@endsection