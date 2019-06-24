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

Auth::routes();

Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/git', function () {
    $data   = [];
    
    $data[] = shell_exec('git pull');
    //$data[] = shell_exec('cd ~/www/memberportal || exit');
   // $data[] = shell_exec('git pull origin master');

    dd($data);
});

Route::get('/composer', function () {
    $data   = [];
    $data[] =shell_exec('cd .. && export HOME=/home/admin && composer update 2>&1') ; 
    dd($data);
});