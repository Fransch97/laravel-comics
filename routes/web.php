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
    $links = [
        [
            'text' => "characters",
            'href' => "#"
        ],
        [
            'text' => "comics",
            'href' => "#"
        ],
        [
            'text' => "movies",
            'href' => "#"
        ],
        [
            'text' => "tv",
            'href' => "#"
        ],
        [
            'text' => "games",
            'href' => "#"
        ],
        [
            'text' => "collectibles",
            'href' => "#"
        ],
        [
            'text' => "videos",
            'href' => "#"
        ],
        [
            'text' => "fans",
            'href' => "#"
        ],
        [
            'text' => "news",
            'href' => "#"
        ],
        [
            'text' => "shop",
            'href' => "#"
        ]
    ];

    $merchandises = config('merch');
    $footerLinks = config('footerLinks');
    $data = config('comics');
    $socials = config('socials');

    return view('content', ['comics' => $data, 'links' => $links, 'merchandises' => $merchandises, 'footerLinks' => $footerLinks, 'socials' => $socials]);
});
