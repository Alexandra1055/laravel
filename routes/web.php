<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});

/*Route::get('/about', function () {
    return 'About Page';
});//esto devuelve un string, es un ejemplo simple

 Route::get('/about', function () {
    return ['foo' => 'bar'];
}); //esto devuelve un json, para futuras apis, pero no es lo ideal

 */
//index
Route::get('/jobs', [JobController::class, 'index']);

//create
Route::get('/jobs/create', function (){
    return view('jobs.create');
});

//show
Route::get('/jobs/{job}', function (Job $job) {
});

//Store
Route::post('/jobs', function() {
});

//Edit
Route::get('/jobs/{job}/edit', function (Job $job) {
});

// Update
Route::patch('/jobs/{job}', function (Job $job) {
});

// Destroy
Route::delete('/jobs/{job}', function (Job $job) {
});

Route::get('/contact', function () {
    return view('contact');
});

