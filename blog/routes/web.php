<?php

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

// Route::get('/test', function () {
//     return "Hello World";
// });

// Route::redirect('/', '/test');

// Route::view('/', 'welcome');

// Route::get('/user/{name}/{id}', function ($name, $id) {
//     return "Hello ".$name. ' '.$id;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     if ($name == null) {
//         return "Hello there...";
//     } else {
//         return "Hello ".$name;
//     }
// });

Route::get('/user/{name}/{id}', function ($name, $id) {
    return "Hello ".$name. ' '.$id;
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

//Regular Expresion

Route::get('/test/{name}', 'UserController@show');
Route::get('/welcome', 'UserController@welcome');
Route::resource('/books', 'BookController');
Route::get('/blade', function(){
    return view('child');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('login', 'LoginController@authenticate')->name('manual_login');

Route::resource('/flight', 'FlightController');