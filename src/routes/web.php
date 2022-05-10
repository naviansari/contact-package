<?php

namespace Edutras\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route:: group(['namespace' => 'Edutras\Contact\Http\Controllers'], function () {
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contact', 'ContactController@send');
});


// Route::group(['namespace' => 'contact'], function () {
//     Route::get('/contact', 'ContactController@index')->name('contact.index');
//     Route::post('/contact', 'ContactController@send');
// });

