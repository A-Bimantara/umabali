<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dummy
{
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Villa Ubud',
                'price' => '1.000.000',
                'image' => '/images/kamar-hotel.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Villa Tabanan',
                'price' => '2.000.000',
                'image' => '/images/kamar-hotel.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Villa Denpasar',
                'price' => '3.000.000',
                'image' => '/images/kamar-hotel.jpg'
            ],
        ];
    }
}
