<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use App\Mail\ContactMessageCreated;

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
Route::get('/test-email', function(){
   // return new ContactMessageCreated('Issanda ngolombe', 'ngolompava@gmail.com', 'Je suis fier de vous...');
});
Route::get('/', [PagesController::class, 'home'])->name('rout_path');

Route::get('/about', [PagesController::class, 'about'])->name('about_path');
Route::resource('contact', ContactsController::class);