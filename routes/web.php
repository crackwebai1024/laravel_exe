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
class My
{
    public $foo = 'bar';
}
Route::resource('my', 'MyController');
// Route::resource('test', 'ImplicitController');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/role', [
    'middleware' => 'role:editor',
    'uses' => 'TestController@index',
]);

Route::get('usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath',
]);

Route::get('/foo/bar', 'UriController@index');
