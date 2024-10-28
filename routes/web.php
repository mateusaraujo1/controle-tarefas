<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('task', 'App\Http\Controllers\TaskController')->middleware('auth');
// o auth pode ser aplicado tanto na rota como em um __construct no TaskController

Route::get('/mensagem-teste', function() {
    return new MensagemTesteMail();
});