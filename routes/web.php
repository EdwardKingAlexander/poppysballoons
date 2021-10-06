<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::get('/{lang?}', function ($lang = null) {
    // if the language is es, display spanish
    if($lang == 'es')
    {
        App::setlocale('es');
        return view('welcome');
    } else {
        return view('welcome');
    }
    
});

Route::post('/sendmessage', [ContactController::class, 'store'])->name('sendmessage');