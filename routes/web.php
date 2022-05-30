<?php

use Illuminate\Support\Facades\Route;

Route::prefix('{lang?}')->middleware('locale')->group(function () {
    Route::redirect('','home');
    Route::get('/{page}', function ($lang, $page = 'home') {return view($page);});
});
