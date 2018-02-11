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

Route::get('/video/{id}/', function ($id) {

    $download = Redis::get('download.{$id}.downloaded');

    echo $download . '<a href="download">ssss</a>';

})->name('video');

Route::get('/video/{id}/download', function ($id) {

    $download = Redis::incr('download.{$id}.downloaded');

    //return redirect()->route('video',['id' =>$id]);

});

Route::resource('sample','SampleController');
