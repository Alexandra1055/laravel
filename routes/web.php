<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


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

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function (){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::port('/jobs', function() {

})

Route::get('/contact', function () {
    return view('contact');
