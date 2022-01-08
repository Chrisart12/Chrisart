<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artiste', function () {
    return view('artiste');
});

Route::get('/expositions', function () {
    return view('expositions');
});


Route::get('/personnage', function () {
    return view('personnage');
});

Route::get('/portrait', function () {
    return view('portrait');
});

Route::get('/nature_morte', function () {
    return view('nature_morte');
});

Route::get('/scene', function () {
    return view('scene');
});

Route::get('/nu', function () {
    return view('nu');
});


Route::get('/deleteProfil', function () {
    return view('deleteProfil');
});

Route::get("/contact", "ContactController@getContact");
Route::post("/contact", "ContactController@postContact");

Route::resource('/user', 'UserController');
Route::resource('/profil', 'ProfilController');
Route::post('/showProfil', 'imageProfilController@potsUpload');


Route::auth();
Route::get('/home', 'HomeController@index');
