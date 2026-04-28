<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/agro-industry', function () {
    return view('pages.agro-industry');
})->name('agro-industry');

Route::get('/eco-tourism', function () {
    return view('pages.eco-tourism');
})->name('eco-tourism');

Route::get('/ai-insights', function () {
    return view('pages.ai-insights');
})->name('ai-insights');

Route::get('/destination/{slug}', function ($slug) {
    $destinations = [
        'emerald-valley' => [
            'title' => 'Emerald Valley Nature Park',
            'description' => 'Pristine wilderness with guided eco-tours and wildlife conservation programs.',
            'image' => 'https://picsum.photos/seed/emerald-valley-large/600/400',
            'rating' => '9.5/10',
            'features' => ['200+ Species Protected', '15 Eco-Hiking Trails', 'Wildlife AI Predictions']
        ],
        'azure-shores' => [
            'title' => 'Azure Shores Eco Resort',
            'description' => 'Luxury sustainable beachfront resort with marine conservation initiatives.',
            'image' => 'https://picsum.photos/seed/azure-shores-large/600/400',
            'rating' => '9.2/10',
            'features' => ['Coral Reef Protected', '100% Solar Power', '5-Star Eco-Luxury']
        ],
        'golden-highlands' => [
            'title' => 'Golden Highlands Reserve',
            'description' => 'UNESCO-protected biodiversity hotspot with indigenous cultural experiences.',
            'image' => 'https://picsum.photos/seed/golden-highlands-large/600/400',
            'rating' => '9.8/10',
            'features' => ['2,500m Elevation', '150 Endemic Birds', 'UNESCO Heritage']
        ]
    ];
    
    if (!isset($destinations[$slug])) {
        abort(404);
    }
    
    return view('pages.destination', ['destination' => $destinations[$slug], 'slug' => $slug]);
})->name('destination');
