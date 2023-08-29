<?php

use App\Exceptions\FailedToLoadHomePage;
use Illuminate\Support\Facades\Route;

use App\Events\HelloWorldEvent;

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
    try {
        return view('welcome', [
            'data' => $variableMissing
        ]);
    } catch (Throwable $exception) {
        throw new FailedToLoadHomePage($exception->getMessage());
    }
});

Route::get('/test', function () {

    event(new HelloWorldEvent());

    return view('welcome');
});


