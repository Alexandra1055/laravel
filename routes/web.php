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
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function() {
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {

    return view('contact');
});
