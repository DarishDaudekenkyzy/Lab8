<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Profile;

use App\Http\Controllers\UploadFileController; 
use App\Http\Controllers\MailController; 

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


Route::resource('profiles', 'App\Http\Controllers\ProfileController');

//Email related route
Route::get('mail/send', [MailController::class, 'send']);
