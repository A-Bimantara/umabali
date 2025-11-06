<?php

use App\Models\Dummy;
use App\Models\Listings;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $listings = Dummy::all();
    return view('dashboard', ['listings' => $listings]);
});

Route::get('/penginapan/{id}', function ($id) {
    $listings = Dummy::all();
    $list = Arr::first($listings, fn($list) => $list['id'] == $id);
    return view('listings', ['list' => $list]);
});