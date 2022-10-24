<?php

use Illuminate\Support\Facades\Route;
use App\UserController;
use App\Http\Controllers\Controller;



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

Route::get('/test', function(){
    return 'Hello world';
});

Route::get('/test2', function(){
    return 'Hello world Hello world Hello world Hello world';
});

Route::redirect('/test', '/test2');

Route::view('/greeting', 'greeting', ['name' => 'Febry', 'kelas' => 'if b']);

// Route::get('/user/{id}', function($id){
//     return "User ".$id;
// });

// Route::get('/user/{name?}', function($name = null){
//     return "Hai ".$name;
// });

// Route::get('/user/{name}', function($name){
//     return 'Hai '.$name.'...!';
// })->where('name', '[B-Xa-x]+');

// Route::get('/user/profile', function(){
//     return "Hello There...";
// })->name('profile');

Route::get('/user/{name}', 'UserController@show');

   