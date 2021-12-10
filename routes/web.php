<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () { return view('welcome'); });

Route::get('/home/{nome?}', [EventController::class, 'home']);

Route::get('/eventos', [EventController::class, 'eventos']);

Route::get('/contato', [EventController::class, 'contato']);

Route::get('/login', [UsuarioController::class, 'login']);