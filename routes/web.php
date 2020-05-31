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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/search', function () {

    $name=request('name');
    return view('test',[
        'name'=>$name
    ]);
    
});

Route::get('/',function(){
    $name='Hello Bharat';
    return view('test',[
        'name'=>$name
    ]);
    
});


Route::get('/posts/{post}','PostsController@show');
Route::get('/test','StudentController@show');