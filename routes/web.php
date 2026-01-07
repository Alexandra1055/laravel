<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'greeting' => 'Hello!', //pasar datos a la vista
        'name' => 'Perry the Platypus'
    ]);
});

/*Route::get('/about', function () {
    return 'About Page';
});//esto devuelve un string, es un ejemplo simple

 Route::get('/about', function () {
    return ['foo' => 'bar'];
}); //esto devuelve un json, para futuras apis, pero no es lo ideal

 */

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
