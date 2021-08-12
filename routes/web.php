<?php

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
    return view('Main.index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/LoginCP', function () {
    return view('Login.index');
});

Route::get('/RegisterCP', function () {
    return view('Register.Select');
});

Route::get('/RegisterC', function () {
    return view('Register.Citizen');
});

Route::get('/RegisterP', function () {
    return view('Register.PHI');
});

Route::post('/CreateCitizen', 'RoutesController@createcitizen');

Route::post('/CreatePHI', 'RoutesController@createphi');

Route::post('/LoginUser', 'RoutesController@login');

Route::get('/test', function () {
    return view('QR.View');
});

Route::get('/EditCitizen{id}', 'RoutesController@editcitizen');

Route::post('/UpdateCitizen', 'RoutesController@updatecitizen');

Route::get('/EditLocation{id}','RoutesController@editlocid');

// Route::get('/opencam', 'RoutesController@opencam');

Route::get('/EditLocMap{id}','RoutesController@editmapid');

Route::post('/UpdateLoc{id}', 'RoutesController@updatemap');

Route::get('/EditPHI{id}', 'RoutesController@editphi');

Route::post('/UpdatePHI', 'RoutesController@updatephi');

Route::get('/Citi{id}', 'RoutesController@viewcitizen');

Route::get('/viewcontacts{id}', 'RoutesController@viewcontacts');

Route::get('/viewlocations{id}', 'RoutesController@viewlocations');

Route::post('/Report', 'RoutesController@reportstore');

Route::get('/Positive{id}', 'RoutesController@positive');

Route::get('/Negative{id}', 'RoutesController@negative');

Route::get('/Recovered{id}', 'RoutesController@recovered');

Route::get('/Destroy{id}', 'RoutesController@destroy');

Route::post('/Search', 'RoutesController@search');

Route::get('/opencam', function () {
    return view('QR.Cam');
});

Route::get('/MainC', function () {
    return view('Main.Index_after');
});

Route::post('/QR','RoutesController@QR');

Route::get('/ViewQR{id}','RoutesController@ViewQR');

Route::get('/logoutuser', 'RoutesController@logout');

Route::get('/QRC', function () {
    return view('QR.Create');
});