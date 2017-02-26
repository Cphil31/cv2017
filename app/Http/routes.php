<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {return view('home');
});
Route::get('/formations', function () {return view('formations');
});
Route::get('/experiences', function () {return view('experiences');
});
Route::get('/competences', function () {return view('competences');
});
Route::get('/loisirs', function () {return view('loisirs');
});
Route::get('/contact', function () {return view('contact');
});

