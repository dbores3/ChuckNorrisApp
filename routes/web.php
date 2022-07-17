<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Jokes\JokesController; 

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
//Route to Home
Route::get('/', function () {
    return Inertia::render('Welcome');
});

//Routes to Jokes
Route::post('/jokes',[JokesController::class, 'send'])->name('jokes');

require __DIR__.'/auth.php';
