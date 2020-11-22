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

Route::get('/register', function () {
    return view('register');
});

Route::post('user/register', array('uses' => 'UserRegistration@postRegister'));

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');
Route::get('/basic_response', function () {
    return 'Hello World(basic response test)';
});

Route::get('/header', function () {
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/json', function () {
    return response()->json(['name' => 'virat', 'state' => 'Gujaret']);
});

Route::get('/test', function () {
    return view('test', ['name' => 'Virat Gandhi']);
});

Route::get('/test_allshare', function () {
    return view('test');
});

Route::get('/test1_allshare', function () {
    return view('test1');
});

Route::get('/blade/test', function () {
    return view('child');
});
