<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
//Route that sends back a view
/* Route::get('/', function () {
    return view('home');
}); */

/* //route to users - string
Route::get('/users', function(){
    return ('Welcome to the users page');
});


//Route to users - Array (json)
Route::get('/users', function () {
    return ['PHP', 'HTML', 'Laravel'];
});

//Route to users - JSON Object
Route::get('/users', function () {
    return response()->json([
        'name' => 'George',
        'course' => 'Laravel Beginners to Advanced'
    ]);
});

//Route to users - Function
Route::get('/users', function () {
    return redirect('/');
}); */

//Pattern is integer
//Route::get('/products/{name}',
 //[ProductsController::class, 'show'])->where('id', '[0-9]+');

 //pattern is a string
//  Route::get('/products/{name}/{id}',
//  [ProductsController::class, 'show'])->where([
//      'name' => '[a-z]+',
//      'id' => '[0-9]+'
//  ]);

//Laravel 8 PHP Callable syntax
Route::get('/', [PagesController::class, 'index']);

